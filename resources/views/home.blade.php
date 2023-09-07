@extends('layouts\layoutsAP')

@section('title', 'Inicio')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i>Inicio</h1>
    <p>Bienvenido</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Home</a></li>
  </ul>
</div>

@include('partials.session-status')
@include('partials.validation-errors')

<div class="row user">
  <div class="col-md-12">
    <div class="profile">
      <div class="info"><img class="user-img" src="{!! asset('Imagenes/connection.png') !!}">
        <h4>{{ Auth::user()->name }}</h4>
      </div>
      <div class="cover-image"></div>
    </div>
  </div>
</div>


<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{ asset('js/plugins/pace.min.js') }}"></script>
@endsection
