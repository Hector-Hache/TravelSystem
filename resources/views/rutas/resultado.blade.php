@extends ('layouts.app')
@section('content')

<h4 class="text-center">RESULTADO DE LA CONSULTA</h4>
<div class="container">
 <div class="row">
    @foreach($bus as $c)
      <div class="col-md-4 alert-success"><br>
        <div class="card" style="width: 15rem;">
                        <div class="card  bg-primary text-black" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-primary">
                           <h5 class="card-title text-white">No: {{$c->id}}</h5>
                         </li>
                          <li class="list-group-item">
                          <p class="card-text">Nombre: {{ $c->name }}</p>
                            <p class="card-text">Email: {{ $c->email }}</p>
                          </li>
                        </ul>
                      </div>
        </div>
        </div>
        @endforeach
        <br>
        </div>
       <br>
</div>

@stop