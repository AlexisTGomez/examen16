<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Hotel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Hotel</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('hotel.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" type="text" class="form-control" name="nombre" required autocomplete="nombre" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input id="direccion" type="text" class="form-control" name="direccion"  required autocomplete="direccion">
                            </div>

                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input id="telefono" type="text" class="form-control" name="tfno" required autocomplete="telefono">
                            </div>

                            <button type="submit" class="btn btn-primary">Crear Hotel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
