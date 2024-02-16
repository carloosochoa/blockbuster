@extends('plantilla')
@section('titulo','Inicio')
@section('contenido')
<h1>Inicio de sesión<h1>
    <div class="inicio">
        <label for="usua">Seleccione usuario: </label>
        <select name="usuario">
            @foreach($usuarios as $usuario)
            <option value="">{{$usuario->name}}</option>
            @endforeach
        </select>
        <a href="{{ route('peliculas.index')}}" class="btn btn-primary">Iniciar</a>
    </div>
@endsection