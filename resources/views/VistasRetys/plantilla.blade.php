    <!DOCTYPE html>
    <html lang="es">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name ="description" content = "Página del Gobierno del Estado de México para búsqueda y consulta de Tramites y Servicios">

        <meta name=”keywords” content="tramites, servicios, estado,  mexico, cuts, CUTS, TRAMITES, ventanilla, gobierno, curp, RETYS, retys, retys edomex,edomex">

        <link rel="icon" href="img/gobiernologo.ico" type="image/x-icon">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('bootstrap4.5/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/nav.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
        <!-- <link rel="stylesheet" href="css/style4.css">-->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
        </script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
        </script>
        <link href="{{ asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">



        <link rel="stylesheet" href="{{ asset('css/boton.css')}}">

        <!-- Custom styles for this template -->

        <link rel="stylesheet" href="{{ asset('vendor/carousel.css') }}">

      @yield('title')<title>Trámites y Servicios </title>

    </head>

    <body>

      <header>
        <nav class="navbar  fixed-top navbar-expand-sm navbar-light fixed-right bg-light">

          <a class="navbar-brand" href="#"><img src="{{ asset('img/h1.png')}}" class="logo-brand" alt="logo" height="70"
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
                <a class="nav-link" href="http://edomex.gob.mx/acerca_ventanilla">Acerca de la ventanilla</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="http://edomex.gob.mx/conoce_ventanilla">Conoce la ventanilla</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="http://edomex.gob.mx/marco_ventanilla">Marco jurídico </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link " href="http://edomex.gob.mx/guias_tramites">Guías</a>
              </li>
            </ul>

          </div>
        </nav>
      </header>

      <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

          </ol>
          <div class="carousel-inner">


            <div class="carousel-item active">
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
                    <form   class="form-inline"  method="GET" action="{{ route('tarjetas') }}" style="  justify-content: center;" >
                        <div class="container-4">
                            <input type="search" id="search" name="buscar" placeholder="¿Qué estás buscando?" />
                            <button class="icon"><i class="fa fa-search"></i></button>
                          </div>
                    </form>
                </div>
              </div>
            </div>




          </div>

        </div>
            <nav class="navbar navbar-expand-sm bg-light navbar-light" id="filtro">
                <ul class="navbar-nav" style="margin:auto;">
                    <li class="nav-item active">
                        <a class="nav-link text-bold text-dark" href="{{ route('inicio')}} ">CATEGORÍAS</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-bold text-dark" href="{{ route('enlinea')}} ">TRÁMITES EN LÍNEA</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ÁREAS DE GOBIERNO</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="https://www.gob.mx/tramites"><img src="{{ asset('img/icon/mexico.png')}}" style="width:20%;" class=" img-circle mx-auto"> Federal</a>
                          <a class="dropdown-item" href="{{ route('areasgob') }}"><img src="{{ asset('img/icon/estatal.png')}}" style="width:20%;" class=" img-circle mx-auto"> Estatal</a>
                          <a class="dropdown-item" href="{{ route('municipios') }}"><img src="{{ asset('img/icon/municipal.png')}}" style="width:20%;" class=" img-circle mx-auto"> Municipal</a>
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
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/ISJsCGz3EMU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <br>

                        <hr>

                        <br>
                        <div class="card gradient-card bg-gradient-warning d-flex justify-content-center ">
                            <div class="card-image " style="background-image: url({{asset('img/backinicio.png')}})">
                                <div class="text-white d-flex justify-content-center">
                                <div class="first-content align-self-center p-3">
                                    <h3 class="card-title text-bold" style="color: #d19f09!important;"><i class="fas fa-comments fa-2x"></i> Punto de Contacto</h3>
                                </div>
                                </div>
                            </div>
                            <div class="card-body text-warning">
                                <div class="tab-content" id="myTabContent">

                                       <p class="text-secondary text-bold"> <h5> Centro de Atención Telefónica </h5> </p>

                                        <ul>
                                            <p class="text-secondary"> <a class="text-warning" style="color: #d19f09!important;" href="http://">CHAT</a>  en linea.

                                            <p class="text-secondary">Lada sin costo <span class="text-warning" style="color: #d19f09!important;"> 01 800 696 96 96
                                                </span></p>

                                            <p class="text-secondary">En el valle de Toluca <span class="text-warning" style="color: #d19f09!important;"> 070
                                            </span></p>

                                        </ul>
                                        <p class="text-secondary text-bold">Centro de Servicios Administrativos</p>


                                </div>

                            </div>
                        </div>

                    </div> <!-- Col 3 -->

                    <div class="col-lg-6" >

                        @yield ('tarjetas')

                    </div> <!-- Col 6 -->


                    <div class="col-lg-3">

                        <div class="card bg-gradient-success d-flex justify-content-center">
                            <div class="card-image " style="background-image: url({{asset('img/backinicio.png')}})">
                                <div class="text-warning d-flex justify-content-center">
                                <div class="first-content align-self-center p-3">
                                    <h3 class="text-warning text-bold"><i class="fas fa-folder-open fa-2x"></i> Carpeta Ciudadana</h3>
                                </div>
                                </div>
                            </div>
                            <div class="card-body card text-center">

                                        <h3 class="text-warning">Clave Única de Trámites y Servicios</h3>
                                        <div class="form-grupo">
                                            <hr>
                                                <p> <a href="#" class="text-dark" >Inicia sesión</a> </p>
                                                <p> <a href="#"  class="text-dark" >¿Olvidaste tu contraseña?</a> </p>
                                                <p> <a href="#" class="text-dark" > Verifica si tienes CUTS</a> </p>
                                                 <a href="#" class="text-dark" > ¿No tienes CUTS?  Obtenla <span class="text-warning"> AQUÍ </span> </a>
                                        </div>
                            </div>
                        </div>
                      <hr>
                        <div class="card bg-gradient-success d-flex justify-content-center ">
                            <div class="card-image " style="background-image: url({{asset('img/backinicio.png')}})">
                                <div class="text-warning d-flex justify-content-center">
                                <div class="first-content align-self-center p-3">
                                  <h3 style="color: #b4621e!important;"> <i class="fa fa-search fa-2x"></i> Consulta tu solicitud</h3>
                                </div>
                                </div>
                            </div>
                            <div class="card-body card text-center">
                                        <div class="form-grupo">
                                            <hr>
                                               <p>Si realizaste un trámite o servicio,<a href="https://sistemas2.edomex.gob.mx/ventanilla/busquedaPorFolio.action" style="color: #b4621e!important;"> AQUÍ </a>  podrás consultar el estado de tu solicitud mediante el folio</p>
                                        </div>
                            </div>
                        </div>

                    </div>

                 </div><!-- sISTEMA DE COLUMNAS -->

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
                <h5 class=" text-black text-medium ">Conoce el Estado</h5>
                <ul class="list-unstyled ">
                  <li class=" text-black text-small "><img src="img/icon/triangulo.png" style="width:5%;">Nuestros municipios</li>
                  <li class=" text-black text-small"><img src="img/icon/triangulo.png" style="width:5%;">Corredores turísticos</li>
                  <li class=" text-black text-small "><img src="img/icon/triangulo.png" style="width:5%;">Parques</li>
                   <li class=" text-black text-small"><img src="img/icon/triangulo.png" style="width:5%;">Pueblos Mágicos</li>
                    <li class=" text-black text-small "><img src="img/icon/triangulo.png" style="width:5%;">Visita el Estado</li>
                </ul>

              </div>

               <div class="col-lg-2 col-md-4">
                <h5 class=" text-black text-medium">Trámites y servicios</h5>
                <ul class="list-unstyled ">
                  <li class=" text-black text-small "><img src="img/icon/triangulo.png" style="width:5%;">Ventanilla electrónica</li>
                  <li class=" text-black text-small"><img src="img/icon/triangulo.png" style="width:5%;">Carpeta ciudadana</li>
                  <li class=" text-black text-small "><img src="img/icon/triangulo.png" style="width:5%;">Centros de Servicios Administrativos</li>
                   <li class=" text-black text-small "><img src="img/icon/triangulo.png" style="width:5%;">Portal de servicios</li>
                </ul>

              </div>
              <div class="col-lg-2 col-md-4">
                <h5 class=" text-black text-medium ">Transparencia</h5>
                <ul class="list-unstyled ">
                  <li class=" text-black text-small "><img src="img/icon/triangulo.png" style="width:5%;">¿Qué es?</li>
                  <li class=" text-black text-small"><img src="img/icon/triangulo.png" style="width:5%;">Transparencia fiscal</li>
                  <li class=" text-black text-small "><img src="img/icon/triangulo.png" style="width:5%;">INFOEM</li>
                   <li class=" text-black text-small"><img src="img/icon/triangulo.png" style="width:5%;">Información pública</li>
                   <li class=" text-black text-small "><img src="img/icon/triangulo.png" style="width:5%;">SAIMEX</li>

                </ul>

              </div>

               <div class="col-lg-2 col-md-4">
                <h5 class=" text-black text-medium ">Datos abiertos</h5>
                <ul class="list-unstyled ">
                  <li class=" text-black text-small "><img src="img/icon/triangulo.png" style="width:5%;">Datos abiertos</li>
                  <li class=" text-black text-small"><img src="img/icon/triangulo.png" style="width:5%;">Estadísticas</li>
                  <li class=" text-black text-small"><img src="img/icon/triangulo.png" style="width:5%;">Datos abiertos en México</li>
                   <li class=" text-black text-small "><img src="img/icon/triangulo.png" style="width:5%;">Fundación de Datos Abiertos</li>


                </ul>

              </div>






              <div class="col-lg-4 col-md" style="background:#ededed">

                <img class="img" src="{{ asset ('img/h1.png') }}" alt="" />

              </div>

            </div>

          </div>
          <div class="row copyright">
              <div class="col-lg-1 col-md-4">



                </ul>

              </div>


             <div class="col-lg-2 col-md-4">
                <h5 class=" text-white text-medium ">Acerca del gobierno</h5>
                <ul class="list-unstyled ">
                  <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">Plan de Desarrollo</li>
                  <li class=" text-white text-small"><img src="img/icon/triangulo.png" style="width:3%;">Dependencias</li>
                  <li class=" text-white text-small"><img src="img/icon/triangulo.png" style="width:3%;">g2g</li>
                  <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">Gaceta de gobierno</li>
                  <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">Legistel</li>
                  <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">Glosario del sitio</li>


                </ul>

              </div>
               <div class="col-lg-2 col-md-4">
                <h5 class=" text-white text-medium ">Enlaces de interés</h5>
                <ul class="list-unstyled ">
                  <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">Derechos Humanos</li>
                  <li class=" text-white text-small"><img src="img/icon/triangulo.png" style="width:3%;">Mejora Regulatoria</li>
                  <li class=" text-white text-small"><img src="img/icon/triangulo.png" style="width:3%;">Instituto Electoral del Estado</li>
                   <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">Poder Legislativo</li>
                  <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">Poder Judicial</li>
                  <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">Edictos</li>
                  <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">Caso mujeres víctimas de tortura sexual Atenco vs. México</li>


                </ul>

              </div>
               <div class="col-lg-2 col-md-4">
                <h5 class=" text-white text-medium ">Comunicación social</h5>
                <ul class="list-unstyled ">
                  <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">Edomex Informa</li>
                  <li class=" text-white text-small"><img src="img/icon/triangulo.png" style="width:3%;">Seguridad y justicia</li>
                  <li class=" text-white text-small"><img src="img/icon/triangulo.png" style="width:3%;">TV Edoméx</li>
                   <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">TV Legislatura</li>
                   <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">Servicios a medios</li>


                </ul>

              </div>
               <div class="col-lg-2 col-md-4">
                <h5 class=" text-white text-medium ">Contáctanos</h5>
                <ul class="list-unstyled ">
                  <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">Chat en línea - CATGEM</li>
                  <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">Directorio de servidoras y servidores públicos</li>
                  <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">Sistema de Atención Mexiquense</li>
                  <li class=" text-white text-small"><img src="img/icon/triangulo.png" style="width:3%;">Escribe al gobernador</li>
                  <li class=" text-white text-small"><img src="img/icon/triangulo.png" style="width:3%;">Seguimiento de asuntos</li>
                   <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">Escribe al webmaster</li>


                </ul>

              </div>
               <div class="col-lg-2 col-md-4">
                <h5 class=" text-white text-medium ">Términos y condiciones</h5>
                <ul class="list-unstyled ">
                  <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">Acerca del portal</li>
                  <li class=" text-white text-small"><img src="img/icon/triangulo.png" style="width:3%;">Mapa del portal</li>
                  <li class=" text-white text-small"><img src="img/icon/triangulo.png" style="width:3%;">Políticas de privacidad</li>
                   <li class=" text-white text-small "><img src="img/icon/triangulo.png" style="width:3%;">Visualizadores</li>


                </ul>

              </div>
                <div class="col-lg-1 col-md-4">



                </ul>

              </div>

          </div>
        </footer>





     </main>

                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="{{ asset('js/jquery-3.5.1.slim.js') }}"></script>
                <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>

                <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

                <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
                <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
                <script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
                <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
                <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

                <script src="{{ asset('vendor/aos/aos.js') }}"></script>
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
