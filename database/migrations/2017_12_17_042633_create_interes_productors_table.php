<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteresProductorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interes_productors', function (Blueprint $table) {
            $table->increments('id');///id del interes
            $table->integer('productor_id')->unsigned();
            $table->integer('capacidad_id')->unsigned();
            $table->foreign('productor_id')->references('id')->on('productors')->onDelete('cascade');
            $table->foreign('capacidad_id')->references('id')->on('capacidads')->onDelete('cascade');
        
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
        Schema::dropIfExists('interes_productors');
    }
}
