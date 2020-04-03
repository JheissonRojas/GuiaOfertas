<?php 
$distrito=$_POST['distrito']; 
$categoria=$_POST['categoria']; 
$ranking=$_POST['ranking']; 
$fec_ini=$_POST['fec_ini']; 
$fec_fin=$_POST['fec_fin']; 
$desc_1=$_POST['desc_1']; 
$desc_2=$_POST['desc_2']; 
$negocio =$_POST['negocio']; 
$ruc=$_POST['ruc']; 
$responsable=$_POST['responsable']; 
$carpeta=$_POST['carpeta']; 


/*$guardar = mysql_query("INSERT INTO producto (distrito, categoria, ranking, fec_ini, fec_fin, desc_1, desc_2, negocio, ruc, responsable, imagen) VALUES ($distrito, $categoria, $ranking, $fec_ini, $fec_fin, $desc_1, $desc_2, $negocio, $ruc, $responsable);"); */

$sql="INSERT INTO promocion (codigo, distrito, categoria, ranking, fec_ini, fec_fin, desc_1, desc_2, negocio, ruc, responsable, imagen) VALUES (0, $distrito, $categoria, $ranking, '$fec_ini', '$fec_fin', '$desc_1', '$desc_2', '$negocio', '$ruc', '$responsable', '$carpeta')";

if(mysql_query=($sql,$conexion))
{
echo "<h1><div align='center'>Registro Insertado</div></h1> ";
echo "<div align='center'><a href='/ofertasaqp10/bd26.php'>Ingresar otro registro</a></div>"
}else
{
die('Error. '.mysql_error());
}
 
?> 

