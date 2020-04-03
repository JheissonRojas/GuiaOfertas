<?php
session_start();
include 'conexion_menu.php';

conectar();
 
	$consulta=mysql_query("SELECT codigo, distrito FROM distrito");

	while($registro=mysql_fetch_array($consulta))
	{

                  echo "<li class='css3-notification'><a href='#'  onclick='active_opciones_distrito($registro[0])'  class='css3-notification'>$registro[1]</a></li>";
	}




desconectar();


?>