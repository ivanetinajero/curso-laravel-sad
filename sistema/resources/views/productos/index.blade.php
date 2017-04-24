@extends('layouts.template')

@section('titulo','Listado de Productos')

@section('contenido')

<div class="page-header">
  <h1>Listado de Productos</h1>
</div>

@if (session('status'))
 <div class="alert alert-success" role='alert' >
   {{ session('status') }}
 </div>
@endif

<a href="{{route('productos.create')}}" class="btn btn-default" role="button" title="Crear Producto" >Crear Producto</a><br><br>

<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
      <th>Precio</th>
      <th>Estatus</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
  </thead> 
  <tbody>
    
    @foreach ($datos as $prod)
      <tr>
       <td>{{ $prod->id }}</td>
       <td>{{ $prod->descripcion }}</td>
       <td>{{ $prod->precio }}</td>
       
       @if ($prod->estatus === "Activo")
          <td><span class="label label-success"> {{ $prod->estatus }} </span></td>
       @else
          <td><span class="label label-danger"> {{ $prod->estatus }} </span></td>
       @endif
       
       <td>          
         <a href="{{route('productos.edit',$prod->id )}}" 
            class="btn btn-success btn-sm" role="button">
           <span class="glyphicon glyphicon-pencil"></span>
         </a>         
       </td>
       <td>
          <button type="submit" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
       </td>
      </tr> 
    @endforeach
  </tbody>
</table>

{{ $datos->links() }}

@endsection

@section('piePagina')
<p>&copy; 2017 Company, Inc.</p>
@endsection
