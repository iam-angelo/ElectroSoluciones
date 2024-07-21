<?php 

	$servidor = "localhost";
	$nombreusuario = "root";
	$clave = "";
	$BD = "Ejetabla";


	$conexion = new mysqli ($servidor, $nombreusuario, $clave, $BD);

	if ($conexion -> connect_error)
	{
		die("Conexion fallida".$conexion -> connect_error);
		echo "No se pudo conectar a la base de datos";
	}

 ?>