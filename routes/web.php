<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/register', [RegisterController::class,"index"])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class,"store"]);

Route::post('/logout', [LogoutController::class,"logout"])->name('logout');

Route::get('/login', [LoginController::class,"index"])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,"store"]);

Route::get('/dashboard', [DashboardController::class,"index"])->name('dashboard')->middleware('auth');

Route::get('/posts', [PostController::class,"index"])->name('posts')->middleware('auth');
Route::post('/posts', [PostController::class,"post"]);

Route::post('/post/{id}/like', [LikeController::class,"like"])->name('like')->middleware('auth');