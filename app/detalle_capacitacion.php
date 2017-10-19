<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_capacitacion extends Model
{
    protected $table = "detalle_capacitacions";

    protected $fillable = [
		'observacion_capacitacion'
	];

	public function personas(){
    	return $this->belongsto(personas::class);
    }

    public function registro_capacitacions(){
    	return $this->belongsto(registro_capacitacions::class);
    }
}
