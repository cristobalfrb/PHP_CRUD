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

    $('#producto_form').on('submit', (e) => {
        guardaryeditar(e);
    })
});

function guardaryeditar(e) {
    e.preventDefault();
    var formData = new FormData($('#producto_form')[0])
    $.ajax({
        url: "../../controllers/productos.php?op=guardaryeditar",
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
            $('#producto_form')[0].reset();
            $('#modal_producto').modal('hide');
            $('#producto_data').DataTable().ajax.reload();

            Swal.fire(
                'Agregado!',
                'El producto a sido agregado.',
                'success'
            )
        }
    })

}

$(document).on('click', '#btn_nuevo', () => {
    $('#mdlTitulo').html('Nuevo Registro');
    $('#modal_producto').modal('show');
})


function editar(prod_id) {
    console.log(prod_id);
}

function eliminar(prod_id) {

    Swal.fire({
        title: 'Producto?',
        text: "Se eliminara el producto de la lista!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar!'
    }).then((result) => {
        if (result.isConfirmed) {

            $.post('../../controllers/productos.php?op=eliminar', {
                prod_id
            }, function (data) {
                $('#producto_data').DataTable().ajax.reload();

                Swal.fire(
                    'Eliminado!',
                    'El producto a sido eliminado.',
                    'success'
                )
            });

        }
    })
}