<?php

use App\Http\Controllers\InstaPostController;
use App\Http\Controllers\PostssController;
use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\InstaPost;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'jwt.auth'], function () {

});

Route::post('/create', [InstaPostController::class, 'createPosts']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

    Route::get('/get_users', [UserController::class, 'getUsers']);
    Route::get('/get_posts',[InstaPostController::class,'getposts']);
    
   
