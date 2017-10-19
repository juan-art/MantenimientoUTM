<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_mantenimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_mantenimiento');
            $table->integer('cantidad_material');
            $table->datetime('hora_solicitud');
            $table->text('descripcion_mantenimiento');
            $table->text('observacion_mantenimiento')->nullable();
            $table->timestamps();
            $table->integer('personal_admin_id')->unsigned();
            $table->integer('tipo_servicio_id')->unsigned();
            $table->integer('materiales_id')->unsigned();
            $table->integer('destino_id')->unsigned();
            $table->integer('prioridad_mantenimiento_id')->unsigned();
            $table->integer('tipo_mantenimiento_id')->unsigned();
            $table->integer('estado_solicitud_id')->unsigned();
            $table->foreign('personal_admin_id')->references('id')->on('personal_admins');
            $table->foreign('tipo_servicio_id')->references('id')->on('tipos_servicios');
            $table->foreign('materiales_id')->references('id')->on('materials');
            $table->foreign('destino_id')->references('id')->on('destinos');
            $table->foreign('prioridad_mantenimiento_id')->references('id')->on('prioridad_mantenimientos');
            $table->foreign('tipo_mantenimiento_id')->references('id')->on('tipos_mantenimientos');
            $table->foreign('estado_solicitud_id')->references('id')->on('estados_solicituds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('control_mantenimientos');
    }
}
