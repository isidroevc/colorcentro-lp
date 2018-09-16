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
  $carga = json_decode('{"nombre":"Isidro","email":"isidroevc@gmail.com","compania":"Textiles chidos","mensaje":"la oscuridad de mi alma"}');
  
  return view('emails.correo', ['carga' => $carga]);
});
