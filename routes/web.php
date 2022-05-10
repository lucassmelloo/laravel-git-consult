<?php

use App\Http\Controllers\ConsultController;
use Illuminate\Support\Facades\Route;

Route::controller(ConsultController::class)->group(function(){

    Route::get('/', 'index');
    Route::get('/delete/{id}', 'deleteUser');
    Route::get('/user/{login}', 'callUserPage');
    Route::post('/salvar', 'store');
});