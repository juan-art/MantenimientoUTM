<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria_capacitacion extends Model
{
    protected $table = "categoria_capacitacions";

    protected $fillable = [
		'categoria', 'descripcion'
	];

	public function registro_capacitacions(){
    	return $this->hasmany(registro_capacitacions::class);
    }}
