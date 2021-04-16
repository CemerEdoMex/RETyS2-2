<!DOCTYPE html>
 <html>

 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Collapsible </title>
  <link rel="stylesheet" href="{{ asset('bootstrap4.5/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/stylecedula/style4.css') }}">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

 </head>

 <body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Cédula informativa</h3>
                <strong></strong>
            </div>

            <ul class="list-unstyled components">
               
                <li>
                    <a href="#" class="w3-bar-item tablink" onclick="openCity(event, 'InformacionGeneral')" id="defaultOpen">
                         <img src="{{asset('img/imgcedula/info_viol.png')}}" style="width:15%;" >
                        Información general
                    </a>
                </li>
                <li>
                    <a href="#" class="w3-bar-item tablink" onclick="openCity(event, 'Domicilio')">
                         <img src="{{asset('img/imgcedula/domicilio_viol.png')}}" style="width:15%;" >
                        Domicilio
                    </a>
                </li>
				<li>
                    <a href="#" class="w3-bar-item tablink" onclick="openCity(event, 'Costos')">
                        <img src="{{asset('img/imgcedula/costos_viol.png')}}" style="width:15%;" >
                        Costos
                    </a>
                </li>
				<li>
                    <a href="#" class="w3-bar-item  tablink" onclick="openCity(event, 'TiempoResp')">
                        <img src="{{asset('img/imgcedula/tiempo_viol.png')}}" style="width:15%;" >
                        Tiempo de respuesta
                    </a>
                </li>
				<li>
                    <a href="#" class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Requisitos')">
                        <img src="{{asset('img/imgcedula/requisitos_viol.png')}}" style="width:15%;" >
                        Requisitos
                    </a>
                </li>
				<li>
                    <a href="#" class="w3-bar-item  tablink" onclick="openCity(event, 'Pasosaseguir')">
                        <img src="{{asset('img/imgcedula/pasos_viol.png')}}" style="width:15%;" >
                        Pasos a seguir
                    </a>
                </li>
				<li>
                    <a href="#" class="w3-bar-item tablink" onclick="openCity(event, 'Doctoobtener')">
                        <img src="{{asset('img/imgcedula/documento_viol.png')}}" style="width:15%;" >
                        Documento a obtener
                    </a>
                </li>
				<li>
                    <a href="#" class="w3-bar-item tablink" onclick="openCity(event, 'fundamjurid')">
                         <img src="{{asset('img/imgcedula/fundamento_viol.png')}}" style="width:15%;" >
                        Fundamento jurídico
                    </a>
                </li>
                <li>
                    <a href="#" class="w3-bar-item tablink" onclick="openCity(event, 'Pregfrec')">
                         <img src="{{asset('img/imgcedula/preguntas_viol.png')}}" style="width:15%;" >
                        Preguntas frecuentes
                    </a>
                </li>
            </ul>

           
        </nav>


        <!-- Page Content  -->
        <div id="content">
           

            <nav class="navbar navbar-expand-lg navbar-light " >
                <div class="container-fluid text" >

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        
                    </button>
                    
                </div>
                 
            </nav>
            
             <div class="text-center" style="align-content:center;  color:#341050; ">
                @foreach($tramite as $tram)
                <h3>{{$tram->denominacion}}</h3>
               
                </div>
                <div class="text-center" style="align-content:center;  color:#341050;">
                <table class="table table-hover">
                    <tr>
                    
                        <th><p>{{$tram->descripcion}}</p></th>
                        
                    </tr>
                </table>
                 @endforeach
                </div>
           


             <div id="InformacionGeneral" class="tabcontent text-center">
      <h2>Información General</h2>
    @foreach($tramite as $tram)
      <table class="table table-bordered " style="max-width: 800px; margin: auto;  ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Detalle</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Dependencia u Organismo</th>
      <td>{{$tram->dependencia}}</td>
      
    </tr>
    <tr>
      <th scope="row">Dirección General</th>
      <td>{{$tram->dir_gral}}</td>
      
    </tr>
    <tr>
      <th scope="row">Unidad Administrativa Responsable</th>
      <td>{{$tram->unidadadm}}</td>
    </tr>
    <tr>
      <th scope="row">Titular de la Unidad Administrativa</th>
      <td>{{$tram->titular}}</td>
      
    </tr>
    <tr>
      <th scope="row">Modalidad del Trámite</th>
      <td>
       @if($tram->enlinea == 1)
                        En linea,
                         @endif

                          @if ($tram->presencial == 1)
                            Presencial
                        @endif

                       
        </td>
    </tr>
    <tr>
      <th scope="row">Ámbito</th>
      @if($tram->ambito == 3)
      <td>Estatal</td>
      @elseif($tram->ambito == 4)
      <td>Municipal</td>
      @elseif($tram->ambito == 5)
      <td>Federal</td>
      @else 
      <td>Ambito desconocido</td>

      @endif
      
      
    </tr>
    <tr>
      <th scope="row">Canal de Atención</th>
      <td>
       @if ($tram->presencial == 1)
        Presencial
       @endif
     </td>
      
    </tr>
     <tr>
      <th scope="row">Correo Electrónico</th>
      <td>{{$tram->correoe}}</td>
      
    </tr>
  </tbody>
