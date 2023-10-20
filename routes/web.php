<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataObatController;

Route::get('/', [DataObatController::class, 'index'])->name('index');
Route::get('/data-obat/create', [DataObatController::class, 'create'])->name('create');
Route::get('/data-obat/{data_obat}', [DataObatController::class, 'read'])->name('read');
Route::put('/data-obat/{id_obat}', [DataObatController::class, 'update'])->name('update');
Route::delete('/data-obat/{id_obat}', [DataObatController::class, 'delete'])->name('delete');