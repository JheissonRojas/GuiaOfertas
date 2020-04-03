<?php
session_start();
include 'conexion_menu.php';

 

function consulta_categorias($categoria)
{


}

function consulta_distritos($categoria)
{


}


function obtiene_distritos_menu()
{

conectar();
	

	$consulta=mysql_query("SELECT codigo, distrito FROM distrito");

	while($registro=mysql_fetch_array($consulta))
	{

                  echo "<li class='css3-notification'><a href='#resultado'  onclick='SetVariablesDistrito($registro[0]);active_opciones_distrito($registro[0])'  class='css3-notification'> &nbsp &nbsp &nbsp  $registro[1]  &nbsp &nbsp &nbsp </a></li>";
	}

mysql_free_result($consulta);
desconectar();
}


function obtiene_categorias_menu()
{

conectar();

	$consulta2=mysql_query("SELECT codigo, categoria FROM categoria");
	
	while($registro=mysql_fetch_array($consulta2))
	{
		

               echo "<li class='css3-notification'><a href='#resultado' onclick='fantasma($registro[0]);active_opciones_categoria($registro[0])' class='css3-notification'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp $registro[1]  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a></li>";

/* 
              echo "<li class='css3-notification'><a href='#' onclick='$registro[0]' class='css3-notification'>$registro[1]</a></li>";
*/
	}

mysql_free_result($consulta2);
desconectar();	
} 


?>