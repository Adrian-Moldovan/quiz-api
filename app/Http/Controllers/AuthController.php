<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

use App\Models\User;

class AuthController extends Controller
{
    /**
     * Register a new user
     * 
     * @group Users
     */
    public function register(Request $request){
        $validated = $request->validate([
            'email' => ['required', 'unique:users', 'email'],
            'name' => ['required', 'unique:users', 'min:3', 'max: 30'],
            'password' => ['required'],
            'password_confirm' => ['required', 'same:password']
        ]);

        $validated['password'] = Hash::make($request->password);
        
        $user = User::create($validated);
        $token = $user->createToken('api_token');

        return ['token' => $token->plainTextToken];
    }

    /**
     * Login a user
     * 
     * @group Users
     */
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'device_name' => 'required'
        ]);

        $user = User::where(['email' => $request->email])->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'auth' => ['The provided credentials are incorrect.'],
            ]);
        }
    
        return $user->createToken($request->device_name)->plainTextToken;
    }
}
