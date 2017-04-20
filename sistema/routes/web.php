<?php

use App\Productos;

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

Route::get('/create', function () {
    return view('personas.formPerson');
});

Route::post('/create', function () {   
	return "metodo post [Create]";
});


Route::get('/hola', function () {
	return "<h1>Hola Mundo</h1>";
});

Route::get('/json', function () {
	return ['nombre'=>'Maria', 'edad'=>23,'invitado'=>false];
});

Route::get('/person/{id}', function ($id) {   
	return "1. Buscando Persona con Id:" . $id;
})->where('id','[0-9]+');

Route::get('/person/{id}/estatus/{estatus}', function ($id,$estatus) {   
	return "2. Buscando Persona con Id:" . $id . ", estatus: " . $estatus;
});

Route::get('/person/{id}/estatus/{estatus?}', function ($id,$estatus=null) {   
	return "3. Buscando Persona con Id:" . $id . ", estatus: " . $estatus;
});

Route::get('/productos/create', function () {
   
    $producto = new Productos();
    $producto->descripcion="Monitor LC";
    $producto->precio=1200;
    $producto->estatus='activo';
    $producto->save();
    
    return $producto;
});

Route::get('/productos/{id}', function ($id) {
   
    $producto = Productos::find($id);    
    return $producto;
});

Route::get('/productos/{id}/update', function ($id) {
   
    $producto = Productos::find($id);    
    $producto->estatus='inactivo';
    $producto->save();
    
    return $producto;
});

Route::get('/productos/{id}/delete', function ($id) {
   
    $producto = Productos::find($id);        
    $producto->delete();
    
    return $producto;
});

Route::get('/productos/delete2', function () {
   
    //$numRows=Productos::destroy(1);
    $numRows=Productos::destroy([1,2,3,4]);
    
    return $numRows;
});



Route::put('/person/', function (){

});

Route::delete('/person/', function (){

});

Route::patch('/person/', function (){

});


