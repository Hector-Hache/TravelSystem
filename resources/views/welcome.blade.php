<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/avion.png">

        <title>TRAVELSYSTEM Agencia de viajes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
           
        <!--navegacion-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">

            <a class="navbar-brand alert alert-link" href="{{url('/')}}">TRAVELSYSTEM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                @if (Route::has('login'))
                <ul class="navbar-nav me-auto mb-2 mb-lg-3">
                    <li class="nav-item">
                @auth
                @else
                     <a href="{{ route('login') }}" class="nav-link active" aria-current="page">Iniciar sesion</a>
                </li>
                     @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registro</a>
                </li>
                   
                                @endif
                            @endauth
                        </div>
                    @endif
                
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}"><img src='{{url("/img/logo.jpg")}}' class="imagen"   alt="..."></a>
                    <style>
                      img.imagen{
                        position: relative;
                        width: 50px; height: 50px;
                        top: -15px; /* ajustar los valores para mover la imagen */
                        left: -35px;
                        border-radius: 50%;
                        margin: 1%;
                        border:1px solid #fff;
                        display: block;
                      }
                    </style>
                    </li>
                <span class="navbar-text">
                  Reserva una aventura ahora
                </span>
                    
                </ul>
                
                </div>
            </div>
            </nav>
        <!--end--navegation-->
        
<!--cuerpo-->
@yield('content')
<div class="container">
<div class="container">
<br>
<div class="shadow-lg p-3 mb-5 bg-white rounded">En Viajes TravelSystem tienes todo lo que necesitas para tus vacaciones en un solo lugar. Descubre las mejores ofertas de PAQUETES para vivir experiencias inolvidables junto a Viajes TravelSystem. También te ofrecemos la atención personalizada de profesionales expertos en viajes y turismo que te pueden ayudar a encontrar las mejores ofertas para vivir experiencias inolvidables junto a Viajes TravelSystem. Si quieres hablar con un asesor, puedes visitarnos presencialmente en las sucursales de Viajes TravelSystem, comprar en linea o llamar y comprar por teléfono .</div>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src='{{url("/img/1.jpg")}}' class="mediana" heigth="50%"  alt="...">
    </div>
    <div class="carousel-item">
      <img src='{{url("/img/2.jpg")}}' class="mediana"   alt="...">
    </div>
    <div class="carousel-item">
      <img src='{{url("/img/3.jpg")}}' class="mediana" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
  <style>
    img{
      display:block;
      margin:auto;
      }
    img.mediana{
    width: 500px; height: 500px;
  }
  </style>
</div></div>
</div>

<!--end-cuerpo-->


        <!--footer-->
<br>
        <footer class="bg-dark text-white text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Ubicacion y Horario de Atencion</h5>

        <p>
        <bFooterr>
          Cll 9 No. 8 – 147<br>
          Barrio Fatima, Ipiales, Nariño-Colombia
          Lunes a viernes 8:00 Am - 11:00 Pm
                          2:00 Pm - 6:00 Pm
          </p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d737.6250538709274!2d-77.63657932141349!3d0.8209812616518661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scalle%209%20n0.%208-147%20barrio%20fatima%20ipiales!5e1!3m2!1ses!2sco!4v1616419769299!5m2!1ses!2sco" width="300" height="70" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Encuentranos en</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-white">FACEBOOK</a>
          </li>
          <li>
            <a href="#!" class="text-white">INSTAGRAM</a>
          </li>
          <li>
            <a href="#!" class="text-white">TWITER</a>
          </li>
          <li>
            <a href="#!" class="text-white">PINTEREST</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">TELEFONOS</h5>

        <ul class="list-unstyled">
          <li>
              <a href="#!" class="text-white">+57 317 2345678</a>
          </li>
          <li>
              <a href="#!" class="text-white">+57 321 4562349</a>
          </li>
          <li>
              <a href="#!" class="text-white">+57 315 4231234</a>
          </li>
         
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2021 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!--end footer-->

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
       <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>
