<?php namespace App\Controllers;

class Home extends BaseController
{
	public $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
	public function index()
	{
		echo view('template\header');
		echo view('landing');
		echo view('template\footer');
	}

	//--------------------------------------------------------------------

}
