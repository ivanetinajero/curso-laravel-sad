<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class ProductosController extends Controller
{
    // Listado de Productos Paginado  
    public function index(){       
       //$productos = Productos::all();
       $productos = Productos::orderBy('id','DESC')->paginate(10);
       return view("productos.index")->with("datos", $productos);
       
    }
    
    // Formulario HTML - CREAR
    public function create(){              
       return view("productos.create");       
    }
    
    // Guardar el registro (POST) (INSERT)
    public function store(Request $request){  
       $producto= new Productos($request->all());
       //$producto->idUsuario = 12;
       $producto->save();
       return redirect()->route('productos.index')->with('status','Producto Guardado');       
    }
    
    // Formulario HTML - EDITAR
    public function edit($id){
       $prod = Productos::find($id);
       return view('productos.edit')->with('producto', $prod);
    }
    
    //Actualizar el registro (PUT) (UPDATE)
    public function update(Request $request, $id){ 
       $producto = Productos::find($id);
       $producto->fill($request->all());       
       //$producto->precio = $request->input('precio');       
       $producto->save();
       return redirect()->route('productos.index')->with('status','Producto Actualizado');       
    }    
    
    // Funciona Personalizada.
    public function activar(){       
      
       // TODO
       
    }
}
