<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('institucion_id')->unsigned();
            $table->integer('capacidad_id')->unsigned();
            $table->integer('oportunidad_id')->unsigned();
            ///relaciones
            $table->foreign('institucion_id')->references('id')->on('institucions')->onDelete('cascade');
            $table->foreign('capacidad_id')->references('id')->on('capacidads')->onDelete('cascade');
            $table->foreign('oportunidad_id')->references('id')->on('oportunidads')->onDelete('cascade');
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
        Schema::dropIfExists('postulacions');
    }
}
