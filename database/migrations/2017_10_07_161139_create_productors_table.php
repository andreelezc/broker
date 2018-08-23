<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('avatar')->default('default.jpg');
            $table->string('direccion');
            $table->string('name1');
            $table->string('telefono1');
             $table->string('email1');
             $table->string('url')->default('No Tiene');
            $table->string('hora');
              $table->string('cuil')->unique();
            $table->string('cp')->nullable();
            $table->string('provincia')->nullable();
            $table->string('localidad')->nullable();
            $table->string('telefono')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('password');
            $table->boolean('estado')->default(false);
               $table->rememberToken();

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
        Schema::dropIfExists('productors');
    }
}
