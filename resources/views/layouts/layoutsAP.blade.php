<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="description" content="Pruebas SaberPro - Universidad Popular del Cesar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#009688">

  <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
  </script>

  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>

  <title>SaberPro UPC - @yield('title')</title>
</head>

<body class="app sidebar-mini">

  <header class="app-header">
    <a class="app-header__logo" href="#">SABER PRO</a>
      <!-- Sidebar toggle button-->
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
       <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Salir') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
          </ul>
        </li>
      </ul>
    </header>

    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img src="{!! asset('Imagenes/educator.png') !!}" class="app-sidebar__user-avatar">
        <div>
         <p class="app-sidebar__user-designation">{{str_contains(Auth::user()->cargo, 'Administrador') ? 'ADMIN' : 'ESTUDIANTE'}}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="{{ route('home') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Inicio</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user fa-lg"></i><span class="app-menu__label">Usuarios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('vUsuario.create')}}"><i class="icon fa fa-circle-o"></i>Registrar</a></li>
            <li><a class="treeview-item" href="{{route('vUsuario.index')}}"><i class="icon fa fa-circle-o"></i>Consultar</a></li>
            <li><a class="treeview-item" href="{{route('vuserProgran.index')}}"><i class="icon fa fa-circle-o"></i>Asignar Programa</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Facultades</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('facultad.create')}}"><i class="icon fa fa-circle-o"></i>Registrar</a></li>
            <li><a class="treeview-item" href="{{route('facultad.index')}}"><i class="icon fa fa-circle-o"></i>Consultar</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Programas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('programa.create')}}"><i class="icon fa fa-circle-o"></i>Registrar</a></li>
            <li><a class="treeview-item" href="{{route('programa.index')}}"><i class="icon fa fa-circle-o"></i>Consultar</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-building-o" aria-hidden="true"></i><span class="app-menu__label">Competencias</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('competencia.create')}}"><i class="icon fa fa-circle-o"></i>Registrar</a></li>
            <li><a class="treeview-item" href="{{route('competencia.index')}}"><i class="icon fa fa-circle-o"></i>Consultar</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-list-alt" aria-hidden="true"></i><span class="app-menu__label">Asignaturas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('asignatura.create')}}"><i class="icon fa fa-circle-o"></i>Registrar</a></li>
            <li><a class="treeview-item" href="{{route('asignatura.index')}}"><i class="icon fa fa-circle-o"></i>Consultar</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-question-circle-o" aria-hidden="true"></i><span class="app-menu__label">Preguntas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('pregunta.create')}}"><i class="icon fa fa-circle-o"></i>Registrar</a></li>
            <li><a class="treeview-item" href="{{route('pregunta.index')}}"><i class="icon fa fa-circle-o"></i>Consultar</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Pruebas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">

            <li><a class="treeview-item" href="{{route('vevaluacion.consultaCompleta')}}"><i class="icon fa fa-circle-o"></i>Consultas</a></li>
            <li><a class="treeview-item" href="{{route('opciones')}}"><i class="icon fa fa-circle-o"></i>Asignar</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Informes</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('vinforme.index')}}"><i class="icon fa fa-circle-o"></i>Generales</a></li>
            <li><a class="treeview-item" href="{{route('vevaluacion.index')}}"><i class="icon fa fa-circle-o"></i>especificos</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="{{ route('informacionA') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Acerca De</span></a></li>
      </ul>
    </aside>

    <main class="app-content">
      @yield('content')
    </main>

    @yield('scrip')

    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
</body>
</html>
