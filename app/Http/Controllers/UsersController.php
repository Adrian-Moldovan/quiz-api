<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a user profile.
     *
     * @group Users
     * @authenticated
     * @urlParam user integer required user_id profile.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        return $user->only(['name', 'email']);
    }
}
