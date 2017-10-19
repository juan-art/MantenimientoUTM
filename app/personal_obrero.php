<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personal_obrero extends Model
{
    protected $table = "personal_obreros";

    protected $fillable = [
		'hora_entrada', 'hora_salida', 'observacion'
	];

	public function detalle_mantenimientos(){
    	return $this->hasmany(detalle_mantenimientos::class);
    }

    public function personas(){
    	return $this->belongsto(personas::class);
    }

    public function cargos_obreros(){
    	return $this->belongsto(cargos_obreros::class);
    }
}
