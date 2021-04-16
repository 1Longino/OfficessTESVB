@extends('layout.layout')
@section('title', 'Plantillas')

@section('content')

    <br>
    <h1 class="bg-success text-white text-left">Asignar personal a plantilla</h1>
    <div class="row">
        <div class="form-group col-4"><a class="btn-success" href="{{url("plantillas")}}">Volver  <i class="fas fa-reply"></i></a></div>
    </div>
    <br>
    <form method="post" action="{{url("plantillas")}}">
        @csrf

            <div class="form-group col-3">
                <label for="id_personal">Jefe de Area</label>
                <br>
                <select name="id_personal" id="">
                    <option value="">Selecciona una opción</option>
                    @foreach($personales as $personal)
                        <option value="{{$personal->id_personal}}">{{$personal->nombre}}</option>                                                                                                                                                                                                                                               es->nombre}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-3">
                <label for="id_subordinado"> Personal comisionado</label>
                <br>
                <select name="id_subordinado" id="">
                    <option value="">Selecciona una opcion</option>
                    @foreach($personales as $personal)
                        <option value="{{$personal->id_personal}}">{{$personal->nombre}}</option>
                    @endforeach
                </select>
            </div>

        </div>
        <br>
        <center> <button type="submit" class="btn-success">Aceptar   <i class="fas fa-check-circle"></i></button></center>
    </form>
    <br>

@endsection

