<?php 


session_start();
$id = $_GET['id'];

require_once('datos/cn.php');

$query = "DELETE FROM `vehiculos` WHERE id='$id'";
				
$resultado = mysqli_query($conexion,$query);
if(!$resultado){
		echo "error al guardar";
}else{
		echo "string";
		header ("Location: usuario-vehiculo-administrar.php");
		}
mysqli_close($conexion);
	



