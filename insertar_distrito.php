<HTML>
<HEAD>
<TITLE>Insertar.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base
include "conexion.php";

conectar();

mysql_select_db("ofertaaqp1568"); 
//mysql_connect("localhost","tu_user","tu_password"); 


$codigo=$_POST['codigo']; 
$distrito=$_POST['distrito']; 

$sql="INSERT INTO distrito (codigo, distrito) VALUES ('{$codigo}', '{$distrito}')";

//mysql_db_query("ofertaaqp1568",$sql,$conexion) or die('.Error.'.mysql_error());
mysql_db_query("ofertaaqp1568",$sql) or die('.Error.'.mysql_error());



desconectar ();

?>
<h1><div align="center">Registro Insertado</div></h1>
<div align="center"><a href="bd26.php">Ingresar otro registro</a></div>
</BODY>
</HTML>