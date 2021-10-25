<button id="crear" class="btn btn-success" data-toggle="modal" data-target="#modal1">Crear Usuario</button>

    
<div class="modal" tabindex="-1" id="crearModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Crear Usuario</h5>
          </div>
        <div class="modal-body">
          <form action="{{route('botones.store')}}" method="post">
            @csrf
            
            <label for="rol">Rol:</label>
            <input type="text" required class="form-control input" name="rol" id="rol">
         

              <label for="nombre">Nombres Completos:</label>
              <input type="text" required name="nombre" id="nombre" class="form-control input">


              <label for="correo">Correo:</label>
              <input type="email" required name="correo" id="correo" class="form-control input">

              <label for="tipo_documento">Tipo de Documento:</label>
              <input type="text" required name="tipo_documento" id="tipo_documento" class="form-control input">

              <label for="numero_documento">Número de Documento:</label>
              <input type="number" required name="numero_documento" id="numero-documento" class="form-control input">

              <label for="ocupacion">Ocupación:</label>
              <input type="text" required name="ocupacion" id="ocupacion" class="form-control input">

              <label for="estado">Estado:</label>
              <input type="text" required name="estado" id="estado" class="form-control input">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Crear</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
        </form>
        </div>
      </div>
    </div>
  
  </div>


    


