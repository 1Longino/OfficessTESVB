@extends('layout.layout')
@section('title','Unidades Administrativas')
@section('content')
    <h1 class=" text-white text-center">Departamentos</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("administrativas/create")}}">Agregar Nuevo</a></button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>

                <th>Nombre</th>
                <th>Clave</th>
                </thead>
                <tbody>

                @foreach($administrativas as $administrativa)
                    <tr>
                        <td>{{$administrativa->descripcion_unidad}}</td>
                        <td>{{$administrativa->clave_unidad}}</td>



                        <td><a href="{{route("administrativas.edit",$administrativa->id_unidad_admin)}}">Modificar</a></td>
                        <td>
                            <form action="{{url("administrativas")."/".$administrativa->id_unidad_admin}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button href="" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>

                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection



