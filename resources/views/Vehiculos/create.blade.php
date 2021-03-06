@extends('layout.layout')
@section('title','Añadir vehiculo')
@section('content')
    <h1 class=" text-white text-center">Registrar Nuevo vehículo</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("vehiculos")}}">Regresar</a></button>

        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("vehiculos")}}">

                @csrf
                <div class="form-group">
                    <div>
                        <div class="col-lg-4"></div>
                            <div class="col-lg-1">
                                <label class="col-lg-6" for="exampleInputPassword1">Modelo</label>
                            </div>
                            <div class="col-lg-4">
                                <input class="col-lg-6" type="text" class="form-control"  name="modelo" placeholder="Modelo">
                            </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-lg-12">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <label class="col-lg-3" for="exampleInputPassword3">Marca</label>
                            <div>
                                <select class="col-lg-6" name="id_marca" id="">
                                    @foreach($marcas as $marca)
                                        <option value="{{$marca->id_marca}}">{{$marca->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-lg-12">
                        <div class="col-lg-4"></div>
                            <div class="col-lg-1">
                                <label class="col-lg-6" for="exampleInputPassword3">Placas</label>
                            </div>
                            <div class="col-lg-4">
                                <input class="col-lg-6" type="text" class="form-control" name="placas" placeholder="Placas">
                            </div>
                    </div>
                    <br>
                    <br>
                    <br>
                        <center>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

