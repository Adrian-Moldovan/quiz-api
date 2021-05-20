<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        $validated = $request->validate([
            'email' => ['required', 'unique:users', 'email'],
            'name' => ['required', 'unique:users', 'min:3', 'max: 30'],
            'password' => ['required'],
            'password_confirm' => ['required', 'same:password']
        ]);
        
        $user = User::create($validated);
        $token = $user->createToken('api_token');

        return ['token' => $token->plainTextToken];
    }

    // 
    public function login(Request $request){
        
    }
}
