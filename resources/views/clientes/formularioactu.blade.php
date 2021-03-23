@section('content')
<div class="alert alert-primary text-center" role="alert">
  <h1 class="text-center">FORMULARIO DE ACTUALIZACION</h1>
</div>

<form action="{{route('actucli', $var->id)}}" method="POST">
        @csrf

        <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="nombre" name="nombre" value="{{$var->name}}" readonly="readonly">
        </div>
        <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="correo" name="correo" value="{{$var->email}}" required>
        </div>
        <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Contraseña</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="contra" name="contra" value="{{$var->password}}" required>
        </div>
        <button type="submit" class="btn btn-info">Actualizar</button> 

</form>
@stop