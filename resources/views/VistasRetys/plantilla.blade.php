<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap4.5/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/nav.css')}}">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
     <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
     <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/style2.css">
        <!-- <link rel="stylesheet" href="css/style4.css">-->
          <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

   
     <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <title>Trámites y Servicios </title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg ">
      <div class="container">
  <a class="navbar-brand" href="#"><img src="img/h1.png" class="logo-brand"alt="logo" height="70" width="250"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <ion-icon name="menu-outline"></ion-icon>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#" id="portal">MI PORTAL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="tys">TRÁMITES Y SERVICIOS </a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link " href="#" id="transparencia">TRANSPARENCIA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" id="databiertos" >DATOS ABIERTOS</a>
      </li>
    </ul>
      </div>
    </div>
</nav>


    <section id="bg-bienvenida">
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-90" src="img/palacio.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h2 class="animate__animated animate__fadeInDown">Bienvenido  <span>al Sistema de Trámites y Servicios </span></h2>
          <p class="animate__animated animate__fadeInUp">En el 2010, el Gobierno del Estado de México lanzó el Sistema Electrónico de Información, Trámites y Servicios del Estado de México (SEITS), hoy denominada Ventanilla Electrónica Única de Trámites y Servicios. Desde entonces seguimos trabajando para innovar los actos y procedimientos administrativos, y con ello ofrecer una comunicación cada vez más efectiva entre gobierno y ciudadano. Cualquier duda respecto a los trámites y servicios del GEM, llama al Centro de Atención Telefónica, donde te atenderán con gusto.</p>
          <br><br><br><br>
            <div class="box">
  <div class="container-1">
    <center>
       <form   class="form-inline" action="{{ route('tarjetas') }}" >
      <input type="search" id="search" placeholder="Busca tu Tramite" />
         <button class="btn btn-info my-2 my-sm-0" type="submit">Buscar...🔎</button>
       </form>
       </center>
  </div>
</div>
         
  </div>

    </div>
  
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </section>
     <div class="wrapper">
              <nav class="navbar navbar-expand-sm bg-light navbar-light" id="filtro">
  <ul class="navbar-nav" style="margin:auto;">
    <li class="nav-item active">
      <a class="nav-link" href="inicio">Tema</a>
    </li>
    <li class="nav-item secondary">
      <a class="nav-link" href="areasgob">Areas de Gobierno</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="personasgob">Personas</a>
    </li>
    
   
               
  </ul>
</nav>
        <!-- Sidebar  -->
        <!--<nav id="sidebar">
            <div class="sidebar-header">
                <h3>Tramites y Servicios</h3>
                <strong>RETyS</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="inicio" >
                        <i class="fas fa-home"></i>
                        Categorías
                    </a>
                    
                </li>
                <li>
                    <a href="areasgob">
                        <i class="fas fa-briefcase"></i>
                        Areas de Gobierno
                    </a>
                    <a href="personasgob">
                        <i class="fas fa-copy"></i>
                        Personas
                    </a>
                 
                </li>
             
                
            </ul>

           
        </nav>-->

        <!-- Page Content  -->

        <div class="container-fluid">
		
          <div class="row mb-3">	
          
            <div class="col-3">
              <strong>Columna Video</strong>
                 
              <iframe width="450" height="295" src="https://www.youtube.com/embed/CrRL854defQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               
              <br>

            <hr>
            
            <br>
              <div class="card border-warning" >
                <div class="card-body text-warning">
                  <h5 class="card-title"><i class="fas fa-comments fa-lg"></i>Punto de Contacto</h5>
                  
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link " href="#">Federal</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Estatal</a>
                      <br> <br>
                      <p class="text-secondary">En linea <span class="warning"> CHAT</span></p>
                      <br>
                      <p class="text-secondary">Centro de Atencion telefonica</p>
                      <hr>
                      <ul>
                        <li class="text-secondary">Llama sin costo <h5 class="text-warning"> 01 800 696 95 96</h5> </li>
                        <li class="text-secondary"> En el centro de toluca <h5 class="text-warnig"> 0700 </h5> </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Municipal</a>
                    </li>
                  </ul>
                </div>
              </div>
    
            </div>

            <div class="col-6">		
              
              @yield ('tarjetas')
      
            </div>	
            
      
      
            <div class="col-3">
             
              <div class="card border-success border-8"  >
                <div class="card-body text-success">
                  <h5 class="card-title"><i class="fas fa-folder-open fa-lg"></i> Carpeta ciudadana</h5>
                  <ul class="nav nav-tabs">
                    <p class="text-secondary">Ingresa Cuts</p> 
                    <br>
                    <li class="nav-item">
                      <a class="nav-link" href="#">CUTS</a>
                      <p class="text-secondary"> Ingresa aqui para realizar tu tramite y/o srvivio o consultar el estado de tus solicitudes </p>
                      <div class="form-grupo">
                        <form action="">
                            <div class="form-group">
                              <input type="email" class="form-control" id="cuts" name="cuts" aria-describedby="cutsHelp" placeholder="CUTS">
                              <small id="cutslHelp" class="form-text text-muted">Ingresa tu cuts previamente creado.</small>
                            </div>
                            <div class="form-group">
                              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <button type="button" class="btn btn-success btn-fluid">Iniciar Sesion</button>
                          </form>
                          <hr>
                        <ul>
                          <li> <a href="#">¿Olvidaste tu contraseña?</a> </li>
                          <li> <a href="#"> Verifica si tienes CUTS</a> </li>
                          <li> <a href="#"> ¿No tienes CUTS? Obtenlo AQUI</a> </li>
                          <li> <a href="#"> ¿Deseas modificar tu correo electronico?</a> </li>
                        </ul>
                      </div>
                    </li>
                  
                    </ul>
                </div>
            </div>
            <br>

            <hr>
            
            <br>
            <div class="card border-warning mb-3" style="max-width: 18rem;">
              <div class="card-body ">
                <h5 class="card-title text-warning"><i class="fas fa-search fa-lg" ></i>Consulte su solicitud</h5>
                <p class="card-text">Si realizo un tramite o servicio, consulte el estado
                  de su solicitud mediante su  folio.</p>

                  <div class="input-group mb-3">
                    <input type="text" class="form-control text-warning" placeholder="Ingrese su folio" aria-label="Ingrese su folio" aria-describedby="basic-addon2"
                    name="folioID" id="folioID">
                    <div class="input-group-append">
                      <button class="btn btn-outline-waning" type="button">Buscar...🔎 </button>
                    </div>
                  </div>

              </div>
            </div>
      
          </div> <!-- Col 3 -->
        </div>

          
          
     
          
   
   

   

 

 
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.5.1.slim.js"></script>
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>

  <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="./vendor/venobox/venobox.min.js"></script>
  <script src="./vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="./vendor/counterup/counterup.min.js"></script>
  <script src="{{ asset ('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="./vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <script src="./vendor/aos/aos.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap4.5/js/bootstrap.min.js')}}" ></script>
     <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

    @yield('scripts')

  </body>
</html>