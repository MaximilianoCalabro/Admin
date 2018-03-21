<?php

namespace admin\Http\Controllers;

use Illuminate\Http\Request;
use admin\Contactenos;
use Illuminate\Support\Facades\Redirect;
use admin\Http\Requests\ContactenosFormRequest;
use DB;

class ContactenosController extends Controller
{
         public function __construct()
    {

    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$contactenos=DB::table('contactenos')->get();
    		return view('contactenos.configurar_contactenos.index',["contactenos"=>$contactenos,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("contactenos.configurar_contactenos.create");
    }
	public function store(Contactenos $request)
	{
		$contactenos=new Contactenos;

		$contactenos->titulo=$request->get('titulo');
		$contactenos->direccion=$request->get('direccion');
		$contactenos->numtel=$request->get('numtel');
		$contactenos->correo=$request->get('correo');
		$contactenos->save();
		return Redirect::to('contactenos/configurar_contactenos');
	}
	public function show($id)
	{
		return view("contactenos.configurar_contactenos.show",["contactenos"=>Contactenos::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("contactenos.configurar_contactenos.edit",["contactenos"=>Contactenos::findOrFail($id)]);	
	}
	public function update(Contactenos $request, $id)
	{
		$contactenos=Contactenos::findOrFail($id);
		$contactenos->titulo=$request->get('titulo');
		$contactenos->direccion=$request->get('direccion');
		$contactenos->numtel=$request->get('numtel');
		$contactenos->correo=$request->get('correo');
		$contactenos->update();
		return Redirect::to('contactenos/configurar_contactenos');
	}
	public function destroy($id)
	{
		$contactenos=Contactenos::findOrFail($id);
		$contactenos->delete();
		return Redirect::to('contactenos/configurar_contactenos');
	}
}
