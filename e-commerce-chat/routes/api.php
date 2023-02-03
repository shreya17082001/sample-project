<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChatController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Products
Route::get('products', [ProductController::class, 'getProduct']);
Route::get('product/{id}', [ProductController::class, 'getProductById']);

// Users
Route::get('friends/{id}', [UserController::class, 'getFriends']);

// Chat
Route::post('chat', [ChatController::class, 'postChat']);
Route::get('chat', [ChatController::class, 'getChat']);

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('user', [UserController::class, 'getUser']);
    Route::get('useri', [UserController::class, 'getUserById']);

    Route::post('logout', [UserController::class, 'logout']);
  
});