<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CrudController::class, 'index']);
Route::get('/tambah', [CrudController::class, 'create']);
Route::post('/', [CrudController::class, 'store']);
