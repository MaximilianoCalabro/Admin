<?php

namespace admin\Http\Controllers;

use Illuminate\Http\Request;
use admin\Slider;
use Illuminate\Support\Facades\Redirect;
use admin\Http\Requests\SliderFormRequest;
use DB;


class SliderController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$slider=DB::table('slider')->get();
    		return view('slider.configurar_slider.index',["slider"=>$slider,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("slider.configurar_slider.create");
    }
	public function store(SliderFormRequest $request)
	{
		$slider=new Slider;
		$slider->imagen_slider=$request->get('imagen_slider');
		$slider->titulo=$request->get('titulo');
		$slider->texto=$request->get('texto');
		$slider->save();
		return Redirect::to('slider/configurar_slider');
	}
	public function show($id)
	{
		return view("slider.configurar_slider.show",["slider"=>Slider::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("slider.configurar_slider.edit",["slider"=>Slider::findOrFail($id)]);	
	}
	public function update(SliderFormRequest $request, $id)
	{
		$slider=Slider::findOrFail($id);
		$slider->imagen_slider=$request->get('imagen_slider');
		$slider->titulo=$request->get('titulo');
		$slider->texto=$request->get('texto');
		$slider->update();
		return Redirect::to('slider/configurar_slider');
	}
	public function destroy($id)
	{
		$slider=Slider::findOrFail($id);
		$slider->delete();
		return Redirect::to('slider/configurar_slider');
	}

}
