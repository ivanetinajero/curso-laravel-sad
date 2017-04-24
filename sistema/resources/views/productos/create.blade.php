@extends('layouts.template')

@section('titulo','Crear nuevo Producto')

@section('contenido')

<div class="page-header">
  <h1>Crear Producto</h1>
</div>

{!! Form::open(['url' => 'productos']) !!}
    
<div class="row">
  
  @include('productos.formulario')

</div> 

  
<div class="row">
 <div class="col-sm-3">
   
   {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
   
 </div>  
</div>

{!! Form::close() !!}

@endsection