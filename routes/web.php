<?php

use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PicturesController;
use App\Http\Controllers\SponsorsController;
use App\Models\BlogController;
use App\Models\sponsors;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/',[AuthenticationController::class,'index'])->name('index');
Route::get('/login',[AuthenticationController::class,'login'])->name('login');
Route::post('/postlogin',[AuthenticationController::class,'postLogin'])->name('postLogin');
Route::get('/dashboard',[AuthenticationController::class,'dashboard'])->middleware('auth');
Route::post('/logout', [AuthenticationController::class,'logout'])->name('logout');
Route::get('/events/data', [EventsController::class, 'getEventData'])->name('events.fetch')->middleware('auth');;
Route::get('/events/{eventId}', [EventsController::class, 'eventDetail'])->name('eventDetail')->middleware('auth');
Route::get('/users',[AuthenticationController::class,'users'])->name('users');
Route::get('/bannersection',[BannerController::class ,'Banners'])->name('banners')->middleware('auth');
Route::get('/fetchbanner',[BannerController::class ,'fetchBanners'])->name('banners.fetch')->middleware('auth');
Route::post('/storeBanners',[BannerController::class,'storeBanners'])->name('storeBanner')->middleware('auth');
Route::put('/banners/{id}/status', [BannerController::class, 'toggleBannerStatus'])->name('toggleBannerStatus')->middleware('auth');
Route::get('/banners/{id}', [BannerController::class, 'fetchBanner'])->name('fetchBanner')->middleware('auth');
Route::put('/banners/edit',[BannerController::class,'editBanner'])->name('banner.edit')->middleware('auth');
Route::post('/banners/create',[BannerController::class,'createBanner'])->name('banner.create')->middleware('auth');
Route::post('/events/create', [EventsController::class, 'createEvent'])->name('events.create');
Route::get('/pictures',[EventsController::class,'pictures'])->name('pictures');
Route::get('/blog',[BlogController::class,'blog'])->name('blog');
Route::get('/blogs',[BlogController::class,'blogs'])->name('blogs');
Route::get('/backend-pictures',[PicturesController::class,'BackendPictures'])->name('BackendPictures')->middleware('auth');
Route::get('/backend-pictures/fetch',[PicturesController::class,'fetchBackendPictures'])->name('fetchBackendPictures')->middleware('auth');
Route::get('/backend-pictures/getBackendPicture/{pictureId}',[PicturesController::class,'getBackendPicture'])->name('getBackendPicture')->middleware('auth');
Route::put('/backend-pictures/update',[PicturesController::class,'updateBackendPictures'])->name('updateBackendPictures')->middleware('auth');
Route::post('/backend-pictures/create',[PicturesController::class,'createBackendPicture'])->name('createBackendPicture');
Route::get('/backend-sponsors',[sponsorsController::class,'getSponsorsPage'])->name('getSponsors')->middleware('auth');
Route::get('/backend-all-sponsors',[sponsorsController::class,'getAllSponsors'])->name('getAllSponsors')->middleware('auth');
Route::get('/backend/sponsor/{sponsorId}',[sponsorsController::class,'sponsorDetail'])->name('sponsorDetail')->middleware('auth');
Route::put('/backend/update-sponsor',[sponsorsController::class,'updateSponsor'])->name('updateSponsor')->middleware('auth');
Route::post('/backend/create-sponsor',[sponsorsController::class,'createSponsor'])->name('createSponsor')->middleware('auth');

// Route::get('/login',function (){
//     return view('Backend.login');
// });

