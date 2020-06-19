<?php namespace App\Controllers;

use App\Models\Usersmodel;

class Users extends BaseController
{

    public $session;
    public $usersModel;

    public function __construct()
    {
    $this->session = \Config\Services::session();
    $this->usersModel = new Usersmodel();
    }
    public function index()
    {
        if( !isset($_SESSION['username']) )
        {
            header('Location: ../users/login');
        }else{
            echo view('template/header');
            echo view('users/index');
            echo view('template/footer');
        }
    }
    public function register()
    {
        if( isset($_SESSION['username']) )
        {
            header('Location: ../users');
        }
        echo view('template/header');
        echo view('users/register');
       // echo view('template/footer');

        if( isset($_POST['register']) )
        {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password_1 = $_POST['password_1'];
            $password_2 = $_POST['password_2'];

            if($password_1 != $password_2)
            {
                echo "Password Not Same";
                return;
            }

            if(!$this->usersModel->checkAvaible($username))
            {
                echo "Username not avaible";
                return;
            }else{
                $data = [
                    'username' => $username,
                    'email' => $email,
                    'password' => $password_1,
                    'ip' => $_SERVER['REMOTE_ADDR'],
                ];
                if($this->usersModel->register($data))
                {
                    $data =
                    [   'username' => $username,
                        'login_time' => time(),
                        'playerdata' => null
                    ];
                    $this->session->set($data);
                    header('Location: ../users');
                    return;
                }
            }
        }
    }
    public function login()
    {
        if( isset($_SESSION['username']) )
        {
            header('Location: ../users');
        }
        echo view('template/header');
        echo view('users/login');
        //echo view('template/footer');
        if( isset($_POST['login']) )
        {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $playerdata= null;
        //var_dump($this->usersModel->login($username,$password));
        switch($this->usersModel->login($username,$password))
        {
            case true:
            $data =
            [   'username' => $username,
                'login_time' => time(),
                'playerdata' => $playerdata
            ];
            if( !empty($_POST['remember-me']) )
            {
                $this->session->set($data);
                setcookie ("username",$username,time()+ (10 * 365 * 24 * 60 * 60));
            }else{
                $this->session->set($data);
            }
            header('Location: ../users');
            break;
            case false:
            echo "wrong404";
            break;
            default:
            echo "wrong";
            break;
        }
        }
    }
    public function logout()
    {
        $this->session->destroy();
        header('Location: ../users');
    }

    public function log()
    {
        echo view('template/header');
        echo view('users/index');
        echo view('template/footer');
    }
    public function update()
    {
        echo view('template/header');
        echo view('users/update');
        echo view('template/footer');
    }
}