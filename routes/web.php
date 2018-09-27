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


Route::get('/', function() {
  return view('main');
});

Route::get('/correo', function() {
  $carga = [
    'nombre' => 'isidro',
    'compania' => 'compania',
    'email' => 'email',
    'mensaje' => 'mensaje',
    'fecha' => Carbon\Carbon::now('America/Mexico_City')->format('d/m/Y')
  ];
  
  return view('emails.correo', ['carga' => $carga]);
});
