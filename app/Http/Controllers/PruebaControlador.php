<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semana;

class PruebaControlador extends Controller
{
    public function prueba ()
    {
        $semana = new Semana();//lista
        dd($semana);
    }

}
