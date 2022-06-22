<?php

use Illuminate\Support\Facades\Route;

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
Route::get('zadga', function () {
    $dep = DB::select('SELECT  nomb,  COUNT(*)
                    FROM departamento d,  ciudad c
                    where d.id_dep=c.depa
                    group by  d.nomb ');
    return view('categoria.proto', compact('dep'));
});
Route::get('categoria', 'App\Http\Controllers\index@index')->name('categoria.index');
Route::get('login', 'App\Http\Controllers\registro@viewlogin')->name('login');

Route::get('registro', 'App\Http\Controllers\registro@viewregistro')->name('registro');
Route::post('registrar', 'App\Http\Controllers\registro@store')->name('registrar');
Route::post('iniciar/sistema', 'App\Http\Controllers\loginController@login')->name('iniciar');
Route::get('/superu/{id}', 'App\Http\Controllers\index@user')->name('inicio');
Route::get('/suario/{id}', 'App\Http\Controllers\index@usuario')->name('inius');
Route::get('home/{$id}', 'App\Http\Controllers\inicio@index')->name('home');
Route::get('/logout', 'App\Http\Controllers\loginController@logout')->name('logout');
Route::get('/informacion/user{id}', 'App\Http\Controllers\UsrController@info')->name('infoRut');