<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/formulir', 'formulir');
Route::post('/hasil-formulir', [FormulirController::class, 'submit']);