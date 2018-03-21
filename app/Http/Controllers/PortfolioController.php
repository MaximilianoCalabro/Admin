<?php

namespace admin\Http\Controllers;

use Illuminate\Http\Request;
use admin\Portfolio;
use Illuminate\Support\Facades\Redirect;
use admin\Http\Requests\PortfolioFormRequest;
use DB;


class PortfolioController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$portfolio=DB::table('portfolio')->get();
    		return view('portfolio.configurar_portfolio.index',["portfolio"=>$portfolio,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("portfolio.configurar_portfolio.create");
    }
	public function store(PortfolioFormRequest $request)
	{
		$portfolio=new Portfolio;

		$portfolio->titulo=$request->get('titulo');
		$portfolio->separadores=$request->get('separadores');
		$portfolio->imagen_portfolio=$request->get('imagen_portfolio');
		$portfolio->subtitulo=$request->get('subtitulo');
		$portfolio->pagina=$request->get('pagina');
		$portfolio->save();
		return Redirect::to('portfolio/configurar_portfolio');
	}
	public function show($id)
	{
		return view("portfolio.configurar_portfolio.show",["portfolio"=>Portfolio::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("portfolio.configurar_portfolio.edit",["portfolio"=>Portfolio::findOrFail($id)]);	
	}
	public function update(PortfolioFormRequest $request, $id)
	{
		$portfolio=Portfolio::findOrFail($id);
		$portfolio->titulo=$request->get('titulo');
		$portfolio->separadores=$request->get('separadores');
		$portfolio->imagen_portfolio=$request->get('imagen_portfolio');
		$portfolio->subtitulo=$request->get('subtitulo');
		$portfolio->pagina=$request->get('pagina');
		$portfolio->update();
		return Redirect::to('portfolio/configurar_portfolio');
	}
	public function destroy($id)
	{
		$portfolio=Portfolio::findOrFail($id);
		$portfolio->delete();
		return Redirect::to('portfolio/configurar_portfolio');
	}

}
