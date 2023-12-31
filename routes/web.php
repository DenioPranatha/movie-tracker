<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/signin', [UserController::class, 'signin'])->middleware('guest')->name('login');
Route::post('/signin', [UserController::class, 'authenticate']);


Route::get('/signup', [UserController::class, 'signup'])->middleware('guest');
Route::post('/signup', [UserController::class, 'create']);

Route::get('/signout', [UserController::class, 'signout'])->middleware('auth');

Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');

Route::get('/watched', [UserController::class, 'watched'])->middleware('auth');
Route::get('/wishlist', [UserController::class, 'wishlist'])->middleware('auth');
// Route::get('/signin', [HomeController::class, 'home']);
// Route::get('/signin', [HomeController::class, 'home']);
