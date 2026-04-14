<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Coche extends Model
{
    protected $primaryKey = 'Matricula';
    public $incrementing = false;
    protected $keyType = 'string';
}