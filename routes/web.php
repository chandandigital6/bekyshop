<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
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
Route::get('/',[FrontController::class,'index'])->name('home');
Route::get('/about',[FrontController::class,'about'])->name('about');
Route::get('/service',[FrontController::class,'service'])->name('service');
Route::get('/menu',[FrontController::class,'menu'])->name('menu');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::get('/appointment',[FrontController::class,'appointment'])->name('appointment');

Route::get('login',[AuthController::class,'loginForm'])->name('login');
Route::post('/authlogin',[AuthController::class,'loginMatch'])->name('auth.login');
Route::get('logout',[AuthController::class,'logout'])->name('auth.logout');


//Route::get('/dashboard',[AuthController::class,'index'])->name('dashboard');
Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/dashboard',[AuthController::class,'index'])->name('dashboard');



});
