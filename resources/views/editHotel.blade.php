<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Hotel</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Hotel</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('hotel.update', $hotel->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $hotel->nombre }}" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $hotel->direccion }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="tfno" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" id="tfno" name="tfno" value="{{ $hotel->tfon }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Actualizar Hotel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts al final para mejorar la carga de la página -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
