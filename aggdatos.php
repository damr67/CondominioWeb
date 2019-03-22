<?php 


session_start();

require_once('datos/cn.php');
$user = $_SESSION['usuario'];

	if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['cedula']) &&isset($_POST['correo']) && isset($_POST['direccion']) && isset($_POST['telefono']) ){

		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$cedula = $_POST['cedula'];
		$correo = $_POST['correo'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$usuario = $user;
		$query = "UPDATE `usuarios` SET `nombre`='$nombre',`apellido`='$apellido',`cedula`='$cedula',`correo`='$correo',`direccion`='$direccion',`telefono`='$telefono' WHERE usuario='damr67'";
				
		$resultado = mysqli_query($conexion,$query);
		if(!$resultado){
			echo "error al guardar";
		}else{
			echo "string";
			header ("Location: usuario0.php");
		}
		mysqli_close($conexion);
		
	}



