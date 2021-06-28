<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\UsersController;

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

/**
 * @hideFromAPIDocumentation 
 */
Route::get('json-required', function(Request $request){
    return response()->json(['message' => 'The request must have headers "Accept: application/json"'], 406);
})->name('json-required');


// Public questions
Route::get('/questions', [QuestionsController::class, 'index']);

// users
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    // questions
    Route::post('/questions', [QuestionsController::class, 'store']);
    Route::delete('/questions/{question}', [QuestionsController::class, 'destroy']);
    Route::get('/questions/own', [QuestionsController::class, 'userQuestions']);
    

    // users
    Route::get('/users', [UsersController::class, 'index']);
    Route::get('/users/{user}', [UsersController::class, 'show']);
    Route::get('/profile', [UsersController::class, 'profile']);
});

