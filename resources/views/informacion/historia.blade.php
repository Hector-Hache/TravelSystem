@extends ('layouts.app')
@section('content')
<h1 class="text-center">HISTORIA<h1>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Reseña
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      La agencia de viajes TRAVELSYSTEM, Fue creada en el año 2001 por Yurley Giraldo Cardona y Sandra Liliana Perez Hurtado, los cuales realizaban pasadías con equipos de futbol al ECOPARQUE RIO CLARO, ubicado en el Municipio de Villamaría – Caldas a pocas horas del casco urbano, gracias a un torneo relámpago que realizaba el establecimiento.

      <br>En el año 2003 TRAVELSYSTEM se implementó como la única agencia de viajes en el municipio de Villamaría; Debido a la logística y la acogida del pueblo Villamariano, se siguieron realizando pasadías pero ya no a nivel local sino nacional a lugares como el PARQUE DE LAS AGUAS (Medellín) y al PARQUE DE LA CAÑA (Cali), de allí, se empezaron a realizar viajes primeramente a la costa caribe para luego expandirse por el resto del país.

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Imagen
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        
      <img src='{{url("/img/his.jpg")}}' class="rounded mx-auto d-block" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Ver mas
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       
      Hoy en día TRAVELSYSTEM lleva 18 años laborando en el Municipio de Villamaría – Caldas, realizando excursiones en gran parte del territorio Colombiano, prestando la mejor atención al cliente y mejorando cada vez sus estándares de calidad para así ser una de las mejores agencias de viajes a nivel departamental.
      </div>
    </div>
  </div>
</div>
@stop