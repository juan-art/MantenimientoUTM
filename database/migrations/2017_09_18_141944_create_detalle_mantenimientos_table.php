<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_mantenimientos', function (Blueprint $table) {
            $table->date('fecha_detalle_mantenimiento');
            $table->text('observacion')->nullable();
            $table->timestamps();
            $table->integer('control_mantenimiento_id')->unsigned();            
            $table->integer('personal_obrero_id')->unsigned();
            $table->foreign('control_mantenimiento_id')->references('id')->on('control_mantenimientos');
            $table->foreign('personal_obrero_id')->references('id')->on('personal_obreros');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_mantenimientos');
    }
}
