<!DOCTYPE html>
<html>
<head>
	<title>Cajero -  Seccion de Ventas</title>
	<meta charset="utf-8">
	<meta charset="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
	<header>
	<a href="inicio.html"><img src="Img/Logo-2.png" width="230" height="200" alt="Sistema Restaurante Logo" class="logo"></img></a>
	<nav>
		<ul>
			<li><a href="inicio.html">Inicio</a></li>
			<li><a href="registro.html">Entrar</a></li>
			<li><a href="">Empleos</a></li>
			<li><a href="">Nosotros</a></li>
			<li><a href="">Contacto</a></li>
		</ul>	
	</nav>	
	</header>



	<!-- Weight input Section-->
	<section class="peso-input">
		<h1 class="title-caja">Ingrese el peso de la porcion</h1>
		<form>
			<input class="placeholder-txt" type="number" name="peso" placeholder="Peso"><br>
			<div class="double-btn">
				<a href="" class="button-small button-blue">Agregar</a>	
				<a href="" class="button-small button-red">Cancelar</a>	
			</div>
		</form>
	</section>

	<!--Double section  CLient &&  Order-->
	<div class="double-section">
		<div class="middle-section middle-left">
			<h1 class="title-caja">Datos del Cliente</h1>
			  <form class="px-4 py-3" action="cajero_venta.php">
			    <div class="form-group input-cliente">
			      <label for="exampleDropdownFormEmail1">Cedula</label>
			      <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="26326002" required>
			    </div>
			    <div class="form-group input-cliente">
			      <label for="exampleDropdownFormEmail1">Rif</label>
			      <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="26326002J" required>
			    </div>
			    <div class="form-group input-cliente">
			      <label for="exampleDropdownFormEmail1">Nombre</label>
			      <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Daniel" required>
			    </div>
			    <div class="form-group input-cliente">
			      <label for="exampleDropdownFormEmail1">Apellido</label>
			      <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Moya" required>
			    </div>
				 <div class="form-group input-cliente">
			      <label for="exampleDropdownFormEmail1">Direccion</label>
			      <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Porlamar, Estado Nueva Esparta" required>
			    </div>				  
			     <div class="form-group input-cliente">
			      <label for="exampleDropdownFormEmail1">Numero de Telefono</label>
			      <input type="number" class="form-control" id="exampleDropdownFormEmail1" placeholder="04121234567" required>
			    </div>
			    <button type="submit" class="btn btn-primary" required>Aceptar</button>
			  </form>
						
			<h1 class="title-caja metodos-pago">Metodos de Pago</h1>
			<div class="btn-group">
			  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			    Action
			  </button>
			  <div class="dropdown-menu">
			    <a class="dropdown-item" href="#">Action</a>
			    <a class="dropdown-item" href="#">Another action</a>
			    <a class="dropdown-item" href="#">Something else here</a>
			    <div class="dropdown-divider"></div>
			    <a class="dropdown-item" href="#">Separated link</a>
			  </div>
			</div>

		</div>
		<div class="middle-section middle-right">
			<h1 class="title-caja">Orden</h1>
			
			<ul class="list-group">
			  <li class="list-group-item d-flex justify-content-between align-items-center active">
			    Nombre
			    <span class="badge badge-primary badge-pill">14</span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Dapibus ac facilisis in
			    <span class="badge badge-primary badge-pill">2</span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Morbi leo risus
			    <span class="badge badge-primary badge-pill">1</span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Morbi leo risus
			    <span class="badge badge-primary badge-pill">1</span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Morbi leo risus
			    <span class="badge badge-primary badge-pill">1</span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Morbi leo risus
			    <span class="badge badge-primary badge-pill">1</span>
			  </li>
			</ul>

		</div>
	</div>
	<div style="clear:both"></div>

	<!--Double section  Food && (Drinks && Deserts)-->
	<div class="double-section">
		<div class="middle-section middle-left">
			<h1 class="title-caja">Combos y Platos Especiales</h1>
			<a href=""><img class="img-item" src="Img/food HD.jpg"></a>
			<a href=""><img class="img-item" src="Img/food HD.jpg"></a>
			<a href=""><img class="img-item" src="Img/food HD.jpg"></a>
			<a href=""><img class="img-item" src="Img/food HD.jpg"></a>
			<a href=""><img class="img-item" src="Img/food HD.jpg"></a>
			<a href=""><img class="img-item" src="Img/food HD.jpg"></a>
			<a href=""><img class="img-item" src="Img/food HD.jpg"></a>
			<a href=""><img class="img-item" src="Img/food HD.jpg"></a>
			<a href=""><img class="img-item" src="Img/food HD.jpg"></a>
		</div>
		<div class="middle-section middle-right">
			
		</div>
	</div>
	<div style="clear:both"></div>

	<div class="carousel-item">
	  	<img src="Img/clliente.jpg" alt="Cliente">
		<div class="carousel-caption d-none d-md-block">
		    <h3>Menu Rocoto Exotic!</h3>
		    <p>Comida peruana en Fusios, a la comida Latina.</p>
	  </div>
	</div>	





	<script type="text/javascript" src='js/main.js'></script>
<body>

</body>
</html>