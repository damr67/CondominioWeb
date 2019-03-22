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
  <div class="col-md-4"><h1>Nuevo Dispositivo</h1></div>
  <div class="col-md-4"></div>
</div>

  <form class="container title-usuario0-form" id="needs-validation" novalidate action="aggdispositivo.php" method="post">
    <div class="row">
      <div class="col-md-3 mb-3">
        <label for="validationCustom04">Operadora</label><br>
         <select name="operadora">
          <option value="0412">0412</option>
          <option value="0416">0416</option>
          <option value="0414">0414</option>
          <option value="0424">0424</option>
          <option value="0426">0426</option>
          <option value="0295">0295</option>
        </select>
      </div>
    <div class="col-md-6 mb-6">
        <label for="validationCustom04">Numero telefonico</label>
        <input type="text" class="form-control" name="newnumber" placeholder="555 5555" maxlength="7" required autofocus>
        <div class="invalid-feedback">
          Por favor ingrese su numero telefonico.
        </div>
      </div>
      
    </div>
    <br><br>
    <a href="usuario0.php" class="button-medium button-accent button-red">Cancelar</a> 
    <input type="submit" class="button-medium button-accent button-blue" name="guardar"> 
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