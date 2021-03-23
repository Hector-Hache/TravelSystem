@extends ('layouts.app')
@section('content')

<div class="alert alert-primary text-center" role="alert">
  <h1>FORMULARIO DE ACTUALIZACION</h1>
</div>

<form action="{{route('formactu', $r)}}" method="POST">
        @csrf
        <div class="col-12">
                        <label for="inputAddress" class="form-label">Ruta</label>
                        @foreach($res as $c)
                        <select id="lisruta" name="lisruta"   class="form-select" aria-label="Default select example">
                        <option selected>{{$c->origen}}-{{$c->destino}}</option>
                        @endforeach
                        @foreach($rut as $c)
                        <option value="{{$c->id}}">{{$c->origen}}-{{$c->destino}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Tipo de vuelo</label>
                        <select id="lisclase" name="lisclase"  class="form-select" aria-label="Default select example" >
                        @foreach($resul as $r)
                        <option selected>{{$r->descripcion}}</option>
                        @endforeach
                        @foreach($tipo as $p)
                        <option value="{{$p->id}}">{{$p->descripcion}}</option>
                        @endforeach
                        </select>
                    </div>
                   
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Hora salida</label>
                        <input type="time" class="form-control" id="hsalida"  name="hsalida" value="{{$s}}" required>
                    </div>
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Hora llegada</label>
                        <input type="time" class="form-control" id="hllegada" name="hllegada" value="{{$h}}" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-info">Actualizar</button> 
                    </div>
                  
                   
      
</form>
@stop