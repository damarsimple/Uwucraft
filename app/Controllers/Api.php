<?php namespace App\Controllers;

use App\Models\Apimodel;
use CodeIgniter\RESTful\ResourceController;


class Api extends ResourceController
{
    public $session;
    public $query;
    protected $apiModel;
    protected $format = 'json';

    public function __construct()
    {
    $this->session = \Config\Services::session();
    $this->apiModel = new Apimodel();
    }

    //GET ONLY
    public function index()
    {
        $data =
        [
            'status'     => 'OK',
            'code'   => '200',
            'data' => 'index',
        ];
        return $this->respond($data, 200);
    }
    public function show($req = null,$input = null,$mode = null)
    {
        switch($req)
        {

            case 'player':
                $result = $this->apiModel->playerdata($input,$mode);
                $data =
                [
                    'status'     => $result['status'],
                    'code'   => $result['code'],
                    'data' => $result['playerdata'],
                ];
            break;

            case 'server':
                $result = $this->apiModel->serverdata();
                $data =
                [
                    'status'     => $result['status'],
                    'code'   => $result['code'],
                    'data' => $result['serverdata'],
                ];
            break;

            case 'search':
                $result = $this->apiModel->searchdata($input);
                $data =
                [
                    'status'     => $result['status'],
                    'code'   => $result['code'],
                    'data' => $result['searchdata'],
                ];
            break;

            case 'image':
                $result = $this->apiModel->imageFinder($input,$mode);
                $data = $result;
                return $data;
            break;

            case 'shop':
                $result = $this->apiModel->shopPagination($input,$mode); //Mode = Limit Data Per Page default is 10
                $data =
                [
                    'status'     => $result['status'],
                    'code'   => $result['code'],
                    'data' => $result['data'],
                ];
            break;

            default:
            $data =
            [
                'status'     => 'BAD REQUEST',
                'code'   => '400',
                'data' => 'method not found',
            ];
            break;
        }
        return $this->respond($data, $data['code']);
    }

}