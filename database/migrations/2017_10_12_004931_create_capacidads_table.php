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
            $table->string('tipo');
            
            $table->string('personal');
            $table->string('remuneracion');
            $table->string('provincia');
            $table->string('localidad');
            $table->string('fechaInicio'); 
            $table->string('fechaFin');
            $table->string('tiempo');
                $table->string('horaInicioL')->nullable();
                $table->string('horaFinL')->nullable();
                $table->string('horaInicioM')->nullable();
                $table->string('horaFinM')->nullable();
                $table->string('horaInicioMi')->nullable();
                $table->string('horaFinMi')->nullable();
                $table->string('horaInicioJ')->nullable();
                $table->string('horaFinJ')->nullable();
                $table->string('horaInicioV')->nullable();
                $table->string('horaFinV')->nullable();
                $table->string('horaInicioS')->nullable();
                $table->string('horaFinS')->nullable();
                $table->string('horaInicioD')->nullable();
                $table->string('horaFinD')->nullable();
        
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
