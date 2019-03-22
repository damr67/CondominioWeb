<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
  
  </head>
  
   
   
<body>
  <!--MUY IMPORTANTE validacion de sesion antigua-->
  <?php 
      session_start();
      if(isset($_SESSION['usuario'])){
        header('location:usuario0.php');
      }
   ?>
  <header>
  <a href="inicio.php"><img src="Img/logo2-abay.svg" width="230" height="200" alt="Sistema Restaurante Logo" class="logo"></img></a>
  <nav>
    <ul>
      <li><a class="nav-blue" href="inicio.php">Inicio</a></li>
      <li><a  class="nav-blue" href="registro.php">Entrar</a></li>
      <li><a class="nav-blue" href="">Nosotros</a></li>
      <li><a class="nav-blue" href="contacto.php">Contacto</a></li>
      
    </ul> 
  </nav>  
</header>

<div class="row login">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <form id="loginForm" action="verificar.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Usuario</label>
        <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="nombreUsuario" autofocus required>
        <small id="emailHelp" class="form-text text-muted">No puede ingresar el correo</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" name="password" placeholder="*********" autofocus required>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input">
          Check me out
        </label>
      </div>
       <input  class="button-medium button-accent button-blue" type="submit" name="Ingresar" value="Ingresar"></a> 
    </form>
    </div>
    <div class="col-md-4"></div>
</div>





<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript" src="vista/assets/js/app.js"></script>-->
 </body>
</html>