<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{

    private $defaultDeviceName = 'unspeficied';

    /**
     * Register a new user
     * 
     * @group Users
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request){
        $credentials = $request->validated();
        $credentials['password'] = Hash::make($request->password);
        
        $user = User::create($credentials);
        $token = $user->createToken($credentials['device_name'] ?? $this->defaultDeviceName);

        return [
            'mesage' => 'Registration successful',
            'token' => $token->plainTextToken
        ];
    }

    /**
     * Login a user
     * 
     * @group Users 
     * 
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request){
        $credentials = $request->validated();

        $user = User::where(['email' => $credentials['email']])->first();

        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            throw ValidationException::withMessages([
                'auth' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $user->createToken($credentials['device_name'] ?? $this->defaultDeviceName)->plainTextToken;
    
        return [
            'mesage' => 'Authentication successful',
            'token' => $token
        ];
    }
}
