<?
session_start(); 
include 'conexion_menu.php';
conectar();
include 'funciones obtener_menu2.php';

echo '<nav class="art-nav clearfix">

    <ul class="art-hmenu css3-notification" id="resultado_menu" ><li class="css3-notification" >

<!-- ###### CONTENIDO DE MENU CATEGORIA CABECERA  ######-->
<a href="categorias.html" class="active"; >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CATEGORIAS &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </a>

<ul   class="css3-notification">
<div id="cbOpciones_categoria_menu">';
obtiene_categorias_menu();
echo '</div>

</ul>

</li><li class="css3-notification">

<!-- ###### CONTENIDO DE MENU DISTRITO CABECERA  ######-->
<a href="categorias.html"  class="active"; > &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp DISTRITOS  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </a>

<ul  class="css3-notification" >
<div id="cbOpciones_distrito_menu">';
 obtiene_distritos_menu(); 
echo'</div>

</ul></li></ul> 

 </nav>';

?>
