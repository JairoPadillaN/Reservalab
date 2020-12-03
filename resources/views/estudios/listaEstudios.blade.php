@extends('layouts/app')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

      <div class="row justify-content-center">
        <div class="col-12 bg-info rounded" id="header">
          <h2 style="text-align: center;"><img src="Imagenes/header.png" style="width: 100%"></h2>
        </div>  

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Medicina Nuclear</h1>
  <div class="card mb-4 shadow-sm">
        <div class="card-body">
      <ul class="list-unstyled mt-3 mb-4">
        <li><p class="lead">La medicina nuclear utiliza pequeñas cantidades de materiales radiactivos llamadas radiosondas que generalmente se inyectan en el torrente sanguíneo</p></li>
      </ul>
    </div>
  </div>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Medicina Nuclear</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$6,866.10 <small class="text-muted">MXN</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Tratamiento </li>
          <li>con dosis de yodo </li>
          <li>de 51-100 MCI</li>
          <li></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary" data-toggle="modal" data-target="#yodo1">Ver Estudio</button>
      </div>
    </div>
    <!-- Inicia Ejemplo modal-->
    <div class="modal fade" id="yodo1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-muted" id="myModalLabel">Tratamiento con Dosis de Yodo de 51-100 MCI</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            
          </div>
          <div class="modal-footer">
            <a href="cover/yodo1.html">
            <button type="button" class="btn btn-outline-success" data-dismiss="cover/yodo1.html">Ver Estudio</button>
          </a>
          </div>
        </div>
      </div>
    </div>
    <!--Termina Ejemplo modal-->


    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Medicina Nuclear</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$5,156.10 <small class="text-muted">MXN</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Gamagramar </li>
          <li>Paratiroideo</li>
          <li></li>
          <li></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary" data-toggle="modal" data-target="#Gamma">Ver Estudio</button>
      </div>
    </div>
    <!-- Inicia Ejemplo modal-->
    <div class="modal fade" id="Gamma" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-muted" id="myModalLabel">Gamagramar Paratiroideo</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            
          </div>
          <div class="modal-footer">
            <a href="cover/paratiro.html">
            <button type="button" class="btn btn-outline-success" data-dismiss="cover/yodo1.html">Ver Estudio</button>
          </a>
          </div>
        </div>
      </div>
    </div>
    <!--Termina Ejemplo modal-->


    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Medicina Nuclear</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$2,573.10 <small class="text-muted">MXN</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Rastreo de</li>
          <li>Cuerpo completo con</li>
          <li>Yodo 131</li>
          <li></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary" data-toggle="modal" data-target="#yodo2">Ver Estudio</button>
      </div>
    </div>
    <!-- Inicia Ejemplo modal-->
    <div class="modal fade" id="yodo2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-muted" id="myModalLabel">Rastreo de Cuerpo Completo con Yodo 131</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            
          </div>
          <div class="modal-footer">
            <a href="cover/yodo131.html">
            <button type="button" class="btn btn-outline-success" data-dismiss="cover/yodo131.html">Ver Estudio</button>
          </a>
          </div>
        </div>
      </div>
    </div>
    <!--Termina Ejemplo modal-->

    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Medicina Nuclear</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$4,274.10 <small class="text-muted">MXN</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Gammagrafia rastreo corporal con UBI (TC)</li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary" data-toggle="modal" data-target="#ubi">Ver Estudio</button>
      </div>
    </div>
    <!-- Inicia Ejemplo modal-->
    <div class="modal fade" id="ubi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-muted" id="myModalLabel">Gammagrafia Rastreo Corporal con UBI (TC)</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            
          </div>
          <div class="modal-footer">
            <a href="cover/ubi.html">
            <button type="button" class="btn btn-outline-success" data-dismiss="cover/ubi.html">Ver Estudio</button>
          </a>
          </div>
        </div>
      </div>
    </div>
    <!--Termina Ejemplo modal-->


    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Medicina Nuclear</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$8,126.10 <small class="text-muted">MXN</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Gammagrafia renal MAG 3</li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary" data-toggle="modal" data-target="#mag">Ver Estudio</button>
      </div>
    </div>
    <!-- Inicia Ejemplo modal-->
    <div class="modal fade" id="mag" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-muted" id="myModalLabel">Gammagrafia Renal MAG 3</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            
          </div>
          <div class="modal-footer">
            <a href="cover/MAG.html">
            <button type="button" class="btn btn-outline-success" data-dismiss="cover/MAG.html">Ver Estudio</button>
          </a>
          </div>
        </div>
      </div>
    </div>
    <!--Termina Ejemplo modal-->



    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Medicina Nuclear</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$6,749.10 <small class="text-muted">MXN</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Gammagrafia pulmonar ventilatoria y perfusoria</li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary" data-toggle="modal" data-target="#venti">Ver Estudio</button>
      </div>
    </div>
    <!-- Inicia Ejemplo modal-->
    <div class="modal fade" id="venti" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-muted" id="myModalLabel">Gammagrafia Pulmonar Ventilatoria y Perfusoria</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            
          </div>
          <div class="modal-footer">
            <a href="cover/ventilatoria.html">
            <button type="button" class="btn btn-outline-success" data-dismiss="cover/ventilatoria.html">Ver Estudio</button>
          </a>
          </div>
        </div>
      </div>
    </div> 

      <div class="container">
        <div class="row">
          <div class="col-12 bg-info rounded">
            <img src="Imagenes/footer.png" style="width: 100%">
          </div>
        </div>
      </div>
      </div>
       
       
        </div>
        </div>
        <br>
        <div class="col-12" style="height: 10px;"></div>
      </div>
          </div>
        </div>
      </div>
@endsection