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
  <div class="col-md-4"><h1>Control de Acceso</h1></div>
  <div class="col-md-4"></div>
</div>

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-3">
    <div class="card item-inside" style="width: 20rem;">
      <img class="card-img-top" src="Img/nuevousu.png" alt="Card image cap">
      <div class="card-body">
        <p class="card-text title-small-blue">Crear un nuevo usuario </p>
        <a href="admin-usuarios-nuevo.php" class="button-medium  button-accent button-blue">Agregar</a> 
      </div>
    </div>
  </div> 
  <div class="col-md-3">
    <div class="card item-inside" style="width: 20rem;">
      <img class="card-img-top" src="Img/usuadmin.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text title-small-blue">Administra tus usuarios</p>
        <a href="admin-usuarios-administrar.php" class="button-medium  button-accent button-blue">Administrar</a> 
      </div>
    </div>
  </div> 
  <div class="col-md-3"></div>
</div>

 </body>
</html>