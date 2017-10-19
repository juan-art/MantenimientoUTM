<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorias_material extends Model
{
    protected $table = "categorias_materials";

    protected $fillable = [
		'categoria', 'descripcion'
	];

	public function materials(){
    	return $this->hasmany(materials::class);
    }

}
