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
    Route::get('/reset', function() {
        return view('/pages/auth/reset');
    });
    Route::post('/dashboard', [AuthController::class, 'login'])->name('login.post');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', function() {
            return view('/pages/dashboard');
        });
        Route::get('/dashboard', function() {
            return view('/pages/dashboard');
        });
        // Route::get('/maintenance/maintenance', function() {
        //     return view('/pages/maintenance/maintenance');
        // });
        // Route::get('/maintenance/list-maintenance', function() {
        //     return view('/pages/maintenance/list-maintenance');
        // });
        // Route::get('/maintenance/list-maintenance/detail-maintenance', function() {
        //     return view('/pages/maintenance/detail-maintenance');
        // });
        Route::get('/maintenance/report', function() {
            return view('/pages/maintenance/report');
        });
        Route::post('/workorder/{rm_id}/request-sparepart', [App\Http\Controllers\WorkOrder\WorkOrderController::class, 'requestSparepart'])->name('workorder.requestSparepart');



        // Route::get('/maintenance/workorder', function() {
        //     return view('/pages/work-order/workorder');
        // });

        // Route::get('/vehicles', function() {
        //     $model_vehicle = ModelVehicle::all();
        //     $vehiclesT = DB::table('type_vehicles')->get();
        //     $vehicles = DB::table('vehicles')->get();
        //     return view('/pages/vehicle/vehicle1', ['model_vehicle' => $model_vehicle, 'vehiclesT' => $vehiclesT, 'vehicles' => $vehicles]);
        // });

        Route::resource('spareparts', App\Http\Controllers\Sparepart\SparepartController::class);
        Route::resource('weightproduct', App\Http\Controllers\WeightProduct\WeightProductController::class);
        Route::group(['prefix' => 'sparepart', 'as' => 'spareparts.'], function () {
            Route::get('/search', [App\Http\Controllers\Sparepart\SparepartController::class, 'search'])->name('search');
            Route::get('/ascending', [App\Http\Controllers\Sparepart\SparepartController::class, 'ascending'])->name('ascending');
            Route::get('/descending', [App\Http\Controllers\Sparepart\SparepartController::class, 'descending'])->name('descending');
            Route::get('/highStock', [App\Http\Controllers\Sparepart\SparepartController::class, 'highStock'])->name('highStock');
            Route::get('/lowStock', [App\Http\Controllers\Sparepart\SparepartController::class, 'lowStock'])->name('lowStock');
        });
        Route::resource('users', App\Http\Controllers\User\UserController::class);
        Route::resource('maintenance', App\Http\Controllers\RequestMaintenance\RequestMaintenanceController::class);
        Route::resource('workorder', App\Http\Controllers\WorkOrder\WorkOrderController::class);
        Route::get('/list-maintenance', [App\Http\Controllers\RequestMaintenance\RequestMaintenanceController::class, 'list']);

        Route::group(['prefix' => 'user', 'as' => 'users.'], function () {
            Route::get('/search', [App\Http\Controllers\User\UserController::class, 'search'])->name('search');
            Route::get('/Operation', [App\Http\Controllers\User\UserController::class, 'operation'])->name('operation');
            Route::get('/Lead Mechanices', [App\Http\Controllers\User\UserController::class, 'lead_mechanice'])->name('lead_mechanice');
            Route::get('/Mechanices', [App\Http\Controllers\User\UserController::class, 'mechanice'])->name('mechanice');
            Route::get('/Logistic', [App\Http\Controllers\User\UserController::class, 'logistic'])->name('logistic');
            Route::get('/ADMIN', [App\Http\Controllers\User\UserController::class, 'admin'])->name('admin');
            Route::get('/MEMBER', [App\Http\Controllers\User\UserController::class, 'member'])->name('member');
        });
            Route::resource('vehicles', App\Http\Controllers\Vehicle\VehicleController::class);
            Route::resource('trailer', App\Http\Controllers\Trailer\TrailerController::class);
            Route::get('/vehicle/search', [App\Http\Controllers\Vehicle\VehicleController::class, 'search'])->name('vehicles.search');
            Route::get('/trailers/search', [App\Http\Controllers\Trailer\TrailerController::class, 'search'])->name('trailer.search');

        Route::get('/vehicle/setting', function() {
            return view('/pages/vehicle/vehicle-setting');
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
        Route::put('/weightproduct', [App\Http\Controllers\WeightProduct\WeightProductController::class, 'updatePrioritas'])->name('weightproduct.updatePrioritas');
        // Route::put('/weightproduct/updatePrioritas', [WeightProductController::class, 'updatePrioritas'])->name('weightproduct.updatePrioritas');
    });
});

