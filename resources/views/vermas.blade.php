@extends('app')

@section('content')
<div style="padding:66px;" class="container-fluid row" style="margin:auto; margin-top: 15px; margin-bottom: 15px" >
    
            <div class="col-12">
                
<div id="slider">
<figure>
    
<img src="img/interno1.jpg" width="900" height="600" alt>
<img src="img/interno2.png" width="900" height="600" alt>
<img src="img/interno7.jpg" width="900" height="600" alt>
<img src="img/interno5.jpg" width="900" height="600" alt>
<img src="img/interno5.jpg" width="900" height="600" alt>



</figure>
</div>
            </div>
    <div class="col-12 " style="align-content: center">
     <br>
        <div class="col-12">
          <div class= "card" style="background-color: dimgrey; ">
            <br>
            <h3 align="left"><font color="white" style="margin: 15px">
              Descripcion
           </font>
            
            </h3>
            <!textarea name="" id="" cols="30" rows="10" style="margin: 15px" ><!/textarea>

          </div>
        </div>
          <br>
        
        </div>
        <div class="row">
          <div class="col-6" align="right" >
            <div class= "card" style="background-color: dimgrey;" >
                <br>
              <h3 align="left"><font color="white" style="margin: 15px">
              Comentarios
             </font>
              
              </h3>
            
                <textarea name="" id="" cols="30" rows="10" style="margin: 15px" >

                </textarea>
             
              <div class="Row">
                <button class="btn btn-primary" type="button" style="margin: 15px">Enviar</button>

 
              </div>
              
  
            </div>
            <br>
            

          </div>
          <div class="col-6" align="center">
           
              
                <img src="img/google-maps.jpg" width="500" height="300" style="align-self: center"  alt>
          
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