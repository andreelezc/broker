<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


   
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/Pretty-Footer.css">
    <link rel="stylesheet" href="bootstrap/css/styles.css">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'INET') }}</title>-->
    <title>INET</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">    
            <div class="navbar-header">
                 <a class="navbar-brand" href="{{ url('/') }}">     
                <img src="logo-inet.png" height=""  width="400" class="img-thumbnail"  />
                    </a>

              <div class="container">
                
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image 
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'INETweb') }}
                    </a>-->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->



                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li role="presentation"><a href="{{ route('login') }}">Acceso</a></li>
                            <li role="presentation"><a href="{{ route('register') }}">Registro</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


        <footer>
         <div class="row">
            <div class="col-md-3 col-md-offset-0 col-sm-4 footer-navigation">
                <header><img class="img-responsive" src="assets/img/logo-inet2.png" width="200" height="100"></header>
                <h5 class="text-left"><a href="#" target="_parent">Instituto Nacional de Ecucacion Texnologica </a></h5>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                <p class="text-nowrap text-left company-name">
                LINSSE © 2017 </p>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">Av. Pres. Julio A. Roca 651&nbsp; </span> Argentina, Buenos Aires</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left">0800-333-7963 </p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="mailto:info@produccion.gob.ar">info@produccion.gob.ar</a> </p>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-0 footer-about"><img class="img-responsive" src="assets/img/logoMinisterio.png" width="300" height="200">
                <div class="social-links social-icons"><a href="https://www.facebook.com/ProdArgentina"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/PRODUCCION_ARG"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/ministeriodeproduccion/"><i class="fa fa-instagram"></i></a>
                    <a
                    href="https://www.youtube.com/channel/UCHOdvOZ0I3vdv59jqDyuC6w"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
         </div>
        </footer>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
  