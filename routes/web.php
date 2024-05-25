<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
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

    Route::get('about/index',[AboutController::class,'index'])->name('about.index');
    Route::get('about/create',[AboutController::class,'create'])->name('about.create');
    Route::post('about/store',[AboutController::class,'store'])->name('about.store');
    Route::get('about/edit/{about}',[AboutController::class,'edit'])->name('about.edit');
    Route::get('about/delete/{about}',[AboutController::class,'delete'])->name('about.delete');
    Route::get('about/duplicate/{about}',[AboutController::class,'duplicate'])->name('about.duplicate');
    Route::post('about/update/{about}',[AboutController::class,'update'])->name('about.update');


    Route::get('menu/index',[MenuController::class,'index'])->name('menu.index');
    Route::get('menu/create',[MenuController::class,'create'])->name('menu.create');
    Route::post('menu/store',[MenuController::class,'store'])->name('menu.store');
    Route::get('menu/edit/{menu}',[MenuController::class,'edit'])->name('menu.edit');
    Route::get('menu/delete/{menu}',[MenuController::class,'delete'])->name('menu.delete');
    Route::get('menu/duplicate/{menu}',[MenuController::class,'duplicate'])->name('menu.duplicate');
    Route::post('menu/update/{menu}',[MenuController::class,'update'])->name('menu.update');


    Route::get('team/index',[TeamController::class,'index'])->name('team.index');
    Route::get('team/create',[TeamController::class,'create'])->name('team.create');
    Route::post('team/store',[TeamController::class,'store'])->name('team.store');
    Route::get('team/edit/{team}',[TeamController::class,'edit'])->name('team.edit');
    Route::get('team/delete/{team}',[TeamController::class,'delete'])->name('team.delete');
    Route::get('team/duplicate/{team}',[TeamController::class,'duplicate'])->name('team.duplicate');
    Route::post('team/update/{team}',[TeamController::class,'update'])->name('team.update');


    Route::get('testimonial/index',[TestimonialController::class,'index'])->name('testimonial.index');
    Route::get('testimonial/create',[TestimonialController::class,'create'])->name('testimonial.create');
    Route::post('testimonial/store',[TestimonialController::class,'store'])->name('testimonial.store');
    Route::get('testimonial/edit/{testimonial}',[TestimonialController::class,'edit'])->name('testimonial.edit');
    Route::get('testimonial/delete/{testimonial}',[TestimonialController::class,'delete'])->name('testimonial.delete');
    Route::get('testimonial/duplicate/{testimonial}',[TestimonialController::class,'duplicate'])->name('testimonial.duplicate');
    Route::post('testimonial/update/{testimonial}',[TestimonialController::class,'update'])->name('testimonial.update');


    Route::get('reservation/index',[ReservationController::class,'index'])->name('reservation.index');
    Route::get('reservation/create',[ReservationController::class,'create'])->name('reservation.create');
    Route::post('reservation/store',[ReservationController::class,'store'])->name('reservation.store');
    Route::get('reservation/edit/{reservation}',[ReservationController::class,'edit'])->name('reservation.edit');
    Route::get('reservation/delete/{reservation}',[ReservationController::class,'delete'])->name('reservation.delete');
    Route::get('reservation/duplicate/{reservation}',[ReservationController::class,'duplicate'])->name('reservation.duplicate');
    Route::post('reservation/update/{reservation}',[ReservationController::class,'update'])->name('reservation.update');

});
