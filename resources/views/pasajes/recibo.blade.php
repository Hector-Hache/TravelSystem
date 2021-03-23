
<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
        <h1 class="center">Reporte De Ticket</h1>
        <style>
          .center{
              text-align:center;
          }
        </style>
        <br>
        <table border="1">

        <tbody>
            <tr>
                    <th>No</th>
                    <th>Fecha</th>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Precio</th>
                    <th>Tipo Vuelo </th>
            </tr>
            <tr>
                @foreach($gpdf as $p)
                    <td> {{$p->id}} </td>
                    <td> {{$p->fecha}} </td>
                    <td> {{$p->origen}} </td>
                    <td> {{$p->destino}} </td>
                    <td> {{$p->precio}} </td>
                    <td> {{$p->tipo}}</td>
                    @endforeach
            </tr>
            <tr>
                    <th>M. Avion</th>
                    <th>Descripcion</th>
                    <th></th>
                    <th>Nombre </th>
                    <th>Cedula</th>
                    <th>Correo</th> 
            </tr>
            <tr>
                    @foreach($gpdf as $p)
                    <td> {{$p->matricula}}</td>
                    <td> {{$p->descripcion}}</td>
                    <td>  </td>
                    <td>{{$p->nombre}}</td>
                    <td>{{$p->cedula}}</td>
                    <td>{{$p->correo}}</td>
                    @endforeach
                
            </tr>
        </tbody>
        </table>

</body>
</html>
