<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Viajes Travel') }}</title>
       
        <link rel="shortcut icon" href="{{url('img/avion.png')}}">
         <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
       
    </head>
  
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            <br>       
                        <!-- Page Heading -->
                        <div class="container">
                    @yield('content')
                    </div>
                    </div>
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
                    Cll 9 No. 8 – 58<br>
                    Barrio Fatima, Ipiales, Nariño-Colombia
                    Lunes a viernes 8:00 Am - 11:00 Pm
                                    2:00 Pm - 6:00 Pm
                    </p>
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
