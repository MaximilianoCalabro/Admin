<?php

namespace admin\Http\Controllers;

use Illuminate\Http\Request;
use admin\Institucional;
use Illuminate\Support\Facades\Redirect;
use admin\Http\Requests\InstitucionalFormRequest;
use DB;


class InstitucionalController extends Controller
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
    		$institucional=DB::table('institucional')->get();
    		return view('institucional.configurar_institucional.index',["institucional"=>$institucional,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("institucional.configurar_institucional.create");
    }
	public function store(InstitucionalFormRequest $request)
	{
		$institucional=new Institucional;

		$institucional->titulo=$request->get('titulo');
		$institucional->prezi=$request->get('prezi');
		$institucional->save();
		return Redirect::to('institucional/configurar_institucional');
	}
	public function show($id)
	{
		return view("institucional.configurar_institucional.show",["institucional"=>Institucional::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("institucional.configurar_institucional.edit",["institucional"=>Institucional::findOrFail($id)]);	
	}
	public function update(InstitucionalFormRequest $request, $id)
	{
		$institucional=Institucional::findOrFail($id);
		$institucional->titulo=$request->get('titulo');
		$institucional->prezi=$request->get('prezi');
		$institucional->update();
		return Redirect::to('institucional/configurar_institucional');
	}
	public function destroy($id)
	{
		$institucional=Institucional::findOrFail($id);
		$institucional->delete();
		return Redirect::to('institucional/configurar_institucional');
	}

}
