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
            <ul class="navbar-nav mr-auto text-bold text-dark" >
              <li class="nav-item active">
                <a class="nav-link" href="http://edomex.gob.mx/">MI PORTAL</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('inicio')}}">TRÁMITES Y SERVICIOS</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="http://edomex.gob.mx/transparencia">TRANSPARENCIA</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link " href="http://edomex.gob.mx/estadisticas">DATOS ABIERTOS</a>
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
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">

            <div class="carousel-item active">
            <img class="first-slide" src="{{ asset('img/Pal_1.jpg')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="card-title font-weight-bold" style=" font-size: 82px;">RETyS</h1>
                    <h2 class="font-weight-bold" >Registro Estatal de Trámites  y Servicios</h2>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>
                <div class="container">
                    <div class="carousel-caption">
                        <form   class="form-inline" action="{{ route('tarjetas') }}" style="  justify-content: center;" >
                            <input type="search" id="search" placeholder="Busca tu Trámite" />
                            <button class="btn btn-info my-2 my-sm-0" type="submit">Buscar...🔎</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('img/Pal_2.jpg')}}" alt="Third slide" >
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="card-title font-weight-bold" style=" font-size: 82px;">RETyS</h1>
                    <h2 class="font-weight-bold" >Registro Estatal de Trámites y Servicios</h2>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
              </div>
              <div class="container">
                <div class="carousel-caption">
                   <div class="container-1">
                    <form   class="form-inline" action="{{ route('tarjetas') }}" style="  justify-content: center;" >
                        <input type="search" id="search" placeholder="Busca tu Trámite" />
                        <button class="btn btn-info my-2 my-sm-0" type="submit">Buscar...🔎</button>
                      </form>
                </div>
              </div>
            </div>

            <div class="carousel-item">
                <img class="second-slide" src="{{ asset('img/Pal_3.jpg')}}" alt="Third slide" >
                  <div class="carousel-caption d-none d-md-block">
                      <h1 class="card-title font-weight-bold" style=" font-size: 72px;">RETyS</h1>
                      <h3 class="font-weight-bold" >Registro Estatal de Trámites y Servicios</h3>
                      <br>
                      <br>
                      <br>
                      <br>
                  </div>
                </div>
                <div class="container">
                  <div class="carousel-caption">
                     <div class="container-1">
                      <form   class="form-inline" action="{{ route('tarjetas') }}" style="  justify-content: center;" >
                          <input type="search" id="search" placeholder="Busca tu Trámite" />
                          <button class="btn btn-info my-2 my-sm-0" type="submit">Buscar...🔎</button>
                        </form>
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
                        <a class="nav-link text-bold text-dark" href="{{ route('inicio')}} ">TRÁMITES EN LÍNEA</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ÁREAS DE GOBIERNO</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Federal</a>
                          <a class="dropdown-item" href="#">Estatal</a>
                          <a class="dropdown-item" href="#">Municipal</a>
                      </li>

                    <!--<li class="nav-item secondary">
                        <a class="nav-link text-bold" href="{{ route('areasgob')}} ">Areas de Gobierno</a>
                    </li> -->


                    <li class="nav-item">
                        <a class="nav-link text-bold text-dark" href="{{ route('personasgob')}} ">POR PERSONA</a>
                    </li>



                </ul>
            </nav>
            <div class="container-fluid" style="padding-top: 15px"  id="tramitesServivios">


                <div class="row mb-3">

                    <div class="col-lg-3 text-center text-dark">

                        <h3> Video Tutorial</h3>
                        <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/CrRL854defQ"
                        allowfullscreen></iframe>
                        </div>
                        <br>

                        <hr>

                        <br>
                        <div class="card gradient-card bg-gradient-warning ">
                            <div class="card-image " style="background-image: url({{asset('img/backinicio.png')}})">
                                <div class="text-white d-flex h-100 mask blue-gradient-rgba">
                                <div class="first-content align-self-center p-3">
                                    <h3 class="card-title text-warning text-bold"><i class="fas fa-comments fa-2x"></i> Punto de Contacto</h3>
                                </div>
                                </div>
                            </div>
                            <div class="card-body text-warning">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Federal</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Estatal</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Municipal</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab"> <br> <br>
                                       <p class="text-secondary text-bold">Centro de Atención Telefónica</p>
                                        <ul>
                                            <li class="text-secondary">

                                                <p>Lada sin costo <span class="text-warning"> 01 800 696 96 96
                                                  </span></p>
                                            </li>
                                            <li class="text-secondary">
                                                <p>En el valle de Toluca <span class="text-warning"> 070
                                                </span></p>
                                            </li>
                                        </ul>
                                        <p class="text-secondary text-bold">Centro de Servicios Administrativos</p>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                                </div>

                            </div>
                        </div>

                    </div> <!-- Col 3 -->

                    <div class="col-lg-6" >

                        @yield ('tarjetas')

                    </div> <!-- Col 6 -->

                    <div class="col-lg-3">

                        <div class="card bg-gradient-success ">
                            <div class="card-image " style="background-image: url({{asset('img/backinicio.png')}})">
                                <div class="text-success d-flex h-100 mask blue-gradient-rgba">
                                <div class="first-content align-self-center p-3">
                                    <h3 class="text-sucess text-bold"><i class="fas fa-folder-open fa-2x"></i> Carpeta Ciudadana</h3>
                                </div>
                                </div>
                            </div>
                            <div class="card-body text-success">
                                        CUTS
                                        <p class="text-secondary"> Ingresa aquí para realizar tu trámite y/o servicio o consultar el estado de tus solicitudes. </p>
                                        <div class="form-grupo">
                                            <form action="">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="cuts" name="cuts"
                                                        aria-describedby="cutsHelp" placeholder="CUTS">
                                                    <small id="cutslHelp" class="form-text text-muted">Ingresa tu CUTS previamente creada</small>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" placeholder="Password">
                                                </div>
                                                <button type="button" class="btn btn-success btn-fluid">Iniciar sesión

                                                </button>
                                            </form>
                                            <hr>
                                            <ul>
                                                <li> <a href="#">¿Olvidaste tu contraseña?</a> </li>
                                                <li> <a href="#"> Verifica si tienes CUTS</a> </li>
                                                <li> <a href="#"> ¿No tienes CUTS?  Obtenla AQUÍ</a> </li>
                                                <li> <a href="#"> ¿Deseas modificar tu correo electrónico?</a> </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <br>

                        <hr>

                        <br>
                        <div class="card bg-gradient-info">
                            <div class="card-image " style="background-image: url({{asset('img/backinicio.png')}})">
                                <div class="text-info d-flex h-100 mask blue-gradient-rgba">
                                <div class="first-content align-self-center p-3">
                                    <h3 class="text-info text-bold"><i class="fas fa-search"></i>Consulta tu solicitud</h3>
                                </div>
                                </div>
                            </div>
                            <div class="card-body ">

                                <p class="card-text">Sí realizaste un trámite o servicio, consulta el estado de tu solicitud mediante el folio.</p>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control text-warning" placeholder="•	Ingresa el folio"
                                        aria-label="Ingrese su folio" aria-describedby="basic-addon2" name="folioID"
                                        id="folioID">
                                    <div class="input-group-append">
                                        <button class="btn btn-info" type="button">Buscar...🔎 </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div> <!-- Col 3 -->
                </div> <!-- sISTEMA DE COLUMNAS -->

                <div class="row">
                    <div class="col-12 col-md">
                        @include('VistasRetys.cards')
                    </div>
                </div>




            <!-- FOOTER -->
                <footer>
          <div class="container">
            <div class="row">

              <div class="col-lg-2 col-md-4">
                <h5 class=" text-white ">Conoce el Estado</h5>
                <ul class="list-unstyled ">
                  <li class=" text-white ">-Nuestros municipios</li>
                  <li class=" text-white ">-Corredores turísticos</li>
                  <li class=" text-white ">-Parques</li>
                   <li class=" text-white ">-Pueblos Mágicos</li>
                    <li class=" text-white ">-Visita el Estado</li>
                </ul>
              
              </div>
             
               <div class="col-lg-3 col-md-4">
                <h5 class=" text-white ">Trámites y servicios</h5>
                <ul class="list-unstyled ">
                  <li class=" text-white ">-Ventanilla electrónica</li>
                  <li class=" text-white ">-Carpeta ciudadana</li>
                  <li class=" text-white ">-Centros de Servicios Administrativos</li>
                   <li class=" text-white ">-Portal de servicios</li> 
                </ul>
              
              </div>
              <div class="col-lg-2 col-md-4">
                <h5 class=" text-white ">Transparencia</h5>
                <ul class="list-unstyled ">
                  <li class=" text-white ">-¿Qué es?</li>
                  <li class=" text-white ">-Transparencia fiscal</li>
                  <li class=" text-white ">-INFOEM</li>
                   <li class=" text-white ">-Información pública</li>
                   <li class=" text-white ">-SAIMEX</li> 

                </ul>
              
              </div>

               <div class="col-lg-2 col-md-4">
                <h5 class=" text-white ">Datos abiertos</h5>
                <ul class="list-unstyled ">
                  <li class=" text-white ">-Datos abiertos en el Estado</li>
                  <li class=" text-white ">-Estadísticas</li>
                  <li class=" text-white ">-Datos abiertos en México</li>
                   <li class=" text-white ">-Fundación de Datos Abiertos</li>
                 

                </ul>
              
              </div>




             

              <div class="col-lg-3">
                
                <img class="img" src="{{ asset ('img/h1.png') }}" alt="" />
               
              </div>

            </div>
          </div>
          <div class="copyright text-center">
            Gobierno del Estado de México.
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


                @yield('scripts')

    </body>

    </html>
