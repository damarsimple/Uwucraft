<?php

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Login
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $status = true;
        if (!Auth::attempt($args)) {
            $status = false;
            return ['success' => $status, 'exception' => 'Wrong Credentials'];
        }
        $validator =  Validator::make($args, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        if ($validator->fails()) {
            $status = false;
            return ['success' => $status, 'exception' => 'Validator Failed'];
        }
        $accessToken = Auth::user()->createToken('authToken')->accessToken;
        return['success' => $status, 'user' => Auth::user(), 'token' => $accessToken];
    }
}
