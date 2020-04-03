
<?php
function conectar()
{
	$conexion = mysql_connect('guiaofertasaqpcom.ipagemysql.com', 'jheisson', 'jheif156855%$GF'); 
        if (!$conexion) { 
                die('Could not connect: ' . mysql_error()); 
        } 
        echo 'Connected successfully <br><br>'; 
       mysql_select_db("ofertaaqp1568",$conexion); 
       echo 'base de datos seleccionada <br><br>'; 
}

function desconectar()
{
	mysql_close();
}
?>