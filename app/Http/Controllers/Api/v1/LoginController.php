<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login( Request $request)
    {
        $login = $request->validate(
            [
                'username' => 'required|string',
                'password' => 'required|string'
            ]);

        if ( !Auth::attempt( $login ) )
        {
            return response(['message' => 'Invalid Login Credentials']);
        }
    }   
}
