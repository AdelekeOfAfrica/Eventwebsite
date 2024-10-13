<?php

use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BannerController;
Route::get('/', function () {
    return view('index');
});

Route::get('/login',[AuthenticationController::class,'login'])->name('login');
Route::post('/postlogin',[AuthenticationController::class,'postLogin'])->name('postLogin');
Route::get('/dashboard',[AuthenticationController::class,'dashboard'])->middleware('auth');
Route::post('/logout', [AuthenticationController::class,'logout'])->name('logout');
Route::get('/events/data', [EventsController::class, 'getEventData'])->name('events.fetch')->middleware('auth');;
Route::get('/events/{id}', [EventsController::class, 'show'])->name('events.show')->middleware('auth');
Route::get('/users',[AuthenticationController::class,'users'])->name('users');
Route::get('/bannersection',[BannerController::class ,'Banners'])->name('banners')->middleware('auth');
Route::get('/fetchbanner',[BannerController::class ,'fetchBanners'])->name('banners.fetch')->middleware('auth');
Route::post('/storeBanners',[BannerController::class,'storeBanners'])->name('storeBanner')->middleware('auth');
Route::put('/banners/{id}/status', [BannerController::class, 'toggleBannerStatus'])->name('toggleBannerStatus')->middleware('auth');
// Route::get('/login',function (){
//     return view('Backend.login');
// });

