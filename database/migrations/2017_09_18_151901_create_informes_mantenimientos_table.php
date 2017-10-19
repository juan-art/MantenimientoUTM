<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformesMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informes_mantenimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_fin');
            $table->datetime('hora_fin');
            $table->integer('numero_obreros');
            $table->string('fin_mantenimiento', 1);
            $table->string('calificacion_mantenimiento', 10);
            $table->text('observacion')->nullable();
            $table->timestamps();
            $table->integer('control_mantenimiento_id')->unsigned();
            $table->foreign('control_mantenimiento_id')->references('id')->on('control_mantenimientos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informes_mantenimientos');
    }
}
