@include('layouts.navbars.navs.guest')
<div class="wrapper wrapper-full-page">
  <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('{{ asset('imagenes/login.jpg') }}'); background-size: cover; background-position: top center;align-items: center;" data-color="purple">
    @yield('content')
  </div>
</div>
