@extends('layout.layout')
@section('title','Agregar marcas')
@section('content')

    <h1 class=" text-white text-center">Modificar Marca</h1>
    <div class="row">
        <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("marcas")}}">Regresar</a></button>
    </div>

    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("marcas.update",$marca->id_marca)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-2">
                        <label class="col-lg-1" for="exampleInputPassword1">Reemplazar por:</label>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-6">
                        <center><input class="col-lg-8" type="text"  value="{{$marca->descripcion}}" id="descripcion" class="form-control" name="descripcion" placeholder=""></center>
                    </div>
                    <div class="col-lg-12">
                        <br>
                        <center>
                            <button type="submit" class="btn btn-primary">Modificar</button>
                        </center>
                        <br>
                    </div>


                </div>
            </form>
        </div>
    </div>

@endsection
