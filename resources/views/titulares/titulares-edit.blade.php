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
                            <th>Apellido</th>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Domicilio</th>
                            <th>confirmar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{ route('titulares.update', $titular->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <tr>
                                <td><input type="text" value="{{ $titular->apellido }}" name="apellido" id="apellido" required></td>
                                <td><input type="text" value="{{ $titular->nombre }}" name="nombre" id="nombre" required></td>
                                <td> <input type="text" value="{{ $titular->dni }}" name="dni" id="dni" required></td>
                                <td><input type="text" value="{{ $titular->domicilio }}" name="domicilio" id="domicilio" required></td>
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
