<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOportunidadKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oportunidad_keys', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('oportunidad_id')->unsigned();
            $table->foreign('oportunidad_id')->references('id')->on('oportunidads')->onDelete('cascade');
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
        Schema::dropIfExists('oportunidad_keys');
    }
}
