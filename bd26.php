<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58475 -->
    <meta charset="utf-8">
    <title>Página Nueva</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
    <script type="text/javascript" src="select_dependientes.js"></script>
   <script>

$(document).on("ready",function(){
		$("#cbOpciones_distrito").change(function(){
		var seleccion_cod_distrito= $("#cbOpciones_distrito option:selected").val();
          	var seleccion_text_distrito= $("#cbOpciones_distrito option:selected").text();
		$("#cod_distrito").val(seleccion_cod_distrito);
                $("#carpeta_img_distrito").val(seleccion_text_distrito);
		alert(seleccion);
		})

                $("#cbOpciones_categoria").change(function(){
// var seleccion= $("#cbOpciones option:selected").text();
		var seleccion_cod_categoria= $("#cbOpciones_categoria option:selected").val();
          	var seleccion_text_categoria= $("#cbOpciones_categoria option:selected").text();
		$("#cod_categoria").val(seleccion_cod_categoria);
                $("#carpeta_img_categoria").val(seleccion_text_categoria);
		alert(seleccion);
		})


	})

function opcion_menu_categoria(variable_opcion_categoria){
//alert(val);
}

function opcion_menu_distrito(variable_opcion_distrito){
//alert(val);
}


</script>



</head>
<body>
<div id="art-main">
    <div class="art-sheet clearfix">
<header class="art-header clearfix">


    <div class="art-shapes">
<h1 class="art-headline" data-left="50.74%">
    <a href="#">Ofertas AQP</a>
</h1>
<h2 class="art-slogan" data-left="50.88%">Compra lo nuestro, comprale a tu gente</h2>

<div class="art-object1398174869" data-left="100%"></div>
<div class="art-object2056103277" data-left="0.36%"></div>

            </div>

<nav class="art-nav clearfix">
    <ul class="art-hmenu"><li><a href="categorias.html">CATEGORIAS</a><ul><li><a href="categorias/new-page.html">Subpage 1</a></li><li><a href="categorias/new-page-2.html">Subpage 2</a></li><li><a href="categorias/new-page-3.html">Subpage 3</a></li></ul></li><li><a href="distritos.html" class="active">DISTRITOS</a><ul class="active"><li><a href="distritos/alto-selva-alegre.html">Alto Selva Alegre</a></li><li><a href="distritos/yanahuara.html">Yanahuara</a></li></ul></li></ul> 
    </nav>

                    
</header>
<div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1 clearfix"><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Nuevo Bloque 6</h3>
        </div>
        <div class="art-blockcontent"><p><br></p></div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Nuevo Bloque 7</h3>
        </div>
        <div class="art-blockcontent"><p><br></p></div>
</div></div>
                        <div class="art-layout-cell art-content clearfix"><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">CARGA PROMOCIONES EN DB</h3>
        </div>
        <div class="art-blockcontent">


<!-- ############ CONEXION   OBTENCION DISTRITOS  y CATEGORIAS  #################  -->


<?php

include 'conexion.php';
conectar();
include "funciones_obtener.php";
//desconectar()


?>



<div id="demo" style="width:600px;">
				<div id="demoDer">
					<select disabled="disabled" name="estados" id="estados">
						<option value="0">Selecciona opciones</option>
					</select>
				</div>
				<div id="cbOpciones_distrito"><?php obtiene_distritos(); ?></div>
</div>


<div id="demo2" style="width:600px;">
				<div id="demoDer2">
					<select disabled="disabled" name="estados2" id="estados2">
						<option value="0">Selecciona opciones</option>
					</select>
				</div>
				<div id="cbOpciones_categoria"><?php obtiene_categorias(); ?></div>
</div>

<FORM METHOD="POST" ACTION="insertar_categoria.php">
Codigo<br>
<INPUT TYPE="float(2)" NAME="codigo"><br>
Categoria<br>
<INPUT TYPE="varchar(20)" NAME="categoria"><br>
<INPUT TYPE="SUBMIT" value="Insertar">
</FORM>

