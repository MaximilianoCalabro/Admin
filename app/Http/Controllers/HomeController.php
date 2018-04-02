<?php

namespace admin\Http\Controllers;

use Illuminate\Http\Request;
use admin\Home;
use Illuminate\Support\Facades\Redirect;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
        public function show() //cosulta a la db por cada seccion
	{
		$slider=DB::table('slider')->get();
		$institucional=DB::table('institucional')->get();
		$portfolio=DB::table('portfolio')->get();
		$servicios=DB::table('servicios')->get();
		$subservicios=DB::table('subservicios')->get();
		$contactenos=DB::table('contactenos')->get();


		return view('nks/home',["institucional"=>$institucional, "slider"=>$slider, "portfolio"=>$portfolio, "servicios"=>$servicios, "subservicios"=>$subservicios, "contactenos"=>$contactenos]);

	}
}


