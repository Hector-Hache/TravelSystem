@extends ('layouts.app')
@section('content')
<h1 class="text-center">MISION</h1>
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Ver Mision</a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Imagen</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
      La empresa brinda una asistencia profesional a todos aquellos que necesiten un servicio de viaje. 
      El esfuerzo está centrado en brindar respuestas rápidas, precisas y eficientes, buscando satisfacer 
      a nuestros clientes con nuestro servicio, asesoramiento, compromiso, precio, solución de posibles 
      inconvenientes (antes, durante ó después de cada viaje). Damos un servicio a medida, tanto para empresas, 
      como para pasajeros individuales, ya sea viajen por placer o negocios.<br>
      La capacidad de nuestro personal para brindar respuestas adecuadas, forma parte de nuestra fortaleza, 
      haciendo seguimiento permanente sobre las operaciones que se efectúan.<br>
     Nuestra principal herramienta es el acceso directo a la información a través de redes 
     on-line de comunicación, sumado a un conocimiento de los PP indicados para cada servicio,
      así como condiciones mejoradas en relación a otras Agencias de la zona.
     El manejo adecuado de bases de datos obtenidas de nuestros clientes, hace más dinámica la gestión comercial.
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
       <img src='{{url("/img/mision.jpg")}}' class="rounded mx-auto d-block" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
</div>
@stop