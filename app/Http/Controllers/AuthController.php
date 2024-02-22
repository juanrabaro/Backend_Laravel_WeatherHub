<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuarios;

class AuthController extends Controller
{
    public static function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Usuarios::where('email', $request->email)->first();
            $tokenResult = $user->createToken('token');
            $token = $tokenResult->plainTextToken;
            
            // Devuelve el token de login
            return response()->json(['token' => $token]);
        }
    
        // Autenticación fallida, devuelve un error
        return response()->json(['error' => 'The credentials are incorrect!'], 401);
    }


    public function getAuthenticatedUser(Request $request)
    {
        // Devuelve el id del usuario que está logeado
        return response()->json(['id' => $request->user()->id]);
    }
}