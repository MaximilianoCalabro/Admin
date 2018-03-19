<?php

namespace admin;

use Illuminate\Database\Eloquent\Model;

class Subservicios extends Model
{
    protected $table='subservicios';

	protected $primaryKey='idsubservicios';

	public $timestamps=false;

	protected $fillable =[
		'subtitulo',
		'subtexto'
	];

	protected $guarded =[

	];
}
