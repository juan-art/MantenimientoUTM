<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalObrerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_obreros', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('hora_entrada');
            $table->datetime('hora_salida');
            $table->text('observacion')->nullable();
            $table->timestamps();
            $table->integer('persona_id')->unsigned();
            $table->integer('cargos_obrero_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('cargos_obrero_id')->references('id')->on('cargos_obreros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_obreros');
    }
}
