<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\DaftarHitamController;
use App\Http\Controllers\KecelakaanController;

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
    return view('layouts.app');
});
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/jadwals', [JadwalController::class, 'index'])->name('jadwals.index');
Route::get('/jadwals/create', [JadwalController::class, 'create'])->name('jadwals.create');
Route::post('/jadwals', [JadwalController::class, 'store'])->name('jadwals.store');
Route::get('/jadwals/{jadwal}', [JadwalController::class, 'show'])->name('jadwals.show');
Route::get('/jadwals/{jadwal}/edit', [JadwalController::class, 'edit'])->name('jadwals.edit');
Route::put('/jadwals/{jadwal}', [JadwalController::class, 'update'])->name('jadwals.update');
Route::delete('/jadwals/{jadwal}', [JadwalController::class, 'destroy'])->name('jadwals.destroy');

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');
Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');
Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');

Route::get('/pembayarans', [PembayaranController::class, 'index'])->name('pembayarans.index');
Route::get('/pembayarans/create', [PembayaranController::class, 'create'])->name('pembayarans.create');
Route::post('/pembayarans', [PembayaranController::class, 'store'])->name('pembayarans.store');
Route::get('/pembayarans/{pembayaran}', [PembayaranController::class, 'show'])->name('pembayarans.show');
Route::get('/pembayarans/{pembayaran}/edit', [PembayaranController::class, 'edit'])->name('pembayarans.edit');
Route::put('/pembayarans/{pembayaran}', [PembayaranController::class, 'update'])->name('pembayarans.update');
Route::delete('/pembayarans/{pembayaran}', [PembayaranController::class, 'destroy'])->name('pembayarans.destroy');

Route::get('/daftarHitams', [DaftarHitamController::class, 'index'])->name('daftarHitams.index');
Route::get('/daftarHitams/create', [DaftarHitamController::class, 'create'])->name('daftarHitams.create');
Route::post('/daftarHitams', [DaftarHitamController::class, 'store'])->name('daftarHitams.store');
Route::get('/daftarHitams/{daftarHitam}', [DaftarHitamController::class, 'show'])->name('daftarHitams.show');
Route::get('/daftarHitams/{daftarHitam}/edit', [DaftarHitamController::class, 'edit'])->name('daftarHitams.edit');
Route::put('/daftarHitams/{daftarHitam}', [DaftarHitamController::class, 'update'])->name('daftarHitams.update');
Route::delete('/daftarHitams/{daftarHitam}', [DaftarHitamController::class, 'destroy'])->name('daftarHitams.destroy');

Route::get('/kecelakaans', [KecelakaanController::class, 'index'])->name('kecelakaans.index');
Route::get('/kecelakaans/create', [KecelakaanController::class, 'create'])->name('kecelakaans.create');
Route::post('/kecelakaans', [KecelakaanController::class, 'store'])->name('kecelakaans.store');
Route::get('/kecelakaans/{kecelakaan}', [KecelakaanController::class, 'show'])->name('kecelakaans.show');
Route::get('/kecelakaans/{kecelakaan}/edit', [KecelakaanController::class, 'edit'])->name('kecelakaans.edit');
Route::put('/kecelakaans/{kecelakaan}', [KecelakaanController::class, 'update'])->name('kecelakaans.update');
Route::delete('/kecelakaans/{kecelakaan}', [KecelakaanController::class, 'destroy'])->name('kecelakaans.destroy');