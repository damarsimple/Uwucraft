<?php namespace App\Models;

use CodeIgniter\Model;

use App\Models\Parsemodel;

use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;

class Apimodel extends Model
{

    public $db;
    public $builderPlayerData;
    public $builderShopData;

    protected $server = 'localhost';
    protected $port = 25565;
    protected $tableplayerdata = "mc_playerdata";
    protected $tableshopdata = "items_index";

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builderPlayerData = $this->db->table($this->tableplayerdata);
        $this->builderShopData = $this->db->table($this->tableshopdata);
        $this->server = null;
        $this->query = new MinecraftQuery();
    }

    public function playerdata($username,$mode)
    {
        $result = $this->builderPlayerData->getWhere(["$this->tableplayerdata.username" => $username])->getResultArray();
        if(!empty($result))
        {
            if( $mode == 'easy')
            {
                //PARSED data
                $parse = new Parsemodel();
                $result[0]['experience'] = intval($result[0]['experience']/1*100);
                $result[0]['exhaustion'] = intval($result[0]['exhaustion']/1*100);
                $result[0]['inventory'] = $parse->parseItem($result[0]['inventory']);
                //$result[0]['armorInventory'] = $parse->parseItem($result[0]['armorInventory']);
                //$result[0]['offHand'] = $parse->parseItem($result[0]['offHand']);
                $data =
                [
                'status' => 'OK',
                'code' => 200,
                'playerdata' => $result,
                ];
            }else{
                //RAW data what a madlad
                $data =
                [
                'status' => 'OK',
                'code' => 200,
                'playerdata' => $result,
                ];
            }
        }else{
        $data = [
                'status' => 'NOT FOUND',
                'code' => 404,
                'playerdata' => 'NOT FOUND',
                ];
        }
        return $data;
    }

    public function serverdata()
    {
        //This Function take long time to load !! | in my computer that is
        //Im not sure why tho, i think  my pc is good enough for smoll php application
        //Timeout?
        $time_start = microtime(true);
        try{
            $this->query->Connect( $this->server, $this->port );
            $result = $this->query->GetInfo();
            $result['player'] = $this->query->GetPlayers();
            $status = 'OK';
            $code = 200;
        }catch( MinecraftQueryException $e)
        {
            $result = ["Offline" => 'Offline'];
            $status = 'NOT FOUND';//WHAT CODE DO I USE TO TELL NO DATA or Server Offline
            $code = 404;
        }
        $time_end = microtime(true);
        $result['querytime'] = number_format( ($time_end - $time_start)/60 , 5 ); //For Debugging
        $data = [
            'status' => $status,
            'code' => $code,
            'serverdata' => $result,
            ];
        return $data;
    }

    public function searchdata($keyword = null)
    {   //Check Input
        if( !$keyword == null)
        {
            //Search data from table
            $queryPlayer = $this->builderPlayerData->like('username', $keyword)->orderBy('username', 'ASC')->limit(10)->get()->getResultArray();
            $queryShop = $this->builderShopData->like('display_name', $keyword)->orLike('name', $keyword)->orLike('description', $keyword)->orderBy('display_name', 'ASC')->limit(10)->get()->getResultArray();
            $result = array();
            // i want to add autocomplete to website
            // i should just use getRow() but its only return first result which isnt ideal for my case scenario

            //I think i should just make separate function that return array of data instead of doing this
            //Push Founded data to Array $result
            for($i = 0; $i < count($queryPlayer); $i++)
            {
                $result[$i] =
                [   'name' => $queryPlayer[$i]['username'],
                    'image' => $this->imageFinder($queryPlayer[$i]['username'], 'player'),
                    'type' => 'Player',
                ];
            }
            //Changing Variable for every iteration i think? of course i probably can just join the tables but i dont thinks its good idea
            for($o = 0; $o < count($queryShop); $o++)
            {
                $result[$i+$o] =
                [   'name' => $queryShop[$o]['display_name'],
                    'image' => $this->imageFinder($queryShop[$o]['name'], 'item'),
                    'type' => 'Item',
                ];
            }

            //Check Result if empty
            if( !empty($result) )
            {
                $data = [
                    'status' => 'OK',
                    'code' => 200,
                    'searchdata' => $result
                    ];
            }else{
                $data = [
                    'status' => 'NOT FOUND',
                    'code' => 404,
                    'searchdata' => null
                    ];
            }

        }else{
            $data = [
                'status' => 'BAD REQUEST',
                'code' => 400,
                'searchdata' => 'null'
                ];
        }
        return $data;
    }

    public function imageFinder($name,$type)
    {
        switch($type)
        {

            case 'player':
            $data = "https://minotar.net/avatar/$name";
            break;

            case 'item':
                //I dont know better method to return not found images
            if ( !@file_get_contents("http://" . $_SERVER['SERVER_NAME'] . "/img/textures/itemimg/$name.png"))
            {
                //File Does Not Exists
                $data = "http://" . $_SERVER['SERVER_NAME'] . "/img/textures/itemimg/yellow_wool.png";
            }else{
                //File Exists
                $data = "http://" . $_SERVER['SERVER_NAME'] . "/img/textures/itemimg/$name.png";
            }
            break;
        }

        return $data;
    }

    public function shopPagination(int $page, int $dataperpage)
    {
        //Set to 10 incase user didnt input
        $dataperpage = ( !$dataperpage == 0 ) ? $dataperpage : 10;
        //Why i dont use pagination library? i dont know how to use it
        $firstdata = ( $dataperpage * $page)  - $dataperpage;
                                                        //Dataperpage is Limit Of ShownData PerPage
        $result = $this->builderShopData->select()->get($dataperpage,$firstdata)->getResultArray();

        $data = [
        'status' => 'OK',
        'code' => 200,
        'data' => $result
        ];

        if( empty($result) )
        {
            $data = [
                'status' => 'NOT FOUND',
                'code' => 404,
                'data' => "Page Not Found !"
                ];
        }

        return $data;
    }
}