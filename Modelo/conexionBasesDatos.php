<?php


function Conectarse()
{
	$objConexion = new mysqli("MYSQL_SERVER","root","Juan3108","Andromeda");
	if ($objConexion->connect_errno)
	{
		echo "Error de conexion a la Base de Datos ".$objConexion->connect_error;
		exit();
	}
	else
	{
		return $objConexion;
	}
}

?>