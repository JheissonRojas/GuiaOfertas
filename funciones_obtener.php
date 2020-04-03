
<?php

function obtiene_distritos()
{
	

	$consulta=mysql_query("SELECT codigo, distrito FROM distrito");
	//desconectar();

	// imprime en el select
	echo "<select name='distrito' id='distrito' onChange='cargaContenido(this.id)'>";
	echo "<option value='0'>Elige</option>";
	while($registro=mysql_fetch_row($consulta))
	{
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	}
	echo "</select>";
}


function obtiene_categorias()
{

//	include 'conexion.php';
//	conectar();

	$consulta2=mysql_query("SELECT codigo, categoria FROM categoria");
//	desconectar();

	// imprime en el select
	echo "<select name='categoria' id='categoria' onChange='cargaContenido(this.id)'>";
	echo "<option value='0'>Elige</option>";
	while($registro=mysql_fetch_array($consulta2))
	{
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	}
	echo "</select>";

       mysql_data_seek($consulta2,0); 

       echo "<table border = '1' > \n"; 
      echo "<tr><td>codigo</td><td>categoria</td></tr> \n"; 
      while ($row = mysql_fetch_row($consulta2)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n"; 
} 
echo "</table> \n"; 

echo "categorias";
}
//desconectar();

?>