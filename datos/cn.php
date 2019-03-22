<?php 

$conexion = mysqli_connect("127.0.0.1", "root", "", "residencia");

if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuraciĂłn: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuraciĂłn: " . mysqli_connect_error() . PHP_EOL;
    exit;
}else{
	
}
?>

