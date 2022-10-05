<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index.edit');
Route::get('/edit/{id_user}', [IndexController::class, 'edit'])->name('user.edit');
Route::post('/update/{id_user}', [IndexController::class, 'update'])->name('user.update');
Route::get('/add', [IndexController::class, 'add'])->name('user.add');
Route::post('/store', [IndexController::class, 'store'])->name('user.store');
Route::get('/hapus/{id_user?}', [IndexController::class, 'hapus'])->name('user.hapus');
