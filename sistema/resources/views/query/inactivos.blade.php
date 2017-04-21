<!DOCTYPE html>
<html>
  <head>
    <title> Listado de Productos </title>
  </head>
  <body>
    <h1>Productos inactivos</h1>
    <table border="1">
      <tr>
        <th>Id</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Estatus</th>
      </tr>
      
      @foreach ($datos as $prod)
      <tr>
       <td>{{ $prod->id }}</td>
       <td>{{ $prod->descripcion }}</td>
       <td>{{ $prod->precio }}</td>
       <td>{{ $prod->estatus }}</td>
      </tr> 
      @endforeach
      
    </table>         
    
  </body>
</html>
