@extends('app')

@section('content')
<div>
<div style="padding:66px;" class="row container-fluid">
    <div class="col-3">
            <table class="table">
                  <thead>
                    <tr>
                      <th scope="col"><center>Usuario</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="table-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>      Angela Celeste Aguilera</td>
                    </tr>
                    <tr>
                      <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>      Zaira Yesenia Olmos</td>
                    </tr>
                    <tr>
                      <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>      Miriam Leticia Muñoz</td>
                    </tr>
                    <tr>
                      <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>      Jonathan Daniel Marquez</td>
                    </tr>
                    <tr>
                      <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>      Oscar Alfredo</td>
                    </tr>
                  </tbody>
            </table>
    </div>
    <div class="col-9">
        <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col"><center>Chat</center></th>
                       <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr> 
                    <td class="table-primary">Hi</td> 
                    <td></td>
                  </tr>  
                   <tr> 
                    <td></td>
                    <td class="table-success">Hello</td>
                  </tr> 
                   <tr> 
                    <td class="table-primary">How are you?</td>
                     <td></td> 
                  </tr>  
                  <tr> 
                     <td></td>
                    <td class="table-success">I'm fine and you?</td>
                  </tr>   
                  <tr> 
                    <td class="table-primary">Fine! thankU</td> 
                     <td></td>
                  </tr> 
                  <tr> 
                     <td></td>
                    <td class="table-success">I'd like to ask you about a house</td> 
                  </tr> 
                  <tr> 
                    <td class="table-primary">That's good, Yes, of course...</td>
                     <td></td>
                  </tr>  
                 
                       
                  </tbody>                
              </table>

    </div>
    </div>
</div>
<div>
    <div class="row container">
        <div class="col-3">
        </div>
        <div class="col-9">
            <form class="row">
                <div class=" col-10 mb-5">
                    <input class="form-control mr-sm-2" type="text" placeholder="Aa">
                </div>
                <div class="col-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
  <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
  <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg>
                </div>
               
                <div class="col-1">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form> 
        </div>
    </div>
</div>
@endsection