<?php

use App\Http\Controllers\PemesananController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|s
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('pemesanan', [PemesananController::class, 'index']);
Route::get('edit-pemesanan/{id}', [PemesananController::class, 'edit']);
Route::put('update-pemesanan/{id}', [PemesananController::class, 'update']);
// Route::get('delete-pemesanan/{id}', [PemesananController::class, 'destroy']);
Route::delete('delete-pemesanan/{id}', [PemesananController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});
