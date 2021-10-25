<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>

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
        
    
</body>
</html>


