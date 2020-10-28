<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $table="cita";

    protected $fillable=[
        'idUsuario',
        'idMedico',
        'tipoAnalizis',
        'fecha',
        'hora',
    ];
//Relaciones 
    public function usuarios(){
        return $this->hasMany(Usuario::class);
    }
}
