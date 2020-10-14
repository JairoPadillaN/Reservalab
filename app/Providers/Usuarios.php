<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Alumnos extends Model{
    use Notifiable;
    

    protected $fillable=[
        'nombre',
        'apellidos',
        'correo',
        'contraseña',
        

    ];
}