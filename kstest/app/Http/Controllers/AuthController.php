<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validates = $request->validate([
            'name' => 'required|min:2|string',
            'surname' => 'required|min:2|string',
            'gender' => 'required|min:2|string',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $newUser = User::create([
            'name' => $validates['name'],
            'surname' => $validates['surname'],
            'gender' => $validates['gender'],
            'email' => $validates['email'],
            'password' => bcrypt($validates['password'])
        ]);

        $token = $newUser->createToken('secrethash123')->plainTextToken;

        $response = [
            'user' => $newUser,
            'token' => $token
        ];

        return response($response,201);

    }
}
