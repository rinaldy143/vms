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
    Route::middleware('guest:web')->group(function () {
        // Gunakan middleware 'guest:web' untuk menandai pengguna yang belum login
        // Gunakan middleware 'redirect.authenticated' untuk mengarahkan pengguna yang sudah login
        Route::get('/supabase/fetch-users', [AuthController::class, 'fetchUsers'])->name('fetchUsers');
        Route::get('/login', [AuthController::class, 'index'])->name('login');
        Route::post('/', [AuthController::class, 'login'])->name('login.post');
        Route::get('/reset', function() {
            return view('/pages/auth/reset');
        });
    });
    // Route::get('/login', [AuthController::class, 'index'])->name('login');
    // Route::post('/', [AuthController::class, 'login'])->name('login.post');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', function() {
            return view('/pages/dashboard');
        });
        // Route::get('/dashboard', function() {
        //     return view('/pages/dashboard');
        // });
        Route::get('/', [App\Http\Controllers\ChartController::class, 'index'])->name('dashboard.index');

        Route::post('/workorder/{rm_id}/request-sparepart', [App\Http\Controllers\WorkOrder\WorkOrderController::class, 'requestSparepart'])->name('workorder.requestSparepart');
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
        Route::get('/history', [App\Http\Controllers\WorkOrder\WorkOrderController::class, 'history']);
        Route::get('/history/{id}', [App\Http\Controllers\WorkOrder\WorkOrderController::class, 'detailhistory'])->name('detailhistory');;
        Route::group(['prefix' => 'workorders', 'as' => 'workorder.'], function () {
            Route::get('/status', [App\Http\Controllers\WorkOrder\WorkOrderController::class, 'filterStatus'])->name('status');
            Route::get('/plat', [App\Http\Controllers\WorkOrder\WorkOrderController::class, 'vehicleName'])->name('plat');
            Route::get('/priority', [App\Http\Controllers\WorkOrder\WorkOrderController::class, 'priority'])->name('priority');
        });

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

        Route::get('/access-features', function() {
            return view('/pages/access-features');
        });

        Route::get('/account-setting', function() {
            return view('/pages/account/setting');
        });
        Route::get('logout', [AuthController::class, 'logout']);
        Route::put('/weightproduct', [App\Http\Controllers\WeightProduct\WeightProductController::class, 'updatePrioritas'])->name('weightproduct.updatePrioritas');
    });
});

