<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id');
            $table->String('nombre');
            $table->String('apellidos');
            $table->String('email');
            $table->String('contraseña');
            $table->unsignedInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctores');
            $table->unsignedInteger('analisis_id');
            $table->foreign('analisis_id')->references('id')->on('analisis');
            $table->unsignedInteger('infomedica_id');
            $table->foreign('infomedica_id')->references('id')->on('infomed');
            $table->unsignedInteger('cita_id');
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->String('descripcion');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
