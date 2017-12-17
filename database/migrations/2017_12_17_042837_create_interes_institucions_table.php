<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteresInstitucionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interes_institucions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('institucion_id')->unsigned();
            $table->integer('oportunidad_id')->unsigned();
            $table->foreign('institucion_id')->references('id')->on('institucions')->onDelete('cascade');
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
        Schema::dropIfExists('interes_institucions');
    }
}
