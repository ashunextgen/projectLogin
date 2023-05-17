<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginRegisterController;



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

Route::get('/', function () {
    return view('welcome');
});



Route::get('login',[LoginRegisterController::class,'login'])->name('login');
Route::post('post-login',[LoginRegisterController::class,'post_login'])->name('post_login');

Route::get('register',[LoginRegisterController::class,'register'])->name('register');
Route::post('post-register',[LoginRegisterController::class,'post_register'])->name('post_register');

Route::post('post-image',[LoginRegisterController::class,'post_image'])->name('store_image');
Route::get('image',[LoginRegisterController::class,'image'])->name('image');


Route::get('dashboard',[LoginRegisterController::class,'dashboard'])->name('dashboard');
Route::get('logout',[LoginRegisterController::class,'logout'])->name('logout');


