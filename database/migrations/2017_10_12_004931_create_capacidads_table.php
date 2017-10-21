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
            $table->string('capacidad');
            $table->string('propuesta');
            $table->string('experiencias');
            $table->string('categoria');
            $table->string('rubro');
            $table->string('disponibilidad');
            $table->string('remuneracion');
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
