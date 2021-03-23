@extends ('layouts.app')
@section('content')
<!-- Button trigger modal -->
<h1 class="text-center"><b>LISTA DE VUELOS</b></h1>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="float: right">
  Registrar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-warning">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel"><b>Formulario de Registro</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="row g-3" action="{{route('regvuelo')}}" method="POST">
      @csrf
      <div class="container">
      <div class="modal-body text-dark bg-info">
        <!--formulario-->
                   
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Ruta</label>
                        <select id="lisruta" name="lisruta"   class="form-select" aria-label="Default select example">
                        <option selected>Seleccione opcion</option>
                        @foreach($rut as $c)
                        <option value="{{$c->id}}">{{$c->origen}}-{{$c->destino}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Tipo de vuelo</label>
                        <select id="lisclase" name="lisclase"  class="form-select" aria-label="Default select example">
                        <option selected>Seleccione una opcion</option>
                        @foreach($tipo as $p)
                        <option value="{{$p->id}}">{{$p->descripcion}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Hora salida</label>
                        <input type="time" class="form-control" id="hsalida" name="hsalida" placeholder="11:00:00" required>
                    </div>
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Hora llegada</label>
                        <input type="time" class="form-control" id="hllegada" name="hllegada" placeholder="13:00:00" required>
                    </div>
                    </div>
                   
               
        <!--end formulario-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        
      </div>
      </form>
      </div>
    </div>
  </div>
</div>
<!--end modal-->

<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Ruta</th>
            <th scope="col">Origen</th>
            <th scope="col">Destino</th>
            <th scope="col">Precio</th>
            <th scope="col">Hora Salida</th>
            <th scope="col">Hora LLegada</th>
            <th scope="col">Tipo Vuelo </th>
            <th scope="col"> </th>
            

        </tr>
    </thead>
    <tbody>
    @foreach($v as $c)
      
            <tr>
            <td> {{ $c->id }} </td>
            <td> {{ $c->idruta}} </td>
            <td> {{ $c->origen}} </td>
            <td> {{ $c->destino}} </td>
            <td> {{ $c->precio}} </td>
            <td> {{ $c->hsalida}}</td>
            <td> {{ $c->hllegada}}</td>
            <td> {{ $c->descripcion}}</td>
            <td><a href="{{route('actuvuelo', $c->id)}}" class="btn btn-warning">Actualizar</a></td>
            </tr>
        
    @endforeach
    </tbody>
</table>

@stop