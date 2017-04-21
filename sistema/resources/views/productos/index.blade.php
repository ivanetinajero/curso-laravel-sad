@extends('layouts.template')

@section('titulo','Listado de Productos')

@section('contenido')

<div class="page-header">
  <h1>Listado de Productos</h1>
</div>

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
       <td>{{ $prod->estatus }}</td>
       <td>
          <a href="#" class="btn btn-success btn-sm" role="button" title="Edit" ><span class="glyphicon glyphicon-pencil"></span></a>
       </td>
       <td>
          <button type="submit" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
       </td>
      </tr> 
    @endforeach
  </tbody>
</table>



@endsection

@section('piePagina')
<p>&copy; 2017 Company, Inc.</p>
@endsection
