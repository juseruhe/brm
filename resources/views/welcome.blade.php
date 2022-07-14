<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
</head>

<body>
    
     <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <h2 class="h2 my-4">Agenda de Contactos</h2>
        </div>
        <div class="col-lg-3"></div>
     </div>

    <button id="botonCrearContacto" class="btn btn-success my-4"><i class="bi bi-plus-circle"></i>  Agregar Contacto</button>
    <div class="responsive">
    <table class="table table-primary" id="tabla">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Fecha de Nacimiento</th>
                <th>Dirección</th>
                <th>Correo Electrónico</th>
                <th></th>
            </tr>
        </thead>
    </table>
    </div>

    @include('contacts.create')
    @include('contacts.edit')
    @include('contacts.delete')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('js/agenda.js')}}"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>