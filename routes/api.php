<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
   // return $request->user();
    return ['name' => "Gerardo"];
})->middleware('jwt.auth');


// Token
Route::post("/authenticate", 'ApiAuthController@authenticate');

// Registro
Route::post("/register", "ApiAuthController@register");
