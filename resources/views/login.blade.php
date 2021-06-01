@extends('app')

@section('content')
<body class="Login">
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
    <img src="img/home.png" alt="">
    <a class="navbar-brand" href="#"><b>VIVENTA</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
           
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            
        </form>
    </div>
</nav>

<form style="padding:66px;" class="formulario">
    <div align="center">
        <img class="avatarlogin"  src="img/login.png" alt="">
    </div>
    <h2 class="h1">Iniciar Sesión</h2>    
    <div class="contenedor">        
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><svg  class="icon"xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
              </svg></span>
            <input type="email" class="form-control" placeholder="Correo electronico" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><svg  class="icon "xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
              </svg></span>
            <input type="password" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
          </div>
             <center><a href="{{route('inicio')}}" class="btn btn-primary btn-lg" role="button">Iniciar</a></center>
            <br>
            <br>
            <center>¿No tienes cuenta? <a href="{{route('registro')}}" class="link">Registrate Aquí</a></center>
        </div>
        

    </div>

</form>
</body>
@endsection