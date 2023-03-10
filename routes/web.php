<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[AuthController::class,'index']);
Route::get('/sign-up',[AuthController::class,'register_form']);
Route::post('/register',[AuthController::class,'register_action']);
Route::post('/login_action',[AuthController::class,'login_action']);
Route::get('/dashboard',[UserController::class,'index']);
// Route::post('/register'.[AuthController::class,'register_action']);
