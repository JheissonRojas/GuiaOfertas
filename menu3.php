<?
session_start(); 
include 'conexion_menu.php';
conectar();
include 'funciones obtener_menu2.php';

?>
<nav class="art-nav clearfix">
    <ul class="art-hmenu css3-notification" ><li class="css3-notification">


<a href="categorias.html" class="active" >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CATEGORIAS &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </a><ul   class="css3-notification">



<div id="cbOpciones_categoria_menu"><?php obtiene_categorias_menu(); ?></div>
</ul></li><li class="css3-notification">

<!--
<div id="cbOpciones_categoria_menu"></div>
</ul></li><li class="css3-notification">
-->

<a href="distritos.html"  class="active"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp DISTRITOS  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </a>
<ul class="css3-notification">


<div id="cbOpciones_distrito_menu"><?php obtiene_distritos_menu(); ?></div>

<!--
<div id="cbOpciones_distrito_menu"></div>
-->

<!--
<li><a href="distritos/alto-selva-alegre.html">Alto Selva Alegre</a></li>
<li><a href="distritos/yanahuara.html">Yanahuara</a></li>
-->

</ul></li></ul> 

 </nav>

<?
//desconenctar()

?>