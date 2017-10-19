<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_material', 80);
            $table->string('marca_material', 80)->nullable();
            $table->integer('cantidad_stock');
            $table->decimal('precio', 9, 2);
            $table->date('fecha_adquisicion')->nullable();
            $table->date('fecha_caducidad')->nullable();
            $table->text('descripcion')->nullable();
            $table->timestamps();
            $table->integer('estado_material_id')->unsigned();
            $table->integer('categoria_material_id')->unsigned();
            $table->integer('ubicacion_id')->unsigned();
            $table->foreign('estado_material_id')->references('id')->on('estados_materials');
            $table->foreign('categoria_material_id')->references('id')->on('categorias_materials');
            $table->foreign('ubicacion_id')->references('id')->on('ubicacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
