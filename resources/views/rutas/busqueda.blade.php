@extends ('layouts.app')
@section('content')
<form class="d-flex" action="{{route('buscar')}}" method="POST">
        @csrf
        <input class="form-control me-2" type="text"  id="des" name="des">
        <button type="submit" class="btn btn-outline-success">Buscar</button>
</form>
<br>
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
    @foreach($bus as $c)
      
            <tr>
            <td> {{ $c->id }} </td>
            <td> {{ $c->origen }} </td>
            <td> {{ $c->destino}}</td>
            <td> {{ $c->precio}}</td>
            </tr>
    @endforeach
    </tbody>
</table>
@stop

