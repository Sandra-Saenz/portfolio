@extends('layouts\layoutsE')

@section('title', 'Acerca de')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i>Inquietudes</h1>
    <p>Resuelve tus inquietudes</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Inquietudes</a></li>
  </ul>
</div>

<div class="row user">
  <div class="col-md-3">
    <div class="tile p-0">
        <ul class="nav flex-column nav-tabs user-tabs">
            <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">ICFES</a></li>
            <li class="nav-item"><a class="nav-link" href="#user-timeline1" data-toggle="tab">Competencia Ciudadana</a></li>
            <li class="nav-item"><a class="nav-link" href="#user-timeline2" data-toggle="tab">Comunicacion Escrita</a></li>
            <li class="nav-item"><a class="nav-link" href="#user-timeline3" data-toggle="tab">Ingles</a></li>
            <li class="nav-item"><a class="nav-link" href="#user-timeline4" data-toggle="tab">Lectura Critica</a></li>
            <li class="nav-item"><a class="nav-link" href="#user-timeline5" data-toggle="tab">Razonamiento Cuantitativo</a></li>
            <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">App</a></li>
        </ul>
    </div>
  </div>
  <div class="col-md-9">
    <div class="tab-content">
      <div class="tab-pane active" id="user-timeline">
        <div class="tile user-timeline">
            <h4 class="line-head">Mis datos</h4>
            <div class="col-auto">
              <div class="tile" >
                <div class="embed-responsive embed-responsive-16by9">
                  <video src="videos/Comp_Ciu.mp4" loop controls></video>
                </div>
              </div>
            </div>
        </div>
      </div>
       <div class="tab-pane fade" id="user-timeline1">
        <div class="tile user-timeline">
          <h4 class="line-head">Competencia Ciudadana</h4>
          <div class="col-auto">
            <div class="tile">
              <div class="embed-responsive embed-responsive-16by9">
                <video src="videos/Comp_Ciu.mp4" loop controls></video>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="tab-pane fade" id="user-timeline2">
        <div class="tile user-timeline">
            <h4 class="line-head">Comunicacion Escrita</h4>
            <div class="col-auto">
              <div class="tile">
                <div class="embed-responsive embed-responsive-16by9">
                  <video src="videos/Comu_Es.mp4" loop controls></video>
                </div>
              </div>
            </div>
        </div>
      </div>
       <div class="tab-pane fade" id="user-timeline3">
        <div class="tile user-timeline">
            <h4 class="line-head">Ingles</h4>
            <div class="col-auto">
              <div class="tile">
                <div class="embed-responsive embed-responsive-16by9">
                  <video src="videos/Ingles.mp4" loop controls></video>
                </div>
              </div>
            </div>
        </div>
      </div>
       <div class="tab-pane fade" id="user-timeline4">
        <div class="tile user-timeline">
            <h4 class="line-head">Lectura Critica</h4>
            <div class="col-auto">
              <div class="tile">
                <div class="embed-responsive embed-responsive-16by9">
                  <video src="videos/Lec_Crit.mp4" loop controls></video>
                </div>
              </div>
            </div>
        </div>
      </div>
       <div class="tab-pane fade" id="user-timeline5">
        <div class="tile user-timeline">
            <h4 class="line-head">Razonamiento Cuantitativo</h4>
            <div class="col-auto">
              <div class="tile">
                <div class="embed-responsive embed-responsive-16by9">
                  <video src="videos/Razo_Cuant.mp4" loop controls></video>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="tab-pane fade" id="user-settings">
        <div class="tile user-settings">
          <h4 class="line-head">Promedios</h4>
          <div class="col-auto">
            <div class="tile">
              <h3 class="tile-title">Mi Aplicativo</h3>
              <div class="embed-responsive embed-responsive-16by9">
                <video src="videos/pruebaV.mp4" loop controls></video>
              </div>
            </div>
          </div>
        </div>
      </div>
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
