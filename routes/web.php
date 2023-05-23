<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CrudController::class, 'index']);
Route::post('/tambah', [CrudController::class, 'store']);