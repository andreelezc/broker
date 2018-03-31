git <?php

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
            $table->string('descripcion');
            $table->string('requisito');
            
            $table->string('personal');
            $table->string('remuneracion');
            $table->string('provincia');
            $table->string('localidad');
            $table->string('fechaInicio');
            $table->string('fechaFin');
            $table->string('tiempo');
                $table->string('horaInicioL');
                $table->string('horaFinL');
                $table->string('horaInicioM');
                $table->string('horaFinM');
                $table->string('horaInicioMi');
                $table->string('horaFinMi');
                $table->string('horaInicioJ');
                $table->string('horaFinJ');
                $table->string('horaInicioV');
                $table->string('horaFinV');
                $table->string('horaInicioS');
                $table->string('horaFinS');
                $table->string('horaInicioD');
                $table->string('horaFinD'); 
            $table->integer('numdura');
            $table->string('duracion');
            $table->integer('productor_id')->unsigned();
            $table->foreign('productor_id')->references('id')->on('productors')->onDelete('cascade');
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
