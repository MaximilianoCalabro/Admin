<?php

namespace admin;

use Illuminate\Database\Eloquent\Model;

class Contactenos extends Model
{
    protected $table='contactenos';

	protected $primaryKey='idcontactenos';

	public $timestamps=false;

	protected $fillable =[
		'titulo',
		'direccion',
		'numtel',
		'correo'

	];

	protected $guarded =[

	];


}
