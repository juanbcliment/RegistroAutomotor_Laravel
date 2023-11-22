<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
</div>
@extends('partials.template')

@section('title', 'RA Infracciones')


@section('content')
      <H2 class="h2-alinear">Infracciones</H2>
    <a href="/infracciones/create" class="agregar">+ Agregar movimientos</a>

    <div class="row justify-content-md-center">
        <div class="col-md-11">
            <table class="table table-bordered negrita">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Auto</th>
                        <th>Fecha</th>
                        <th>Descripcion</th>
                        <th>Tipo</th>
                        <th>Fecha de ingreso</th>
                        <th>Actualizado</th>
                        <th>Editar|Borrar|Detalle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($infracciones as $infraccion)
                        <tr>
                            <td>{{ $infraccion->id }}</td>
                            <td>{{ $infraccion->auto_id }}</td>
                            <td>{{ $infraccion->fecha }}</td>
                            <td>{{ $infraccion->descripcion }}</td>
                            <td>{{ $infraccion->tipo }}</td>
                            <td>{{ $infraccion->created_at }}</td>
                            <td>{{ $infraccion->update_at }}</td>
                            <td class="link">
                            <div class="crud">
                                <ul>
                                    <li>
                                        <a href="{{ route('infracciones.edit', $infraccion) }}" class="btn btn-primary"><i
                                                class="fas fa-edit"></i></a>
                                    </li>
                                    <li>
                                        <form action="{{ route('infracciones.destroy', $infraccion->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="button" type="submit" {{ $infraccion->id }}
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
        {{ $infracciones->links() }}
    </div>

@endsection
