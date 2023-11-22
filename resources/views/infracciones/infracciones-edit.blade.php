@extends('partials.template')

@section('title', 'RA Autos')

@section('content')

    <h3>EDITAR</h3>

    <div class="container p-4">
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
                        <form action="{{ route('infracciones.update', $infraccion->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <tr>
                                <td><input type="text" value="{{ $infraccion->auto_id }}" name="auto_id" id="auto_id" required></td>
                                <td><input type="text" value="{{ $infraccion->fecha }}" name="fecha" id="fecha" required></td>
                                <td> <input type="text" value="{{ $infraccion->descripcion }}" name="descripcion" id="descripcion" required></td>
                                <td><input type="text" value="{{ $infraccion->tipo }}" name="tipo" id="tipo" required></td>
                                <td><input type="submit" value="Actualizar"></td>
                            </tr>

                        </form>

                    </tbody>

                </table>

            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
