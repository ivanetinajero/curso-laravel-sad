<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>{{ $titulo }}</title>
  </head>

  <body>
    <h1>Listado de productos</h1>

    <a href="{{route('productos.create')}}" class="btn btn-default" role="button" title="Crear un nuevo Post" >Crear Post</a><br>
    
    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif

    <table border="1">
      <thead>
        <tr>      
          <th>id</th>
          <th>Descripcion</th>
          <th>Precio</th>
          <th>Estatus</th>
          <th>Edit</th>
          <th>Delete</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($prods as $prod)
            <tr>
              <td>{{$prod->id}}</td>
              <td>{{$prod->descripcion}}</td>
              <td>{{$prod->precio}}</td>
              <td>{{$prod->estatus}}</td>
              <td>
                <a href="{{route('productos.edit',$prod->id )}}">Editar1</a>
                <a href="/productos/{{$prod->id}}/edit">Editar2 </a>    
              </td>          
              <td>                   
                {!! Form::model($prod, ['route' => ['productos.destroy', $prod->id], 'method' => 'DELETE']) !!}   
                    <button type='submit' class="btn btn-danger btn-sm" onclick='return confirm("¿Estas seguro?")'>Eliminar</button>                     
                {!! Form::close() !!}                   
              </td>     
            </tr>
        @endforeach
      </tbody>
    </table>
  </body>

</html> 