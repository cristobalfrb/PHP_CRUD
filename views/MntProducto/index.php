<!DOCTYPE html>
<html lang="es">

<head>
    <?php
        require_once('../../templates/mainheader.php');
    ?>
    
    <title>Crud - Productos</title>
</head>

<body>

    <!-- NAVBAR -->

    <?php
        require_once('../../templates/mainnav.php');
    ?>

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


    <?php
        require_once('../../templates/mainfooter.php');
    ?>
    
    <script src="./mntproducto.js"></script>

    <?php

    require_once('./modalMntProducto.php');

    ?>
</body>

</html>