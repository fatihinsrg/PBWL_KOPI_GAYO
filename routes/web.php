<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/stok', [App\Http\Controllers\StokController::class, 'index']);
Route::get('/stok/create', [App\Http\Controllers\StokController::class, 'create']);
Route::post('/stok', [App\Http\Controllers\StokController::class, 'store']);
Route::get('/stok/{id}/edit', [App\Http\Controllers\StokController::class, 'edit']);
Route::patch('/stok/{id}', [App\Http\Controllers\StokController::class, 'update']);
Route::delete('/stok/{id}', [App\Http\Controllers\StokController::class, 'destroy']);


Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'index']);
Route::get('/supplier/create', [App\Http\Controllers\SupplierController::class, 'create']);
Route::post('/supplier', [App\Http\Controllers\SupplierController::class, 'store']);
Route::get('/supplier/{id}/edit', [App\Http\Controllers\SupplierController::class, 'edit']);
Route::patch('/supplier/{id}', [App\Http\Controllers\SupplierController::class, 'update']);
Route::delete('/supplier/{id}', [App\Http\Controllers\SupplierController::class, 'destroy']);
