<?
session_start(); 

echo $_SESSION['var_categoria_activa'];


//includeCSS('style.css');
//include 'contenido_tipo1.php';
//include 'contenido_tipo2.php';
//include 'contenido_tipo3.php';
include 'conexion_menu.php';
conectar();

$cont_tipo2=0;
$cont_tipo3=0;

echo "antes del while <br>";
include 'bloques.php';
 

?>


  
  
  

<?
$var=$_SESSION['var_categoria_activa'];
//estado, tipo2, tipo3, negocio

$consulta2=mysql_query("SELECT imagen, tipo1, tipo2, tipo3, desc_1, desc_2, precio, negocio, url, telefono FROM promocion WHERE (now() BETWEEN fec_ini AND fec_fin ) AND tipo1=1 AND categoria = $var ORDER BY ranking ASC ");



	while($registro=mysql_fetch_array($consulta2))
	{





If($registro[1]==1) 
{
//############   verifica si esta activo es TIPO 1 y verifica si es tipo 2 o 3 ##########
if($registro[2]==1)
{
//############   verifica si es del tipo 2  imprime con formato para tipo 2 ####################
$cont_tipo2++;
tipo2($registro[0], $registro[1], $registro[2], $registro[3], $registro[4], $registro[5], $registro[6], $registro[7], $registro[8], $registro[9],$cont_tipo2);

if($cont_tipo2==2)
{$cont_tipo2=0;}

}elseif ($registro[3]==1){
//############   verifica si es del tipo 3  imprime con formato para tipo 3 ####################

$cont_tipo3++;
tipo3_1($registro[0], $registro[1], $registro[2], $registro[3], $registro[4], $registro[5], $registro[6], $registro[7], $registro[8], $registro[9],$cont_tipo3);

if($cont_tipo3==3)
{$cont_tipo3=0;}


}else{
//############   verifica si es del tipo 1  imprime con formato para tipo 1 ####################

tipo1_1($registro[0], $registro[1], $registro[2], $registro[3], $registro[4], $registro[5], $registro[6], $registro[7], $registro[8], $registro[9]);



}
}
}
mysql_free_result($consulta2);

desconectar();

?>