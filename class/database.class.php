
<?php

// namespace Database;

class Database{
    private $hostname;
    private $username;
    private $password;
    private $database;
    public $mysqli;
// Basic Crud Models
    public function __construct($hostname,$username,$password,$database){
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->mysqli = new mysqli($this->hostname,$this->username,$this->password,$this->database);
    }

// public function deleteData
    public function readData($table,$columns,$uuid)
    {
        $query = "SELECT * FROM $table WHERE UUID = '$uuid'";
        $fetch = mysqli_query($this->mysqli, $query);
        $row = mysqli_fetch_array($fetch);
        $result = $row[$columns];
        return $result;
    }
    public function updateData($table,$columns,$uuid,$value)
    {
        $query = "UPDATE $table SET $columns='$value' WHERE UUID='$uuid'";
        $sql = mysqli_query($this->mysqli, $query);
        return $sql;
    }
    //begin Create / Submit
    public function createJavaUuid($striped) {
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
    public function offlinePlayerUuid($username) {
        //extracted from the java code:
        //new GameProfile(UUID.nameUUIDFromBytes(("OfflinePlayer:" + name).getBytes(Charsets.UTF_8)), name));
        $data = hex2bin(md5("OfflinePlayer:" . $username));
        //set the version to 3 -> Name based md5 hash
        $data[6] = chr(ord($data[6]) & 0x0f | 0x30);
        //IETF variant
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
        return $this->createJavaUuid(bin2hex($data));
        }
    public function mojangApi($username)
    {//uuid from mojang
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
// $crack = True;
// $te = new Database('localhost', 'root', '123456', 'minecraft');
// echo $te->mojangApi("notch");
// $te->createData($crack,"notch","123314156","123456")
// if(empty($te->createData($crack,"not11ch2232312","123314156","123456"))){
//     echo "Empty";
// }else{
//     echo "test";
// }

// echo $te->readData("users","world","c8cafbb7-c9f0-3bde-bd09-a96b45aed365");
// echo $te->readDataSpesific("password");
// var_dump($te->t());
// if(isset($_POST["post"])){
//     $post = $_POST['b'];
//     $te->updateData("users","world","c8cafbb7-c9f0-3bde-bd09-a96b45aed365",$post);
//     echo $post;
//     echo $te->readData("users","world","c8cafbb7-c9f0-3bde-bd09-a96b45aed365");
// }
?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="b">
    <button type="submit" name="post">post</button>
    </form>
</body>
</html>
-->



