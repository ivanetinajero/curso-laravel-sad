<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class ProductosController extends Controller
{
    public function index(){
       
       $productos = Productos::all();
       return view("productos.index")->with("datos", $productos);
       
    }
    public function activar(){
       
       $productos = Productos::all();
       return view("productos.index")->with("datos", $productos);
       
    }
}
