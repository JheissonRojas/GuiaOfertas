<?
session_start(); 

echo $_SESSION['var_categoria'];


include 'conexion.php';
conectar();

echo "antes del while <br>";
//include 'bloques.php';
 

?>


  
  
  

<?
$var=$_SESSION['var_categoria'];
//estado, tipo2, tipo3, negocio

$consulta2=mysql_query("SELECT  p.negocio, d.distrito, p.tipo1, p.tipo2, p.tipo3, p.tipo4 FROM promocion p INNER JOIN distrito d ON p.distrito = d.codigo WHERE p.categoria = $var ORDER BY p.negocio ASC");


 echo "<table border = '1' > \n"; 
      echo "<tr><td>negocio</td><td>categoria</td><td>tipo1</td><td>tipo2</td><td>tipo3</td><td>tipo4</td></tr> \n"; 
      while ($row = mysql_fetch_row($consulta2)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr> \n"; 
      } 
echo "</table> \n"; 


mysql_free_result($consulta2);

desconectar();

?>