<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="sytle/registro.css">
    <style>
      .ima{
          width: 50%;
          height: 100%;
          overflow: hidden;
          float: left;
          background:white  no-repeat center;
          background-size: cover; 
      } 
    </style>

</head>
<body>
  <img src="https://www.pandasecurity.com/es/mediacenter/src/uploads/2021/07/pandasecurity-videojuegos-dinero.jpg" class="ima" id="im" alt="">

      <section class="hijo" id="contenido">
        <form action="registre.php" method="POST">
            <h3>Registro    </h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombres y Apellidos </label>
                <input type="text"  name="nom" class="form-control" aria-describedby="emailHelp"" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Direccion </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="direccion" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Correo Electronico  </label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirmacion de Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña_confirmar" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="fecha_nacimiento" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Sexo</label>
               <select class="form-select" aria-label="Default select example" name="sexo" required>
                <option selected disabled>---Seleccione su genero---</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
                <option value="O">Otros</option>
              </select>
            </div>
            <?php
                    # si hay un mensaje, mostrarlo
                    if (isset($_GET["mensaje"])) { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <?php echo $_GET["mensaje"] ?>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
            <?php } ?>
            <div class="text-center">
              <input type="submit" class="btn btn-success w-100" value="Registrarme">
            </div>
            <div class="pt-2">
              <p>Si tiene una cuenta. <a href="login.php" style=" color:black;">Inicar Secci&oacute;n</a> </p>
            </div>
          </form>

      </section>
    
</body>
</html>