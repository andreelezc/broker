<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keywords', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('referencia');
            $table->string('tipo');
            $table->string('palabra');
            $table->timestamps();
        });

        //$o->save();
        // $k = new Keyword;
        // $k->refencia = $o->id;
        // $k->tipo = 'oportunidad';
        // $k->palabra = $r->palabra;
        // $k->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keywords');
    }
}
