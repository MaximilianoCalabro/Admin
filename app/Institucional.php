<?php

namespace admin;

use Illuminate\Database\Eloquent\Model;

class Institucional extends Model
{
    protected $table='Institucional';

	protected $primaryKey='idinstitucional';

	public $timestamps=false;

	protected $fillable =[
		'titulo',
		'prezi'
	];

	protected $guarded =[

	];

}
