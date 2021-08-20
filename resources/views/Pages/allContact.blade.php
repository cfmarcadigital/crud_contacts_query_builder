<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso Laravel - CRUD</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

  <!-- Header -->
  <header>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="http://sistema.icei.tech/images/logo.png" class="me-2" height="50" alt="" loading="lazy" />
          <span class="navbar-brand mb-0 h1 text-light">Curso Laravel - CRUD con Query Builder</span>
        </a>
      </div>
    </nav>
  </header>
  <!-- Header -->

  <br>
  <a href="{{ URL::to('/') }}" class="btn btn-secondary">INICIO</a>
  <a href="{{ URL::to('/insert-data') }}" class="btn btn-primary">Nuevo</a>
  <br><br>
  <table class="table table-bordered">
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Correo Electrónico</th>
      <th>Teléfono</th>
      <th>Acción</th>
    </tr>
    @foreach($contactpass as $row)
    <tr>
      <td>{{ $row->id }}</td>
      <td>{{ $row->name }}</td>
      <td>{{ $row->email }}</td>
      <td>{{ $row->phone }}</td>
      <td>
        <a href="{{ url('view-contact/'.$row->id) }}" class="btn btn-success">Ver</a>
        <a href="{{ url('edit-contact/'.$row->id) }}" class="btn btn-info">Editar</a>
        <a href="{{ url('delete-contact/'.$row->id) }}" class="btn btn-danger">Eliminar</a>
      </td>
    </tr>
    @endforeach
  </table>

  <!-- Footer -->
  <footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      <a class="text-reset fw-bold" href="https://sistema.icei.tech/">ICEI Tech</a>
      © 2021 Derechos Reservados
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>