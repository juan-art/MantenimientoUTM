<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    protected $table = "personas";

    protected $fillable = [
		'cedula', 'nombres', 'apellido_paterno', 'apellido_materno', 'fecha_nacimiento', 'sexo', 'correo_electronico', 'telefono_movil'
	];

	public function personal_admins(){
    	return $this->hasmany(personal_admins::class);
    }

    public function personal_obreros(){
    	return $this->hasmany(personal_obreros::class);
    }

    public function detalle_capacitacions(){
        return $this->hasmany(detalle_capacitacions::class);
    }
}
