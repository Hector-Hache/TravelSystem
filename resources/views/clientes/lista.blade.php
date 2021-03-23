@extends ('layouts.app')
@section('content')
<h1 class="text-center">LISTADO DE CLIENTES</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col"></th>
            

        </tr>
    </thead>
    <tbody>
    @foreach($cli as $c)
      
            <tr>
            <td> {{ $c->id }} </td>
            <td> {{ $c->name }} </td>
            <td> {{ $c->email}}</td>
            <td><a href="{{route('actucliente', $c->id)}}" class="btn btn-warning">Actualizar</a></td>
            </tr>
        
    @endforeach
    </tbody>
</table>
@stop