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
		'separadores2',
		'imagen_portfolio',
		'subtitulo',
		'pagina'
	];

	protected $guarded =[

	];

}
