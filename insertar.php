<HTML>
<HEAD>
<TITLE>Insertar.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base
include "conexion.php";
//desconectar ();
conectar();
//mysql_select_db("ofertaaqp1568",$conexion); 
mysql_select_db("ofertaaqp1568"); 
//mysql_connect("localhost","tu_user","tu_password"); 

//selección de la base de datos con la que vamos a trabajar 
//mysql_select_db("mi_base_datos"); 
//echo "se realizo la conexion <br>";
//Ejecucion de la sentencia SQL
$codigo=$_POST['codigo']; 
$categoria=$_POST['categoria']; 

$sql="INSERT INTO categoria (codigo, categoria) VALUES ('{$codigo}', '{$categoria}')";

//mysql_db_query("ofertaaqp1568",$sql,$conexion) or die('.Error.'.mysql_error());
mysql_db_query("ofertaaqp1568",$sql) or die('.Error.'.mysql_error());

//mysql_query("insert into categoria (codigo,categoria) values ('$codigo','$categoria')");
//mysql_db_query("categoria""insert into categoria (codigo,categoria) values ('".$_POST['codigo']."' , '".$_POST['categoria']."' )";

//'agensisgroupcom.ipagemysql.com', 'jheisson', 'jheif156855%$GF'

//$servername = "agensisgroupcom.ipagemysql.com";
//$username = "jheisson";
//$password = "jheif156855%$GF";
//$dbname = "ofertaaqp1568";

//mysql_connect
// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//$conn = new mysql_connect($servername, $username, $password, $dbname);

// Check connection
//if ($conexion->connect_error) {
//    die("Connection failed: " . $conexion->connect_error);
//} 
//mysql_select_db("ofertaaqp1568",$conexion); 

//$sql="INSERT INTO categoria (codigo, categoria) VALUES ('{$codigo}', '{$categoria}')";
//$sql = "INSERT INTO categoria (cod, lastname)VALUES ('John', 'Doe')";

//if ($conexion->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conexion->error;
//}

//$conexion->close();


?>
<h1><div align="center">Registro Insertado</div></h1>
<div align="center"><a href="lectura.php">Visualizar el contenido de la base</a></div>
</BODY>
</HTML>