    <!DOCTYPE html>
    <html lang="es">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

      

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('bootstrap4.5/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/nav.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style2.css">
        <!-- <link rel="stylesheet" href="css/style4.css">-->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
        </script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
        </script>
        <link href="vendor/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        
        <link rel="stylesheet" href="{{ asset('vendor/carousel.css') }}">

      @yield('title')<title>Trámites y Servicios </title>

    </head>

    <body>

      <header>
        <nav class="navbar  fixed-top navbar-expand-sm navbar-light fixed-right bg-light">

          <a class="navbar-brand" href="#"><img src="img/h1.png" class="logo-brand" alt="logo" height="70"
            width="250"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto" >
              <li class="nav-item active">
                <a class="nav-link" href="#">MI PORTAL</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">TRAMITES Y SERVICIOS</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">TRANSPARENCIA</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link disabled" href="#">DATOS ABIERTOS</a>
              </li>
            </ul>
            
          </div>
        </nav>
      </header>

      <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            
            <div class="carousel-item active">
            <img class="first-slide" src="{{ asset('img/palacioN.jpg')}}" alt="First slide">
              <div class="container">
                <div class="carousel-caption">
                  <div class="container-1" >  

                    <form   class="form-inline" action="{{ route('tarjetas') }}" style="justify-content: center;">

                  
                      <input type="search" id="search" placeholder="Busca tu Tramite" />
                      <button class="btn btn-info my-2 my-sm-0" type="submit">Buscar...🔎</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          
          
          

            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('img/TolucaNevado.jpg')}}" alt="Third slide" >
              <div class="container">
                <div class="carousel-caption">
                   <div class="container-1">
                      <form   class="form-inline" action="{{ route('tarjetas') }}" style="  justify-content: center;" >
                        <input type="search" id="search" placeholder="Busca tu Tramite" />
                        <button class="btn btn-info my-2 my-sm-0" type="submit">Buscar...🔎</button>
                      </form>
                    </div>
                </div>
              </div>
            </div>

          
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
            <nav class="navbar navbar-expand-sm bg-light navbar-light" id="filtro">
                <ul class="navbar-nav" style="margin:auto;">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('inicio')}} ">Tema</a>
                    </li>
                    <li class="nav-item secondary">
                        <a class="nav-link" href="{{ route('areasgob')}} ">Areas de Gobierno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('personasgob')}} ">Personas</a>
                    </li>



                </ul>
            </nav>
            <div class="container-fluid">
           

                <div class="row mb-3">

                    <div class="col-lg-3">
                       
                        <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/CrRL854defQ" 
                        allowfullscreen></iframe>
                        </div>
                        <br>

                        <hr>

                        <br>
                        <div class="card border-warning">
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
                                            <li class="text-secondary">Llama sin costo <h5 class="text-warning"> 01 800 696
                                                    95 96</h5>
                                            </li>
                                            <li class="text-secondary"> En el centro de toluca <h5 class="text-warnig"> 0700
                                                </h5>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Municipal</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div> <!-- Col 3 -->

                    <div class="col-lg-6">

                        @yield ('tarjetas')

                    </div> <!-- Col 6 -->

                    <div class="col-lg-3">

                        <div class="card border-success border-8">
                            <div class="card-body text-success">
                                <h5 class="card-title"><i class="fas fa-folder-open fa-lg"></i> Carpeta ciudadana</h5>
                                <ul class="nav nav-tabs">
                                    <p class="text-secondary">Ingresa Cuts</p>
                                    <br>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">CUTS</a>
                                        <p class="text-secondary"> Ingresa aqui para realizar tu tramite y/o srvivio o
                                            consultar el estado de tus solicitudes </p>
                                        <div class="form-grupo">
                                            <form action="">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="cuts" name="cuts"
                                                        aria-describedby="cutsHelp" placeholder="CUTS">
                                                    <small id="cutslHelp" class="form-text text-muted">Ingresa tu cuts
                                                        previamente creado.</small>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" placeholder="Password">
                                                </div>
                                                <button type="button" class="btn btn-success btn-fluid">Iniciar
                                                    Sesion</button>
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
                                <h5 class="card-title text-warning"><i class="fas fa-search fa-lg"></i>Consulte su solicitud
                                </h5>
                                <p class="card-text">Si realizo un tramite o servicio, consulte el estado
                                    de su solicitud mediante su folio.</p>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control text-warning" placeholder="Ingrese su folio"
                                        aria-label="Ingrese su folio" aria-describedby="basic-addon2" name="folioID"
                                        id="folioID">
                                    <div class="input-group-append">
                                        <button class="btn btn-warning" type="button">Buscar...🔎 </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div> <!-- Col 3 -->
                </div> <!-- sISTEMA DE COLUMNAS -->

                 

                    
           
          
            <!-- FOOTER -->
                <footer>
          <div class="container">
            <div class="row">
              
              <div class="col-lg-4 col-md-6">
                <h3>Site Map</h3>
                <ul class="list-unstyled three-column">
                  <li>Home</li>
                  <li>Services</li>
                  <li>About</li>
                  <li>Code</li>
                  <li>Design</li>
                  <li>Host</li>
                  <li>Contact</li>
                  <li>Company</li>
                </ul>
                <ul class="list-unstyled socila-list">
                  <li><img src="http://placehold.it/48x48" alt="" /></li>
                  <li><img src="http://placehold.it/48x48" alt="" /></li>
                  <li><img src="http://placehold.it/48x48" alt="" /></li>
                  <li><img src="http://placehold.it/48x48" alt="" /></li>
                  <li><img src="http://placehold.it/48x48" alt="" /></li>
                  <li><img src="http://placehold.it/48x48" alt="" /></li>
                </ul>
              </div>
              
              <div class="col-lg-4 col-md-6">
                <h3>latest Articles</h3>
                <div class="media">
                  <a href="#" class="pull-left">
                    <img src="http://placehold.it/64x64" alt="" class="media-object" />
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Programming</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                
                <div class="media">
                  <a href="#" class="pull-left">
                    <img src="http://placehold.it/64x64" alt="" class="media-object" />
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Coding</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                
                <div class="media">
                  <a href="#" class="pull-left">
                    <img src="http://placehold.it/64x64" alt="" class="media-object" />
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Web Sesign</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                
              </div>
              
              <div class="col-lg-4">
                <h3>Our Work</h3>
                <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
                <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
                <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
                <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
              </div>
              
            </div>
          </div>
          <div class="copyright text-center">
            Copyright &copy; 2017 <span>Your Template Name</span>
          </div>
        </footer>
          

     </main>

                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="./js/jquery-3.5.1.slim.js"></script>
                <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>

                <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
              
                <script src="./vendor/venobox/venobox.min.js"></script>
                <script src="./vendor/waypoints/jquery.waypoints.min.js"></script>
                <script src="./vendor/counterup/counterup.min.js"></script>
                <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
                <script src="./vendor/isotope-layout/isotope.pkgd.min.js"></script>

                <script src="./vendor/aos/aos.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
                    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
                    crossorigin="anonymous"></script>

                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                    crossorigin="anonymous"></script>
                <script src="{{ asset('bootstrap4.5/js/bootstrap.min.js') }}"></script>
                <

                @yield('scripts')

    </body>

    </html>
