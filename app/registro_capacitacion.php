<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registro_capacitacion extends Model
{
	protected $table = "registro_capacitacions";

	protected $fillable = [
		'fecha_ini', 'fecha_fin', 'hora_ini', 'hora_fin', 'lugar_capacitacion', 'descripcion', 'observacion'
	];

    public function detalle_capacitacions(){
    	return $this->hasmany(detalle_capacitacions::class);
    }

    public function categoria_capacitacions(){
    	return $this->belongsto(categoria_capacitacions::class);
    }
}
