@extends ('layouts.app')
@section('content')
<div class="alert alert-primary text-center" role="alert">
  <h1>FORMULARIO DE ACTUALIZACION</h1>
</div>

<form action="{{route('actualizarut', $var->id)}}" method="POST">
        @csrf

        <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Ruta</span>
        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$var->id}}" readonly="readonly">
        </div>
        <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Origen</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="origenAct" name="origenAct" value="{{$var->origen}}" required>
        </div>

        <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Destino</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="destinoAct" name="destinoAct" value="{{$var->destino}}" required>
        </div>

        <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Precio</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="precioAct" name="precioAct" min="20000" max="500000" value="{{$var->precio}}" required>
        </div>

       <button type="submit" class="btn btn-info">Actualizar</button> 

</form>
@stop