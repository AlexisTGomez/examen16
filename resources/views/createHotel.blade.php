@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Hotel</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('hotel.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                        </div>

                        <div class="form-group">
                            <label for="tfno">Teléfono</label>
                            <input type="tel" class="form-control" id="tfno" name="tfno" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Crear Hotel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
