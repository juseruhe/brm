<div class="modal" tabindex="-1" id="editarContacto" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar Contacto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form id="formularioEditarContacto">
                    <input type="hidden" name="id" id="editarId" class="form-control">
                    <div class="form-group">
                        <label for="name" class="label">Nombre : </label>
                        <input type="text" required name="name" id="editarName" class="form-control" placeholder="Escriba nombre de Producto:">
                    </div>
                    <div class="form-group my-4">
                        <label for="phone" class="label">Teléfono: </label>
                        <input type="number" required name="phone" id="editarPhone" class="form-control" placeholder="Escriba código de barras">
                    </div>
                    <div class="form-group my-4">
                        <label for="date" class="label">Fecha Nacimiento:</label>
                        <input type="date" required name="date" id="editarDate" class="form-control" placeholder="Escriba el precio del producto">
                    </div>

                    <div class="form-group my-4">
                        <label for="address" class="label">Dirección:</label>
                        <input type="text" required name="address" id="editarAddress" class="form-control" placeholder="Escriba el precio del producto">
                    </div>

                    <div class="form-group my-4">
                        <label for="email" class="label">Correo:</label>
                        <input type="email" required name="email" id="editarEmail" class="form-control" placeholder="Escriba el precio del producto">
                    </div>
    
                    <div id="mensajeEditarContacto"></div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning"><i class="bi bi-arrow-repeat"></i> Actualizar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Cerrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
Footer
© 2022 GitHub, Inc.
Footer navigation
Terms
Priv