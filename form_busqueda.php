<?
echo'
<script>
$("#boton_busqueda").click(function(){
	
//document.write("hola como estas <br>");

var texto_busqueda= $("#texto_busqueda").val();
//var texto_busqueda=document.getElementByName("texto_busqueda").value;
$.post("set_session_busqueda.php", { var_busqueda: texto_busqueda});
$.post("set_session_busqueda.php", { var_busqueda: texto_busqueda}); 
//document.write("hola como estas<br>");

   MostrarConsulta_busqueda("form_busqueda.php','busqueda.php");

		});

</script>
';

echo '

<div class="art-layout-wrapper clearfix">
<div class="art-content-layout">
<div class="art-content-layout-row">

<div class="art-layout-cell art-content clearfix">
<div class="art-block clearfix">
<div class="art-blockcontent"><p><br>';

echo '
Busqueda:<br>
<INPUT TYPE="varchar(50)" NAME="texto_busqueda">
<INPUT TYPE="button" id="boton_busqueda" value="Buscar" >
';

echo '
<hr>

</p>
</div>
</div>
</div>
	 
 </div>
 </div>
 </div>

';

?>