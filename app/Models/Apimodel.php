<?php namespace App\Models;

use CodeIgniter\Model;

use App\Models\Parsemodel;
use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;

class Apimodel extends Model
{

    public $db;
    public $builderPlayerData;

    protected $server = 'localhost';
    protected $port = 25565;
    protected $tableplayerdata = "mc_playerdata";
    protected $tableshopdata = "mc_playerdata";

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builderPlayerData = $this->db->table($this->tableplayerdata);
        $this->server = null;
        $this->query = new MinecraftQuery();
    }

    public function playerdata($username,$mode)
    {
        $result = $this->builderPlayerData->getWhere(["$this->table.username" => $username])->getResultArray();
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
        try{
            $this->query->Connect( $this->server, $this->port );
            $result = $this->query->GetInfo();
            $result['player'] = $this->query->GetPlayers();
            $status = 'OK';
            $code = 200;
        }catch( MinecraftQueryException $e)
        {
            $result = "Offline";
            $status = 'NOT FOUND';//WHAT CODE DO I USE TO TELL NO DATA
            $code = 404;
        }
        $data = [
            'status' => $status,
            'code' => $code,
            'serverdata' => $result,
            ];
        return $data;
    }

    public function searchdata($keyword = null)
    {
        if( !$keyword == null)
        {
            $queryPlayer = $this->builderPlayerData->like('username', $keyword)->orderBy('username', 'ASC')->limit(10)->get()->getResultArray();
            $result = array();
            //i should just use getRow() but its only return first result which isnt ideal for my case scenario
            for($i = 0; $i < count($queryPlayer); $i++)
            {
                $result[$i] =
                [   'name' => $queryPlayer[$i]['username'],
                    'image' => 'image',
                    'type' => "player",
                ];

            }
            $data = [
                'status' => 'OK',
                'code' => 200,
                'searchdata' => $result
                ];
        }else{
            $data = [
                'status' => 'BAD REQUEST',
                'code' => 400,
                'searchdata' => 'null'
                ];
        }
        return $data;
    }
}