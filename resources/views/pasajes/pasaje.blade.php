@extends('layouts.app')
@section('content')
<h4 class="text-center">PASAJES</h4>
<div class="container">
 <div class="row">
    @foreach($pas as $p)
      <div class="col-md-4 alert-success"><br>
        <div class="card" style="width: 15rem;">
                        <div class="card  bg-primary text-black" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-primary">
                           <h5 class="card-title text-white">Numero: {{$p->llave}}</h5>
                         </li>
                          <li class="list-group-item">
                          <p class="card-text">Fecha: {{$p->fecha}}</p>
                            <p class="card-text">Origen: {{$p->origen}}</p>
                            <p class="card-text">Destino: {{$p->destino}}</p> 
                            <p class="card-text">Precio: {{$p->precio}}</p>
                          
                          </li>
                          <li class="list-group-item">
                             <p class="card-text">Tipo vuelo: {{$p->tipo}}</p>
                          </li>
                          <li class="list-group-item">
                            <p class="card-text">Avion: {{$p->matricula}}</p>
                            <p class="card-text">Tipo avion: {{$p->descripcion}}</p>
                          </li>
                          <li  class="list-group-item">
                            <p class="card-text">Nombre: {{$p->nombre}}</p>
                            <p class="card-text">Cedula: {{$p->cedula}}</p>
                            <p class="card-text">Correo: {{$p->correo}}</p>
                          </li> 
                           <li>
                           <a href="{{route('generar', $p->llave)}}" class=" btn boton">Generar Ticket</a>
                                <style>
                                a.boton{
                                    background-color:#33FF8A;
                                    border: 1px solid #ccc;
                                    display: flex;
                                    justify-content: center;
                                                                     
                                }
                                </style>
                           </li>
                           <li>
                           <a href="{{route('eliminar', $p->llave)}}" class=" btn bot">Eliminar</a>
                                <style>
                                a.bot{
                                    background-color:#F3FF33;
                                    border: 1px solid #ccc;
                                    display: flex;
                                    justify-content: center;
                                                                     
                                }
                                </style>
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