

<!--      Modal de Correo       -->

<button class="btn btn-success" id="email"  >Enviar Correos</button>



<div class="modal" tabindex="-1" id="emailModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

          <form action="{{route('botones.correo')}}" method="post">
              @csrf
        <h5 class="modal-title">Enviar Correos</h5>
      </div>
      <div class="modal-body">
        <label for="nombre">Nombre:</label>
        <input id="nombre"   required type="text" name="nombre"  class="form-control mt-4" placeholder="Ejemplo: Pepe Sanchez">

        <label for="para">Para:</label>
        <input id="para"  required type="text" name="para"  class="form-control mt-4" placeholder="Ejemplo: correo@correo.com">
          <label for="asunto">Asunto</label>
        <input id="asunto"  required type="text" name="asunto"  class="form-control mt-4" placeholder="Ejemplo: Documentos">

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" required name="mensaje" id="mensaje" cols="50" rows="10" class="mt-4 form-control textarea" placeholder="Ejemplo: Necesito documentación Urgente"></textarea>
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-success">Enviar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </form>
    </div>
  </div>
</div>



