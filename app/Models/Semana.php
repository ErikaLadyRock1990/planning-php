<?php

namespace App\Models;

class Semana
{
    protected $fillable = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];

    protected $horas = ['08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00'];
}

/* Cada variable es una columna, y lo que contiene la variable son las filas.
Hay una variable que se puede llenar, llamada $fillable=[Columnas]*/