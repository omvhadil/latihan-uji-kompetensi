<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CrudController::class, 'index'])->name('home');
Route::get('/tambah', [CrudController::class, 'create']);
Route::post('/tambah', [CrudController::class, 'store']);
Route::get('/edit/{todo}', [CrudController::class, 'edit']);
Route::put('/edit/{todo}', [CrudController::class, 'update']);
Route::delete('/delete/{todo}', [CrudController::class, 'destroy']);
