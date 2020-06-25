<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serverdata;
class ServerDataController extends Controller
{

    public function index()
    {
        $q = new Serverdata();
        dd($q->index()->GetInfo());
    }
}
