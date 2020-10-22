<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prueba extends Model
{
    use HasFactory;

    protected $table="prueba";

    protected $fillable=[
        'tipo_estudio',
        'estudio',
        'precio',
    ];
}
