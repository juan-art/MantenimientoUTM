<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    protected $table = "departamentos";

    protected $fillable = [
		'departamento'
	];

	public function personal_admins(){
    	return $this->hasmany(personal_admins::class);
    }

    public function destinos(){
    	return $this->hasmany(destinos::class);
    }

    public function ubicacions(){
    	return $this->hasmany(ubicacions::class);
    }
}