</table>
@endforeach
    
    </div>


     <div id="Domicilio" class="tabcontent text-center">

        <h2>Domicilio</h2>
         @foreach($tramite as $tram)
      <table class="table table-bordered " style="max-width: 800px; margin: auto;  ">
  <thead>
  </thead>
  <tbody>
    <tr>
     <th scope="col">Calle</th>
      <td>{{$tram->calle}}</td>
      
     
      
      
    </tr>
    <th scope="col">Número Ext </th>
    <td>{{$tram->noextint}}</td>
    <tr>
        <th scope="col">Colonia</th>
        <td>{{$tram->colonia}}</td> 
    </tr>
     <tr>
        <th scope="col">Código Postal</th>
       <td>{{$tram->cp}}</td> 
    </tr>
    <tr>
        <th scope="col">Número Telefónico (1)</th>
       <td>{{$tram->lada1}}{{$tram->telefono1}}</td> 
    </tr>
    <tr>
        <th scope="col">Número Telefónico (2)</th>
       <td>{{$tram->lada2}}{{$tram->telefono2}}</td> 
    </tr>
    <tr>
        <th scope="col">Número Telefónico (3)</th>
       <td>{{$tram->lada3}}{{$tram->telefono3}}</td> 
    </tr>
    <tr>
        <th scope="col">Extensión</th>
       <td>{{$tram->ext}}</td> 
    </tr>
    <tr>
        <th scope="col">Fax</th>
       <td>{{$tram->fax}}</td> 
    </tr>
  </tbody>
</table>
@endforeach
</div>

  <div id="Costos" class="tabcontent text-center">
        <h2>Costos</h2>
        
         <ul class="nav nav-tabs" id="myTab" role="tablist" style="max-width: 700px; margin: auto;">
         
  <li class="nav-item" >
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> 
        Costo
          </a>
  </li>
 
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
      @foreach($costos as $cos)
      @if($cos->renglon==1 && $cos->columna==0)
            {{$cos->definicion}}
           @endif
            @endforeach
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
         @foreach($costos as $cos)
      @if($cos->renglon==2 && $cos->columna==0)
            {{$cos->definicion}}
           @endif
            @endforeach
    </a>
  </li>
 <li class="nav-tem">
  <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aeia-controls="tab4" aria-selected="false">
      @foreach($costos as $cos)
      @if($cos->renglon==3 && $cos->columna==0)
            {{$cos->definicion}}
           @endif
            @endforeach
  </a>
 </li>
  <li class="nav-tem">
  <a class="nav-link" id="tab5-tab" data-toggle="tab" href="#tab5" role="tab" aeia-controls="tab5" aria-selected="false">
    @foreach($costos as $cos)
      @if($cos->renglon==4 && $cos->columna==0)
            {{$cos->definicion}}
           @endif
            @endforeach
  </a>
 </li>
