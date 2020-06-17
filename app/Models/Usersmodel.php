<?php namespace App\Models;

use CodeIgniter\Model;

class Usersmodel extends Model
{
    protected $table = 'users';
    protected $mode = 'Offline'; //Offline / Online
    public $db;
    public $builder;
    public function __construct()
    {
    $this->db = \Config\Database::connect();
    $this->builder = $this->db->table($this->table);
    }
    public function login($username,$password)
    {
        $result = $this->builder->getWhere(['username' => $username]);
        // check the password
        if(password_verify($password,$result->getRow('password')))
        {
            return true;
        }else{
            return false;
        }
        return;
    }
    public function register(array $data)
    {
        $username = $data['username'];
        $password = $data['password'];
        $email = $data['email'];
        $ip = $data['ip'];
        $time = time();
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $uuid = $this->giveUUID($username);
        if($uuid == 404)
        {
        return false;
        }else
        {
            //long ass query lmao
            $this->sql = "INSERT INTO `$this->table` (`id`, `username`, `realname`, `password`, `ip`, `lastlogin`, `x`, `y`, `z`, `world`, `regdate`, `regip`, `yaw`, `pitch`, `email`, `isLogged`, `hasSession`, `totp`, `UUID`)
            VALUES (NULL, '$username', '$username', '$hash', NULL, NULL, '0', '0', '0', 'world', '$time', '$ip', NULL, NULL, '$email', '0', '0', NULL, '$uuid');";
            $this->db->query($this->sql);
            return true;
        }
    }
    public function checkAvaible($username)
    {
        $result = $this->builder->getWhere(['username' => $username]);
        if(empty($result->getFirstRow()))
        {
            return true;
        }else{
            return false;
        }
    }
    public function giveUUID($username)
    {
        if($this->mode == 'Offline'){
			return $this->offlinePlayerUuid($username);
		}else{
                if($this->mojangApi($username) == null){
                    return 404;//notfound
                }else{
                    return $this->mojangApi($username);
                }
		}
    }
    private function createJavaUuid($striped) {
        //example: 069a79f4-44e9-4726-a5be-fca90e38aaf5
        $components = array(
        substr($striped, 0, 8),
        substr($striped, 8, 4),
        substr($striped, 12, 4),
        substr($striped, 16, 4),
        substr($striped, 20),
        );
        return implode('-', $components);
        }
    private function offlinePlayerUuid($username) {
        //extracted from the java code:
        //new GameProfile(UUID.nameUUIDFromBytes(("OfflinePlayer:" + name).getBytes(Charsets.UTF_8)), name));
        $data = hex2bin(md5("OfflinePlayer:" . $username));
        //set the version to 3 -> Name based md5 hash
        $data[6] = chr(ord($data[6]) & 0x0f | 0x30);
        //IETF variant
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
        return $this->createJavaUuid(bin2hex($data));
        }
    private function mojangApi($username)
    {//uuid from mojang links if you have better way please tell me lmao
        $json = file_get_contents("https://api.mojang.com/users/profiles/minecraft/$username");
        $mojang = json_decode($json);
        $uuid = $mojang->id;
        if(empty($uuid) === True){
        return null;
        }else{
        return $uuid;
        }
    }
}