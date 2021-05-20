<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuestionsController;

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

Route::get('/questions', [QuestionsController::class, 'index']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/tokens/create', function (Request $request) {
    dd($request->user());
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
