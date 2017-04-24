@extends('layouts.template')

@section('titulo','Editar Producto')

@section('contenido')

<div class="page-header">
  <h1>Editar Producto</h1>
</div>

{!! Form::model($producto, ['route' => ['productos.update', $producto->id], 'method' => 'PUT']) !!}       
    
<div class="row">
  
  @include('productos.formulario')

</div> 

  
<div class="row">
 <div class="col-sm-3">
   
   {!! Form::submit('Actualizar',['class'=>'btn btn-success']) !!}
   
 </div>  
</div>

{!! Form::close() !!}

@endsection