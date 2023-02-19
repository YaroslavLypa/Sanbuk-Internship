<?php

use App\Http\Controllers\V1\UserController;
use App\Http\Controllers\V1\BannerController;
use Illuminate\Support\Facades\Route;

Route::post('/auth/sign-up', [UserController::class, 'signUp']);

Route::post('/auth/sign-in', [UserController::class, 'signIn']);
Route::post('/auth/verification', [UserController::class, 'verification']);

Route::get('/user/profile', [UserController::class, 'profile'])->middleware('auth:sanctum');

Route::get('/banner/{bannerType}', [BannerController::class, 'getBannerByType']);

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
