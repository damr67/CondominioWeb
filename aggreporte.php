<?php 


session_start();

require_once('datos/cn.php');
$user = $_SESSION['usuario'];

	if(isset($_POST['reporte'])){
		$reporte= $_POST['reporte'];
		$usuario = $user;
		$query = "INSERT INTO `reportes`(`usuario`, `descripcion`) VALUES ('$user','$reporte')";
				
		$resultado = mysqli_query($conexion,$query);
		if(!$resultado){
			echo "error al guardar";
		}else{
			echo "string";
			header ("Location: usuario0.php");
		}
		mysqli_close($conexion);
	}
