<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnnouncementController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});

Route::view('/register','register');
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[AnnouncementController::class,'index']);
Route::get("detail/{id}",[AnnouncementController::class,'detail']);
Route::get("search",[AnnouncementController::class,'search']);
Route::post("add_to_cart",[AnnouncementController::class,'addToCart']);
Route::get("cartlist",[AnnouncementController::class,'cartList']);
Route::get("removecart/{id}",[AnnouncementController::class,'removeCart']);