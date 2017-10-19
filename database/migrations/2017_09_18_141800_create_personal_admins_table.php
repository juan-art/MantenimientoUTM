<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_admins', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime ('hora_entrada')->nullable();
            $table->datetime ('hora_salida')->nullable();
            $table->timestamps();
            $table->integer('persona_id')->unsigned();
            $table->integer('cargo_oficina_id')->unsigned();
            $table->integer('departamento_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('cargo_oficina_id')->references('id')->on('cargos_oficinas');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_admins');
    }
}
