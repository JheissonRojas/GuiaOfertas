<?
session_start(); 

echo $_SESSION['var_negocio'];


include 'conexion.php';
conectar();


echo "antes del while <br>";

$busqueda=$_SESSION['var_negocio'];
echo $busqueda.'<br>';


$consulta2=mysql_query("SELECT codigo,distrito,categoria,tipo1,tipo2,tipo3,tipo4,posicion,ranking,fec_ini,fec_fin,precio,negocio,ruc,responsable,imagen, url, telefono FROM promocion WHERE MATCH (desc_2, negocio) AGAINST ('".$busqueda."' IN BOOLEAN MODE) ORDER BY ranking DESC LIMIT 10");

/*
$consulta2=mysql_query("SELECT * FROM promocion WHERE MATCH (desc_2, negocio) AGAINST ('".$busqueda."' IN BOOLEAN MODE) ORDER BY ranking DESC LIMIT 10");
*/

while($registro=mysql_fetch_array($consulta2))
{
//tipo1_1($registro[0], $registro[1], $registro[2],$registro[3],$registro[4],$registro[5],$registro[6]);

//echo "$registro[0]<br>";
//echo "$registro[1]<br>";
/*
echo"
<form action='/ofertasaqp/insertar/imagenes_promocion/modificar_promocion.php' method='POST' enctype='multipart/form-data'>
<P> 
CODIGO : <INPUT type='float' name='codigo' id='codigo' value=".$registro[0]."><BR> 
DISTRITO : <INPUT type='float' name='distrito' id='cod_distrito' value=".$registro[1]."><BR> 
CATEGORIA: <INPUT type='float' name='categoria' id='cod_categoria' value=".$registro[2]."><BR> 
TIPO1: <INPUT type='float' name='tipo1' id='tipo1' value=".$registro[3]."><BR> 
TIPO2: <INPUT type='float' name='tipo2' id='tipo2' value=".$registro[4]."><BR> 
TIPO3: <INPUT type='float' name='tipo3' id='tipo3' value=".$registro[5]."><BR> 
TIPO4: <INPUT type='float' name='tipo4' id='tipo4' value=".$registro[6]."><BR> 
POSICION: <INPUT type='float' name='posicion' id='posicion' value=".$registro[7]."><BR> 
RANKING: <INPUT type='float' name='ranking' value=".$registro[8]."><BR> 
FECHA INICIO: <INPUT type='date' name='fec_ini' value=".$registro[9]."><BR> 
FECHA FIN: <INPUT type='date' name='fec_fin' value=".$registro[10]."><BR>
DESC_1: <INPUT type='varchar(100)' name='desc_1' value=".$registro[11]."><BR> 
DESC_2: <INPUT type='varchar(50)' name='desc_2' value=".$registro[12]."><BR> 
PRECIO: <INPUT type='text' name='precio' value=".$registro[13]."><BR> 
NEGOCIO: <INPUT type='text' name='negocio' value=".$registro[14]."><BR> 
RUC: <INPUT type='text' name='ruc' value=".$registro[15]."><BR> 
RESPONSABLE: <INPUT type='text' name='responsable' value=".$registro[16]."><BR> 
CARPETA: <INPUT type='text'  name='carpeta' id='carpeta' value=".$registro[17]."><BR> 
URL: <INPUT type='text' name='url' value=".$registro[18]."><BR> 
TELEFONO: <INPUT type='text' name='telefono' value=".$registro[19]."><BR> 
DESC_3 <INPUT type='text' name='desc_3' ><BR> 

<!-- ################ CODIGO EN TEMP#################  -->


IMAGEN:

	
	<input type='file' name='fileToUpload' id='fileToUpload' value='fileToUpload' /><br><br>
	<input type='submit'  value='MODIFICAR PROMOCION' name='submit'/>

</form>

";
*/


echo"
<form action='/ofertasaqp/insertar/imagenes_promocion/modificar_promocion.php' method='POST' enctype='multipart/form-data'>
<P> 
CODIGO : <INPUT type='float' name='codigo' id='codigo' value=$registro[0]><BR> 
DISTRITO : <INPUT type='float' name='distrito' id='cod_distrito' value=$registro[1]><BR> 
CATEGORIA: <INPUT type='float' name='categoria' id='cod_categoria' value=$registro[2]><BR> 
TIPO1: <INPUT type='float' name='tipo1' id='tipo1' value=$registro[3]><BR> 
TIPO2: <INPUT type='float' name='tipo2' id='tipo2' value=$registro[4]><BR> 
TIPO3: <INPUT type='float' name='tipo3' id='tipo3' value=$registro[5]><BR> 
TIPO4: <INPUT type='float' name='tipo4' id='tipo4' value=$registro[6]><BR> 
POSICION: <INPUT type='float' name='posicion' id='posicion' value=$registro[7]><BR> 
RANKING: <INPUT type='float' name='ranking' value=$registro[8]><BR> 
FECHA INICIO: <INPUT type='date' name='fec_ini' value=$registro[9]><BR> 
FECHA FIN: <INPUT type='date' name='fec_fin' value=$registro[10]><BR>
DESC_1: <INPUT type='text' name='desc_1' ><BR> 
DESC_2: <INPUT type='text' name='desc_2' ><BR> 
PRECIO: <INPUT type='float' name='precio' value=$registro[11]><BR> 
NEGOCIO: <INPUT type='text' name='negocio' value=$registro[12]><BR> 
RUC: <INPUT type='text' name='ruc' value=$registro[13]><BR> 
RESPONSABLE: <INPUT type='text' name='responsable' value=$registro[14]><BR> 
CARPETA: <INPUT type='text'  name='carpeta' id='carpeta' value=$registro[15]><BR> 
URL: <INPUT type='text' name='url' value=$registro[16]><BR> 
TELEFONO: <INPUT type='text' name='telefono' value=$registro[17]><BR> 
DESC_3 <INPUT type='text' name='desc_3' ><BR> 

<!-- ################ CODIGO EN TEMP#################  -->


IMAGEN:

	
	<input type='file' name='fileToUpload' id='fileToUpload' value='fileToUpload' /><br><br>
	<input type='submit'  value='MODIFICAR PROMOCION' name='submit'/>

</form>

";

}

mysql_free_result($consulta2);

desconectar();

//mysql_db_query("ofertaaqp1568",$sql) or die('.Error.'.mysql_error());

?>