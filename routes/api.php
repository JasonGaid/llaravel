<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\BlogController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::post('/create-blog', [BlogController::class, 'create']);
Route::get('/blogs', [BlogController::class, 'fetch']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});