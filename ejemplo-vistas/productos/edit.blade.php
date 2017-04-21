 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Crear producto</title>
</head>

<body>
 <h1>Editar producto</h1>

{!! Form::model($producto, ['route' => ['productos.update', $producto->id], 'method' => 'PUT']) !!}   
    
    @include('partial.productos.form') 
  
    {!! Form::submit('Actualizar',['class'=>'btn btn-default']) !!}   
   
{!! Form::close() !!}


</body>

</html> 
