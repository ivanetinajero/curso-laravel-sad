 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Crear producto</title>
</head>

<body>
 <h1>Crear nuevo producto</h1>

 {!! Form::open(['route' => 'productos.store']) !!}   
    
    @include('partial.productos.form') 
  
    {!! Form::submit('Crear',['class'=>'btn btn-default']) !!}   
   
{!! Form::close() !!}
 
</body>

</html> 
