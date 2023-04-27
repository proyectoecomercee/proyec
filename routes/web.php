<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProductController;

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

Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');
Route::view('/privada', "secret")->middleware('auth')->name('privada');

Route::post('/validar-registro',[loginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion',[loginController::class,'login'])->name('inicia-sesion');
Route::get('/logout',[loginController::class,'logout'])->name('logout');

Route::resource('products', ProductController::class);
Route::get('/', function () {
    return view('welcome');
});

