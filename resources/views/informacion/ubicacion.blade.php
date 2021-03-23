@extends ('layouts.app')
@section('content')
<h1 class="text-center">UBICACION</h1>
<div class="contenedor">
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d737.6250538709274!2d-77.63657932141349!3d0.8209812616518661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scalle%209%20n0.%208-147%20barrio%20fatima%20ipiales!5e1!3m2!1ses!2sco!4v1616419769299!5m2!1ses!2sco" width="1250" height="500" style="border:1;" allowfullscreen="" loading="lazy"></iframe>
<div>
<style>
.contenedor iframe{/*hace que las imagenes salgan a blanco y negro*/
    filter: grayscale(1);
}
.contenedor:hover iframe{/*sirve para dar color a la imagen cuando pase el mouse por encima 
    de la imagen*/
    filter: grayscale(0);
}
</style>
@stop