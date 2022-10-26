@extends('plantilla')
@section('contenido')

<h1 class="mt-4 display-1 text-center">Recuerdos</h1>

<h2> Bienvenido a recuerdos con Blade {{$nombre}}</h2>

<ul>
    @foreach ($arraynombres as $llave)
    <li>{{$llave}}</li>
    @endforeach
</ul>
@stop