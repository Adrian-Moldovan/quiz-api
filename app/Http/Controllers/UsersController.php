<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class UsersController extends Controller
{
    /**
     * Displays the users list.
     *
     * @group Users
     * @authenticated
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $countQuery = '(SELECT COUNT(*) AS questions, user_id  FROM questions GROUP BY user_id) AS questions_count';
        $users = DB::table('users')->leftJoin(DB::raw($countQuery), 'questions_count.user_id', '=', 'users.id')->get();

        return $users->map(function($user){
            $filteredData = collect($user)->only(['id', 'name', 'email','questions']);
            $filteredData['questions'] = (int)$filteredData['questions'];
            return $filteredData;
        });
    }

    /**
     * Display a user profile.
     *
     * @group Users
     * @authenticated
     * @urlParam user integer required user_id profile.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user->only(['name', 'email']);
    }

    /**
     * Displays the profile of the authenticated user
     *
     * @group Users
     * @authenticated
     * 
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return Auth::user();
    }
}
