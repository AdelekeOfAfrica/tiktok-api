<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\HomeController;
use App\Http\Controllers\api\LikeController;
use App\Http\Controllers\api\PostController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\globalController;
use App\Http\Controllers\api\CommentController;
use App\Http\Controllers\api\ProfileController;

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


Route::get('/get-random-users', [globalController::class, 'getRandomUsers']);
Route::get('/home', [HomeController::class, 'index']);

Route::middleware(['auth:sanctum'])->group(function (){
    Route::get('/logged-in-user', [UserController::class, 'loggedInUser']);

    Route::post('/update-user-image', [UserController::class, 'updateUserImage']);
    Route::patch('/update-user', [UserController::class, 'updateUser']);

    Route::get('/posts/{id}', [PostController::class, 'show']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::delete('/posts/{id}', [PostController::class, 'destroy']);

    Route::get('/profiles/{id}', [ProfileController::class, 'show']);

    Route::post('/comments', [CommentController::class, 'store']);
    Route::delete('/comments/{id}', [CommentController::class, 'destroy']);

    Route::post('/likes', [LikeController::class, 'store']);
    Route::delete('/likes/{id}', [LikeController::class, 'destroy']);

});
