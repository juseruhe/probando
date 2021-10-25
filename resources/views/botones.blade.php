@extends('plantilla')

@section('titulo')
    Datatables y Modales
@endsection


@section('titulohtml')
Datatables y Modales
@endsection




    <!-- Modal de Crear -->
    @include('create')

    <!-- Modal de Correo -->
  @include('correo')

  <a href="{{route('descargar.usuarios')}}" class="btn btn-success my-4 ml-4">Descargar Usuarios PDF</a>

   <a class="btn btn-success" href="{{route('descargar.excel')}}">Descargar Usuarios Excel</a>


    <form action="{{route('importar.excel')}}" method="post" enctype="multipart/form-data">
      @csrf
      <input required type="file" name="archivo" id="" class="btn btn-success">
      <button type="submit" class="btn btn-success">Importar Excel</button>
    </form>

    <a href="{{route('descargar.word')}}" class="btn btn-success">Descargar Documento Word</a>


    <form action="{{route('correo.pdf')}}" method="post" enctype="multipart/form-data">
      @csrf
      <input required type="file" name="archivo" id="" class="btn btn-success">
      <button type="submit" class="btn btn-success">Importar Excel Correos</button>
    </form>

    @section('contenido')

    <table id="datatable" class="display table table-danger">
      <thead>
          <tr>
            <th class="ml-2">#</th>
              <th class="ml-2">Rol</th>
                <th class="ml-2">Nombre</th>
                <th class="ml-2">Correo</th>
                <th class="ml-2">Tipo de Documento </th>
                 <th class="ml-2">Número de Documento</th>
                  <th class="ml-2">Ocupacion </th>
                  <th class="ml-2">Estado </th>
                  <th class="ml-2">Acciones </th>
          </tr>
      </thead>
  
  </table>
  
  
  
        
    @endsection

  



 