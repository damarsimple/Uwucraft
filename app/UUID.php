<?php

namespace App;

class UUID
{
        /*
    |--------------------------------------------------------------------------
    | UUID Models
    |--------------------------------------------------------------------------
    |
    | This Models give you UUID
    |
    */
    public $UUID;
    /**
     * Set Mode Online / Offline
     *
     * @var string
     */
    public $mode = 'Offline';
    /**
     * set offline uuid / online uuid
     *
     * @var string Offline/Online
     */
    public function mode(string $data)
    {
        return $this->mode($data);
    }
        /**
     * get UUID from models
     *
     * @var string
     */
    public function getUUID($UUID)
    {
        $this->uuid = $this->giveUUID($UUID);
        return $this->uuid;
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
