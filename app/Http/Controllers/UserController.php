<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{

    public function show()
    {
        $token = JWTAuth::getToken();

        $user = JWTAuth::toUser($token);

        return $user;
    }
}
