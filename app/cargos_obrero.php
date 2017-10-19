<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cargos_obrero extends Model
{
    protected $table = "cargos_obreros";

    protected $fillable = [
		'cargo_obrero', 'descripcion'
	];

    public function personas(){
    	return $this->hasmany(personas::class);
    }
}
