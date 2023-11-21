@extends('partials.template')

@section('title', 'RA Titulares')


@section('content')
    <H2 class="h2-alinear">Autos inscriptos</H2>
    <br><br>
    <!-- mensaje de que se guardo el movimiento -->

    <a href="create.php" class="agregar">+ Agregar movimientos</a>

    <div class="row justify-content-md-center">
        <div class="col-md-11">
            <table class="table table-bordered negrita">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Domicilio</th>
                        <th>Tipo</th>
                        <th>Fecha de ingreso</th>
                        <th>Actualizado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($titulares as $titular)
                        <tr>
                            <td>{{ $titular->id }}</td>
                            <td>{{ $titular->apellido }}</td>
                            <td>{{ $titular->nombre }}</td>
                            <td>{{ $titular->dni }}</td>
                            <td>{{ $titular->patente }}</td>
                            <td>{{ $titular->domicilio }}</td>
                            <td>{{ $titular->created_at }}</td>
                            <td>{{ $titular->update_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $titulares->links() }}
    </div>

@endsection
