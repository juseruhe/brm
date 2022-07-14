$(document).ready(function () {
    var tabla = $('#tabla').DataTable({

        ajax: {
            "url": "contacts",
            "dataSrc": "",
            "method": "GET",
            "destroy": true
        },

        columns: [
            { "data": "name" },
            { "data": "phone" },
            { "data": "date" },
            { "data": "address" },
            { data: "email" },
            {
                "data": "id",
                "bSortable": false,
                "mRender": function (data, type, value) {
                    return '<button id="botonEditarContacto"  class="btn btn-warning bi bi-pencil-square form-control botonEditarProducto" value="' + value.id + ' "> Editar</button> <button id="botonEliminarContacto" class="my-2 btn btn-danger form-control bi bi-eraser" value="' + value.id + '"> Eliminar</button>';
                }
            },

        ],

        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        lengthMenu: [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, 'All']
        ],

        stateSave: true,
        "bDestroy": true

    })

    // Insertar 
    $('#botonCrearContacto').click(function (e) {
        e.preventDefault();

        $('#crearContacto').modal('show')

    });

    $('#formularioCrearContacto').submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: "post",
            url: "/contacts",
            data: $('#formularioCrearContacto').serialize(),
            success: function (response) {
                $('#crearContacto').modal('hide')

                swal({
                    title: "Se inserto un nuevo Contacto ",
                    text: "Por Favor verifique los datos insertados",
                    icon: "success"
                })

                $('#name').val("")
                $('#phone').val("")
                $('#date').val("")
                $('#address').val("")
                $('#email').val("")

                tabla.ajax.reload()

            }, error: function (response) {

                $('#crearContacto').modal('hide')

                swal({
                    title: "¡Hay un error ! " + response.status,
                    text: "Por Favor verifique los datos insertados ",
                    icon: "error"
                })


            }
        });

    });

    // Eventos click de editar 
    $(document).on("click", "#botonEditarContacto", function (e) {
        e.preventDefault()

        fila = $(this).closest("tr")

        var id = e.target.value
        var name = fila.find('td:eq(0)').text()
        var phone = fila.find('td:eq(1)').text()
        var date = fila.find('td:eq(2)').text()
        var address = fila.find('td:eq(3)').text()
        var email = fila.find('td:eq(4)').text()


        $('#editarId').val(id)
        $('#editarName').val(name)
        $('#editarPhone').val(phone)
        $('#editarDate').val(date)
        $('#editarAddress').val(address)
        $('#editarEmail').val(email)

        $('#editarContacto').modal('show')

    });

    // Actualizar

    $("#formularioEditarContacto").submit(function (e) {
        e.preventDefault();

        var id = $('#editarId').val()
        var name = $('#editarName').val()
        var phone = $('#editarPhone').val()
        var date = $('#editarDate').val()
        var address = $('#editarAddress').val()
        var email = $('#editarEmail').val()

        $.ajax({
            type: "put",
            url: "/contacts/" + id,
            data: $("#formularioEditarContacto").serialize(),
            success: function (response) {

                $("#editarContacto").modal('hide')

                swal({
                    title: "Se actualizo un Contacto ",
                    text: "Por Favor verifique los datos actualizados",
                    icon: "success"
                })


                tabla.ajax.reload()
            }, error: function (error) {
                swal({
                    title: "! Hubo un error: " + error.status + " !",
                    text: "Por Favor verifique los datos insertados",
                    icon: "error"
                })
            }
        });

    });

    // Eliminar
    $(document).on("click", "#botonEliminarContacto", function (e) {
        e.preventDefault()

        fila = $(this).closest("tr")

        var id = e.target.value
        var nombre = fila.find('td:eq(0)').text()

        $('#id').val(id)
        $('#contactoEliminar').html(nombre)

        $('#eliminarContacto').modal('show')

    });

    $('#formularioEliminarContacto').submit(function (e) {
        e.preventDefault();

        var id = $('#id').val()

        $.ajax({
            type: "delete",
            url: "/contacts/" + id,
            success: function (response) {
                $('#eliminarContacto').modal('hide')

                swal({
                    title: "¡Contacto eliminado exitosamente!",
                    text: "Por Favor verifique el producto eliminado",
                    icon: "success"
                })

                tabla.ajax.reload()
            },
            error: function (error) {
                swal({
                    title: "¡Error al eliminar contacto!",
                    text: "Error: " + error.status,
                    icon: "error"
                })

                console.log(error)
            }
        });

    });


});