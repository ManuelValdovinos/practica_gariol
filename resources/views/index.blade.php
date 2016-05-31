<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- CSS -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Bootstrap</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">

                  <ul class="nav navbar-nav">
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('contact') }}">Contacto</a></li>
                    @if(Auth::check())
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrador <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ route('adminContacts') }}">Contactos</a></li>
                        </ul>
                      </li>
                    @endif
                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                      <li><a href="#">{{ Auth::user()->name }}</a></li>
                      <li><a href="{{ route('logout') }}">Salir</a></li>
                    @else
                      <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                      <li><a href="{{ route('register') }}">Registro</a></li>
                    @endif
                  </ul>
                </div><!-- /.navbar-collapse -->

            </div><!-- /.container-fluid -->
        </nav>
    </header>

    @yield('content')


    <footer class="pie">
        <div class="text-center">
            <p class="pie_legend">Manuel Valdovinos Carrazco</p>
        </div>
    </footer>

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
  </body>
</html>