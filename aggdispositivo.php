<?php 
session_start();

require_once('datos/cn.php');
$user = $_SESSION['usuario'];
$id_user = $_SESSION['id_user'];


	if(isset($_POST['newnumber'])){
		$newnumber = $_POST['newnumber'];
		$usuario = $user;
		$id= $id_user;
		$query = "INSERT INTO dispositivos (id_usuario,usuario,operadora,numero) values ('$id','$usuario','0412','$newnumber')";
				
		$resultado = mysqli_query($conexion,$query);
		if(!$resultado){
			echo "error al guardar";
		}else{
			echo "string";
			header ("Location: usuario0.php");
		}
		mysqli_close($conexion);
	}


