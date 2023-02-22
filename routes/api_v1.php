<?php

use App\Http\Controllers\V1\BannerController;
use App\Http\Controllers\V1\ExperienceController;
use App\Http\Controllers\V1\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(function () {
    Route::post('/sign-up', [UserController::class, 'signUp']);
    Route::post('/sign-in', [UserController::class, 'signIn']);
    Route::post('/verification', [UserController::class, 'verification']);
});

Route::prefix('/user')->name('user.')->middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
});

Route::prefix('/experiences')->group(function () {
    Route::get('/', [ExperienceController::class, 'index']);
});

Route::get('/banner/{bannerType}', [BannerController::class, 'getBannerByType']);

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
