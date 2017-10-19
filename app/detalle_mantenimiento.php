<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_mantenimiento extends Model
{
    protected $table = "detalle_mantenimientos";

    protected $fillable = [
		'fecha_detalle_mantenimiento', 'observacion'
	];

	public function control_mantenimientos(){
    	return $this->belongsto(control_mantenimientos::class);
    }

    public function personal_obreros(){
    	return $this->belongsto(personal_obreros::class);
    }
}
