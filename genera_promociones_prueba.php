<?
session_start(); 

//echo $_SESSION['var_categoria_activa'];

//include 'conexion_menu.php';
//conectar();

$cont_tipo2=0;
$cont_tipo3=0;

//echo "antes del while <br>";
//include 'bloque_prueba.php';
//include 'bloques.php';
echo "<script src='ajax2.js'></script>"; 

 
  
  


function obtiene_promociones_categoria()
{

echo"hola como estas ";

/*
$var=$_SESSION['var_categoria_activa'];

$consulta2=mysql_query("SELECT imagen, tipo1, tipo2, tipo3, desc_1, desc_2, precio, negocio, url, telefono FROM promocion WHERE (now() BETWEEN fec_ini AND fec_fin ) AND tipo1=1  AND categoria = $var ORDER BY ranking ASC ");
*/

//while($registro=mysql_fetch_array($consulta2))
//{



/*
echo 'javascript:modelo_div()'+'javascript:tipo1_1('$registro[0], $registro[1], $registro[2], $registro[3], $registro[4], $registro[5], $registro[6], $registro[7], $registro[8], $registro[9]);';
*¨/
/*
MostrarConsulta(tipo1_1('$registro[0], $registro[1], $registro[2], $registro[3], $registro[4], $registro[5], $registro[6], $registro[7], $registro[8], $registro[9]););
*/


//}
//mysql_free_result($consulta2);

//desconectar();


//MostrarConsulta(consulta_promociones_categoria.php);

}

?>