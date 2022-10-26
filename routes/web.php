<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('/pages/login');
});

Route::get('/login', function() {
    return view('/pages/login');
});

Route::get('/reset', function() {
    return view('/pages/reset');
});

Route::get('/dashboard', function() {
    return view('/pages/dashboard');
});

Route::get('/maintenances', function() {
    return view('/pages/maintenances');
});

Route::get('/vehicles', function() {
    return view('/pages/vehicles');
});

Route::get('/spareparts', function() {
    return view('/pages/spareparts');
});

Route::get('/users', function() {
    return view('/pages/users');
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
