<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="../../public/css/datatables.bootstrap5.min.css">
    <link rel="stylesheet" href="../../public/css/buttons.dataTables.min.css">
    <title>Crud - Productos</title>
</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Productos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Productos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- NAVBAR -->


    <!-- CONTENIDO -->

    <div class="container-fluid mt-2">
        <h4>Productos</h4>
        <p>Desde esta ventana se puede realizar el mantenimiento a los productos</p>
    </div>


    <div class="container-fluid mt-2 principal">

        <div class="card">
            <h5 class="card-header">Lista de Productos</h5>
            <div class="card-body">

                <button class="btn btn-primary mb-3" id="btn_nuevo">Nuevo Registro</button>


                <table id="producto_data" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot></tfoot>
                </table>
            </div>
        </div>

    </div>



    <!-- CONTENIDO -->

    <!-- Scripts JS -->
    <script src="../../public/js/jquery.js"></script>
    <script src="../../public/js/datatables.min.js"></script>
    <script src="../../public/js/datatables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

    <!-- LIBRERIAS PARA BOTONES DE EXPORT -->

    <script src="../../public/js/dataTables.buttons.min.js"></script>
    <script src="../../public/js/jszip.min.js"></script>
    <script src="../../public/js/pdfmake.min.js"></script>
    <script src="../../public/js/vfs_fonts.js"></script>
    <script src="../../public/js/buttons.html5.min.js"></script>

    <script src="https://kit.fontawesome.com/7225277ba0.js" crossorigin="anonymous"></script>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="./mntproducto.js"></script>

    <?php

    require_once('./modalMntProducto.php');

    ?>
</body>

</html>