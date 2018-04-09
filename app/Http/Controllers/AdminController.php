<?php

namespace admin\Http\Controllers;

use Illuminate\Http\Request;
use admin\Admin;
use Illuminate\Support\Facades\Redirect;
use DB;

class AdminController extends Controller
{
	public function __construct()
    {
		$this->middleware('auth');
    }
    public function index()
	{
		return view('/layouts/admin');
	}
}
