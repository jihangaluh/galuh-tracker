<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman selamat datang
Route::get('/', function () {
    return view('welcome');
});

// Route untuk daftar transaksi
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');

// Route untuk menampilkan form tambah transaksi
Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');

// Route untuk menyimpan transaksi baru
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');

// Route untuk menampilkan form edit transaksi
Route::get('/transactions/{transaction}/edit', [TransactionController::class, 'edit'])->name('transactions.edit');

// Route untuk memperbarui transaksi
Route::put('/transactions/{transaction}', [TransactionController::class, 'update'])->name('transactions.update');

// Route untuk menghapus transaksi
Route::delete('/transactions/{transaction}', [TransactionController::class, 'destroy'])->name('transactions.destroy');