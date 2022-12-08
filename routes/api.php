<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Notification\NotificationController;
use App\Http\Controllers\Sparepart\SparepartController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\TypeJob\TypeJobController;
use App\Http\Controllers\TypeRole\TypeRoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'v1'], function () {
    Route::post('/auth/login', [AuthController::class, 'login']);

    Route::get('/typejob', [TypeJobController::class, 'index']);
    Route::post('/typejob', [TypeJobController::class, 'store']);
    Route::put('/typejob/{id}', [TypeJobController::class, 'update']);
    Route::delete('/typejob/{id}', [TypeJobController::class, 'destroy']);

    Route::get('/sparepart', [SparepartController::class, 'index']);
    Route::post('/sparepart', [SparepartController::class, 'store']);
    Route::put('/sparepart/{id}', [SparepartController::class, 'update']);
    Route::delete('/sparepart/{id}', [SparepartController::class, 'destroy']);

    Route::get('/typerole', [TypeRoleController::class, 'index']);
    Route::post('/typerole', [TypeRoleController::class, 'store']);
    Route::put('/typerole/{id}', [TypeRoleController::class, 'update']);
    Route::delete('/typerole/{id}', [TypeRoleController::class, 'destroy']);

    Route::post('/auth/register', [AuthController::class, 'register']);
    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::get('/auth/profile', [AuthController::class, 'profile']);
        Route::put('/auth/fcm-token', [AuthController::class, 'updateFcm']);

        Route::get('/users', [UserController::class, 'index']);
        Route::post('/users', [UserController::class, 'store']);
        Route::put('/users/{id}', [UserController::class, 'update']);
        Route::delete('/users/{id}', [UserController::class, 'destroy']);


        Route::get('/notifications', [NotificationController::class, 'index']);
        Route::post('/notifications', [NotificationController::class, 'store']);
        Route::get('/notifications/{id}', [NotificationController::class, 'show']);
        Route::put('/notifications/{id}', [NotificationController::class, 'update']);
        Route::delete('/notifications/{id}', [NotificationController::class, 'destroy']);
    });
});
