@extends('app')

@section('content')

<div style="padding:66px;" class="container-fluid row" style="margin:auto; margin-top: 15px; margin-bottom: 15px">
    
            <img src="img/inmueble4.jpg" width="700" height="400" alt="" style="align-self: center ">
        
    <div class="col-12 " style="align-content: center">
     <br>

     <h2>Publicaciones</h2>

        <div class="boxesContainer">
        
          <div class="cardBox" >              
            <div class="card" style="background-image: url('img/img2.jpg'); background-size: 100% 100%;" >
              <div class="front">              
              </div>
              <div class="back">
                <h3 align="left">Descripcion</h3>
                <p align="left">Casa amueblada con varias habitaciones ubicada en buena zona.</p>
                <a href="{{route('vermas')}}">Ver mas</a>
              </div>
            </div>
          </div>

          <div class="cardBox" >              
            <div class="card" style="background-image: url('img/imagenInicio.jpeg'); background-size: 100% 100%;" >
              <div class="front">              
              </div>
              <div class="back">
                <h3 align="left">Descripcion</h3>
                <p align="left">Casa amueblada con varias habitaciones ubicada en buena zona.</p>
                <a href="#">Ver mas</a>
              </div>
            </div>
          </div>
          <div class="cardBox" >              
            <div class="card" style="background-image: url('img/img1.jpeg'); background-size: 100% 100%;" >
              <div class="front">              
              </div>
              <div class="back">
                <h3 align="left">Descripcion</h3>
                <p align="left">Casa amueblada con varias habitaciones ubicada en buena zona.</p>
                <a href="#">Ver mas</a>
              </div>
            </div>
          </div>
          <div class="cardBox" >              
            <div class="card" style="background-image: url('img/img4.jpg'); background-size: 100% 100%;" >
              <div class="front">              
              </div>
              <div class="back">
                <h3 align="left">Descripcion</h3>
                <p align="left">Casa amueblada con varias habitaciones ubicada en buena zona.</p>
                <a href="#">Ver mas</a>
              </div>
            </div>
          </div>
        
          
        
        </div>
    </div>
    <div class="col-4 " style="align-content: center">
        <br><br>
     
    </div>
    <div class="col-4 " style="align-content: center">
        <br><br>
     
    </div>
</div>


@endsection