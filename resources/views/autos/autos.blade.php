@extends('partials.template')

@section('title', 'RA Autos')



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
                        <th>Titular</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Patente</th>
                        <th>Tipo</th>
                        <th>Fecha de ingreso</th>
                        <th>Actualizado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($autos as $auto)
                        <tr>
                            <td>{{ $auto->id }}</td>
                            <td>{{ $auto->titular_id }}</td>
                            <td>{{ $auto->marca }}</td>
                            <td>{{ $auto->modelo }}</td>
                            <td>{{ $auto->patente }}</td>
                            <td>{{ $auto->tipo }}</td>
                            <td>{{ $auto->created_at }}</td>
                            <td>{{ $auto->update_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
