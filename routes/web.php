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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('slider/configurar','SliderController');
Route::resource('institucional/configurar','InstitucionalController');
Route::resource('servicios/configurar','ServiciosController');
// Route::resource('subservicios/configurar','SubserviciosController');
// Route::resource('portfolio/configurar','PortfolioController');
// Route::resource('contactenos/configurar','ContactenosController');


