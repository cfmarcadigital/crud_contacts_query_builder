<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD - Editar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
  <br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <h2>Editar Contacto</h2>
        <hr>

        <form method="post" action="{{ url('update-contact/'.$edt->id) }}">
          @csrf

          <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="{{ $edt->name }}">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Correo Electrónicp</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="{{ $edt->email }}">

          </div>

          <div class="form-group">
            <label for="exampleInputPhone">Número de teléfono</label>
            <input type="text" class="form-control" name="phone" aria-describedby="emailHelp" value="{{ $edt->phone }}">
          </div>

          <div class="form-group">
            <label for="exampleInputDescription">Descripción</label>
            <input type="text" class="form-control" name="description" aria-describedby="emailHelp" value="{{ $edt->description }}">
          </div>

          <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
      </div>

      <div class="col-md-3">
        <a href="{{ route('all.contacts') }}" class="btn btn-dark">INICIO</a>
      </div>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>