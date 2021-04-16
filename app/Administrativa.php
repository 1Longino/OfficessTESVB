<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrativa extends Model
{
    protected $table = 'UnidadAdministrativa';
    protected $primaryKey='id_unidad_admin';
    protected $fillable = ['descripcion_unidad',"clave_unidad"];
}

