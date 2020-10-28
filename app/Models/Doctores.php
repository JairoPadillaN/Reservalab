<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctores extends Model
{
    use HasFactory;

    protected $table ="doctores";

    protected $fillable=[
        "nombre",
        "especialidad",
        "cedula",
        "descripcion",
    ];
//Relaciones 
    public function usuarios(){
        return $this->hasMany(Usuario::class);
    }
    public function analisis(){
        return $this->hasMany(Analisis::class);
    }

}
