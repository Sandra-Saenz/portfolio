@extends('layouts\layoutsE')

@section('title', 'Error de la prueba')

@section('content')
	<div class="page-error tile">
	     <h1><i class="fa fa-exclamation-circle"></i> Error 404: Page not found</h1>
	     <p>La cantidad de preguntas de la evaluacion excede las contenidas en la base de datos</p>
	     <p><a class="btn btn-primary" href="javascript:window.history.back();">Retroceder</a></p>
	</div>

	<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<!-- The javascript plugin to display page loading on top-->
	<script src="{{ asset('js/plugins/pace.min.js') }}"></script>
@endsection
