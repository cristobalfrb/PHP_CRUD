$(document).ready(function () {

    $('#producto_data').DataTable({
        "aProcesising": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "ajax": {
            url: '../../controllers/productos.php?op=listar',
            type: 'get',
            dataType: "json",
            error: function (e) {
                console.log(e.responseText);
            }
        },
        "responsive": true,
        "iDisplayLenght": 10,
        "bInfo": true,
        "order": [
            [0, "asc"]
        ],
    });


    console.log("Hola");

});