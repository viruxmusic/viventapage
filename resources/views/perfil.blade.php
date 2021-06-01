@extends('app')

@section('content')
<div style="padding:66px;" class="container-fluid row" style="margin: auto; margin-top: 15px; margin-bottom: 15px">       
    <div class="card-body form-control" style="text-align-last: center; background-image: url('img/texturas2.jpg');">
        <div class="row" style="align-content: center">            
            <div class="col-12">
                <img class="avatar" src="img/mujer.jpg" alt=""> 
                <br>
                
                <a class="btn"><img class="avatar-camera"  style="position:absolute; top:145px; left:705px; visibility:visible" src="img/camera.png" alt=""></a>
            </div>       
            <b style="font-size: 25px">Zaira Olmos Rodríguez </b>             
                   
        </div>
    </div>
    
    <div class="container-fluid row" style="margin: auto; margin-top: 15px; margin-bottom: 15px">
        <div class="col-4">
            <div class="card">
                <div class="card-header">                    
                    <footer> <h5>Información  </h5> </footer>            
                    
                    <a href="" class="btn" style="position:absolute; top:5px; left:350px; visibility:visible"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                    </svg></a>                   
  
                   
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg>  Lagos de Moreno, Jalisco.</p>
                                        
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                    </svg> Arboledas #32 col. El Carmen </p>

                    <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg> 474-176-2672 </p>

                    <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                        <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/>
                        <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
                      </svg> Inmobiliaria Muñoz </p>

                  </blockquote>
                </div>
              </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">                    
                    <footer> <h5>¿Quienes somos?</h5> </footer>            
                    
                    <a href="" class="btn" style="position:absolute; top:5px; left:770px; visibility:visible"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                    </svg></a>                 
                     
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>
                        Somos una empresa, con el compromiso de.....

                    </p>
                    <br>
                    <br>
                    <br>
                    <br>

                  </blockquote>
                </div>
              </div>
        </div>
    </div>
    
    <div class="container-fluid row" style="margin: auto; margin-top: 15px; margin-bottom: 15px">
        <div class="col-12">
            <div class="card ">
                <div class="card-header">
                    <footer> <h5>Publicaciones</h5> </footer> 
                </div>
                <div class="card-header">
                    <form class="row g-3">                        
                        <div class="col-10">
                          
                          <input type="text" class="form-control"  placeholder="Has tu publicación aquí...">
                        </div>
                        <div class="col-1">
                          <button type="submit" class="btn btn-primary mb-3">Publicar</button>
                        </div>
                        <div class="col-1">
                            <button type="submit" class="btn btn-primary mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                              </svg> Foto</button>
                          </div>
                      </form>
                </div>
                <div class="card-body">
                    <div class="col-md">
                        <img class="avatar-camera" src="img/mujer.jpg" alt=""> <b>Zaira Olmos Rodríguez</b> 
                        
                    </div>
                    <br>                    
                    <p>Se vende casa, cuenta con .....</p>
                    <div class="row">
                        <div class="carousel">
                            <div class="carousel__contenedor">
                                <button aria-label="Anterior" class="carousel__anterior">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                    </svg>
                                </button>

                                <div class="carousel__lista">
                                    <div class="carousel__elemento">
                                        <img src="img/casa1.jpg" alt="">
                                    </div>
                                    <div class="carousel__elemento">
                                        <img src="img/casa3.jpg" alt="">
                                    </div>
                                    <div class="carousel__elemento">
                                        <img src="img/casa1.jpg" alt="">
                                    </div>
                                    <div class="carousel__elemento">
                                        <img src="img/casa3.jpg" alt="">
                                    </div>
                                    <div class="carousel__elemento">
                                        <img src="img/casa1.jpg" alt="">
                                    </div>
                                    <div class="carousel__elemento">
                                        <img src="img/casa3.jpg" alt="">
                                    </div>
                                </div>

                                <button aria-label="Siguiente" class="carousel__siguiente">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                </button>
                            </div>

                            <div role="tablist" class="carousel__indicadores"></div>
                        </div>
                    </div>

                </div>
                <div class="card-footer text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                      </svg>
                </div>
            </div>
        </div>

    </div>   
</div>
@endsection