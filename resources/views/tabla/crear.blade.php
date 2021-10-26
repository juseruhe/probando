<button class="btn btn-success" id="crear">Insertar</button>

<div class="modal" tabindex="-1" id="crearModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <div id="mensaje"></div>
            
          <h5 class="modal-title">Insertar Tipo de Documento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <form enctype="multipart/form-data" id="datos">
         <div class="form-control">
         <label for="Nombre_Tipo_Documento">Tipo Documento:</label>
         <input type="text" required name="Nombre_Tipo_Documento" id="Nombre_Tipo_Documento">
        </div>

         <div class="form-control">
         <label for="Siglas">Siglas:</label>
         <input type="text" required name="Siglas" id="Siglas">
        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button  type="submit" class="btn btn-primary">Insertar</button>
        </form>
        </div>
      </div>
    </div>
  </div>