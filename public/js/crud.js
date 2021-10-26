$(document).ready(function () {
    $('#tabla').DataTable({
       // Mostrar Datos Datatable
       ajax: {
           "url": "http://shielded-tundra-60402.herokuapp.com/api/tipo_documento",
           "dataSrc": "",
           "method": "GET",
           "destroy": true,
        },

        columns: [
            {"data": "id"},
            {"data": "Nombre_Tipo_Documento"},
            {"data": "Siglas"},
            {"defaultContent": "<button class='btn btn-info'>Mostrar</button> <button class='btn btn-warning'>Editar </button> <button class='btn btn-danger'> Eliminar</button>    "}
        ],

       language: {
           "paginate":{
               "next": "Siguiente",
               "previous": "Anterior"
           },
           "search": "Buscar:",
           "info": "Mostrando _END_ Tipos de Documentos",
           "infoFiltered": "",
           "zeroRecords": "No se ha encontrado níngun tipo de documento",
           "infoEmpty": "Mostrando 0 tipos de documento"
       } 
    })

    // Crear Tipo Documento
    $('#crear').click(function (e) { 
        e.preventDefault();

        $('#crearModal').modal('show')
        
    });

    $('#datos').submit(function (e) { 
        e.preventDefault();
        
        $.ajax({
            type: "post",
            url: "http://shielded-tundra-60402.herokuapp.com/api/tipo_documento",
            data: $('#datos').serialize(),
            success: function (response) {
                //alert("Datos insertados a la base datos")
                $('#mensaje').html('<div class="alert alert-success" role="alert"> Datos Enviados a la base de datos</div>');
            }, 
            error: function(error){
                $('#mensaje').html('<div class="alert alert-danger" role="alert"> Error al enviar datos</div>');
            }
        });
    });

    // Mostrar Tipo de Documento
    $(document).on("click", ".btn-info", function () {
        fila = $(this).closest("tr")
        id= parseInt(fila.find('td:eq(0)').text())
        //alert(id)

        $.ajax({
            type: "GET",
            url: "http://shielded-tundra-60402.herokuapp.com/api/tipo_documento/"+id,
            success: function (response) {
                console.log(response)

                $('.id').html(response.id);
                $('.Nombre_Tipo_Documento').html(response.Nombre_Tipo_Documento)
                $('.Siglas').html(response.Siglas)
            }
        });

        $('.info').modal('show')

    });
    
     /*$(document).on("click",'.btn-info', function () {
         
      fila = $(this).closest("tr")
       id= parseInt(fila.find('td:eq(0)').text())
     
       $.ajax({
           type: "GET",
           url: "http://shielded-tundra-60402.herokuapp.com/api/tipo_documento/"+id,
           dataSrc: "",
           success: function (response) {
               console.log(response)

               $('.id').html(response.id)
               $('.Nombre_Tipo_Documento').html(response.Nombre_Tipo_Documento)
               $('.Siglas').html(response.Siglas)
          }
       });
  
      $('.info').modal('show')
    });*/
});