@extends('plantilla')
@section('titulo','Dar de alta peliculas')
@section('contenido')
<h1>Nueva película</h1>
<form action="{{ route('peliculas.store') }}" method="POST">
  @csrf 
  @method('POST')
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">Titulo</span>
  </div>
  <input type="text" class="form-control" name="titulo">
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">Año</span>
  </div>
  <input type="text" class="form-control" name="year">
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">Director</span>
  </div>
  <input type="text" class="form-control" name="director">
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">Poster</span>
  </div>
  <input type="text" class="form-control" name="poster">
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">Rented</span>
  </div>
  <input type="text" class="form-control" name="rented">
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">Sinopsis</span>
  </div>
  <input type="text" class="form-control" name="synopsis">
</div>
<input type="submit" class="btn btn-primary" name="enviar" value="Enviar">
</form>
@endsection