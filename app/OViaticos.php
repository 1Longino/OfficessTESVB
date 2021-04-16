<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OViaticos extends Model
{
    protected $table='Oficios_Con_Viaticos';
    protected $primaryKey='id_oficioCviatico';
    protected $fillable=['fecha ','no_oficio','clave_oficio',' id_personal','id_subordinado',' motivos','id_asignaMunic',
        'id_origen','id_destino',' 	hora_salida ','	hora_llegada','id_vehiculo','viaticos'];


    function getPersonal()
    {
        return $this->hasMany("App\Personales", 'id_personal', 'id_personal');
    }

    /*function getSubordinado()
    {
        return $this->hasMany("App\Personales", 'id_personal', 'id_subordinado');
    }*/

    function getOrigenes()
    {
        return $this->hasMany("App\Origenes", 'id_origen', 'id_origen');

    }

    function getDestino()
    {
        return $this->hasMany("App\Destinos", 'id_destino', 'id_destino');

    }

    function getVehiculos()
    {
        return $this->hasMany("App\Vehiculos", 'id_vehiculo', 'id_vehiculo');

    }

    function getMunicipios()
    {
        return $this->hasMany("App\Municipios", 'id_municipio', 'id_Municipio');

    }
}
