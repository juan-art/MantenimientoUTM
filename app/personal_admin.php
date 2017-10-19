<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personal_admin extends Model
{
    protected $table = "personal_admins";

    protected $fillable = [
		'hora_entrada', 'hora_salida'
	];

	public function control_mantenimientos(){
    	return $this->hasmany(control_mantenimientos::class);
    }

	public function personas(){
    	return $this->belongsto(personas::class);
    }

    public function cargos_oficinas(){
    	return $this->belongsto(cargos_oficinas::class);
    }

    public function departamentos(){
    	return $this->belongsto(departamentos::class);
    }
}
