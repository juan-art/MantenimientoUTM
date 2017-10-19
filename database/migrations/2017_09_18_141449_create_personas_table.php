<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cedula', 10);
            $table->string('nombres', 50);
            $table->string('apellido_paterno', 20);
            $table->string('apellido_materno', 20)->nullable();
            $table->date('fecha_nacimiento');
            $table->string('sexo', 3)->nullable();
            $table->string('correo_electronico')->unique()->nullable();
            $table->string('telefono_movil', 20)->nullable();
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
        Schema::dropIfExists('personas');
    }
}
