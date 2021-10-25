@extends('plantilla')

@section('titulo')
    Correo Enviado
@endsection

@section('titulohtml')
    Correo Enviado
@endsection


@section('contenido')

<h5 class="text-center h1 text-primary">Este mensaje es para {{$msg["nombre"]}} del correo {{$msg["para"]}}</h5>
    <p class="text-center text-info">Asunto: {{$msg["asunto"]}}</p> 
    <p class="text-center text-danger">Mensaje: {{$msg["mensaje"]}}</p>
    
@endsection
    





