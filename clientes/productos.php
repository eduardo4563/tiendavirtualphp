<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../sytle/navegador.css">

  <script src="https://kit.fontawesome.com/becf71642c.js" crossorigin="anonymous"></script>
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <nav class="nave">
    <main class="s">
      <div class="ietnme">
        <ul class="te "><a href="../index.html" style="text-decoration: none;color: white;" class="">Inicio</a></ul>
        <ul class="te "><a href="acerca.html" style="text-decoration: none;color: white;" class="">Acerca de</a></ul>
        <ul class="te active"><a href="productos.php" style="text-decoration: none;color: white;" class="">Productos</a></ul>
        <ul class="te">Tiendas</ul>
        <ul class="te">Conctacto</ul>
        <ul class="te">Inicar seccion</ul>
        <ul class="te">Registrarse</ul>
      </div>

    </main>
  </nav>
  <div class="pt-5"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3">
          <h4>Filtrado</h4>
          <hr>
          <h6 class="text-info">Seleccione su Marca</h6>
          <ul class="list-group">
            
          </ul>
      </div>
      <div class="col-lg-9">

      </div>
    </div>
  </div>
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('ul').on('click',function(){
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
      })
    })
  </script>
</html>