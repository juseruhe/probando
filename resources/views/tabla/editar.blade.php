
<div class="modal editar" tabindex="-1" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Tipo de Documento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <form enctype="multipart/form-data" class="datos">
         <div class="form-control">
         <label for="Nombre_Tipo_Documento">Tipo Documento:</label>
         <input type="text" class="Nombre_Tipo_Documento" required name="Nombre_Tipo_Documento" id="Nombre_Tipo_Documento">
        </div>

         <div class="form-control">
         <label for="Siglas">Siglas:</label>
         <input type="text" class="Siglas" required name="Siglas" id="Siglas">
        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button  type="submit" class="btn btn-primary">Actualizar</button>
        </form>
        
        <div class="form-control">
        <div class="mensaje"></div>
        </div>
        </div>
      </div>
    </div>
  </div>