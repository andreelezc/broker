<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOportunidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oportunidads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('necesidad');
            $table->string('propuesta');
            $table->string('requisito');
            $table->string('categoria');
            $table->string('rubro');
            $table->string('disponibilidad');
            $table->string('remuneracion');
            $table->date('fechaIngreso');
            $table->date('fechaEgreso');
            $table->integer('productor_id')->references('id')->on('productors');
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
        Schema::dropIfExists('oportunidads');
    }
}
