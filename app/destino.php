<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class destino extends Model
{
    protected $table = "destinos";

    protected $fillable = [
		'destino', 'observacion'
	];

	public function control_mantenimientos(){
    	return $this->hasmany(control_mantenimientos::class);
    }

    public function departamentos(){
    	return $this->belongsto(departamentos::class);
    }
}
