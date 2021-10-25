<a class="btn btn-info" href="{{route('usuarios.show',$id)}}"> Mostrar </a>
<a class="btn btn-warning" href="{{route('usuarios.edit',$id)}}"> Editar </a>
<form action="{{route('usuarios.destroy',$id)}}" method="post">
    @method('DELETE')
    @csrf
<button type="submit" class="btn btn-danger">Eliminar</button>
</form>
