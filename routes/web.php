<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\ProfesoresController;
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
//FUNCIONES CALLBACK
Route::get('/', function () { 
    $arrayNombres = ["Diego Maradona","Germán Drusetich","Pajaro Caniggia"];                  #Route es una clase, y esta es la forma de acceder a un atributo estático, que es get().
    return view('alumnos.alumnos')->with("nombres",$arrayNombres);                     #view devuelve una determinada vista, en este caso es welcome.
});
/*
Route::get('/profesores', [ProfesoresController::class, 'index']);
Route::get('/profesores/create', [ProfesoresController::class, 'create']);

Route::post('/profesores',[ProfesoresController::class,'store']);
*/
/*
Route::get('/alumnos', [AlumnosController::class, 'index']);
Route::get('/alumnos/create', [AlumnosController::class, 'create']);

Route::post('/alumnos',[AlumnosController::class,'store']);
//URL EJEMPLO: /clientes/3/ o /clientes/algo/
Route::get('/alumnos/{id}',[AlumnosController::class,'show']);

Route::delete()('alumnos/',[AlumnosController::class,'destroy']);

GENERA TODAS LAS RUTAS EXCEPTO DESTROY
Route::resource('/alumnos',AlumnosController::class)->except(['destroy']);

GENERA SÓLO LA RUTA INDEX.
Route::resource('/alumnos',AlumnosController::class)->only(['index']);
*/

//GENERA TODAS LAS RUTAS
Route::resource('/alumnos',AlumnosController::class);