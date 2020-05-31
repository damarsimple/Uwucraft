<?php
    header("Content-type: application/json;");
    include('../controller/autoload.php');
    $db = new Database($database,$tablesdb);
    if(empty($_GET['username'])== True)
    {
        $data = ([
            "code" => "404",
            "status" => "NO INPUT",
            "data" => "NO INPUT",
            ]);
    echo json_encode($data);
    }else{
        $username = $_GET['username'];
        $uuid= $db->giveUUID($username);
        $json = $db->readPlayerStats($uuid);
        $data = ([
        "code" => "200",
        "status" => "OK",
        "data" => $json,
        ]);
        if($json == null){
            $data = ([
                "code" => "404",
                "status" => "NOT FOUND",
                "data" => "USER NOT FOUND",
                ]);
        }
        echo json_encode($data);
    }

