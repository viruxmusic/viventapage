<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
    <img src="img/home.png" alt="">
    <a class="navbar-brand" href="#"><b>VIVENTA</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="{{route('inicio')}}" class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a href="{{route('mensajes')}}" class="nav-link" href="#">Mensajes</a>
            </li>
            <li class="nav-item">
                <a href="{{route('perfil')}}" class="nav-link" href="#">Perfil</a>
            </li>
            <li class="nav-item">
                <a href="{{route('login')}}" class="nav-link" href="#">Cerrar Sesión</a>
            </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>