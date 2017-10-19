<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cargos_oficina extends Model
{
    protected $table = "cargos_oficinas";

    protected $fillable = [
		'cargo_oficina', 'observacion'
	];

	public function personal_admins(){
    	return $this->hasmany(personal_admins::class);
    }
}
