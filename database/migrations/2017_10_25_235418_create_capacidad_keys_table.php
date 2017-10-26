<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapacidadKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacidad_keys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('capacidad_id')->unsigned();
            $table->foreign('capacidad_id')->references('id')->on('capacidads')->onDelete('cascade');
            $table->string('palabra');
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
        Schema::dropIfExists('capacidad_keys');
    }
}
