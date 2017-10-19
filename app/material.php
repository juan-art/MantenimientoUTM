<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    protected $table = "materials";

    protected $fillable = [
		'nombre_material', 'marca_material', 'precio', 'cantidad_stock', 'fecha_adquisicion', 'fecha_caducidad', 'descripcion'
	];

	public function control_mantenimientos(){
        return $this->hasmany(control_mantenimientos::class);
    }

    public function estados_materials(){
        return $this->belongsto(estados_materials::class);
    }

    public function categorias_materials(){
    	return $this->belongsto(categorias_materials::class);
    }

    public function ubicacions(){
    	return $this->belongsto(ubicacions::class);
    }
}
