@extends ('layouts.app')
@section('content')
<form class="d-flex" action="{{route('busclientehoy')}}" method="POST">
        @csrf
        <input class="form-control me-2" type="text"  id="des" name="des">
        <button type="submit" class="btn btn-outline-success">Buscar</button>
</form>
@stop