<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapacidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacidads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');  
            $table->string('descripcion');
            $table->string('experiencias');
            $table->string('categoria');
            $table->string('orientacion');
            $table->string('fechaInicio'); 
            $table->string('fechaFin');
            $table->string('tiempo');
                $table->string('horaInicioL');
                $table->string('horaFinL');
                $table->string('horaInicioM');
                $table->string('horaFinM');
                $table->string('horaInicioMi');
                $table->string('horaFinMi');
                $table->string('horaInicioJ');
                $table->string('horaFinJ');
                $table->string('horaInicioV');
                $table->string('horaFinV');
                $table->string('horaInicioS');
                $table->string('horaFinS');
                $table->string('horaInicioD');
                $table->string('horaFinD');
           
            $table->string('remuneracion');
            $table->integer('institucion_id')->unsigned();
            $table->foreign('institucion_id')->references('id')->on('institucions')->onDelete('cascade');
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
        Schema::dropIfExists('capacidads');
    }
}
