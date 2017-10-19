<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ubicacion extends Model
{
    protected $table = "ubicacions";

	protected $fillable = [
		'ubicacion'
	];

    public function materials(){
    	return $this->hasmany(materials::class);
    }

    public function departamentos(){
    	return $this->belongsto(departamentos::class);
    }
}
