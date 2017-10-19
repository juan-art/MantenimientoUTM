<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estados_solicitud extends Model
{
     protected $table = "estados_solicituds";

    protected $fillable = [
		'estado_solicitud'
	];

	public function control_mantenimientos(){
    	return $this->hasmany(control_mantenimientos::class);
    }
}
