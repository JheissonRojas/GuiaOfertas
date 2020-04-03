<HTML>
<HEAD>
<TITLE>Modificar.php</TITLE>
</HEAD>
<BODY>

<?

include "conexion.php";

conectar();

mysql_select_db("ofertaaqp1568"); 

/* ############  FILE   #########################   */

$carpeta=$_POST['carpeta'];


$target_dir = "insertar/imagenes_promocion/";
$target_file = basename($_FILES["fileToUpload"]["name"]);
//$target_file = str_replace(' ','|',$image);
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        $carpeta=$target_dir.$target_file;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (@move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}




$sql="UPDATE promocion 
SET tipo1=0, tipo2=0,tipo3=1 WHERE now() > fec_fin "; 



mysql_db_query("ofertaaqp1568",$sql) or die('.Error.'.mysql_error());



desconectar ();

?>
<h1><div align="center"> Promociones Actualizadas</div></h1>
<div align="center"><a href="/ofertasaqp/modificar/index.php">MODIFICAR OTRO REGISTRO</a></div>
<div align="center"><a href="http://agensisgroup.com/ofertasaqp/modificar/index.php">MODIFICAR OTRO REGISTRO</a>
</div>
</BODY>
</HTML>