<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  
   
   
<body>
  <?php 
      session_start();
      ?>
  <header>
  <a href="usuario0.php"><img src="Img/logo2-abay.svg" width="230" height="200" alt="Sistema Restaurante Logo" class="logo"></img></a>
  <nav>
    <ul>
      <li><a class="nav-blue" href="usuario0.php">Mi inicio</a></li>
      <li><a  class="nav-blue" href="usuario-perfil.php">Perfil</a></li>
      <li><a class="nav-blue" href="usuario-reporte.php">Contacto</a></li>
      <li><a class="nav-blue" href="cerrarsesion.php">SALIR</a></li>
      <li class="nav-blue"><?php echo $_SESSION['usuario'] ?></li>
    </ul> 
  </nav>  
</header>

<div class="row title-usuario0">
  <div class="col-md-4"></div>
  <div class="col-md-4"><h1>Nuevo Vehiculo</h1></div>
  <div class="col-md-4"></div>
</div>
  <form action="aggvehiculo.php" method="post" class="container title-usuario0-form" id="needs-validation" novalidate>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom01">Placa</label>
        <input type="text" class="form-control"  name="placa" id="validationCustom01" placeholder="HASD23A2"  required autofocus>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationCustom02">Marca</label>
        <input type="text" class="form-control"  name="marca" id="validationCustom02" placeholder="Toyota" required autofocus>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Modelo</label>
        <input type="text" class="form-control"  name="modelo" id="validationCustom01" placeholder="Yaris"  required autofocus>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Año</label>
        <input type="number" class="form-control"  name="ano" id="validationCustom02" placeholder="2005" required autofocus>
      </div>
      <div class="col-md-4 mb-6">
        <label for="validationCustom02">Color</label>
        <input type="text" class="form-control" name="color"  id="validationCustom02" placeholder="Azul Claro" required> autofocus
      </div>
    </div>
      
    </div>
    <a href="usuario-vehiculos.php" class="button-medium button-accent button-red">Cancelar</a> 
    <input type="submit" class="button-medium button-accent button-blue" > 
  </form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';

  window.addEventListener('load', function() {
    var form = document.getElementById('needs-validation');
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  }, false);
})();
</script>
  
 </body>
</html>