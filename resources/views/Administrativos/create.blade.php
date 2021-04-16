@extends('layout.layout')
@section('title','Añadir Departamento')
@section('content')
    <h1 class=" text-white text-center">Agregar Departamento</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("administrativas")}}">Regresar</a></button>

        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("administrativas")}}">

                @csrf
                <div class="form-group">

                    <div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <label for="descripcion_unidad">Nombre</label>
                            <input type="text" class="form-control" name="descripcion" placeholder="Nombre">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-lg-12">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <label for="clave_unidad">clave_unidad</label>
                            <input type="text" class="form-control" name="clave" placeholder="Clave">
                        </div>
                    </div>

                    <!--<input type="checkbox" value="hola" name="check">activame-->

                </div>
                <center><button type="submit" class="btn btn-primary">Agregar</button></center>
            </form>
        </div>
    </div>

@endsection
