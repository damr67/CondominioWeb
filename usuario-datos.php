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
      <li><a class="nav-blue" href="inicio.php">SALIR</a></li>
      <li class="nav-blue"><?php echo $_SESSION['usuario'] ?></li>
    </ul> 
  </nav>  
</header>

<div class="row title-usuario0">
  <div class="col-md-4"></div>
  <div class="col-md-4"><h1>Datos Personales</h1></div>
  <div class="col-md-4"></div>
</div>
 <?php  
       $user = $_SESSION['usuario'];
        require_once('datos/cn.php');
        $query = "SELECT * FROM usuarios WHERE usuario='$user'";
        $result = mysqli_query($conexion,$query);
        while($mostrar=mysqli_fetch_array($result)){

      ?>
  <form action="aggdatos.php" method="post" class="container title-usuario0-form" id="needs-validation" novalidate>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom01">Nombre</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre Segundo-Nombre" value="<?php echo $mostrar['nombre']  ?>" name="nombre" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationCustom02">Apellido</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Apellidos" value="<?php echo $mostrar['apellido']  ?>" name="apellido" required>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom01">Cedula de Identidad</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="301010101"  value="<?php echo $mostrar['cedula']  ?>" name="cedula" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationCustom02">Correo Electronico</label>
        <input type="email" class="form-control" id="validationCustom02" placeholder="ejemplo@ejemplo.com" value="<?php echo $mostrar['correo']  ?>" name="correo" required>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom03">Direccion</label>
        <input type="text" class="form-control" id="validationCustom03" placeholder="Direccion" value="<?php echo $mostrar['direccion']  ?>" name="direccion" required>
        <div class="invalid-feedback">
          Por favor ingresa la direccion.
        </div>
      </div>
      <div class="col-md-6 mb-6">
        <label for="validationCustom04">Numero telefonico</label>
        <input type="text" class="form-control" id="validationCustom04" placeholder="0412-555-5555" value="<?php echo $mostrar['telefono']  ?>" name="telefono" required>
        <div class="invalid-feedback">
          Por favor ingrese su numero telefonico.
        </div>
      </div>
      
    </div>
    <input type="submit" class="button-medium button-accent button-blue" name="guardar"> 
  </form>
    <?php 

        }

         ?>

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