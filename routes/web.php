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
    return redirect()->route('categoria.index');

});
Route::get('prototipo_vista', function(){
	$dep=DB::select('SELECT  nomb,  COUNT(*)
                    FROM departamento d,  ciudad c
                    where d.id_dep=c.depa
                    group by  d.nomb ');
    return view('categoria.proto',compact('dep'));
} );
Route::get('categoria','index@index')->name('categoria.index');
Route::get('login','registro@viewlogin')->name('login');
Route::get('registro', 'registro@viewregistro')->name('registro');
Route::post('registrar', 'registro@store')->name('registrar');
Route::post('iniciar', 'loginController@login')->name('iniciar');
Route::get('/superu/{id}', 'index@user')->name('inicio');
Route::get('/suario/{id}','index@usuario')->name('inius');
Route::get('home/{$id}', 'inicio@index')->name('home');
Route::get('/logout', 'loginController@logout')->name('logout');
Route::get('/informacion/user{id}','UsrController@info')->name('infoRut');
