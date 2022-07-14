
<div class="modal" tabindex="-1" id="crearContacto" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Contacto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form id="formularioCrearContacto">
                    <div class="form-group">
                        <label for="name" class="label">Nombre: </label>
                        <input type="text" required name="name" id="name" class="form-control" placeholder="Escriba nombre :">
                    </div>
                    <div class="form-group my-4">
                        <label for="phone" class="label">Teléfono: </label>
                        <input type="number" required name="phone" id="phone" class="form-control" placeholder="Escriba teléfono:">
                    </div>
                    <div class="form-group my-4">
                        <label for="date" class="label">Fecha Nacimiento: </label>
                        <input type="date" required name="date" id="date" class="form-control" placeholder="Escriba Fecha Nacimirento:">
                    </div>
                    <div class="form-group my-4">
                        <label for="address" class="label">Dirección:</label>
                        <input type="text" required name="address" id="address" class="form-control" placeholder="Escriba dirección">
                    </div>
                    <div class="form-group my-4">
                        <label for="email" class="label">Correo:</label>
                        <input type="email" required name="email" id="email" class="form-control" placeholder="Escriba dirección">
                    </div>
                    <div id="mensaje"></div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Insertar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Cerrar</button>
                </form>
            </div>
        </div>
    </div>
</div>