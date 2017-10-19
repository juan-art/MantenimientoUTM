<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estados_material extends Model
{
    protected $table = "estados_materials";

    protected $fillable = [
		'estado'
	];

	public function materials(){
    	return $this->hasmany(materials::class);
    }
}
