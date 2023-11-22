@extends('partials.template')

@section('title', 'RA Titulares')


@section('content')
    <H2 class="h2-alinear">Autos inscriptos</H2>
    <br><br>
    <!-- mensaje de que se guardo el movimiento -->

    <a href="{{ route('titulares.create') }}" class="agregar">+ Agregar movimientos</a>

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
                        <th>Fecha de ingreso</th>
                        <th>Actualizado</th>
                        <th>Editar|Borrar|Detalle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($titulares as $titular)
                        <tr>
                            <td>{{ $titular->id }}</td>
                            <td>{{ $titular->apellido }}</td>
                            <td>{{ $titular->nombre }}</td>
                            <td>{{ $titular->dni }}</td>
                            <td>{{ $titular->domicilio }}</td>
                            <td>{{ $titular->created_at }}</td>
                            <td>{{ $titular->update_at }}</td>
                            <td class="link">
                                <div class="crud">
                                    <ul>
                                        <li>
                                            <a href="{{ route('titulares.edit', $titular) }}" class="btn btn-primary"><i
                                                    class="fas fa-edit"></i></a>
                                        </li>
                                        <li>
                                            <form action="{{ route('titulares.destroy', $titular->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="button" type="submit" {{ $titular->id }}
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
    {{ $titulares->links() }}
    </div>
    {{--  <i class="far fa-trash-alt btn btn-danger "> </i> --}}
@endsection
