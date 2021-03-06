<?php

namespace admin\Http\Controllers;

use Illuminate\Http\Request;
use admin\Subservicios;
use Illuminate\Support\Facades\Redirect;
use admin\Http\Requests\SubserviciosFormRequest;
use DB;


class SubserviciosController extends Controller
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
    		$subservicios=DB::table('subservicios')->get();
    		return view('subservicios.configurar_subservicios.index',["subservicios"=>$subservicios,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("subservicios.configurar_subservicios.create");
    }
	public function store(SubserviciosFormRequest $request)
	{
		$subservicios=new Subservicios;
		$subservicios->subtitulo=$request->get('subtitulo');
		$subservicios->subtexto=$request->get('subtexto');
		$subservicios->save();
		return Redirect::to('subservicios/configurar_subservicios');
	}
	public function show($id)
	{
		return view("subservicios.configurar_subservicios.show",["subservicios"=>Subservicios::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("subservicios.configurar_subservicios.edit",["subservicios"=>Subservicios::findOrFail($id)]);	
	}
	public function update(SubserviciosFormRequest $request, $id)
	{
		$subservicios=Subservicios::findOrFail($id);
		$subservicios->subtitulo=$request->get('subtitulo');
		$subservicios->subtexto=$request->get('subtexto');
		$subservicios->update();
		return Redirect::to('subservicios/configurar_subservicios');
	}
	public function destroy($id)
	{
		$subservicios=Subservicios::findOrFail($id);
		$subservicios->delete();
		return Redirect::to('subservicios/configurar_subservicios');
	}
}
