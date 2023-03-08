<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" &amp;gt;>
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="sytle/login.css?1515ddds1">

  <style>
    .ima {
      width: 50%;
      height: 100%;
      overflow: hidden;
      float: left;
      background-size: cover;
    }
  </style>
</head>

<body>
  <a href="../index.html"><img src="https://www.segurilatam.com/wp-content/uploads/sites/5/2022/08/recomendaciones-videojuegos.jpg" style="background: no-repeat center;" alt="" id="im" class="ima img-fluid"></a>


  <section class="hijo" id="contenido">
    <div class="banners"></div>
    <form action="logins.php" method="post">
      <h3>Accesso login</h3>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label ds">Correo Electronico </label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label ds">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña" required>
      </div>
      <div class="form-label">
        Olvidastes tu contraseña?<a href="" class="p-2 s">Click para recuperarla</a>
      </div>
      <?php
      # si hay un mensaje, mostrarlo
      if (isset($_GET["mensaje"])) { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <?php echo $_GET["mensaje"] ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php } ?>
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary" value="Ingresar">
      </div>
      <hr>
      <div class="text-center">
        <a href="registrar.php" class="btn btn-success w-100">Registrarse</a>
      </div>

    </form>

  </section>

</body>

</html>