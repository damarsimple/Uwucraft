<?php

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\Validator;
use App\User;

class Register
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $status = true;
        $validator = Validator::make($args, [
            'username' => 'required|unique:users|string',
            'password' => 'required|string',
            'email' => 'required|unique:users|string',
        ]);
        if ($validator->fails()) {
            $status = false;
            return ['success' => $status, 'exception' => $validator->errors()->first()];
        }
        $user = User::create($args);
        $accessToken = $user->createToken('authToken')->accessToken;
        return ['success' => $status, 'user' => $user, 'token' => $accessToken];
    }
}
