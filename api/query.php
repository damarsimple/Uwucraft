<?php
    header("Content-type: application/json;");
    include('../controller/autoload.php');
    include('../controller/query.php');
    if(empty($_GET['query'])== False)
    {
        $data = ([
            "code" => "404",
            "status" => "NO INPUT",
            "data" => "NO INPUT",
            ]);
    echo json_encode($data);
    }else{
        $data = ([
        "code" => "200",
        "status" => "OK",
        "data" => $queryData,
        ]);
        if($queryData == null){
            $data = ([
                "code" => "404",
                "status" => "error",
                "data" => "error",
                ]);
        }
        echo json_encode($data);
    }

