<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AlertPageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
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
Route::get('/cart/{id}',[CartController::class,"index"])->name('cart');
Route::get('/alert',[AlertPageController::class,"index"])->name('alert');

// Authentication Routes

Route::get('/register',[RegisterController::class,"index"])->name('register');
Route::post('/register',[RegisterController::class,"store"]);
Route::get('/login',[LoginController::class,"index"])->name('login');
Route::post('/login',[LoginController::class,"store"]);
Route::get('/logout',[LogoutController::class,"store"])->name('logout');

Route::group(['middleware' => ['auth','isAdmin']],function(){
    Route::get('/admins',[AdminController::class,"index"])->name('admin');
});

// admin sections

Route::get('/AllUsers',[AdminController::class,"user"])->name('AllUsers');
Route::get('/deleteUser/{id}',[AdminController::class,"deleteUser"])->name('deleteUser');

Route::get('/AllFoods',[AdminController::class,"AllFood"])->name('AllFood');
Route::get('/AddFood',[AdminController::class,"addFood"])->name('AddFood');
Route::get('/orders',[AdminController::class,"orders"])->name('orders');

Route::get('/viewReservation',[AdminController::class,"viewReservation"])->name('viewReservation');

Route::post('/uploadFood',[AdminController::class,"uploadFood"])->name('uploadFood');
Route::get('/editFood/{id}',[AdminController::class,"editFood"])->name('editFood');
Route::post('/editFood/{id}',[AdminController::class,"uploadEditFood"])->name('uploadEditFood');
Route::get('/deleteFood/{id}',[AdminController::class,"deleteFood"])->name('deleteFood');

Route::get('/viewChef',[AdminController::class,"viewChef"])->name('viewChef');
Route::get('/addChef',[AdminController::class,"addChef"])->name('addChef');
Route::post('/addChef',[AdminController::class,"storeChef"])->name('storeChef');
Route::get('/editChef/{id}',[AdminController::class,"editChef"])->name('editChef');
Route::post('/editChef/{id}',[AdminController::class,"uploadChef"])->name('uploadChef');
Route::get('/deleteChef/{id}',[AdminController::class,"deleteChef"])->name('deleteChef');

// user section
Route::post('/reservation',[AdminController::class,"addReservation"])->name('addReservation');
Route::post('/addtocart',[MenuController::class,"addtocart"])->name('addtocart');
Route::get('/removetocart/{id}',[CartController::class,"removeCart"])->name('removeCart');
Route::post('/confirmorder',[CartController::class,"confirm"])->name('confirmOrder');

Route::post('/search',[MenuController::class,'searchMenu'])->name('search');