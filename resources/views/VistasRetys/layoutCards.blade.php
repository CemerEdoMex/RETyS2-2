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
    <nav class="navbar navbar-expand-sm navbar-light fixed-right bg-light">

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
          <a class="nav-link" href="{{ route('inicio') }}">TRÁMITES Y SERVICIOS</a>
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


            <div class="row mb-2">

                <div class="col-lg-9" >

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

                </div> <!-- Col 3 -->
            </div> <!-- sISTEMA DE COLUMNAS -->

            <div class="row">
                <div class="col-12 col-md mx-auto d-block">
                    @include('VistasRetys.cards')
                </div>
            </div>




        <!-- FOOTER -->
            <footer>
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <h3 class=" text-white ">Mapa del  sitio</h3>
            <ul class="list-unstyled three-column">
              <li class=" text-white ">Mi Portal</li>
              <li class=" text-white ">Trmiates y Servicios</li>
              <li class=" text-white ">Transparencia</li>
            </ul>

            <ul class="list-unstyled three-column">
                <li class=" text-white ">Temas</li>
                <li class=" text-white ">Areas de Gobierno</li>
                <li class=" text-white ">Personas</li>
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
            <h3 class=" text-white ">Ultimas publicaciones</h3>
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
            <h3 class=" text-white ">Nuestro trabajo</h3>
            <img class="img-thumbnail" src="{{ asset ('img/icon/educacionverde.png') }}" alt="" />
            <img class="img-thumbnail" src="{{ asset ('img/icon/culturaverde.png') }}" alt="" />
            <img class="img-thumbnail" src="{{ asset ('img/icon/39AB61JUSTICIAVERDE.png') }}" alt="" />
            <img class="img-thumbnail" src="{{ asset ('img/icon/adultosm.png') }}" alt="" />
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
