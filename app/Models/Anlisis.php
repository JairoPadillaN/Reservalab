<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anlisis extends Model
{
    use HasFactory;

    protected $table="Analisis";

    protected $fillable=[
        'nombre',
        'tipo_analisis',
        'precio',
    ];
    //Relaciones 
    public function usuarios(){
        return $this->hasMany(Usuario::class);
    }
    public function doctores(){
        return $this->belongsTo(Doctores::class);
    }
    public function prueba(){
        return $this->belongsTo(Prueba::class);
    }
}
