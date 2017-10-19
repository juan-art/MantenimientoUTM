<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prioridad_mantenimiento extends Model
{
    protected $table = "prioridad_mantenimientos";

    protected $fillable = [
		'prioridad_mantenimiento'
	];

	public function control_mantenimientos(){
    	return $this->hasmany(control_mantenimientos::class);
    }
}
