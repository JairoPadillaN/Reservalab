<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class info_medica extends Model
{
    use HasFactory;

    protected $table="info_medica";

    protected $fillable=[
        'peso',
        'altura',
        'tipoSanguineo',
        'padecimientos',
    ];

    //Relaciones 
    public function usuarios(){
        return $this->hasMany(Usuario::class);
    }
}
