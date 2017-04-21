<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class QueryController extends Controller
{
    public function index(){
       return "Mensaje desde QueryController";
    }
    
    public function index2(){
       $mensaje = "<script>alert(1)</script>";
       $titulo = "Lista de Productos";
       $tagH1 = "Lista";
       return view("query.index")
               ->with('titulo', $titulo)
               ->with('mensaje', $mensaje)
               ->with('h1',$tagH1);
    }
    
    // Todos los productos
    public function getProductos(){ 
       $productos = Productos::all();
       return view("query.index")->with("datos", $productos);
    }
    
    // Todos los productos estatus=inactivo
    public function getProductosInactivos(){
       $productos = Productos::where('estatus','inactivo')->get();
       return view("query.inactivos")->with("datos", $productos);
    }
    // Todos los productos por estatus
    public function getProductosEstatus($estatus){
       //$productos = Productos::where('estatus',$estatus)->get(['id','descripcion']);
       //$productos = Productos::where('estatus',$estatus)->take(5)->get(['id','descripcion']);
       //$productos = Productos::where('estatus',$estatus)->orderBy('id')->get(['id','descripcion']);
//       $productos = Productos::where('estatus',$estatus)
//               ->where('precio','>',100000)
//               ->get();
    
    //$productos = Productos::whereRaw('precio >= ?',[100000])->get();
    $productos = Productos::whereRaw('precio >= ? and estatus=?',[10000,$estatus])->get();
       
       return view("query.estatus")->with("datos", $productos);
    }
}
