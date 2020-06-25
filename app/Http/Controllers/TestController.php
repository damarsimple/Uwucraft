<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestController extends Controller
{
    //
    public function index()
    {
        return response()->json(
            [
                'rand' => time() * rand(1000,1522),
            ]
        );
    }
}

