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

Route::get('/', 'AuthController@formLogin')->middleware(['guest']);
Route::post('/login', 'AuthController@doLogin')->middleware(['guest']);
Route::post('/users/nuevo', 'RegisterUserController@doRegister');
Route::middleware(['auth'])->group(function(){
    Route::get('/home', 'HomeController@index');
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/mascotas/listado', 'AdminController@mascotasListado');
    Route::get('/admin/mascotas/nuevo', 'AdminController@cargarMascotaForm');
    Route::post('/admin/mascotas/nuevo', 'AdminController@cargarMascota');
    Route::get('/admin/mascotas/{id}/editar', 'AdminController@editarMascotaForm')
        ->where('id', '\d+');
    Route::put('/admin/mascotas/{id}/editar', 'AdminController@editarMascota')
        ->where('id', '\d+');
    Route::delete('/admin/mascotas/{id}/eliminar', 'AdminController@eliminarMascota')
        ->where('id', '\d+');
    Route::get('/logout', 'AuthController@doLogout');
    Route::get('/index/{id}', 'HomeController@detalle');
});
