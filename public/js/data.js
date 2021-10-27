$(document).ready(function () {
    $('#data').DataTable()

    $('#crear').click(function (e) { 
        e.preventDefault();
        $('#ventana').modal('show')
    });


});

