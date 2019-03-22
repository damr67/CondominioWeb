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
      if(isset($_SESSION['usuario'])){
        if($_SESSION['privilegio']==1){
          header('location:admin.php');
        }
      }else{  
          header('location:registro.php');
      }
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
  <div class="col-md-4"><h1>Bienvenido a Abay Online! </h1></div>
  <div class="col-md-4"></div>
</div>

<div class="row option-section">
  <div  class="option-item">
    <div class="card border-info mb-3 item-inside" style="max-width: 20rem;">
      <div class="card-body text-info">
        <h4 class="card-title">Acceso</h4>
        <p class="card-text">Registra nuevos dispositivos para tu acceso diario.</p>
        <a href="usuario-acceso.php" class="button button-accent button-blue">Acceso</a> 
      </div>
    </div>
  </div>
  <div  class="option-item">
    <div class="card border-info mb-3 item-inside" style="max-width: 20rem;">
      <div class="card-body text-info">
        <h4 class="card-title">Vehiculos</h4>
        <p class="card-text">Registra nuevos vehiculos, Actualiza los datos de tu vehiculo.</p>
        <a href="usuario-vehiculos.php" class="button button-accent button-blue">Vehiculos</a> 
      </div>
    </div>
  </div>
  <div  class="option-item">
    <div class="card border-info mb-3 item-inside" style="max-width: 20rem;">
      <div class="card-body text-info">
        <h4 class="card-title">Datos Personales</h4>
        <p class="card-text">Confirmar tus datos, Actualiza tus datos personales.</p>
        <a href="usuario-datos.php" class="button button-accent button-blue">Datos</a> 
      </div>
    </div>
  </div>
  <div  class="option-item">
    <div class="card border-danger mb-3 item-inside" style="max-width: 20rem;">
      <div class="card-body text-danger">
        <h4 class="card-title">REPORTES</h4>
        <p class="card-text">Si quieres reportar algun inconveniente presiona aqui.</p>
        <a href="usuario-reporte.php" class="button button-accent button-red">REPORTE</a> 
      </div>
    </div>
  </div>

 </body>
</html>