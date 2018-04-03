<?php

namespace admin;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table='portfolio';

	protected $primaryKey='idportfolio';

	public $timestamps=false;

	protected $fillable =[
		'titulo',
		'separadores',
		'filtro1',
		'filtro2',
		'filtro3',
		'imagen_portfolio',
		'subtitulo',
		'pagina'
	];

	protected $guarded =[

	];

}
