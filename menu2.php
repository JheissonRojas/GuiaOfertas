<nav class="art-nav clearfix">
    <ul class="art-hmenu css3-notification" id="ul_categoria1"><li class="css3-notification">


<a href="categorias.html" <? echo $_SESSION['var_class_active_categoria'] ?> id="link_categoria1">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CATEGORIAS &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </a><ul   class="css3-notification">



<div id="cbOpciones_categoria_menu"><?php obtiene_categorias_menu(); ?></div>
</ul></li><li class="css3-notification">


<a href="distritos.html"  <? echo $_SESSION['var_class_active_distrito'] ?>> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp DISTRITOS  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </a>

<ul class="css3-notification">


<div id="cbOpciones_distrito_menu"><?php obtiene_distritos_menu(); ?></div>



</ul></li></ul> 

 </nav>