</ul>
<br>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
     @foreach($tramite as $tram)
      @if($tram->costo_tram==1 && $tram->costogp==0 )
         <table class="table table-bordered " style="max-width: 400px; margin: auto;">
          <thead style="background-color:#341050;">
              <tr style="color: #fff;">
               <th scope="col">Costo</th>
              </tr>
             </thead>
             <tr>
              <th>
              ${{$tram->costo_cantidad}}
              </th>
             </tr>
          </table>
            @elseif($tram->costo_tram==1 && $tram->costogp==1)
            El tramite o servicio cuenta con más de un costo, escoge el concepto para conocer su costo.
            @elseif($tram->costo_tram==0) 
            El trámite o servicio no cuenta con algún costo.    
           @endif
            @endforeach
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <table class="table table-bordered " style="max-width: 400px; margin: auto;">
             <thead style="background-color:#341050;">
              <tr style="color: #fff;">
               <th scope="col">Clave</th>
               <th scope="col">Costo</th>
              
              </tr>
             </thead>
             <tr>
               <td> 
                 @foreach($costos as $cos)
                  @if($cos->renglon==1 && $cos->columna==1)
                   {{$cos->costo}}
                  @endif
                 @endforeach
               </td>
               <td> 
                @foreach($costos as $cos)
                 @if($cos->renglon==1 && $cos->columna==2)
                  {{$cos->costo}}
                 @endif
                @endforeach
               </td>
             </tr>
    </table>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
   <table class="table table-bordered " style="max-width: 400px; margin: auto;">
             <thead style="background-color:#341050;">
              <tr style="color: #fff;">
               <th scope="col">Clave</th>
               <th scope="col">Costo</th>
              
              </tr>
             </thead>
             <tr>
               <td> 
                 @foreach($costos as $cos)
                  @if($cos->renglon==2 && $cos->columna==1)
                   {{$cos->costo}}
                  @endif
                 @endforeach
               </td>
               <td> 
                @foreach($costos as $cos)
                 @if($cos->renglon==2 && $cos->columna==2)
                  {{$cos->costo}}
                 @endif
                @endforeach
               </td>
             </tr>
    </table>
  </div>
  <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
    <table class="table table-bordered " style="max-width: 400px; margin: auto;">
             <thead style="background-color:#341050;">
              <tr style="color: #fff;">
               <th scope="col">Clave</th>
               <th scope="col">Costo</th>
              
              </tr>
             </thead>
             <tr>
               <td> 
                 @foreach($costos as $cos)
                  @if($cos->renglon==3 && $cos->columna==1)
                   {{$cos->costo}}
                  @endif
                 @endforeach
               </td>
               <td> 
                @foreach($costos as $cos)
                 @if($cos->renglon==3 && $cos->columna==2)
                  {{$cos->costo}}
                 @endif
                @endforeach
               </td>
             </tr>
    </table>
  </div>
  <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
    <table class="table table-bordered " style="max-width: 400px; margin: auto;">
             <thead style="background-color:#341050;">
              <tr style="color: #fff;">
               <th scope="col">Clave</th>
               <th scope="col">Costo</th>
              
              </tr>
             </thead>
             <tr>
               <td> 
                 @foreach($costos as $cos)
                  @if($cos->renglon==4 && $cos->columna==1)
                   {{$cos->costo}}
                  @endif
                 @endforeach
               </td>
               <td> 
                @foreach($costos as $cos)
                 @if($cos->renglon==4 && $cos->columna==2)
                  {{$cos->costo}}
                 @endif
                @endforeach
               </td>
             </tr>
    </table>
     </div>
   </div>
   <!--************************************************************************************************************************-->
    <ul class="nav nav-tabs" id="myTab" role="tablist" style="max-width: 700px; margin: auto;">
         
  <li class="nav-item" >
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="home" aria-selected="true"> 
        Costo
          </a>
  </li>
 
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="profile" aria-selected="false">
      @foreach($costos as $cos)
      @if($cos->renglon==1 && $cos->columna==0)
            {{$cos->definicion}}
           @endif
            @endforeach
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="contact" aria-selected="false">
         @foreach($costos as $cos)
      @if($cos->renglon==2 && $cos->columna==0)
            {{$cos->definicion}}
           @endif
            @endforeach
    </a>
  </li>
 <li class="nav-tem">
  <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aeia-controls="tab4" aria-selected="false">
      @foreach($costos as $cos)
      @if($cos->renglon==3 && $cos->columna==0)
            {{$cos->definicion}}
           @endif
            @endforeach
  </a>
 </li>
  <li class="nav-tem">
  <a class="nav-link" id="tab5-tab" data-toggle="tab" href="#tab5" role="tab" aeia-controls="tab5" aria-selected="false">
    @foreach($costos as $cos)
      @if($cos->renglon==4 && $cos->columna==0)
            {{$cos->definicion}}
           @endif
            @endforeach
  </a>
 </li>
 <li class="nav-tem">
  <a class="nav-link" id="tab5-tab" data-toggle="tab" href="#tab6" role="tab" aeia-controls="tab5" aria-selected="false">
    @foreach($costos as $cos)
      @if($cos->renglon==5 && $cos->columna==0)
            {{$cos->definicion}}
           @endif
            @endforeach
  </a>
 </li>
 <li class="nav-tem">
  <a class="nav-link" id="tab5-tab" data-toggle="tab" href="#tab7" role="tab" aeia-controls="tab5" aria-selected="false">
    @foreach($costos as $cos)
      @if($cos->renglon==6 && $cos->columna==0)
            {{$cos->definicion}}
           @endif
            @endforeach
  </a>
 </li>
 <li class="nav-tem">
  <a class="nav-link" id="tab5-tab" data-toggle="tab" href="#tab8" role="tab" aeia-controls="tab5" aria-selected="false">
    @foreach($costos as $cos)
      @if($cos->renglon==7 && $cos->columna==0)
            {{$cos->definicion}}
           @endif
            @endforeach
  </a>
 </li>
 <li class="nav-tem">
  <a class="nav-link" id="tab5-tab" data-toggle="tab" href="#tab9" role="tab" aeia-controls="tab5" aria-selected="false">
    @foreach($costos as $cos)
      @if($cos->renglon==8 && $cos->columna==0)
            {{$cos->definicion}}
           @endif
            @endforeach
  </a>
 </li>
 <li class="nav-tem">
  <a class="nav-link" id="tab5-tab" data-toggle="tab" href="#tab10" role="tab" aeia-controls="tab5" aria-selected="false">
    @foreach($costos as $cos)
      @if($cos->renglon==9 && $cos->columna==0)
            {{$cos->definicion}}
           @endif
            @endforeach
  </a>
 </li>
  <li class="nav-tem">
  <a class="nav-link" id="tab5-tab" data-toggle="tab" href="#tab11" role="tab" aeia-controls="tab5" aria-selected="false">
    @foreach($costos as $cos)
      @if($cos->renglon==10 && $cos->columna==0)
            {{$cos->definicion}}
           @endif
            @endforeach
  </a>
 </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
     @foreach($tramite as $tram)
      @if($tram->costo_tram==1 && $tram->costogp==0 )
         <table class="table table-bordered " style="max-width: 400px; margin: auto;">
          <thead style="background-color:#341050;">
              <tr style="color: #fff;">
               <th scope="col">Costo</th>
              </tr>
             </thead>
             <tr>
              <th>
              ${{$tram->costo_cantidad}}
              </th>
             </tr>
          </table>
            @elseif($tram->costo_tram==1 && $tram->costogp==1)
            El tramite o servicio cuenta con más de un costo, escoge el concepto para conocer su costo.
            @elseif($tram->costo_tram==0) 
            El trámite o servicio no cuenta con algún costo.    
           @endif
            @endforeach
  </div>
  <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="profile-tab">
    <table class="table table-bordered " style="max-width: 600px; margin: auto;">
             <thead style="background-color:#341050;">
              <tr style="color: #fff;">
                @foreach($costos as $cos)
                @if($cos->renglon==0 && $cos->columna>=1)
               <th scope="col">{{$cos->encabezado}}</th>
                @endif
               @endforeach
              </tr>
             </thead>
             <tr>
               <td> 
                 @foreach($costos as $cos)
                  @if($cos->renglon==1 && $cos->columna==1)
                   {{$cos->costo}}
                  @endif
                 @endforeach
               </td>
               <td> 
                @foreach($costos as $cos)
                 @if($cos->renglon==1 && $cos->columna==2)
                  {{$cos->costo}}
                 @endif
                @endforeach
               </td>
             </tr>
    </table>
  </div>
 

  
   </div>
   <!--************************************************************************************************************************-->
     
    </div>

    <div id="TiempoResp" class="tabcontent text-center">
        <h2>Tiempo de respuesta</h2></center>
        @foreach($tramite as $tram)
        <table class="table table-bordered " style="max-width: 700px; margin: auto;">
            <tr>
                <td>Tiempo de respuesta</td>
                <th>
                    
                    @if($tram->tresp_min >= 1)
                    {{$tram->tresp_min}} Minuto(s)
                    @endif
                    @if($tram->tresp_hor >= 1)
                    {{$tram->tresp_hor}} Hora(s)
                    @endif
                    @if($tram->tresp_dia>= 1)
                    {{$tram->tresp_dia}} Día(s)
                    @endif
                     @if($tram->tresp_mes>= 1)
                    {{$tram->tresp_mes}} Mes(es)
                    @endif
                     @if($tram->tresp_anio>= 1)
                    {{$tram->tresp_dia}} anio(s)
                    @endif
                </th>
            </tr>
        </table>
        @endforeach
    </div>

     <div id="Requisitos" class="tabcontent text-center">
        <h2>Requisitos</h2>
      
         
        
        <table class="table table-bordered " style="max-width: 800px; margin: auto;">
             <thead>
              <tr>
               <th scope="col">Persona</th>
               <th scope="col">Requisito</th>
               <th scope="col">Original</th>
               <th scope="col">Copia</th>
              </tr>
             </thead>
              @foreach($requisitos as $req )
              <tr>
                <td>{{$req->tipo}}</td>
                 <td>{{$req->descripcion}}</td>
                 @if($req->original==1)
                 <td>si</td>
                 @else
                    <td>no</td>
                 @endif
                 @if($req->copia==1)
                 <td>si</td>
                 @else
                    <td>no</td>
                 @endif
            </tr>
             @endforeach
        </table>
       
       
    </div>




     <div id="Pasosaseguir" class="tabcontent text-center">
        <h2>Pasos a Seguir</h2>
        <table class="table table-bordered " style="max-width: 800px; margin: auto;">
             <thead>
              <tr>
               <th scope="col">Pasos</th>
               
              </tr>
             </thead>
              @foreach($pasos as $pas )
              <tr>
             
                <td>{{$pas->paso}}</td>
                 
                 
            </tr>
             @endforeach
        </table>
       
    </div>



     <div id="Doctoobtener" class="tabcontent text-center">
        <h2>Documento a obtener</h2>
        <table class="table table-bordered " style="max-width: 800px; margin: auto;">
             <thead>
              <tr>
               <th scope="col">Documento </th>
               
              </tr>
             </thead>
              @foreach($tramite as $tram )
              <tr>
             
                <td>{{$tram->docobtener}}</td>
                 
                 
            </tr>
             @endforeach
        </table>
      
    </div>

   
    <div id="fundamjurid" class="tabcontent text-center">
        <h2>Fundamento Jurídico</h2>
         <table class="table table-bordered " style="max-width: 800px; margin: auto;">
             <thead>
              <tr>
               <th scope="col">Fundamento Jurídico </th>
               
              </tr>
             </thead>
              @foreach($tramite as $tram )
              <tr>
             
                <td>{{$tram->flegal}}</td>
                 
                 
            </tr>
             @endforeach
        </table>
       
    </div>
    <div id="Pregfrec" class="tabcontent text-center">
        <h2>Preguntas frecuentes</h2>
         <table class="table table-bordered " style="max-width: 900px; margin: auto;">
             <thead>
              <tr>
               <th scope="col"># </th>
               <th scope="col">Pregunta </th>
               <th scope="col">Respuesta </th>
               
              </tr>
             </thead>
              @foreach($preguntas as $pre )
              <tr>
             
                <td>{{$pre->num}}</td>
                <td>{{$pre->pregunta}}</td>
                <td>{{$pre->respuesta}}</td>
                 
                 
            </tr>
             @endforeach
        </table>
      
    </div>


           
           
    </div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script src="{{ asset('js/Trasnparencia/trasnparencia.js')}}"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
 </body>
</html>