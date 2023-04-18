<?php

use App\Http\Controllers\Api\UserApiController;
use Illuminate\Support\Facades\Route;

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
    Route::post('login', [UserApiController::class, 'login']);
    Route::post('register', [UserApiController::class, 'register']);

    Route::middleware('auth:sanctum')->group(function () {
        // auth: logout
        Route::post('logout', [UserApiController::class, 'logout']);

        // User Endpoint
        Route::group(['prefix' => 'user'], function () {
            Route::get('', [UserApiController::class, 'fetch']);
            Route::post('', [UserApiController::class, 'updateProfile']);
            Route::post('/photo', [UserApiController::class, 'updatePhoto']);
        });

    });
});
