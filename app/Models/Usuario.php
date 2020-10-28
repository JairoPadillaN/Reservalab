<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    
    protected $table="usuarios";

    protected $fillable=[
        'id',
        'nombre',
        'apellidos',
        'email',
        'contraseña',
    ];

    //Relaciones 
    public function analisis(){
        return $this->belongsTo(Anlisis::class);
    }
    public function doctores(){
        return $this->belongsTo(Doctores::class,);
    }
    
    public function pruebas(){
        return $this->belongsTo(Prueba::class);
    }
    public function citas(){
        return $this->belongsTo(Cita::class);
    }
    public function infomed(){
        return $this->belongsTo(info_medica::class);
    }
    
    
}