<!--
< ?
 $cod=$_POST['1'];
  $ape=$_POST['apellido'];
				$sql="INSERT INTO cateoria (codigo, categoria) VALUES ($cod, '$ape')";
                               @mysql_query($sql,$conexion) or die('.Error'.mysql_error());

?>
-->

<!-- ############ FORMULARIO LLENADO   ######################  -->
<br><br><br>
<h1><div align="center">Subir Promocion</div></h1>
<br><br><br>

<form action="imagenes_promocion/subir_promocion.php" method="POST" enctype="multipart/form-data">
<P> 
DISTRITO : <INPUT type="float" name="distrito" id="cod_distrito"><BR> 
CATEGORIA: <INPUT type="float" name="categoria" id="cod_categoria"><BR> 
RANKING: <INPUT type="float" name="ranking"><BR> 
FECHA INICIO: <INPUT type="date" name="fec_ini"><BR> 
FECHA FIN: <INPUT type="date" name="fec_fin"><BR>
DESC_1: <INPUT type="text" name="desc_1"><BR> 
DESC_2: <INPUT type="text" name="desc_2"><BR> 
NEGOCIO: <INPUT type="text" name="negocio"><BR> 
RUC: <INPUT type="text" name="ruc"><BR> 
RESPONSABLE: <INPUT type="text" name="responsable"><BR> 
<? echo "CARPETA: <INPUT type='text' value=".$var_carpeta." name='carpeta' id='carpeta_img_categoria'><BR> <br>"; ?>

<!-- ################ CODIGO EN TEMP#################  -->


IMAGEN:

	<!--<input type="file" name="imagen" id="imagen" /><br><br>-->
	<input type="file" name="fileToUpload" id="fileToUpload" value="fileToUpload" /><br><br>
	<!--<input type="submit" name="grabar" value="grabar"/>-->
         <input type="submit"  value="GRABAR" name="submit""/>

</form>


<!-- ############ FIN  FORMULARIO LLENADO   ######################  -->


<!-- ############ GRABA REGISTROS   ######################  -->

<!-- ############ FINNNN  GRABA REGISTROS   ######################  -->







</div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Block</h3>
        </div>
        <div class="art-blockcontent"><p><br></p>
<p><input type="text" value="Text..."></p>
<p style="text-align: -webkit-auto;margin-top: 5px;"><span style="color: rgb(0, 0, 0); line-height: normal;"><br></span></p>
<p style="margin-top: 5px"><a href="#" class="art-button">Send</a></p></div>
</div><article class="art-post art-article">
                                <h2 class="art-postheader">Página Nueva</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p><br/></p></div>
</article></div>
                        <div class="art-layout-cell art-sidebar2 clearfix"><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t"></h3>
        </div>
        <div class="art-blockcontent"><p><br></p></div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Categories</h3>
        </div>
        <div class="art-blockcontent"><div>
  <p>Lorem ipsum dolor sit amet. Nam sit amet sem. Mauris a ante.</p>
  <ul>
    <li>
      <a href="#" title="All News">All News</a> (50)
    </li>
    <li>
      <a href="#" title="Best of the Year">Best of the Year</a> (4)
    </li>
    <li>
      <a href="#" title="Hyperlink">Hyperlink</a> (24)
    </li>
    <li>
      <a href="#" title="Visited link" class="visited">Visited link</a> (17)
    </li>
    <li>
      <a href="#" title="Hovered link" class="hover">Hovered link</a> (6)
    </li>
  </ul>
</div></div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Nuevo Bloque 5</h3>
        </div>
        <div class="art-blockcontent"><p><br></p></div>
</div></div>
                    </div>
                </div>
            </div><footer class="art-footer clearfix">
<p>www.Agensisgroup.com</p>
<p>AgensisGroup © 2016. All Rights Reserved</p>
</footer>

    </div>
    <p class="art-page-footer">
        <span id="art-footnote-links"><a href="http://www.artisteer.com/" target="_blank">Web Template</a> created with Artisteer.</span>
    </p>
</div>


</body></html>