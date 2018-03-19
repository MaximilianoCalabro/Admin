<?php

namespace admin;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    protected $table='servicios';

	protected $primaryKey='idservicios';

	public $timestamps=false;

	protected $fillable =[
		'titulo',
		'texto',
		'subtitulo',
		'subtexto'
	];

	protected $guarded =[

	];

}
