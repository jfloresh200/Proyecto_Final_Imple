<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Alquiler extends Model
{
    // Nombre real de la tabla
    protected $table = 'alquileres';

    // Primary key real
    protected $primaryKey = 'IDAlquiler';
    public $incrementing = true;
}