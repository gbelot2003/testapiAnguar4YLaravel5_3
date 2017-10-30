<?php

use Illuminate\Http\Request;
use App\User;
use Tymon\JWTAuth\Facades\JWTAuth;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Token
Route::post("/authenticate", 'ApiAuthController@authenticate');

// Registro
Route::post("/register", "ApiAuthController@register");

// Mostrar info de usuarios despues de validadcion de token
Route::get('/user', 'UserController@show')->middleware('jwt.auth');