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
                            <th>Titular</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Patente</th>
                            <th>Tipo</th>
                            <th>confirmar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{ route('autos.update', $auto->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <tr>
                                <td><input type="text" value="{{ $auto->titular_id }}" name="titular_id" id="titular_id" required></td>
                                <td><input type="text" value="{{ $auto->marca }}" name="marca" id="marca" required></td>
                                <td> <input type="text" value="{{ $auto->modelo }}" name="modelo" id="modelo" required></td>
                                <td><input type="text" value="{{ $auto->patente }}" name="patente" id="patente" required></td>
                                <td><input type="text" value="{{ $auto->tipo }}" name="tipo" id="tipo" required></td>
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
