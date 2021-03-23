@extends ('layouts.app')
@section('content')
<h1 class="text-center"><b> RUTAS DE LA AEROLINEA </b></h1>
<br>
<!--modal registrar-->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Registrar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Formulario de Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="row g-3" action="{{route('reg')}}" method="POST">
      @csrf
      <div class="container">
      <div class="modal-body text-dark bg-info">
        <!--formulario-->
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Origen</label>
                        <input type="text" class="form-control" id="origenform" name="origenform" placeholder="Ipiales" required>
                    </div>
                    <div class="col-md-12">
                        <label for="inputPassword4" class="form-label">Destino</label>
                        <input type="text" class="form-control" id="destinoform" name="destinoform"  placeholder="Medellin" required>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precioform" name="precioform" placeholder="$20000" min="20000" max="500000" required>
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
<table class="table">
    <thead>
        <tr>
            <th scope="col">Ruta</th>
            <th scope="col">Origen</th>
            <th scope="col">Destino </th>
            <th scope="col">Precio</th>
            <th scope="col"></th>
            

        </tr>
    </thead>
    <tbody>
    @foreach($ruta as $c)
      
            <tr>
            <td> {{ $c->id }} </td>
            <td> {{ $c->origen }} </td>
            <td> {{ $c->destino}}</td>
            <td> {{ $c->precio}}</td>
            <td><a href="{{route('acturuta', $c->id)}}" class="btn btn-warning">Actualizar</a></td>
            </tr>
        
    @endforeach
    </tbody>
</table>
@stop