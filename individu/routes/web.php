<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangNotaController;
use App\Http\Controllers\KasirController;
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

Route::get('barang',[BarangController::class, 'view_barang']);
Route::get('barang/add',[BarangController::class, 'add_barang']);
Route::post('barang/add',[BarangController::class, 'add_barang_post']);
Route::get('barang/delete/{id}',[BarangController::class, 'delete_barang']);
Route::post('barang/delete/{id}',[BarangController::class, 'delete_barang_post']);

Route::get('kasir',[KasirController::class, 'view_kasir']);
Route::get('kasir/add',[KasirController::class, 'add_kasir']);
Route::post('kasir/add',[KasirController::class, 'add_kasir_post']);
Route::get('kasir/delete/{id}',[KasirController::class, 'delete_kasir']);
Route::post('kasir/delete/{id}',[KasirController::class, 'delete_kasir_post']);

Route::get('barangNota',[BarangNotaController::class, 'view_barangnota']);
Route::get('barangNota/add',[BarangNotaController::class, 'add_barangnota']);
Route::post('barangNota/add',[BarangNotaController::class, 'add_barangnota_post']);
Route::get('barangNota/delete/{id}',[BarangNotaController::class, 'delete_barangnota']);
Route::post('barangNota/delete/{id}',[BarangNotaController::class, 'delete_barangnota_post']);
