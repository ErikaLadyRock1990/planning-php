<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaControlador;
use App\Http\Controllers\MiControlador;

Route::get('/prueba', [PruebaControlador::class, 'prueba']);
