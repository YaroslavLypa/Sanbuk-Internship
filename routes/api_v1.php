<?php

use App\Http\Controllers\V1\BannerController;
use App\Http\Controllers\V1\Booking\WebhookController;
use App\Http\Controllers\V1\BookingController;
use App\Http\Controllers\V1\ExperienceController;
use App\Http\Controllers\V1\ProductController;
use App\Http\Controllers\V1\SubscriptionController;
use App\Http\Controllers\V1\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(function () {
    Route::post('/sign-up', [UserController::class, 'signUp']);
    Route::post('/sign-in', [UserController::class, 'signIn']);
    Route::post('/verification', [UserController::class, 'verification']);
});

Route::prefix('/user')->name('user.')->middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::delete('/profile', [UserController::class, 'delete'])->name('profile');

    Route::prefix('/subscription')->group(function () {
        Route::post('/create', [SubscriptionController::class, 'create']);
        Route::patch('/update', [SubscriptionController::class, 'update']);
    });
});

Route::prefix('/experiences')->group(function () {
    Route::get('/', [ExperienceController::class, 'index']);
});

Route::get('/banner/{bannerType}', [BannerController::class, 'getBannerByType']);

Route::prefix('/bookings')->group(function () {
    Route::middleware(['auth:sanctum'])->group(function () {
        Route::post('/create', [BookingController::class, 'store']);
    });

    Route::prefix('/webhooks')->group(function () {
        Route::post('/charge/succeeded', [WebhookController::class, 'chargeSucceeded']);
    });
});

Route::prefix('/products')->group(function () {
    Route::get('/getProducts', [ProductController::class, 'getProducts']);
    Route::post('/buyProduct', [ProductController::class, 'buyProduct'])->middleware('auth:sanctum');
});

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
