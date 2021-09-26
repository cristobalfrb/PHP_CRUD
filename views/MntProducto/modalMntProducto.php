<div class="modal fade" id="modal_producto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mdlTitulo"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="producto_form">
                <div class="modal-body">

                    <input type="hidden" id="prod_id" name="prod_id">


                    <div class="mb-3">
                        <label for="prod_nom" class="form-label">Nombre Producto</label>
                        <input type="text" name="prod_nom" class="form-control" id="prod_nom" required>
                    </div>

                    <div class="mb-3">
                        <label for="prod_nom" class="form-label">Nombre Producto</label>
                        <textarea type="text" name="prod_desc" placeholder="Agregar descripcion" class="form-control" id="prod_desc" required></textarea>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>