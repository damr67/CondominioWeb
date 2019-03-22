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
  <form class="container title-usuario0-form" id="needs-validation" novalidate>
    <fieldset disabled>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom01">Nombre</label>
        <input type="text" id="disabledTextInput" class="form-control" id="validationCustom01" placeholder="Nombre Segundo-Nombre"  value="<?php echo $mostrar['nombre']  ?>" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationCustom02">Apellido</label>
        <input type="text" id="disabledTextInput" class="form-control" id="validationCustom02" placeholder="Apellidos" value="<?php echo $mostrar['apellido']  ?>" required>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom01">Cedula de Identidad</label>
        <input type="text" id="disabledTextInput" class="form-control" id="validationCustom01" placeholder="301010101"  value="<?php echo $mostrar['cedula']  ?>" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationCustom02">Correo Electronico</label>
        <input type="email" id="disabledTextInput" class="form-control" id="validationCustom02" placeholder="ejemplo@ejemplo.com" value="<?php echo $mostrar['correo']  ?>" required>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom03">Direccion</label>
        <input type="text" id="disabledTextInput" class="form-control" id="validationCustom03" placeholder="Direccion" value="<?php echo $mostrar['direccion']  ?>" required>
        <div class="invalid-feedback">
          Por favor ingresa la direccion.
        </div>
      </div>
      <div class="col-md-6 mb-6">
        <label for="validationCustom04">Numero telefonico</label>
        <input type="text" id="disabledTextInput" class="form-control" id="validationCustom04" placeholder="0412-555-5555" value="<?php echo $mostrar['telefono']  ?>" required>
        <div class="invalid-feedback">
          Por favor ingrese su numero telefonico.
        </div>
      </div>

      
    </div>
    <a href="usuario0.php" class="button-medium button-accent button-blue">OK</a> 
  </form>
  <?php 

        }

         ?>


  <div class="row title-usuario0">
  <div class="col-md-4"></div>
  <div class="col-md-4"><h1>Mis Vehiculos</h1></div>
  <div class="col-md-4"></div>
</div>
<div class="row section-devices">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="card text-center">
     
         <?php  
        $query3 = "SELECT * FROM vehiculos WHERE usuario='$user'";
        $result3 = mysqli_query($conexion,$query3);
        while($mostrar3=mysqli_fetch_array($result3)){
      ?>
      
      <tr>
          <div class="row section-devices">
            <div class="col-md-1"></div>
            <div class="col-md-2"><td>Placa</td></div>
            <div class="col-md-2"><td>Marca</td></div>
            <div class="col-md-2"><td>Modelo</td></div>
            <div class="col-md-2"><td>Color</td></div>
            <div class="col-md-2"><td>Año</td></div>
          </div>
          <div class="row section-devices">
            <div class="col-md-1"></div>
            <div class="col-md-2"><td><?php echo $mostrar3['placa'] ?></td></div>
            <div class="col-md-2"><td><?php echo $mostrar3['marca'] ?></td></div>
            <div class="col-md-2"><td><?php echo $mostrar3['modelo'] ?></td></div>
            <div class="col-md-2"><td><?php echo $mostrar3['color'] ?></td></div>
            <div class="col-md-2"><td><?php echo $mostrar3['ano'] ?></td></div>
          </div>


        </tr>

        <?php 

        }

         ?>
        </div>
    </div>
  </div>
  <div class="col-md-2"></div>

  <div class="row title-usuario0">
  <div class="col-md-4"></div>
  <div class="col-md-4"><h1>Dispositivos Actuales</h1></div>
  <div class="col-md-4"></div>
</div>
<div class="row section-devices">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="card text-center">
      <div class="card-header title-usuario0">
        Numeros telefonicos
      </div>
     
       <?php  
        $query2 = "SELECT numero FROM dispositivos WHERE usuario='$user'";
        $result2 = mysqli_query($conexion,$query2);
        $cont=0;
        while($mostrar2=mysqli_fetch_array($result2)){

           $cont=$cont + 1;
      ?>
        <tr>
          <div class="row section-devices">
            <div class="col-md-4"></div>
            <div class="col-md-4"><td><?php echo $cont.".   ".$mostrar2['numero'] ?></td></div>
            <div class="col-md-4"></div> 
          </div>


        </tr>

        <?php 

        }

         ?>
        </div>
    </div>
  </div>
  <div class="col-md-2"></div>

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