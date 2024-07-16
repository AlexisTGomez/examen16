<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Hotel</title>
    <!-- Link a Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $hotel->nombre }}</div>

                    <div class="card-body">
                        <p><strong>Nombre:</strong> {{ $hotel->nombre }}</p>
                        <p><strong>Dirección:</strong> {{ $hotel->direccion }}</p>
                        <p><strong>Teléfono:</strong> {{ $hotel->tfon }}</p>

                        <!-- Botones para editar y eliminar -->
                        <div class="btn-group">
                            <a href="{{ route('hotel.edit', $hotel->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('hotel.destroy', $hotel->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este hotel?')">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros scripts necesarios -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Otros scripts opcionales -->
</body>
</html>
