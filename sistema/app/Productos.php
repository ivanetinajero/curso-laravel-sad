<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
   //protected $table="prod"; // nombre diferente de la tabla
   //protected $primaryKey="idProducto"; // primaryKey con nombre diferente
   //public $timestamps = false; //columns [created_at,updated_at] automatically managed by Eloquent
   
   protected $fillable = ['descripcion','precio','estatus','comentarios'];
}
