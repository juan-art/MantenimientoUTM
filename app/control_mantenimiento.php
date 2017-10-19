<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class control_mantenimiento extends Model
{
    protected $table = "control_mantenimientos";

    protected $fillable = [
		'fecha_mantenimiento', 'cantidad_material', 'hora_solicitud', 'descripcion_mantenimiento', 'observacion_mantenimiento'
	];

	public function detalle_mantenimientos(){
    	return $this->hasmany(detalle_mantenimientos::class);
    }

    public function informes_mantenimientos(){
    	return $this->hasmany(informes_mantenimientos::class);
    }

    public function personal_admins(){
    	return $this->belongsto(personal_admins::class);
    }

    public function tipos_servicios(){
    	return $this->belongsto(tipos_servicios::class);
    }

    public function materials(){
    	return $this->belongsto(materials::class);
    }

    public function destinos(){
    	return $this->belongsto(destinos::class);
    }

    public function prioridad_mantenimientos(){
    	return $this->belongsto(prioridad_mantenimientos::class);
    }

    public function tipos_mantenimientos(){
    	return $this->belongsto(tipos_mantenimientos::class);
    }

    public function estados_solicituds(){
        return $this->belongsto(estados_solicituds::class);
    }
}
