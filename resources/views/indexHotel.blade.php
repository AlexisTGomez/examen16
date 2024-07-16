<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Hoteles</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Lista de Hoteles</div>

                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{ route('hotel.create') }}" class="btn btn-primary">Crear Hotel</a>
                        </div>
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Dirección</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hoteles as $hotel)
                                <tr>
                                    <th scope="row">{{ $hotel->id }}</th>
                                    <td>{{ $hotel->nombre }}</td>
                                    <td>{{ $hotel->direccion }}</td>
                                    <td>{{ $hotel->tfon }}</td>
                                    <td>
                                        <a href="{{ route('hotel.show', $hotel->id) }}" class="btn btn-primary">Mirar hotel</a>
                                        <a href="{{ route('hotel.edit', ['hotel' => $hotel->id]) }}" class="btn btn-sm btn-primary">Editar</a>
                                        <form action="{{ route('hotel.destroy', $hotel->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
