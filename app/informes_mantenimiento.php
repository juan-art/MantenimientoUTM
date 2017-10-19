<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informes_mantenimiento extends Model
{
    protected $table = "informes_mantenimientos";

    protected $fillable = [
		'fecha_fin', 'hora_fin', 'numero_obreros', 'fin_mantenimiento', 'calificacion_mantenimiento', 'observacion'
	];

	public function control_mantenimientos(){
    	return $this->belongsto(control_mantenimientos::class);
    }
}
