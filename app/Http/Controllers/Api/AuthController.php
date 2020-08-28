<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $status = true;
        $login = $request->validate(
            [
                'username' => 'required|string',
                'password' => 'required|string'
            ]
        );

        if (!Auth::attempt($login)) {
            $status = false;
            return response(['message' => 'Invalid Login Credentials', 'status' => $status]);
        }

        $accessToken = Auth::user()->createToken('authToken')->accessToken;

        return response(['status' => $status, 'user' => Auth::user(), 'access_token' => $accessToken]);
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users|string',
            'password' => 'required|string',
            'email' => 'required|unique:users|string',
        ]);

        if ($validator->fails()) {
            return response(['res' => 'bruh']);
        }
        $data = $request->toArray();
        $data['password'] = Hash::make($data['password']);
        $data['ip'] = $request->ip();
        $data['UUID'] = '2d5294ec-fce7-422e-9250-cc27a237875f';
        $user = User::create($data);
        return response(['id' => $user->id, 'authToken' => $user->createToken('authToken')->accessToken]);
    }
}
