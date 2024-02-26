<?php

use App\Http\Controllers\Front\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontendController::class,'index']);
Route::get('/contact',[FrontendController::class,'contact']);
Route::get('/checkout',[FrontendController::class,'checkout']);
Route::get('/cart',[FrontendController::class,'cart']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('user/login',[UserController::class,'index']);