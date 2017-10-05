<?php

namespace App\Http\Controllers;

use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class ApiAuthController extends Controller
{

    public function authenticate()
    {
        //conseguimos los datos del usuario que intenta ingresar
        $credentials = request()->only('email', 'password');

        try {
            //comparamos si existen los datos
            $token = JWTAuth::attempt($credentials);

            // Si no hay datos enviamos error
            if (!$token) {
                return response()->json(['error' => 'Invalid_credentials'], 401);
            }

        } // Enviamos error de servidor si existen
        catch (JWTException $e) {
            return response()->json(['error' => 'something_whent_grown'], 500);
        }
        // Enviamos el token al cliente
        return response()->json(['token' => $token], 200);


    }
}
