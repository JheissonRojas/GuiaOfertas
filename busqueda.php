<!DOCTYPE html>
<html><head>
 <script src="jquery.js" ></script> 
<!--<script src="ajax.js"  ></script> -->
<script src="ajax2.js" ></script>
 <!--   <script>$.ajaxSetup({ cache:false });</script>       async="async"-->
<script src="script.js"  async="async"></script> 
    <script src="script.responsive.js"   ></script> 

<script type="text/javascript" language="javascript" src="ajaxrequest.js"  ></script>
</head>
<body>

<?
session_start(); 

//echo $_SESSION['var_busqueda];


include 'conexion_menu.php';
conectar();
include 'bloques.php';

//echo "antes del while <br>";



//mysql_select_db("ofertaaqp1568"); 
//$_SESSION['var_busqueda']=$_POST['texto_busqueda']; 

$busqueda=$_SESSION['var_busqueda'];
//echo $busqueda.'<br>';
//$busqueda='agensis';

//$consulta2=mysql_query("SELECT imagen, desc_1, desc_2, precio, negocio, url, telefono FROM 

$consulta2=mysql_query("SELECT imagen, desc_1, desc_2, precio, negocio, url, telefono FROM promocion WHERE MATCH (desc_2, negocio) AGAINST ('".$busqueda."' IN BOOLEAN MODE) ORDER BY ranking DESC LIMIT 10");

/*
$consulta2=mysql_query("SELECT imagen, desc_1, desc_2, precio, negocio, url, telefono FROM promocion WHERE MATCH (negocio) AGAINST ('".$busqueda."' IN BOOLEAN MODE) ORDER BY ranking DESC LIMIT 10");
*/

//$consulta2=mysql_query("SELECT imagen, desc_1, desc_2, precio, negocio, url, telefono FROM //promocion WHERE (now() BETWEEN fec_ini AND fec_fin ) AND tipo1=1 AND categoria = 7 ORDER BY //ranking ASC LIMIT 2 ");
/*
$consulta2=mysql_query("SELECT imagen, desc_1, desc_2, precio, negocio, url, telefono FROM promocion WHERE negocio='".$busqueda."' ORDER BY ranking DESC LIMIT 10");
*/


while($registro=mysql_fetch_array($consulta2))
{

tipo1_1($registro[0], $registro[1], $registro[2],$registro[3],$registro[4],$registro[5],$registro[6]);
}
//if(!$registro){
//echo '<script language="javascript">alert("No existe promocion para el negocio o servico");</script>';
//}
mysql_free_result($consulta2);

desconectar();

//mysql_db_query("ofertaaqp1568",$sql) or die('.Error.'.mysql_error());

?>

</body></html>