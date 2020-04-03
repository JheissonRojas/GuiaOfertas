<?php
session_start(); 
$conexion;

function conectar()
{
        global $conexion;
	$conexion = mysql_connect('guiaofertasaqpcom.ipagemysql.com', 'jheisson', 'jheif156855%$GF'); 
 /* $_SESSION['conexion']*/
        if (!$conexion) { 
                die('Could not connect: ' . mysql_error()); 
        } 
       // echo 'Connected successfully <br><br>'; 
       mysql_select_db("ofertaaqp1568",$conexion); 
     // echo 'base de datos seleccionada <br><br>'; 
}

function desconectar()
{
       global $conexion;
	mysql_close($conexion);
}
?>