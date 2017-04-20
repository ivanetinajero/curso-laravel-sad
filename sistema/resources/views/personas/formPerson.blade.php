 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
 <h1>Formulario [Nueva Persona]</h1>

 <form action="create" method="post">
   {{ csrf_field() }}
	<input type="text" name="nombre">
   <input type="submit" value="Enviar">
 </form> 
</body>

</html> 
