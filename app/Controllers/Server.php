<?php namespace App\Controllers;

class Server extends BaseController
{
    public $session;


    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

	public function index()
	{
		echo view('template\header');
		echo view('server\index');
		echo view('template\footer');
	}

    public function leaderboard()
    {
        echo view('template\header');
		echo view('server\leaderboard');
		echo view('template\footer');
    }

    public function playerlist()
    {
        echo view('template\header');
		echo view('server\playerlist');
		echo view('template\footer');
    }

    public function player()
    {
        echo view('template\header');
		echo view('server\player');
		echo view('template\footer');
    }

    // public function search()
    // {
    //     echo view('template\header');
	// 	echo view('server\search');
	// 	echo view('template\footer');
    // }
	//--------------------------------------------------------------------

}
