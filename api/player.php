<?php
    header("Content-type: application/json;");
    include('../controller/autoload.php');
    $db = new Database($database,$tablesdb);
    $type = [
        "type" => "Player", //type of data
    ];

    
    if(empty($_GET['username'])== True)
    {
        $data = ([
            "code" => "400",
            "status" => "BAD REQUEST",
            "data" => "NO INPUT",
            ]);
    echo json_encode($data);
    }else{
        $username = $_GET['username'];
        $uuid= $db->giveUUID($username);
        @$json = $db->readPlayerStats($uuid);
        if($json == null){
            $data = ([
                "code" => "404",
                "status" => "NOT FOUND",
                "data" => "USER NOT FOUND",
                ]);
        }else{
            $json = array_merge($json, $type);
            $data = ([
                "code" => "200",
                "status" => "OK",
                "data" => $json,
                ]);
        }
        echo json_encode($data);
    }

