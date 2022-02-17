<?php

use App\Http\Controllers\AlertPageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TableBookingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/tableBook',[TableBookingController::class,'index'])->name('tableBook');
Route::get('/menu',[MenuController::class,"index"])->name('menu');
Route::get('/cart',[CartController::class,"index"])->name('cart');
Route::get('/alert',[AlertPageController::class,"index"])->name('alert');


Route::get('/register',[RegisterController::class,"index"])->name('register');
Route::get('/login',[LoginController::class,"index"])->name('login');