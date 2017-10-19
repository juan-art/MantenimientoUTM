<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipos_mantenimiento extends Model
{
    protected $table = "tipos_mantenimientos";

    protected $fillable = [
		'tipo_mantenimiento', 'descripcion'
	];

	public function control_mantenimientos(){
    	return $this->hasmany(control_mantenimientos::class);
    }
}
