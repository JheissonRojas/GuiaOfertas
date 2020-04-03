<?php
session_start();
include 'conexion_menu.php';

conectar();


	$consulta2=mysql_query("SELECT codigo, categoria FROM categoria");
	
	while($registro=mysql_fetch_array($consulta2))
	{
		

               echo "<li class='css3-notification'><a href='#' onclick='active_opciones_categoria($registro[0])' class='css3-notification'>$registro[1]</a></li>";


	}





desconectar();


?>