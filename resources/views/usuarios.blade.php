@extends('plantillapdf')


@section('titulohtml')
    Tabla de Usuarios
@endsection

<!-- Estilos del PDF -->

<style>

body {
    font-size: 10px;
    font-family: Arial, Helvetica, sans-serif;
    
    
}

h5{
    font-size: 35px;
    text-align: center;
    color: rgb(20, 13, 126);
}



thead tr th{

    background-color: rgb(20, 11, 141);
    color: white;
    
}


tbody tr {
    border: solid 2px rgb(14, 10, 78)
}


tbody tr td {

color: rgb(20, 8, 184);
border-bottom: solid 2px rgb(20, 8, 184);
border-right: solid 2px rgb(20, 8, 184);


}

</style>

<!-- Fin de los Estilos -->


@section('contenido')

<table>
    <thead>
    <tr>
        
        <th>#</th>
        <th>Rol</th>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Tipo de Documento </th>
           <th>Número de Documento</th>
            <th>Ocupacion </th>
            <th>Estado </th>
    </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
              <td>{{$usuario->id}}</td>
              <td>{{$usuario->rol}}</td>
              <td>{{$usuario->nombre}}</td>
              <td>{{$usuario->correo}}</td>
              <td>{{$usuario->tipo_documento}}</td>
              <td>{{$usuario->numero_documento}}</td>
              <td>{{$usuario->ocupacion}}</td>
              <td>{{$usuario->estado}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    

@endsection