<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipos_servicio extends Model
{
    protected $table = "tipos_servicios";

    protected $fillable = [
		'tipo_servicio', 'descripcion'
	];

	public function control_mantenimientos(){
    	return $this->hasmany(control_mantenimientos::class);
    }
}
