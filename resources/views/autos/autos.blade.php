@extends('partials.template')

@section('title', 'Registro automotor')



@section('content')


    <H2 class="h2-alinear">Pagina de autos</H2>
    <br><br>
    <!-- mensaje de que se guardo el movimiento -->
    <div class="ajustar">
      <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php session_unset();
      } ?>
    </div>
    <a href="/autos/create" class="agregar">+ Agregar movimientos</a>

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
              <th>Año</th>
              <th>Actualizado</th>
            </tr>
          </thead>
          <tbody>


            $query = "SELECT * FROM movimientos JOIN familiares ON movimientos.id_familia = familiares.id_familia;";
            $result = mysqli_query($mysqli, $query);

            while ($row = mysqli_fetch_assoc($result)) { ?>
              <tr>

                <td><a class="linkNombres" href="integrantes.php?id_familia= echo $row['id_familia']; ?>"> echo $row['nombre']; ?></a></td>
                <td> echo $row['rol']; ?></td>
                <td> echo $row['fecha']; ?></td>
                <td> echo $row['tipo']; ?></td>
                <td> echo $row['descripcion']; ?></td>
                <td> echo $row['monto']; ?></td>
                <td> echo $row['forma_de_pago']; ?></td>

                <td class="link">
                  <a href="update.php?id_mov= echo $row['id_mov']; ?>" class="btn btn-primary">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="delete.php?id_mov= echo $row['id_mov']; ?>" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                  </a>
                  <a href="detalle.php?id_mov= echo $row['id_mov']; ?>" class="btn btn-info">
                    <i class="far fa-file-alt"></i>
                  </a>
                </td>
              </tr>
             } ?>

          </tbody>
        </table>
      </div>
    </div>


@endsection
