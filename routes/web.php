<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\VehicleController;



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
    return view('home');
});

Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
// Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');
// Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');

Route::resource('customer', CustomerController::class);
Route::resource('order', OrderController::class);
Route::resource('vehicle', VehicleController::class);
