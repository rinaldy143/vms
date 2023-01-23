<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Models\Entity\model_vehicles;
use App\Models\Entity\ModelVehicle;
use App\Models\Entity\Trailer;
use App\Models\Entity\User;
use App\Models\Entity\Vehicle;
use App\Models\Entity\TypeVehicle;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['prefix' => '/'], function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/dashboard', [AuthController::class, 'login'])->name('login.post');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', function() {
            return view('/pages/dashboard');
        });
        Route::get('/dashboard', function() {
            return view('/pages/dashboard');
        });
        Route::get('/maintenance/maintenance', function() {
            return view('/pages/maintenance/maintenance');
        });
        Route::get('/maintenance/report', function() {
            return view('/pages/maintenance/report');
        });
        Route::get('/reset', function() {
            return view('/pages/auth/reset');
        });

        Route::get('/maintenance/workorder', function() {
            return view('/pages/maintenance/workorder');
        });

        // Route::get('/vehicles', function() {
        //     $model_vehicle = ModelVehicle::all();
        //     $vehiclesT = DB::table('type_vehicles')->get();
        //     $vehicles = DB::table('vehicles')->get();
        //     return view('/pages/vehicle/vehicle1', ['model_vehicle' => $model_vehicle, 'vehiclesT' => $vehiclesT, 'vehicles' => $vehicles]);
        // });

        // Route::post('/vehicles',  [App\Http\Controllers\Vehicle\VehicleController::class, 'store'])->name('vehicles.store');
            Route::resource('vehicles', App\Http\Controllers\Vehicle\VehicleController::class);
            Route::resource('users', App\Http\Controllers\User\UserController::class);
            Route::resource('trailer', App\Http\Controllers\Trailer\TrailerController::class);
            Route::resource('spareparts', App\Http\Controllers\Sparepart\SparepartController::class);

            Route::get('/user/search', [App\Http\Controllers\User\UserController::class, 'search'])->name('users.search');
            Route::get('/sparepart/search', [App\Http\Controllers\Sparepart\SparepartController::class, 'search'])->name('spareparts.search');

        Route::get('/trailer', function() {
            $trailerM = DB::table('model_trailers')->get();
            $trailerT = DB::table('type_trailers')->get();
            $trailers = Trailer::all();
            return view('/pages/vehicle/trailer', ['trailerM' => $trailerM, 'trailerT' => $trailerT, 'trailers' => $trailers]);
        });

        Route::post('/trailer',  [App\Http\Controllers\Trailer\TrailerController::class, 'store'])->name('trailer.store');
        // Route::post('/users',  [App\Http\Controllers\User\UserController::class, 'store'])->name('users.store');

        Route::get('/setting', function() {
            return view('/pages/vehicle/vehicle-setting');
        });

        Route::get('/vehicles', function() {
            $vehicles = Vehicle::all();
            $vehiclesT = TypeVehicle::all();
            $model_vehicle = ModelVehicle::all();

            return view('/pages/vehicle/vehicle1',  ['vehicles' => $vehicles, 'vehiclesT' => $vehiclesT, 'model_vehicle' => $model_vehicle]);
        });

        Route::get('/history', function() {
            return view('/pages/history');
        });

        Route::get('/access-features', function() {
            return view('/pages/access-features');
        });

        Route::get('/account-setting', function() {
            return view('/pages/account/setting');
        });
        Route::get('logout', [AuthController::class, 'logout']);
    });
});

