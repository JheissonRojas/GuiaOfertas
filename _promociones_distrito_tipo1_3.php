<?
session_start(); 

echo $_SESSION['var_categoria_activa'];


include 'conexion_menu.php';
conectar();

$var=$_SESSION['var_distrito_activo'];
//echo $_SESSION['var_distrito_activo'];
//echo $var;
//echo "antes del while <br>";
include 'bloques.php';
 

?>


  
  
  

<?

$consulta2=mysql_query("SELECT imagen, desc_1, desc_2, precio, negocio, url, telefono, codigo_promo, fin_promo, desc_promo FROM promocion WHERE (now() BETWEEN fec_ini AND fec_fin ) AND tipo1=1 AND distrito = $var ORDER BY ranking ASC LIMIT 4,2 ");



while($registro=mysql_fetch_array($consulta2))
{
tipo1_1($registro[0], $registro[1], $registro[2], $registro[3], $registro[4], $registro[5], $registro[6], $registro[7], $registro[8], $registro[9]);
}
mysql_free_result($consulta2);

desconectar();

?>