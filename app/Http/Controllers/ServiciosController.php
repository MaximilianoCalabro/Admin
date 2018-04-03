<?php

namespace admin\Http\Controllers;

use Illuminate\Http\Request;
use admin\Servicios;
use Illuminate\Support\Facades\Redirect;
use admin\Http\Requests\ServiciosFormRequest;
use DB;


class ServiciosController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$servicios=DB::table('servicios')->get();
    		return view('servicios.configurar_servicios.index',["servicios"=>$servicios,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("servicios.configurar_servicios.create");
    }
	public function store(ServiciosFormRequest $request)
	{
		$servicios=new Servicios;
		$servicios->titulo=$request->get('titulo');
		$servicios->texto=$request->get('texto');
		$servicios->save();
		return Redirect::to('servicios/configurar_servicios');
	}
	public function show($id)
	{
		return view("servicios.configurar_servicios.show",["servicios"=>Servicios::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("servicios.configurar_servicios.edit",["servicios"=>Servicios::findOrFail($id)]);	
	}
	public function update(ServiciosFormRequest $request, $id)
	{
		$servicios=Servicios::findOrFail($id);
		$servicios->titulo=$request->get('titulo');
		$servicios->texto=$request->get('texto');
		$servicios->update();
		return Redirect::to('servicios/configurar_servicios');
	}
	public function destroy($id)
	{
		$servicios=Servicios::findOrFail($id);
		$servicios->delete();
		return Redirect::to('servicios/configurar_servicios');
	}
}
