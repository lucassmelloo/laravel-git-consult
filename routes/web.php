<?php

use App\Http\Controllers\ConsultController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ConsultController::class, 'index']);
Route::get('/delete/{id}', [ConsultController::class, 'deleteUser']);
Route::get('/user/{login}',[ConsultController::class, 'callUserPage']);
Route::post('/salvar', [ConsultController::class, 'store']);
