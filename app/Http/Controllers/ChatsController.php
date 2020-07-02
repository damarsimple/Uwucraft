<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ChatsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        echo 'y';
    }
    public function roomindex()
    {

    }
}
