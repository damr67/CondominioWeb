<!DOCTYPE html>
<html>
<head>
<title>Incio de la Pagina</title>
<meta charset="utf-8">
<meta charset="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>


<body >

<header>
	<?php 
      session_start();
      ?>
	<header>
  <a href="usuario0.php"><img src="Img/logo-abay.svg" width="230" height="200" alt="Sistema Restaurante Logo" class="logo"></img></a>
  <nav>
    <ul>
      <li><a href="usuario0.php">Mi inicio</a></li>
      <li><a href="usuario-perfil.php">Perfil</a></li>
      <li><a href="">Contacto</a></li>
      <li><a href="inicio.php">SALIR</a></li>
      <li class="nav-blue"><?php echo $_SESSION['usuario'] ?></li>
    </ul> 
  </nav>  
</header>
	
</header>

<section class="home-contacto">
	<form action="aggreporte.php" method="post">
		<textarea name="reporte"></textarea>
		<input type="submit" name="guardar" class="button button-accent">
	</form>
</section>

</body>
</html>