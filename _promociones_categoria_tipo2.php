<?
session_start(); 

//echo $_SESSION['var_categoria_activa'];

include 'conexion_menu.php';
conectar();

/*echo "antes del while <br>"; */
include 'bloques.php';
 

?>


<?
$var=$_SESSION['var_categoria_activa'];
//estado, tipo2, tipo3, negocio

$consulta2=mysql_query("SELECT imagen, desc_1, desc_2, precio, negocio, url, telefono, codigo_promo, fin_promo, desc_promo FROM promocion WHERE (now() BETWEEN fec_ini AND fec_fin ) AND tipo2=1 AND categoria = $var ORDER BY ranking ASC LIMIT 4");

$flag=0;
$cont=0;
$cont2=0;
$numero_filas=mysql_num_rows($consulta2);
while($registro=mysql_fetch_array($consulta2))
{
$cont++;
$cont2++;
if($cont==$numero_filas){
$flag=1;
tipo2($registro[0], $registro[1], $registro[2], $registro[3], $registro[4], $registro[5], $registro[6], $registro[7], $registro[8], $registro[9], $cont2, $flag);
}else{
tipo2($registro[0], $registro[1], $registro[2], $registro[3], $registro[4], $registro[5], $registro[6], $registro[7], $registro[8], $registro[9], $cont2, $flag);
}
if($cont2==2)
{$cont2=0;}

}
mysql_free_result($consulta2);

desconectar();

?>