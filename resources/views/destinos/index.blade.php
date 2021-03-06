@extends('layout.layout')
@section('title','Destinos')

@section('content')

    <h1 class="btn-group-justified text-white text-center">Destinos</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("destinos/create")}}">Agregar Nuevo</a></button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>No.</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar </th>

                </thead>
                <tbdoy>
                    @foreach($destinos as $destino)
                        <tr>
                            <td>{{$destino->id_destino}}</td>
                            <td>{{$destino->descripcion}}</td>
                            <td><a href="{{route("destinos.edit",$destino->id_destino)}}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a></td>
                            <td>
                                <form action="{{url("destinos")."/".$destino->id_destino}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button href="" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>

@endsection
