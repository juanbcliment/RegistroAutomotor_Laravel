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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $infracciones->links() }}
    </div>

@endsection
