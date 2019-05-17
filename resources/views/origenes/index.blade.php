@extends('layout.layout')
@section('title','Origenes')

@section('content')


    <h1 class="btn-group-justified text-white text-center">Origenes</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("origenes/create")}}">Agregar Nuevo</a></button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>No.</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
                </thead>
                <tbdoy>
                    @foreach($origenes as $origen)
                        <tr>
                            <td>{{$origen->id_origen}}</td>
                            <td>{{$origen->descripcion}}</td>
                            <td><a href="{{route("origenes.edit",$origen->id_origen)}}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a></td>
                            <td>
                                <form action="{{url("origenes")."/".$origen->id_origen}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button href="" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>


@endsection
