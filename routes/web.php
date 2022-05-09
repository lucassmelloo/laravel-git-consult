<?php

use App\Http\Controllers\ConsultController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ConsultController::class, 'index']);

Route::post('/salvar', [ConsultController::class, 'store']);
