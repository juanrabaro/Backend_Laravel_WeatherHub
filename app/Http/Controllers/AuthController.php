<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Log;
use Laravel\Passport\Passport;

class AuthController extends Controller
{
    /**
     * Handle a login request to the application.
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Usuarios::where('email', $request->email)->first();
            // $token = $user->createToken('token')->plainTextToken;
            $token = $user->createToken('token')->accessToken;

            // Devuelve el token
            return response()->json(['token' => $token]);
        }

        // Autenticación fallida, devuelve un error
        return response()->json(['error' => 'The credentials are incorrect!'], 401);
    }

    /**
     * Handle a logout request to the application.
     */
    // public function logout(Request $request)
    // {
    //     $request->user()->token()->revoke();

    //     return response()->json(['message' => 'Successfully logged out']);
    // }
}