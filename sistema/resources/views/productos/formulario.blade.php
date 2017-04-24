<div class="col-sm-3">
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    {!! Form::text('descripcion', null ,['class'=>'form-control']) !!}
  </div>  
</div>

<div class="col-sm-3">
  <div class="form-group">
    <label for="precio">Precio</label>
    {!! Form::text('precio', null ,['class'=>'form-control']) !!}
  </div>  
</div>

<div class="col-sm-3">
  <div class="form-group">
    <label for="estatus">Estatus</label>
    {!! Form::select('estatus', ['Activo' => 'Activo', 'Inactivo' => 'Inactivo'] ,null ,['class'=>'form-control']) !!}
  </div>  
</div>