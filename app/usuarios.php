<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
   protected $table = 'usuarios';
   protected $fillable = array ('nombres','apellidos','cedula','email','telefono');
}