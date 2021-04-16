<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plantilla extends Model
{
    protected $table = 'AsignaPlantilla';
    protected $primaryKey='id_asigna_plantilla';
    protected $fillable = ['id_personal','id_subordinado'];

    function  getPersonal()
    {
        return $this->hasMany("App\Personales",'id_personal','id_personal');

    }

}
