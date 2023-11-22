@extends('partials.template')

@section('title', 'RA Autos')



@section('content')


    <H2 class="h2-alinear">Autos inscriptos</H2>
    <br><br>
    <!-- mensaje de que se guardo el movimiento -->

    <a href="{{ route('autos.create') }}" class="agregar">+ Agregar movimientos</a>

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
                            <td class="link">
                                <div class="crud">
                                    <ul>
                                        <li>
                                            <a href="{{ route('autos.edit', $auto) }}" class="btn btn-primary"><i
                                                    class="fas fa-edit"></i></a>
                                        </li>
                                        <li>
                                            <form action="{{ route('autos.destroy', $auto->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="button" type="submit" {{ $auto->id }}
                                                    onclick="return confirm('Estas seguro?')"><i
                                                        class="btn btn-danger far fa-file-alt"></i></button>
                                            </form>
                                        </li>
                                        <li>
                                            <a href="detalle.php?id_mov=" class="btn btn-info "><i
                                                    class="far fa-file-alt"></i></a>
                                        </li>
                            </td>
                            </ul>
        </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
