$(document).ready(function () {
    $('#tabla').DataTable({
       // Mostrar Datos Datatable
       ajax: {
           "url": "http://shielded-tundra-60402.herokuapp.com/api/tipo_documento",
           "dataSrc": "",
           "method": "GET",
        },

        columns: [
            {"data": "id"},
            {"data": "Nombre_Tipo_Documento"},
            {"data": "Siglas"}
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

    $('#insertar').click(function (e) { 
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
});