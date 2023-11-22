@extends('partials.template')

@section('title', 'RA Autos')

@section('content')

    <h3>creacion de titulares</h3>
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
                    <form action="{{ route('titulares.store', $titular->id) }}" method="POST">
                        @csrf
                        <tr>
                            <td><input type="text" name="apellido" id="apellido" required></td>
                            <td><input type="text" name="nombre" id="nombre" required></td>
                            <td> <input type="text" name="dni" id="dni" required></td>
                            <td><input type="text" name="domicilio" id="domicilio" required></td>
                            <td><input type="submit" value="Actualizar"></td>
                        </tr>

                    </form>

                </tbody>

            </table>
        </div>
    </div>
@endsection
