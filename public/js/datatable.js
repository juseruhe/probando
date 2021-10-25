
$(document).ready(function() {
    $('#datatable').DataTable({

        // Mostrar Números del Datatable
       "lengthMenu": [[5,10,50,-1], [5,10,50,"All"]],


        // Consulta Base de Datos con Ajax Mostrar Usuarios
        "serverSide": true,



        "ajax": {
            "url": "http://localhost:8000/api/usuarios",
            "type": "GET"
        },
        "columns": [
            {data: "id"},
            {data: "rol"},
            {data: "nombre"},
            {data: "correo"},
            {data: "tipo_documento"},
            {data: "numero_documento"},
            {data: "ocupacion"},
            {data: "estado"},
            {data: "btn"},
          ],

     
        
});

/*
    // Crear una columna con input de busqueda con filtros
    $('#table_id tr').clone(true).appendTo( '#table_id' );
    $('#table_id tr:eq(-1) th').each( function (i) {

        var title = $(this).text();
       
        $(this).html( '<input type="text" class="form-control" placeholder="Buscar" /> <button type="button" class="btn btn-success" id="agregarBtn" > Agregar </button>  <button type="button" class="btn btn-danger" id="eliminarBtn" > Eliminar</button>  <div id="agregar"></div>' );


       $( 'input', this ).on( 'keyup change', function () {
            if ( tabla.column(i).search() !== this.value ) {
                tabla
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
        } );

 

*/
});


