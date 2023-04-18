<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FoodApiController;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\API\MidtransApiController;
use App\Http\Controllers\Api\TransactionApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'v1'], function () {
    // Auth
    Route::post('login', [UserApiController::class, 'login']);
    Route::post('register', [UserApiController::class, 'register']);
    // Food
    Route::get('food', [FoodApiController::class, 'all']);
    // Midtrans
    Route::post('midtrans/callback', [MidtransApiController::class, 'callback']);
    // Middleware
    Route::middleware('auth:sanctum')->group(function () {
        // auth: logout
        Route::post('logout', [UserApiController::class, 'logout']);
        // User Endpoint
        Route::group(['prefix' => 'user'], function () {
            // User
            Route::get('', [UserApiController::class, 'fetch']);
            Route::post('', [UserApiController::class, 'updateProfile']);
            Route::post('/photo', [UserApiController::class, 'updatePhoto']);
            // Transaction
            Route::get('transaction', [TransactionApiController::class, 'all']);
            Route::post('transaction/{id}', [TransactionApiController::class, 'update']);
            Route::post('checkout', [TransactionApiController::class, 'checkout']);
        });
    });
});
