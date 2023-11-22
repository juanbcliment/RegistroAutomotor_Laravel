@extends('partials.template')

@section('title', 'RA Autos')

@section('content')

    <h3>creacion de titulares</h3>
    <div class="row justify-content-md-center">
        <div class="col-md-11">
            <table class="table table-bordered negrita">
                <thead>
                    <tr>
                        <th>Auto</th>
                            <th>Fecha</th>
                            <th>Descripcion</th>
                            <th>Tipo</th>
                            <th>Confirmar</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="{{ route('infracciones.store', $infraccion->id) }}" method="POST">
                        @csrf
                        <tr>
                            <td><input type="text" name="auto_id" id="auto_id" required></td>
                            <td><input type="date" name="fecha" id="fecha" required></td>
                            <td> <input type="text" name="descripcion" id="descripcion" required></td>
                            <td><input type="text" name="tipo" id="tipo" required></td>
                            <td><input type="submit" value="Actualizar"></td>
                        </tr>

                    </form>

                </tbody>

            </table>
        </div>
    </div>
@endsection
