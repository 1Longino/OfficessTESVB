@extends ('layout.layout')
@section('title', 'Generar Oficio')
@section('content')

    <br>
    <h1 class="text-center bg-success text-white">Generar Oficios</h1>
    <div class="row">
        <div class="col"><a class="btn btn-outline-success" href="{{url("ocviaticos/create")}}"><i class="fas fa-plus-circle"></i></a></div>
    </div>
    <br>

    <div class=="row">

        <div class="col">
            <table class="table">
                <thead>


                <th>Fecha de giro</th>
                <th>Numero de Oficio</th>
                <th>Clave </th>
                <th>Jefe de area</th>
                <th>Comisionado (Subordinado)</th>
                <th>Motivos</th>
                <th>Municipio</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Fecha de salida</th>
                <th>fecha de llegada</th>
                <th>Hora de salida</th>
                <th>Hora de llegada</th>
                <th>Vehiculo</th>
                <th>Viaticos</th>
                </thead>
                <tbdoy>
                    @foreach($oviaticos as $oviatico)
                        <tr>

                            <td>{{$oviatico->fecha}}</td>
                            <td>{{$oviatico->no_oficio}}</td>
                            <td>{{$oviatico->clave_oficio}}</td>
                            <td>{{isset($oviatico->getPersonal[0])?$oviatico->getPersonal[0]->nombre:""}}</td>
                            <td>{{isset($oviatico->getPersonal[0])?$oviatico->getPersonal[0]->nombre:""}}</td>
                            <td>{{$oviatico->motivos}}</td>
                            <td>{{isset($oviatico->getMunicipios[0])?$oviatico->getMunicipios[0]->id_asignaMunic:""}}</td>
                            <td>{{isset($oviatico->getOrigenes[0])?$oviatico->getOrigenes[0]->descripcion:""}}</td>
                            <td>{{isset($oviatico->getDestino[0])?$oviatico->getDestino[0]->descripcion:""}}</td>
                            <td>{{$oviatico->fecha_salida}}</td>
                            <td>{{$oviatico->fecha_llegada}}</td>
                            <td>{{$oviatico->hora_salida}}</td>
                            <td>{{$oviatico->hora_llegada}}</td>
                            <td>{{isset($oviatico->getVehiculos[0])?$oviatico->getVehiculos[0]->modelo:""}}</td>
                            <td>{{$oviatico->viaticos}}</td>

                                <form action="{{url("ocviaticos")."/".$oviatico->oficioCviatico}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button href="" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></button>


                                </form>

                            </td>

                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>


@endsection

