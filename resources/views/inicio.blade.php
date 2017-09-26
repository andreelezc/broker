<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>INET</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

          
        </style>
    </head>


<body>

             <!--Navegador -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

     <nav class="navbar navbar-default">
        <div class="container-fluid">

            <div class="navbar-header ">
                <a class="navbar-brand bg-success navbar-link " href="inicio.blade.php" target="_parent"><strong> INET (logo</strong>)
                </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
    
                 <div class="collapse navbar-collapse" id="navcol-1">
                   <ul class="nav navbar-nav navbar-right navbar-link ">
                     
                    <div class="top-right links">
                        <a href="{{ route('acceso') }}">Acceso</a>
                        <a href="{{ route('registro') }}">Registro</a>

                    </div>
                   

                   <!-- "otros botones de acceso"
                    <li role="presentation"><a href="registrar.html">Registro </a></li>
                    <li role="presentation"><a href="acceder.html">Acceso </a></li>
                    <li role="presentation"><a href="#">Contacto </a></li>
                    --> 
                    </ul>                                     
                 </div>
        </div>
     </nav>
        <div class="flex-center position-ref full-height">
       <!--                 
        <div class="flex-center position-ref full-height">
             @if (Route::has('acceso'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('Acceso') }}">Login</a>
                        <a href="{{ route('Registro') }}">Register</a>
                    @endauth
                </div>
             @endif   -->

            <div class="content">
                <div class="title m-b-md">
                    INET WEB
                </div>               
            </div>

        </div>
    </body>
</html>
