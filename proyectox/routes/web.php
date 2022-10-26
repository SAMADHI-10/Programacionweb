<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPaginas;

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

/*
Route::get('/', function () {
    return view('welcome');
});

*/
# Route::get('/', function () { return view('welcome');->name('routeHome')});


#Route::view('/home', 'home')->name('routeHome');
#Route::view('/ingresar', 'ingresar')->name('routeIngresar');
//Route::view('/recuerdos', 'recuerdos')->name('routeRecuerdos');

/*
Route::get('/ingresar', function(){
    return "Esta es mi ruta de ingresar recuerdos ";
});

Route::get('/ingresar/{name}', function($name){
    return "Bienvenido a mi ruta ingresar recuerdos $name";
});


Route::get('/recuerdos/{nombre?}', function($nombre="Invitado"){
    return "Bienvenido a mi ruta ingresar recuerdos $nombre";
});
*/
/*
Route::get('/recuerdos/{nombre?}', ['as'=>'NRecuerdos', function($nombre="Invitado"){
    $arraynombres=['Pepe', 'Juan', 'Diego'];
    return view('recuerdos', compact('nombre', 'arraynombres'));
}]);
*/

/*
Route::get('/', ['as'=>'NHome', 'uses'=>'App\Http\Controllers\ControladorPaginas@home']);
Route::get('ingresar', ['as'=>'NIngresar', 'uses'=>'App\Http\Controllers\ControladorPaginas@ingresar']);
Route::get('recuerdos/{nombre?}', ['as'=>'NRecuerdos', 'uses'=>'App\Http\Controllers\ControladorPaginas@recuerdos']);
*/

Route::get('/', [ControladorPaginas::class, 'fhome'])->name('Nhome');
Route::get('/ingresar', [ControladorPaginas::class, 'fingresar'])->name('Ningresar');
Route::get('recuerdos/{nombre?}',[ControladorPaginas::class, 'frecuerdos'])->name('Nrecuerdos');
//mandar datos->post
Route::post('/guardarRecuerdos', [ControladorPaginas::class, 'procesarRecuerdos'])->name('Nprocesar');

