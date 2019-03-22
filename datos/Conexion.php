<?php

class Conexion{

	public static function conectar(){
		try{
			/**Conexion a la base de datos**/
			$cn = new PDO("mysql:host=localhost;dbname=residencia","root","");
			
			//Retorna una conexion PDO
			return $cn; 

		}catch (PDOException $e){
			die($ex->getMessage());
 		}
	}

}


Conexion::conectar();