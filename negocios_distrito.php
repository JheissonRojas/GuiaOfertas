<?
session_start(); 

echo $_SESSION['var_distrito'];


include 'conexion.php';
conectar();

echo "antes del while <br>";


?>


  
  
  

<?
$var=$_SESSION['var_distrito'];



$consulta2=mysql_query("SELECT  p.negocio, d.categoria, p.tipo1, p.tipo2, p.tipo3, p.tipo4 FROM promocion p INNER JOIN categoria d ON p.categoria = d.codigo WHERE p.distrito = $var ORDER BY p.negocio ASC");


 echo "<table border = '1' > \n"; 
      echo "<tr><td>negocio</td><td>distrito</td><td>tipo1</td><td>tipo2</td><td>tipo3</td><td>tipo4</td></tr> \n"; 
      while ($row = mysql_fetch_row($consulta2)){ 
       echo "<tr><td>";
echo"$row[0]";
echo"</td><td>";
echo"$row[1]";
echo"</td><td>";
echo"$row[2]";
echo"</td><td>";
echo"$row[3]";
echo"</td><td>";
echo"$row[4]";
echo"</td><td>";
echo"$row[5]";
echo"</td></tr> \n"; 
      } 
echo "</table> \n"; 



mysql_free_result($consulta2);

desconectar();

?>