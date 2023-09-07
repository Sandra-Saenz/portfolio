<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="description" content="Pruebas SABER PRO - Universidad Popular del Cesar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#009688">

  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>

	<title>SaberPro UPC - @yield('title')</title>
</head>

<body class="app sidebar-mini">
	<!-- Navbar-->
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
			@include('partials.session-status')
			@include('partials.validation-errors')
    </header>

    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{!! asset('Imagenes/online_test.png') !!}">
        <div>
          <p class="app-sidebar__user-designation">{{str_contains(Auth::user()->cargo, 'Administrador') ? 'ADMIN' : 'ESTUDIANTE'}}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="{{ route('usuario') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Inicio</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Mis Datos</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('misDatos') }}"><i class="icon fa fa-circle-o"></i>Informacion</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>Cambios</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Mis Pruebas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('vuserProgran.show', Auth::user()->id)}}"><i class="icon fa fa-circle-o"></i>Registro</a></li>
            <li><a class="treeview-item" href="{{ route('vevaluacion.consulta', Auth::user()->id)}}"><i class="icon fa fa-circle-o"></i>Consulta</a></li>
            <li><a class="treeview-item" href="{{ route('vevaluacion.show1', Auth::user()->id)}}"><i class="icon fa fa-circle-o"></i>Evaluarme</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Mis Informes</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('vevaluacion.show', Auth::user()->id) }}"><i class="icon fa fa-circle-o"></i>Consultas</a></li>
            <li><a class="treeview-item" href="{{ route('vinforme.show', Auth::user()->id)}}"><i class="icon fa fa-circle-o"></i>Fortalecer</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="{{ route('informacion') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Acerca De</span></a></li>
      </ul>
    </aside>

    <main class="app-content">
      @yield('content')
    </main>

    @yield('scrip')
</body>

</html>
