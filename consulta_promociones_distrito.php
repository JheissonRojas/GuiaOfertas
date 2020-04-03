<?
session_start(); 

//$var=$_GET('varPHP');
echo "Hola como estas ";
echo $_SESSION['var_distrito_activo'];
include 'conexion_menu.php';
conectar();

$var=$_SESSION['var_distrito_activo'];
echo $_SESSION['var_distrito_activo'];
echo $var;
//estado, tipo2, tipo3, negocio

$consulta2=mysql_query("SELECT imagen, tipo1, tipo2, tipo3, desc_1, desc_2, negocio, url, telefono FROM promocion WHERE (now() BETWEEN fec_ini AND fec_fin ) AND tipo1=1 AND distrito = $var ORDER BY ranking ASC ");



	while($registro=mysql_fetch_array($consulta2))
	{


If($registro[1]==1) 
{
//############   verifica si esta activo y procede a imprimir deacuerdo al formato ##########
if($registro[2]==1)
{
//############   verifica si es del tipo 2  imprime con formato para tipo 2 ####################


}elseif ($registro[3]==1){
//############   verifica si es del tipo 3  imprime con formato para tipo 3 ####################



}else{

echo "$registro[0]  <br><br>";
echo "$registro[1] <br><br>";
echo "$registro[2] <br><br>";
echo "$registro[3] <br><br>";
echo "$registro[4] <br><br>";
echo "$registro[5] <br><br>";
echo "$registro[6] <br><br>";
echo "$registro[7] <br><br>";
echo "$registro[8] <br><br>";
echo "<hr>  <br><br>";

}
}
}
mysql_free_result($consulta2);

desconectar();

?>