<?php 




session_start();

require_once('datos/cn.php');

	if(isset($_POST['usuario']) && isset($_POST['privilegio']) && isset($_POST['contrasena']) && isset($_POST['contrasena2']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['cedula']) &&isset($_POST['correo']) && isset($_POST['direccion']) && isset($_POST['telefono']) ){

		$usuario = $_POST['usuario'];
		$privilegio = $_POST['privilegio'];
		$contrasena = $_POST['contrasena'];
		$contrasena2 = $_POST['contrasena2'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$cedula = $_POST['cedula'];
		$correo = $_POST['correo'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		if ($contrasena==$contrasena2){ 

			$query = "INSERT INTO usuarios_vista (usuario,nombre,apellido,cedula,correo,direccion,telefono,contrasena,privilegio) values ('$usuario','$nombre','$apellido','$cedula','$correo','$direccion','$telefono','$contrasena','$privilegio')";
				
			$resultado = mysqli_query($conexion,$query);
			if(!$resultado){
				echo "error al guardar";
			}else{
				echo "string";
				header ("Location: admin.php");
			}
			mysqli_close($conexion);

		}else{
			header('location:admin-usuarios-nuevo.php');
		}
		
	}


