<?php

namespace admin;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table='slider';

	protected $primaryKey='idslider';

	public $timestamps=false;

	protected $fillable =[
		'imagen_slider',
		'titulo',
		'texto'
	];

	protected $guarded =[

	];

}
