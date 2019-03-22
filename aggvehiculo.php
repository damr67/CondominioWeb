<?php 
session_start();

require_once('datos/cn.php');
$user = $_SESSION['usuario'];

	if(isset($_POST['placa']) && isset($_POST['marca']) && isset($_POST['modelo']) &&isset($_POST['ano']) && isset($_POST['color']) ){

		$placa = $_POST['placa'];
		$marca = $_POST['marca'];
		$modelo = $_POST['modelo'];
		$ano = $_POST['ano'];
		$color = $_POST['color'];
		$usuario = $user;
		$query = "INSERT INTO `vehiculos`(`usuario`, `placa`, `marca`, `modelo`, `color`, `ano`) VALUES ('$usuario','$placa','$marca','$modelo','$color','$ano')";
				
		$resultado = mysqli_query($conexion,$query);
		if(!$resultado){
			echo "error al guardar";
		}else{
			echo "string";
			header ("Location: usuario0.php");
		}
		mysqli_close($conexion);
		
	}

