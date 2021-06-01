@extends('app')

@section('content')
<div style="padding:80px;" class="container-fluid row" >
    <div class="col-5">
        <div class="row">
            <img src="img/inmueble2.jpg" alt="" style="align-self: center">
        </div>
    </div>
    <div class="col-7 " style="align-content: center">
        <p class="card-header" style="text-align: center; font-size: large"><b>REGISTRO </b></p>
        <div class="card-body form-control">
            <div class="form-floating">
                <input type="text" class="form-control" id="nombre" placeholder="Nombre(s)">
                <label for="nombre">Nombre(s)</label>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating" style="margin-top: 8px">
                        <input type="text" class="form-control" id="apellidoPaterno" placeholder="Apellido paterno">
                        <label for="apellidoPaterno">Apellido paterno</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating" style="margin-top: 8px">
                        <input type="text" class="form-control" id="apellidoMaterno" placeholder="Apellido Materno">
                        <label for="apellidoMaterno">Apellido materno</label>
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating " style="margin-top: 8px">
                        <select class="form-select" id="estado" aria-label="">
                            <option value="1">Estado 1</option>
                            <option value="2">Estado 2</option>
                            <option value="3">Estado 3</option>
                            <option value="4">Estado 4</option>
                        </select>
                        <label for="estado">Estado</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating" style="margin-top: 8px">
                        <select class="form-select" id="municipio" aria-label="">
                            <option value="1">Municipio 1</option>
                            <option value="2">Municipio 2</option>
                            <option value="3">Municipio 3</option>
                            <option value="4">Municipio 4</option>
                        </select>
                        <label for="municipio">Municipio</label>
                    </div>
                </div>
            </div>
            <div class="form-floating" style="margin-top: 8px">
                <input type="text" class="form-control" id="domicilio" placeholder="Calle,numero,colonia,C.P.">
                <label for="domicilio">Domicilio</label>
            </div>
            <div class="form-floating" style="margin-top: 8px">
                <input type="date" class="form-control" id="fechaNacimiento" placeholder="dd/mm/aaaa">
                <label for="fechaNacimiento">Fecha de Nacimiento</label>
            </div>
            <div class="form-floating" style="margin-top: 8px">
                <input type="email" class="form-control" id="correo" placeholder="nombre@ejemplo.com">
                <label for="correo">Correo</label>
            </div>
            <div class="form-floating" style="margin-top: 8px">
                <input type="password" class="form-control" id="contrasenia" placeholder="Contraseña">
                <label for="contrasenia">Contraseña</label>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto" style="margin-top: 25px">
                <a href="{{route('inicio')}}" class="btn btn-secondary" role="button">Registrarme</a>
            </div>
        </div>
    </div>
</div>
@endsection