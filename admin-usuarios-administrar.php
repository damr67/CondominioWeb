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
  <div class="col-md-4"><h1>Dispositivos Actuales</h1></div>
  <div class="col-md-4"></div>
</div>
<div class="row section-devices">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="card text-center">
      <div class="card-header title-usuario0">
        Usuarios <br>
      </div>
       <div class="row section-devices">
            <div class="col-md-1"><td><h6>Usuario</h6></td></div>
            <div class="col-md-1"><td><h6>Nombre</h6></td></div>
            <div class="col-md-1"><td><h6>Apellido</h6></td></div>
            <div class="col-md-2"><td><h6>Cedula</h6></td></div>
            <div class="col-md-2"><td><h6>Correo</h6></td></div>
            <div class="col-md-2"><td><h6>Direccion</h6></td></div>
            <div class="col-md-2"><td><h6>Telefono</h6></td></div>
            <div class="col-md-1"></div>
          </div>
      <?php  

        require_once('datos/cn.php');
        $query = "SELECT * FROM usuarios_vista";
        $result = mysqli_query($conexion,$query);
        while($mostrar=mysqli_fetch_array($result)){
          $_SESSION['id'] = $mostrar['id'];
      ?>
        <tr>
          <div class="row section-devices">
            <div class="col-md-1"><td><?php echo $mostrar['usuario']; ?></td></div>
            <div class="col-md-1"><td><?php echo $mostrar['nombre']; ?></td></div>
            <div class="col-md-1"><td><?php echo $mostrar['apellido']; ?></td></div>
            <div class="col-md-2"><td><?php echo $mostrar['cedula']; ?></td></div>
            <div class="col-md-2"><td><?php echo $mostrar['correo']; ?></td></div>
            <div class="col-md-2"><td><?php echo $mostrar['direccion']; ?></td></div>
            <div class="col-md-2"><td><?php echo $mostrar['telefono']; ?></td></div>
            <div class="col-md-1"><a href="eliminarusuario.php?id=<?php echo $_SESSION['id'] ?>" class="button-small button-accent button-red">x</a></div>
            <div class="col-md-4"></div> 
          </div>


        </tr>

        <?php 

        }

         ?>
        </div>
    </div>
    <div class="col-md-1"></div>
  </div>

  <div class="row button-section">
    <div class="col-md-6"></div>
    <div class="col-md-6">
        <a href="admin-usuarios.php" class="button-medium button-accent button-blue">Atras</a> 
        <a href="usuario0.php" class="button-medium button-accent button-red">Salir</a> 
    </div>
  </div>
</div>


 </body>
</html>