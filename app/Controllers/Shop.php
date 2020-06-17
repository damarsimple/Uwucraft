<?php namespace App\Controllers;

class Shop extends BaseController
{
    public $session;


    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
	public function index()
	{
		echo view('template\header');
		echo view('shop\index');
		echo view('template\footer');
	}

    public function checkout()
    {
        echo view('template\header');
		echo view('shop\checkout');
		echo view('template\footer');
    }

    public function payment()
    {
        echo view('template\header');
		echo view('shop\payment');
		echo view('template\footer');
    }

    public function cart()
    {
        echo view('template\header');
		echo view('shop\cart');
		echo view('template\footer');
    }

    public function search()
    {
        echo view('template\header');
		echo view('shop\search');
		echo view('template\footer');
    }
	//--------------------------------------------------------------------

}
