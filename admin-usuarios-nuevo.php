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
  <form action="aggusuarios.php" method="post" class="container title-usuario0-form" id="needs-validation">
      <div class="row">
      <div class="col-md-8 mb-4">
        <label for="validationCustom01">Usuario</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="ejemplo23"  name="usuario" autofocus required>
      </div>
      <div class="col-md-2 mb-1">
        <label for="validationCustom01">Tipo de Usuario</label><br> 
        <select name="privilegio">
          <option value="0">Usuario</option>
          <option value="1">Administrador</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom01">Contraseña</label>
        <input type="password" class="form-control" id="validationCustom01" placeholder="*******"  name="contrasena" autofocus required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationCustom02"> Repertir Contraseña</label>
        <input type="password" class="form-control" id="validationCustom02" placeholder="*******@ejemplo.com" name="contrasena2" autofocus required>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom01">Nombre</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre Segundo-Nombre" name="nombre" autofocus required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationCustom02">Apellido</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Apellidos"  name="apellido" autofocus required>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom01">Cedula de Identidad</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="301010101"  v name="cedula" autofocus required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationCustom02">Correo Electronico</label>
        <input type="email" class="form-control" id="validationCustom02" placeholder="ejemplo@ejemplo.com"  name="correo" autofocus required>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom03">Direccion</label>
        <input type="text" class="form-control" id="validationCustom03" placeholder="Direccion"  name="direccion" autofocus required>
        <div class="invalid-feedback">
          Por favor ingresa la direccion.
        </div>
      </div>
      <div class="col-md-6 mb-6">
        <label for="validationCustom04">Numero telefonico</label>
        <input type="text" class="form-control" id="validationCustom04" placeholder="0412-555-5555"  name="telefono" autofocus equired>
        <div class="invalid-feedback">
          Por favor ingrese su numero telefonico.
        </div>
      </div>
      
    </div>
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