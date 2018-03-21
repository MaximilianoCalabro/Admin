<?php

namespace admin\Http\Controllers;

use Illuminate\Http\Request;
use admin\User;
use Illuminate\Support\Facades\Redirect;
use admin\Http\Requests\UserFormRequest;
use DB;

class UserController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$user=DB::table('user')->get();
    		return view('user.configurar_user.index',["user"=>$user,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("user.configurar_user.create");
    }
	public function store(UserFormRequest $request)
	{
		$user=new User;
		$user->user=$request->get('user');
		$user->mail=$request->get('mail');
		$user->password=$request->get('password');
		$user->save();
		return Redirect::to('user/configurar_user');
	}
	public function show($id)
	{
		return view("user.configurar_user.show",["user"=>User::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("user.configurar_user.edit",["user"=>User::findOrFail($id)]);	
	}
	public function update(UserFormRequest $request, $id)
	{
		$user=User::findOrFail($id);
		$user->user=$request->get('user');
		$user->mail=$request->get('mail');
		$user->password=$request->get('password');
		$user->update();
		return Redirect::to('user/configurar_user');
	}
	public function destroy($id)
	{
		$user=User::findOrFail($id);
		$user->delete();
		return Redirect::to('user/configurar_user');
	}
}
