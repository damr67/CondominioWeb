<?php 

session_start();
require_once("datos/cn.php");
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM usuarios WHERE usuario='$username' AND contrasena='$password'";

$resultado = mysqli_query($conexion,$query);
$filas=mysqli_num_rows($resultado);
	
	/*
	*OJO AQUI
	*OBTENIENDO EL VALOR DE PRIVILEGIO DEL USUARIO
	* Para saber si es admin o user
	*   campo 9 en el registro de de la tabla usuarios
	*/
	$fila = mysqli_fetch_row($resultado);
	$privilegio = $fila[9];
	$id_user = $fila[0];


if($filas>0){
	$_SESSION['usuario'] = $username;
	$_SESSION['id_user'] = $id_user;
	$_SESSION['privilegio'] = $privilegio;
	if($_SESSION['privilegio']==0){
		header('location:usuario0.php');
	}else if(($_SESSION['privilegio']==1)){
		header('location:admin.php');
	}
}else{
	header('location:registro.php');
}

mysqli_free_result($resultado);
require_once('datos/cerrar.php');