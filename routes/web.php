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


Route::get('/','App\Http\Controllers\PagesCrudController@welcome');
Route::get('/nuevoempleado','App\Http\Controllers\PagesCrudController@ingresarEmpleado');
Route::get('/empleados','App\Http\Controllers\PagesCrudController@verEmpleados');
Route::post('/empleados','App\Http\Controllers\PagesCrudController@crearEmpleado');
Route::get('/empleados/{empleado}/editar','App\Http\Controllers\PagesCrudController@editarEmpleado');
Route::put('empleados/{empleado}','App\Http\Controllers\PagesCrudController@actualizarEmpleado');
Route::delete('/empleados/{empleado}','App\Http\Controllers\PagesCrudController@eliminarEmpleado');
//Route::resource('empleados','App\Http\Controllers\PagesCrudController');
