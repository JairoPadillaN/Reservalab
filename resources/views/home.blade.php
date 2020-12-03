@extends('layouts.app')

@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4" role="main">
<div class="row justify-content-center">
<div class="col-12 bg-info rounded" id="header">
<h2 style="text-align: center;"><img src="Imagenes/header.png" style="width: 100%" /></h2>
</div>

<div class="col-12"></div>

<div align="center" class="col-12">
<div class="row justify-content-center" style="height: 500px">
<div class="col-4">
<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><strong>&iquest;Quienes somos?</strong></div>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">Somos una empresa que se preocupa por tu bienestar, por eso nos ocupamos en dise&ntilde;ar esta plataforma para que puedas agendar tus citas en d&iacute;as seguros, para que no te exponagas tu salud ni la de tu familia</div>
<div><a href="Todos.php" class="btn-lg btn-primary rounded">Reserva tu cita</a></div>
<img alt="La imagen contiene el logotipo de Reservalab" height="250" src="Imagenes/logo.png" title="Logotipo ReservaLab" width="250" /></div>

<div class="col bg-info rounded">
<h3 style="text-align: center;">Informacion que cura</h3>

<div class="row justify-content-center bg-info">
<div class="col-4" id="blanco" style="width: 30%;">
<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><span style="font-size:20px;"><strong>Uso del cubrebocas</strong></span></div>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<ul>
	<li>Lavate las manos antes de colocartelo</li>
	<li>Revisa cual es el lado correcto</li>
	<li>Ajustalo a tu cara</li>
	<li>Su uso no debe durar m&aacute;s de un d&iacute;a</li>
</ul>
</div>

<p></p>

<p></p>
<img alt="La imagen contiene el un cubrebocas tipo kn95" height="250" src="Imagenes/kn95.png" title="Respirador Kn95" width="250" /></div>

<div align="center" class="col-4" id="blanco" style="width: 30%;">
<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><strong><span style="font-size:22px;">Lavado de manos</span></strong></div>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">El lavado de las manos es muy importante, es por eso que hay que saber cuando y como lavarse correctamente</div> <div> <a href="https://www.cdc.gov/handwashing/esp/when-how-handwashing.html" class="btn-lg btn-warning rounded"> Mas informaci&oacute;n</a></div>

<p></p>
<img alt="La imagen contiene el una persona lavandose las manos" height="150" src="Imagenes/manos.png" title="Lavado de manos" width="200" /></div>

<div class="col-4" id="blanco" style="width: 30%;">
<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><strong><span style="font-size:22px;">Mas informacion acerca del Coronavirus</span></strong></div>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">Es importante mantenernos informados acerca de la evolucion y avance del virus que actualmente nos esta atacando, es por eso que debemos informarnos de sitios oficiales como la Organizaci&oacute;n Mundial de la Salud para obtener informaci&oacute;n veridica de lo que esta pasando </div> <div><a href="https://www.who.int/es/emergencies/diseases/novel-coronavirus-2019" class="btn-lg btn-warning rounded">Mas informaci&oacute;n</a></div>
<img alt="La imagen contiene el logotipo de Reservalab" height="100" src="Imagenes/logo.png" title="Logotipo ReservaLab" width="100" /></div>
</div>
</div>
</div>
&nbsp;

<div class="col-12" style="height: 10px;"></div>
</div>

<div class="container">
<div class="row">
<div class="col-12 bg-info rounded"><img src="Imagenes/footer.png" style="width: 100%" /></div>
</div>
</div>
</div>
</main>
@endsection
