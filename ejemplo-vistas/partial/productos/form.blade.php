Descripcion
{!! Form::text('descripcion', null ,['class'=>'form-control']) !!}  <br>
Precio
{!! Form::text('precio', null,['class'=>'form-control','placeholder'=>' El precio']) !!}  <br>
Estatus
{!! Form::select('estatus', ['Activo' => 'Activo', 'Inactivo' => 'Inactivo'],null,['class'=>'form-control']) !!} <br>