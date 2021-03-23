@extends ('layouts.app')
@section('content')

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
            <th scope="col">Seleccione avion</th>
            

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
            <form action="{{route('compasaje', $c->id)}}" method="POST">
            @csrf
            <td>  <div class="col-12">
                                <select id="lisclase" name="lisclase"  class="form-select" aria-label="Default select example" >
                                <option selected>Ningun Avion</option>
                                @foreach($avion as $d)
                                <option value="{{$d->iden}}">{{$d->matricula}}-{{$d->descripcion}}</option>
                                @endforeach
                                </select>
                  </div>
            </td>
            <td>
            <button type="submit" class="btn btn-info">Comprar</button> 
            </td>
            </form>
            <style>
             a.boton{
                background-color:#33FF8A;
                }
            </style>
            </tr>
        
    @endforeach
    </tbody>
</table>

@stop