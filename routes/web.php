<?php

use App\Http\Controllers\AgenciaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ParticularController;
use App\Models\Agencia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/hotel', HotelController::class);





