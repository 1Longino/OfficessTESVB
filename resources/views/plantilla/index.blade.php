@extends ('layout.layout')
@section('title', 'Generar Plantilla')
@section('content')

    <br>
    <h1 class="text-center bg-success text-white">Generar Plantilla</h1>
    <div class="row">
        <div class="col"><a class="btn btn-outline-success" href="{{url("plantillas/create")}}"><i class="fas fa-plus-circle"></i></a></div>
    </div>
    <br>

    <div class=="row">

        <div class="col">
            <table class="table">
                <thead>

                <th>Jefe de Area</th>
                <th>Subordinado</th>

                </thead>
                <tbdoy>
                    @foreach($plantillas as $plantilla)
                        <tr>

                            <td>{{isset($plantilla->getPersonal[0])?$plantilla->getPersonal[0]->nombre:""}}</td>
                            <td>{{isset($plantilla->getPersonal[0])?$plantilla->getPersonal[0]->nombre:""}}</td>
                            <td>


                                <form action="{{url("plantillas")."/".$plantilla->id_unidad_personal}}" method="post">
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
