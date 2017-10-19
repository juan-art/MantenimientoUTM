<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleCapacitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_capacitacions', function (Blueprint $table) {
            $table->text('observacion_capacitacion')->nullable();
            $table->timestamps();
            $table->integer('registro_capacitacion_id')->unsigned();
            $table->integer('persona_id')->unsigned();
            $table->foreign('registro_capacitacion_id')->references('id')->on('registro_capacitacions');
            $table->foreign('persona_id')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_capacitacions');
    }
}
