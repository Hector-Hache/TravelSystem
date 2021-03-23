
@extends ('layouts.app')
@section('content')
<!--cuerpo-->

<div class="container">
<div class="container">
<div class="shadow-lg p-3 mb-5 bg-white rounded text-center"><h1>Viaje con nuestra agencia de turismo TRAVEL SYSTEM, y reciba grandes descuentos</h1></div>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src='{{url("/img/fondo.gif")}}' class="rounded mx-auto d-block" class="d-block w-100 "  alt="...">
    </div>
    <div class="carousel-item">
      <img src='{{url("/img/ciudad.gif")}}' class="rounded mx-auto d-block" class="d-block w-100"  alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div></div>
</div>

<!--end-cuerpo-->

@stop