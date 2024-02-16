@extends('plantilla')
@section('titulo','Listado de peliculas')
@section('contenido')
<h1>Listado de peliculas</h1>
<div class="contenedor">
    @foreach($peliculas as $pelicula)
        <div class="pelicula">
        <h1>{{ $pelicula->title }}</h1>
        <img src="{{ $pelicula->poster}}" alt="{{ $pelicula->title }}">
        <div class="cabecera">
        <p>{{ $pelicula->director }}</p>
        <p>{{ $pelicula->year }}</p>
        </div>
        <div class="sinopsis">
        <p>Sinopsis</p>
        <p>{{ $pelicula->synopsis }}</p>
        </div>
        <div class="controles">
            <a href="{{ route('peliculas.edit', $pelicula->id) }}" class="btn btn-dark">Modificar</a>
            <form action="{{ route('peliculas.destroy',$pelicula->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Borrar" class="btn btn-danger">
            </form>
        </div>
    @endforeach
    {{$peliculas->links()}}
</div>
@endsection