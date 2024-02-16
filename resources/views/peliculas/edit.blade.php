@extends('plantilla')
@section('titulo','Modificar')
@section('contenido')
<h1>Editar pelicula</h1>
<img src="$pelicula->poster" alt="$pelicula->title">
<form action="{{ route('peliculas.update',$pelicula->id) }}" method="POST">
  @csrf 
  @method('PUT')
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">Titulo</span>
  </div>
  <input type="text" class="form-control" name="titulo" value="{{$pelicula->title}}">
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">Año</span>
  </div>
  <input type="text" class="form-control" name="anyo" value="{{$pelicula->year}}">
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">Director</span>
  </div>
  <input type="text" class="form-control" name="director" value="{{$pelicula->director}}">
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">Poster</span>
  </div>
  <input type="text" class="form-control" name="poster" value="{{$pelicula->poster}}">
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">Sinopsis</span>
  </div>
  <input type="text" class="form-control" name="synopsis" value="{{$pelicula->synopsis}}">
</div>
<input type="submit" class="btn btn-primary" name="enviar" value="Enviar">
</form>
@endsection