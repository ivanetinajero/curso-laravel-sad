<?php

use App\Productos;

Route::get('/', function () {
    return view('welcome');
});

// Crear todas las rutas para este controler (CRUD)
Route::resource('productos','ProductosController');
Route::get('productos/activar','ProductosController@activar');

/*
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

Route::get('query1','QueryController@index');
Route::get('query2','QueryController@index2');

Route::get('query3','QueryController@getProductos');
Route::get('query4','QueryController@getProductosInactivos');
Route::get('query5/{estatus}','QueryController@getProductosEstatus');

Route::put('/person/', function (){

});

Route::delete('/person/', function (){

});

Route::patch('/person/', function (){

});

*/
