<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroCapacitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_capacitacions', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->time('hora_ini');
            $table->time('hora_fin');
            $table->string('lugar_capacitacion', 20);
            $table->text('descripcion');
            $table->text('observacion')->nullable();
            $table->timestamps();
            $table->integer('categoria_capacitacion_id')->unsigned();
            $table->foreign('categoria_capacitacion_id')->references('id')->on('categoria_capacitacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_capacitacions');
    }
}
