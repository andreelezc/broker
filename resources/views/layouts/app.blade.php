<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


   
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Cookie')}}">
    <link rel="stylesheet" href="{{asset('/assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/bootstrap/css/Pretty-Footer.css')}}">
    
    <link rel="stylesheet" href="{{asset('/bootstrap/css/styles.css')}}">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'INET') }}</title>-->
    <title>INET</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/avatar.css') }}" rel="stylesheet">

    <style>
        
        .navbar-brand {
          padding: 0px;
        }
        .navbar-brand>img {
          height: 100%;
          padding: 15px;
          width: auto;
        }

        .navbar-brand>img {
          padding: 5px 15px;
        }

    </style>
</head>
<body>
    <div id="app">
     

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

             <div class="row">
                <div class="navbar-brand"><a  href="{{ url('/') }}"><img  src="{{asset('logo-inet.png')}}" > </a> 
                </div>
                <div class="col-md-2 col-md-offset-3" ><img  src="{{asset('logofonietp.png')}}" /></div>
            </div>
            <div class="row">
                <div class="col-md-2"><a href="/admin" style="font-size:0.8em">Administración</a></div>
            </div>
      </div>


      <div id="navbar2" class="navbar-collapse collapse" class="navbar-header" class="container-fluid">
      <!-- Right Side Of Navbar -->
      
                    <ul class="nav navbar-nav navbar-right">

                   @if (Auth::guard('institucion')->check())


        <div class="dropdown">
           <ul class="nav navbar-nav ">
          <li role="presentation"><a  href="{{ url('/institucion/home') }}"> <i class="glyphicon glyphicon-home"></i>&nbspInicio </a></li> </ul>  

           <a id="dLabel" role="button" data-toggle="dropdown"  class="btn btn-default navbar-btn " data-target="#" href="/page.html">
                {{ Auth::guard('institucion')->user()->name }} <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                <li role="presentation">
                <a href="{{ url('/institucion/home') }}"> <i class="glyphicon glyphicon-home"></i>&nbspInicio</a>
                </li>
               
                <li role="presentation">
                <a href="{{ url('/institucion/perfil') }}"> <i class="glyphicon glyphicon-user"></i> Perfil</a>
                </li>
                <li role="presentation">
                <a href="{{ url('/institucion/mostrarCapacidad') }}"> <i class="glyphicon glyphicon-plus"></i>Capacidad
                </a>
                <li role="presentation">
                <a href="{{ url('/institucion/buscar') }}"> <i class="glyphicon glyphicon-search"></i> Buscar Oportunidades
                </a>
                </li>
                <li role="presentation">
                <a href="{{ url('/institucion/postulaciones') }}"> <i class="glyphicon glyphicon-hand-up"></i> Postulaciones</a>
                </li>
                <li role="presentation">
                <a href="{{ url('/institucion/ofertas') }}"> <i class="glyphicon glyphicon-ok"></i> Ofertas Laborales</a>
                </li>
              <li class="divider"></li>
              <li class="dropdown-submenu">
                
                <a tabindex="-1" class="btn   " href="{{ route('logout') }}"onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();"><i class="glyphicon glyphicon-off"></i>Salir
                </a>
              </li>
            </ul>
         </div>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form> 
                                
                          
                            @elseif (Auth::guard('productor')->check())

                            <div class="dropdown">
                            <ul class="nav navbar-nav ">
          <li role="presentation"><a  href="{{ url('/productor/home') }}"> <i class="glyphicon glyphicon-home"></i> Inicio </a></li> </ul>           
                            <a id="dLabel" role="button" data-toggle="dropdown"  class="btn btn-default navbar-btn " data-target="#" href="/page.html">
                 {{ Auth::guard('productor')->user()->name }} <span class="caret"></span>
            </a>

             <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                <li role="presentation">
                <a href="{{ url('/productor/home') }}"> <i class="glyphicon glyphicon-home"></i>&nbspInicio</a>
                </li>
               
                <li role="presentation">
                <a href="{{ url('/productor/perfil') }}"> <i class="glyphicon glyphicon-user"></i> Perfil</a>
                </li>
                <li role="presentation">
                <a href="{{ url('/productor/mostrarOportunidad') }}"> <i class="glyphicon glyphicon-plus"></i>Oportunidades
                </a>
                <li role="presentation">
                <a href="{{ url('/productor/buscar') }}"> <i class="glyphicon glyphicon-search"></i> Buscar Capacidades
                </a>
                </li>
                <li role="presentation">
                <a href="{{ url('/productor/selecciones') }}"> <i class="glyphicon glyphicon-pushpin"></i> Selecciones</a>
                </li>
                 <li role="presentation">
                <a href="{{ url('/productor/postulaciones') }}"> <i class="glyphicon glyphicon-ok"></i> Postulaciones Laborales </a>
                </li>
              <li class="divider"></li>
              <li class="dropdown-submenu">
                
                <a tabindex="-1" class="btn   " href="{{ route('logout') }}"onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();"> <i class="glyphicon glyphicon-off"></i> Salir
                </a>
              </li>
            </ul>
                                           
       
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
              </form> 
                        @else

                         <div class="dropdown">      
                             <a id="dLabel" role="button" data-toggle="dropdown"  class="btn btn-default navbar-btn " data-target="#" href="/page.html">
                                <i class="glyphicon glyphicon-user"></i>  Iniciar Sesión <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu"> 
                                  <li role="presentation"><a href="{{ url('institucion/acceso') }}">Institución</a></li>
                                  <li class="divider"></li>
                                  <li role="presentation"><a href="{{ url('productor/acceso') }}">Productor</a></li>
                                  
                              </ul>
                           </div>

                        @endif

                    </ul>
                    </div>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


        <footer>
         <div class="row">
            <div class="col-md-3 col-md-offset-0 col-sm-4 footer-navigation">
                <header><img class="img-responsive" src=" {{asset('img/logo-inet2.png')}}" width="200" height="100"></header>
                <h5 class="text-left">Instituto Nacional de Educación Tecnológica </h5>
                <p class="links"><a href="#">inicio</a><strong> · </strong><a href="#">contacto</a><strong> · </strong><a href="#">Novedades</a><strong> · </strong></p>
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
            <div class="col-md-5 col-md-offset-0 footer-about"><img class="img-responsive" src="{{asset('img/logoMinisterio.png')}}" width="300" height="200">
                <div class="social-links social-icons"><a href="https://www.facebook.com/ProdArgentina"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/PRODUCCION_ARG"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/ministeriodeproduccion/"><i class="fa fa-instagram"></i></a>
                    <a
                    href="https://www.youtube.com/channel/UCHOdvOZ0I3vdv59jqDyuC6w"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
         </div>

        
        </footer>
    
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    
</body>
</html>
  