@extends('layout.layout')
@section('title', 'Generar un Oficio')

@section('content')

    <br>
    <h1 class="bg-success text-white text-left">Generar nuevo oficio</h1>
    <div class="row">
        <div class="form-group col-4"><a class="btn-success" href="{{url("ocviaticos")}}">Volver  <i class="fas fa-reply"></i></a></div>
    </div>
    <br>
    <form method="post" action="{{url("ocviaticos")}}">
        @csrf

            <div class="form-group col-4">
                <label for="fecha">Fecha de giro</label>
                <input type="text" class="form-control" name="fecha" placeholder="Fecha de giro">


                <label for="no_oficio"> Numero de oficio</label>
                <input type="text" class="form-control" name="no_oficio" placeholder="Nuemero de oficio">

        </div>
        <div class="row">
            <div class="form-group col-4">
                <label for="clave_oficio"> Clave de oficio</label>
                <input type="text" class="form-control" name="clave_oficio" placeholder="Clave de oficio">
            </div>


            <div class="form-group col-3">
                <label for="id_jefepersonal">Jefe de Area</label>
                <br>
                <select name="id_personal" id="">
                    <option value="">Selecciona una opción</option>
                    @foreach($personales as $personal)
                        <option value="{{$personal->id_personal}}">{{$personal->nombre}}</option>                                                                                                                                                                                                                                               es->nombre}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-3">
                <label for="id_personal"> Personal comisionado</label>
                <br>
                <select name="id_familia" id="">
                    <option value="">Selecciona una opcion</option>
                    @foreach($personales as $personal)
                        <option value="{{$personal->id_personal}}">{{$personal->nombre}}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group col-4">
                <label for="motivos">Motivos</label>
                <input type="text" class="form-control" name="motivos" placeholder="Motivos">
            </div>


            <div class="form-group col-2">
                <label for="id_asigaMunic">Municipio</label>
                <br>
                <select name="id_asignaMunic" id="">
                    <option value="">Selecciona una opcion</option>
                    @foreach($asignamunic as $asignamuni)
                        <option value="{{$asignamuni->id_asignaMunic}}">{{$asignamuni->id_asignaMunic}}</option>
                    @endforeach
                </select>
            </div>

        </div>

            <div class="form-group col-3">
                <label for="id_origen">Origen</label>
                <br>
                <select name="id_origen" id="">
                    <option value="">Selecciona una opción</option>
                    @foreach($origenes as $origen)
                        <option value="{{$origen->id_origen}}">{{$origen->descripcion}}</option>                                                                                                                                                                                                                                               es->nombre}}</option>
                    @endforeach
                </select>
            </div>

        <div class="form-group col-3">
            <label for="id_destino">Destino</label>
            <br>
            <select name="id_destino" id="">
                <option value="">Selecciona una opción</option>
                @foreach($destinos as $destino)
                    <option value="{{$destino->id_destino}}">{{$destino->descripcion}}</option>                                                                                                                                                                                                                                               es->nombre}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-4">
            <label for="fecha_llegada">fecha de llegada</label>
            <input type="text" class="form-control" name="motivos" placeholder="Fecha de salida">
        </div>

        <div class="form-group col-4">
            <label for="fecha_salida">fecha de salida</label>
            <input type="text" class="form-control" name="fecha_salida" placeholder="Fecha de llegada">
        </div>


        <div class="form-group col-4">
            <label for="hora_salida">Hora de salida</label>
            <input type="text" class="form-control" name="hora_salida" placeholder="Hora de salida">
        </div>

        <div class="form-group col-4">
            <label for="hora_llegada">Hora de llegada</label>
            <input type="text" class="form-control" name="hora_llegada" placeholder="Hora de llegada">
        </div>







        </div>
        <br>
        <center> <button type="submit" class="btn-success">Aceptar   <i class="fas fa-check-circle"></i></button></center>
    </form>
    <br>

@endsection


