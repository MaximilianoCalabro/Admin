<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/admin', function () {
//     return view('auth/login');
// });

Route::resource('/slider/configurar_slider','SliderController');
Route::resource('/institucional/configurar_institucional','InstitucionalController');
Route::resource('/servicios/configurar_servicios','ServiciosController');
Route::resource('/subservicios/configurar_subservicios','SubserviciosController');
Route::resource('/portfolio/configurar_portfolio','PortfolioController');
Route::resource('/contactenos/configurar_contactenos','ContactenosController');
// Route::resource('/.admin','AdminController@index');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::get('/', 'PaginaController@show');
Route::get('/.admin', 'HomeController@index');

Auth::routes();

