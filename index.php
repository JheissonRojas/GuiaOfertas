<?
session_start(); //esta linea tiene que ir antes de cualquier cosa, incluso de espacios 
//ob_start(); 

$menu_activo='class="active"';
//$menu_inactivo='class=""';
$_SESSION['var_categoria_activa']=7;
$_SESSION['var_distrito_activo']=7;
$_SESSION['var_busqueda']="hola";
$_SESSION['var_class_active_categoria']=$menu_inactivo;
$_SESSION['var_class_active_distrito']=$menu_activo;


//include 'conexion_menu.php';
//conectar();
include 'funciones_obtener_menu2.php';
//include '_genera_promociones.php';
//include 'genera_promociones_prueba.php';
//include 'contenido_tipo3.php';
//$inicio=1;
//$fin=7;
//$num_aleatorio = rand($inicio,$fin);
//echo "$num_aleatorio";
?>


<!DOCTYPE html>
<html><head>


<!--<html dir="ltr" lang="en-US"><head> Created by Artisteer v4.0.0.58475 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!--    <meta charset="utf-8"> -->
	
	<link href="guiaofertasicono64.ico" type="image/x-icon" rel="shortcut icon" />
    <title>GuiaOfertasAQP </title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link id="mainStyle"  rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">
<!--  ######   style del  popup  ###### -->
<!--  <link rel="stylesheet" href="demo.css">  -->

<!--<head>-->

<style>
		.black_overlay{
			display: none;
			position: absolute;
			top: 0%;
			left: 0%;
			width: 100%;
			height: 100%;
			background-color: black;
			z-index:1001;
			-moz-opacity: 0.7;
			opacity:.70;
			filter: alpha(opacity=70);
		}

		.white_content {
			display: none;
			position: absolute;
			top: 50%;
			left: 10%;
			bottom: 10%;
			width: 70%;
			height: 50%;
			padding: 8px;
			
                        border: 4px solid #FF6F00;
			background-color: white;
			z-index:1002;
			overflow: auto;
		}

</style>




<!-- ####### Cargar algo cada cierto tiempo  ############################

<script type="text/javascript" language="javascript" src="arefrescar.js"></script> 

-->

<!--  ######   java del  popup  ###### -->
<!--
<script>!window.jQuery && document.write(unescape('%3Cscript src="jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>
<script src="jquery.js"></script>

<script type="text/javascript" src="demo.js"></script>
-->



<script src="jquery.js" ></script> 
<!--  <script type="text/javascript" src="demo.js"></script>-->
<script src="ajax2.js" ></script>
 <!--   <script>$.ajaxSetup({ cache:false });</script>       async="async"-->

<script src="script.js"  async="async"></script> 
<script src="script.responsive.js"   ></script> 
 
 

<script type="text/javascript" language="javascript" src="ajaxrequest.js"  ></script>


<!--<style type="text/css" id="cont_estilo"></style>-->



<!-- ################  obtencion de datos BD  ###########################  -->

<script >


var _var_opcion_categoriaJS=7; 
var _var_opcion_distritoJS=9; 
// $(window).load(function(){
//    $('#cargando').hide();
//});    










//$("#cbOpciones_distrito_menu").livequery('change',function(){  });
//$(document).live(function(){
//$(document).live('ready',function(){
//$(document).on("ready",function(){



$(document).ready(function(){




var resolutionh=$(window).height(); 
var resolutionw=$(window).width();

if(resolutionw<1200) 
{ 

//jQuery("#publi_izq1").hide(1000); 
//jQuery("#publi_izq2").hide(1000); 
//jQuery("#publi_izq3").hide(1000); 

jQuery("#bloque_izquierda").hide(1000); 
}


             
//document.getElementById("boton_busqueda1").onclick = obtener_busqueda();
//window.onload = function() {
//        document.form_busqueda.action = obtener_busqueda();
 //}

/*
$("#boton_busqueda1").on("click",function(){
		//var texto_busqueda= $("#texto_busqueda1").val();
          	//var texto_busqueda= $("#texto_busqueda1").text();
var texto_busqueda= $("#texto_busqueda1").val();
$.post('set_session_busqueda.php', { var_busqueda: texto_busqueda});
$.post('set_session_busqueda.php', { var_busqueda: texto_busqueda}); 

   MostrarConsulta_busqueda('form_busqueda.php','busqueda.php');

		});
*/


window.obtener_busqueda=function(){

var texto_busqueda= $("#texto_busqueda1").val();
//$_SESSION['var_busqueda']="agensis";
//alert(texto_busqueda);
//var texto_busqueda="agensis"; 
//alert(texto_busqueda);
//var texto_busqueda=document.getElementByName("texto_busqueda1").value();
$.post('set_session_busqueda.php', {var_busqueda: texto_busqueda});
$.post('set_session_busqueda.php', {var_busqueda: texto_busqueda});
//$.post('set_session_busqueda.php', {var_busqueda: 'texto_busqueda'}); 
 MostrarConsulta_busqueda('form_busqueda.php','busqueda.php');
 MostrarConsulta_busqueda('form_busqueda.php','busqueda.php');
//     MostrarConsulta2('busqueda.php');

}




function freshStyle(stylesheet){
   $('#mainStyle').attr('href',stylesheet);
}



$('#resultado').on('change', function(){
    event.preventDefault();
    var restyled = 'style.css'; 
    freshStyle(restyled);
});



$("head").append("<link>");
css = $("head").children(":last");
css.attr({
rel: "stylesheet",
type: "text/css",
href: "style.css"
});

//alert("seleccion_cod_distrito");
		//$("#cbOpciones_distrito_menu").click(function(){
		//var seleccion_cod_distrito= $("#cbOpciones_distrito_menu a.selected").val();
          	//var seleccion_text_distrito= $("#cbOpciones_distrito_menu a.selected").text();
		//$("#cod_distrito").val(seleccion_cod_distrito);
                //$("#carpeta_img_distrito").val(seleccion_text_distrito);
		//alert(seleccion_cod_distrito);
		//});

                //$("#cbOpciones_categoria_menu").click(function(){
// var seleccion= $("#cbOpciones option:selected").text();
		//var seleccion_cod_categoria= $("#cbOpciones_categoria_menu a.selected").val();
          	//var seleccion_text_categoria= $("#cbOpciones_categoria_menu a.selected").text();
		//$("#cod_categoria").val(seleccion_cod_categoria);
                //$("#carpeta_img_categoria").val(seleccion_text_categoria);
		//alert(seleccion_cod_categoria);
		//});



//$("#ul_categoria1").live('click',



window.active_opciones_categoria = function(variable_categoriaJS){
//function active_opciones_categoria(variable_categoriaJS){
var var_class_active='class="active"';
var var_class_inactive='class=""';

//alert(variable_categoriaJS);
$.post('setsessionvariable.php', { var_categoria_activa: variable_categoriaJS, 
var_distrito_activo: variable_categoriaJS,
var_class_active_categoria: var_class_active,
var_class_active_distrito: var_class_inactive
 });

$.post('setsessionvariable.php', { var_categoria_activa: variable_categoriaJS, 
var_distrito_activo: variable_categoriaJS,
var_class_active_categoria: var_class_active,
var_class_active_distrito: var_class_inactive
 });

//ocultar();
//mostrar();
//MostrarConsultaMenu('menu.php');
//MostrarConsulta('consulta_promociones_categoria.php','menu3.php');

//MostrarConsulta('consulta_promociones_categoria.php','resultado');
//MostrarConsulta_prueba('consulta_promociones_categoria.php','resultado');

MostrarConsulta2('form_busqueda.php','_promociones_categoria_tipo1.php','_promociones_categoria_tipo1_2.php','_promociones_categoria_tipo1_3.php','_promociones_categoria_tipo2.php','_promociones_categoria_tipo2_2.php','_promociones_categoria_tipo2_3.php','_promociones_categoria_tipo3.php','_promociones_categoria_tipo3_2.php','_promociones_categoria_tipo3_3.php','_promociones_categoria_tipo4.php');

//MostrarConsulta2('consulta_promociones_categoria.php','consulta_promociones_categoria.php','consulta_promociones_categoria.php','consulta_promociones_categoria.php');


//MostrarConsulta_prueba('_promociones_categoria_tipo1.php','resultado_tipo111');
//MostrarConsulta_prueba('_promociones_categoria_tipo2.php','resultado_tipo21');
//MostrarConsulta_prueba('_promociones_categoria_tipo3.php','resultado_tipo31');

//obtiene_promociones_categoria(); 
  

LimpiaCache();

}




//active_opciones_categoria(variable_categoriaJS);

/*
setInterval(function() {
        $("#publi_izq1").fadeOut(1500);
    },10000);

setInterval(function() {
        $("#publi_izq1").fadeIn(1500);
    },12000);
*/
/*
setInterval(function() {
$("#publi_izq1").fadeOut(1500);
        $("#publi_izq1").load('publi_1,js');
        $("#publi_izq1").fadeIn(1500);
    },12000);
*/
/*
$("#publi_izq1").fadeOut();
$("#publi_izq1_2").fadeOut();
$("#publi_izq1_3").fadeOut();
*/
/*
setInterval(function() {
setTimeout("$("#publi_izq1").fadeIn(2000);",10000);
$("#publi_izq1").fadeOut(2000);
setTimeout("$("#publi_izq1_2").fadeIn(2000);",10000);
$("#publi_izq1_2").fadeOut(2000);
setTimeout("$("#publi_izq1_3").fadeIn(2000);",10000);
$("#publi_izq1_3").fadeOut(2000);
},12000);
*/


/*
var selector=1;
setInterval(function() {

if(selector==1){

$("#publi_izq1").fadeOut(1500);
$("#publi_izq1_2").fadeIn(1500);
$("#publi_izq1_2").slideIzq(1500);
$("#publi_izq1").slideIzq(1500).animate({width:show});

var selector=2;
}

if(selector==2){

$("#publi_izq1_2").fadeOut(1500);
$("#publi_izq1_3").fadeIn(1500);
$("#publi_izq1_3").slideIzq(1500);
$("#publi_izq1").slideIzq(1500).animate({width:show});

var selector=3;

}

if(selector==3){

$("#publi_izq1_3").fadeOut(1500);
$("#publi_izq1").fadeIn(1500);
$("#publi_izq1").slideIzq(1500);
$("#publi_izq1").slideIzq(1500).animate({width:show});

var selector=1;

}

},12000);
*/
               
//                     $("#resultado_menu").click(function(event){
//			$('#ul_categoria1').Show("slow");
//		});
//		$("#ul_categoria1").click(function(){
//			$('#ul_categoria1').hide(4000);
//		});

//    $("#resultado_menu").click(function(){
//			$('#ul_categoria1').Show("slow");
//		});              

 // $("#ul_categoria1").click(function(event) {
//			$("#ul_categoria1").slideUp(1000);
//		});
              
                 //$("#ul_categoria1").click(function(event) {
		//	$("#ul_categoria1").FadeOut("fast");
		//});
//$("#up04").click(function(event) {
//	$("#rectangulo").slideUp("slow", function() {
//		alert ('Efecto slideUp con velocidad slow terminado!');
//	});
//});

//$('.disableAfterClick').click(function (e) {
//   $(this).addClass('disabled'))
//});


//$.domCache('#resultado').remove();
//$.ajaxSetup({ cache:false });

	})


//SetVariablesDistrito($registro[0])
//active_opciones_distrito($registro[0])


window.active_opciones_categoria_inicio = function(variable_categoriaJS){

var var_class_active='class="active"';
var var_class_inactive='class=""';


$.post('setsessionvariable.php', { var_categoria_activa: variable_categoriaJS, 
var_distrito_activo: variable_categoriaJS,
var_class_active_categoria: var_class_active,
var_class_active_distrito: var_class_inactive
 });

$.post('setsessionvariable.php', { var_categoria_activa: variable_categoriaJS, 
var_distrito_activo: variable_categoriaJS,
var_class_active_categoria: var_class_active,
var_class_active_distrito: var_class_inactive
 });


MostrarConsulta2('form_busqueda.php','_promociones_categoria_tipo7_1_inicio.php','_promociones_categoria_tipo7_1_2_inicio.php','_promociones_categoria_tipo7_1_3_inicio.php','_promociones_categoria_tipo7_2_inicio.php','_promociones_categoria_tipo7_2_2_inicio.php','_promociones_categoria_tipo7_2_3_inicio.php','_promociones_categoria_tipo7_3_inicio.php','_promociones_categoria_tipo7_3_2_inicio.php','_promociones_categoria_tipo7_3_3_inicio.php','_promociones_categoria_tipo7_4_inicio.php');


LimpiaCache();

}

//window.recarga_atributos = function(){
//var attr = document.getElementByTagName("body");
//            attr.setAttribute('style', '.black_overlay{ display: none; position: absolute;top: 0%;left: 0%;width: 100%;	height: 100%; background-color: black;z-index:1001;-moz-opacity: 0.8;	opacity:.80;filter: alpha(opacity=80);} .white_content {	display: none; position: absolute; 	top: 25%; left: 25%; width: 50%; height: 50%; padding: 16px; border: 16px solid orange; background-color: white; 	z-index:1002; overflow: auto; }');
//}


//$("#body").on("click", ".blog-test", ".black_overlay", ".white_content",  function(){
//	$(this).after("<body class=\"black_overlay\" class=\"white_content\"></p>");
//});

</script>




<!-- #######################  we are not using this next output div ##########" -->
<!-- <div id="div_session_write" style="display:none;"></div> -->
<!-- #######################display the session var passed from JavaScript -->


<!--
.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }
-->

<!-- ###########  MASCARA DE INICIO LOADING  y  POPUP###############-->



</head>


<div id="cargando">
<!--
<script><body onLoad="setInterval('contador()',3500);"></script>
-->
<!--
<BODY onload="active_opciones_categoria(7);" oncontextmenu="return false" onkeydown="return false">
-->

<BODY onload="active_opciones_categoria(7);" id="body">


<!-- $$$$$$$$$$$$$$$$$ FCAEBOOK  PLUGING %$$$$$$-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- $$$$$$$$$$$$$$$$$ FCAEBOOK  PLUGING %$$$$$$-->


<!--
<body onload="setInterval('contador()',3500); active_opciones_categoria(7);">
-->
<div id="art-main">

<div class="art-sheet clearfix">
<header class="art-header clearfix">


    <div class="art-shapes">
<h1 class="art-headline" data-left="43%">
    <a href="#">Guia Ofertas AQP</a>
</h1>
<h2 class="art-slogan" data-left="62%">Promociones en toda la ciudad </h2>

<div class="art-object1398174869" data-left="100%"></div>
<div class="art-object2056103277" data-left="0.36%"></div>

            </div>

<!-- ############ OBTENCION DISTRITOS  y CATEGORIAS  ######################  -->

<!-- ############ MENU  ######################  -->



<div id="resultado_menu">

<!--< ?--> 
<!--include 'menu2.php';-->
<!--?>-->
<nav class="art-nav clearfix">
    <ul class="art-hmenu css3-notification" id="ul_categoria1"><li class="css3-notification">


<a href="http://www.guiaofertasaqp.com" <? echo $_SESSION['var_class_active_categoria'] ?> id="link_categoria1">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CATEGORIAS &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </a><ul   class="css3-notification">

<div id="cbOpciones_categoria_menu"><?php obtiene_categorias_menu(); ?></div>

<!--
<div id="cbOpciones_categoria_menu">< ? include "obtiene_categorias_menu.php"; ?></div>
-->
<!--
<div id="cbOpciones_categoria_menu"><script> MostrarConsultaMenuCategorias(obtiene_categorias_menu.php )</script></div>
-->
</ul></li><li class="css3-notification">


<a href="http://www.guiaofertasaqp.com"  <? echo $_SESSION['var_class_active_distrito'] ?>> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp DISTRITOS  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </a>

<ul class="css3-notification">


<div id="cbOpciones_distrito_menu"><?php obtiene_distritos_menu(); ?></div>

<!--
<div id="cbOpciones_distrito_menu">< ? include "obtiene_distritos_menu.php"; ?></div>
-->
<!--
<div id="cbOpciones_distrito_menu"><script> MostrarConsultaMenuDistritos(obtiene_distritos_menu.php )</script></div>
-->

</ul></li></ul> 

 </nav>


</div>
                    

</header>

<div id="resultado">
</div> 

<div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">



                        
<div class="art-layout-cell art-sidebar1 clearfix">

<div id="bloque_izquierda">

<div class="art-block clearfix">
<!--   ######################   BLOQUE IZQUIERDA   1   ####################
-->
<div class="art-blockcontent">
<!-- ########################### ADD GOOGLE ############################## -->
<div id=publi_izq1>
<?
include 'banner_rectangular300x250.php';
?>

</div>
<!-- ##### LINEA VERTICAL ################################ -->
<!-- <div class="vertical-line" style="height: 45px;" />  -->
<hr>
</div>
</div>

<!-- $$$$$$$$$$$$$$$$$$$$$$          ESPACIO PUBLI     $$$$$$$$$$$$$$$$$$$$$ -->
<?
$i=0;
while($i<25)
{
echo "<br>";
$i++;
}
?>
<!-- $$$$$$$$$$$$$$$$$$$$$$          ESPACIO PUBLI     $$$$$$$$$$$$$$$$$$$$$ -->

<div class="art-block clearfix">
        
<div class="art-blockcontent"><br>

<div id=publi_izq2>
<p>
<center>
<?
include 'banner_vertical160x600.php';
?>
</center>
</p>
</div>

<HR>

</div>

</div>

<!-- $$$$$$$$$$$$$$$$$$$$$$          ESPACIO PUBLI     $$$$$$$$$$$$$$$$$$$$$ -->
<?
$i=0;
while($i<50)
{
echo "<br>";
$i++;
}
?>
<!-- $$$$$$$$$$$$$$$$$$$$$$          ESPACIO PUBLI     $$$$$$$$$$$$$$$$$$$$$ -->


<div class="art-block clearfix">
        
<div class="art-blockcontent"><br>

<div id=publi_izq3>

<?
include 'banner_vertical300x600.php';
?>

</div>

<HR>

</div>

</div>

<!--
<div class="art-block clearfix">
        
<div class="art-blockcontent"><br>

<div id=publi_izq4>


</div>

<HR>

</div>

</div>

-->

<!-- ###############   FIN BLOQUE IZQUIERDA    #######################-->
</div>
</div>   <!--div del bloque izquierda -->
<!-- ###############   FIN BLOQUE IZQUIERDA    #######################-->

<div class="art-layout-cell art-content clearfix">

<!-- ##########################    BLOQUE CENTRO   1  ####################  -->
<div class="art-block clearfix">
 <!--          <h3 class="t">Nuevo Bloque</h3>  -->
<p> 
<!-- ########################### ADD GOOGLE ############################## -->
<center>

<?

include 'banner_horizontal468x60.php';

?>
</center>
<!-- ########################### ADD GOOGLE ############################## -->

</p>
 </div>
 
<div class="art-block clearfix">
<div class="art-blockheader">

<h2>Buscar Promocion de Negocio o Servicio: </h2>

</div>

<div class="art-blockcontent">

<!-- ##################################################################### -->
<!-- #####################   BUSQUEDA  ################################### -->
<div id="busqueda">
&nbsp &nbsp
<INPUT TYPE="text" id="texto_busqueda1" style="font-size:14pt;height:35px;width:500px;"placeholder="negocio servicio categoria distrito" value="">
<!--
<INPUT TYPE="text" id="texto_busqueda1" style="font-size:14pt;height:35px;width:500px;" onfocus="if (this.value=='el texto por defecto') this.value='';" onblur="if (this.value=='') this.value='el texto por defecto';"
>
-->
<!--
<button id="boton_busqueda1" onclick='obtener_busqueda();'>

<H3>
&nbsp &nbsp BUSCAR &nbsp &nbsp
</H3>
</button>
-->
<INPUT TYPE="button" id="boton_busqueda1" value="Buscar" onclick='obtener_busqueda();' style="font-size:18pt;height:35px;width:100px;"> 

<!--
<p>This is the main content. To display a lightbox click <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">here</a></p>
		<div id="light" class="white_content">This is the lightbox content. <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a></div>
		<div id="fade" class="black_overlay"></div>

<br><br>
<a href="javascript: void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=http://www.guiarte.com/','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');">Compartir con popup</a>

-->
</div>

<hr>

</div>


</div>

<div id="form_busqueda">
</div> 



<!-- $$$$$$$$$$$$$$$$$$$$$$          ESPACIO PUBLI     $$$$$$$$$$$$$$$$$$$$$ -->
<?
$i=0;
while($i<1)
{
echo "<br>";
$i++;
}
?>
<!-- $$$$$$$$$$$$$$$$$$$$$$          ESPACIO PUBLI     $$$$$$$$$$$$$$$$$$$$$ -->


<div id="resultado_tipo111">
</div> 

<div id="resultado_tipo21">
</div> 

<div id="resultado_tipo31">
</div> 

<div id="resultado_tipo122">
</div> 

<div id="resultado_tipo22">
</div> 

<div id="resultado_tipo32">
</div> 


<div id="resultado_tipo131">
</div> 

<div id="resultado_tipo23">
</div> 

<div id="resultado_tipo33">
</div> 


<!--
< ?
include('bloques_C-2.php');
include('bloques_C-3.php');

? >
-->
<!--
<p>This is the main content. To display a lightbox click <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">here</a></p>


		<div id="light" class="white_content">This is the lightbox content. <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a></div>
-->
		<div id="fade" class="black_overlay"></div>

<article class="art-post art-article">

<!-- ########################### CONTENT ARTICLE ############################## -->

<?
/*
include('bloques_C-1h.php');
include('bloques_C-1v.php');
include('bloques_C-2.php');
include('bloques_C-3.php');
*/
?>

<!-- ##########################   CONTENT   #$#################### -->

</article>
</div>





<div class="art-layout-cell art-sidebar2 clearfix">
						
  <!-- ######################   VIDEO   BLOQUE DERECHA  1    ################## -->
<div class="art-block clearfix">
<div class="art-blockcontent">


<!--<video src="videotest.ogv" poster="videotest.jpg" width="500" autoplay loop controls></video>
-->

<video src="videoguiaofertas1.mp4"  autoplay loop ></video>

</div>
</div>


<!-- ######################   VIDEO   BLOQUE DERECHA  2    ################## -->
<!---
<div class="art-block clearfix">
<div class="art-blockcontent">

<video src="videoguiaofertas1.mp4"  autoplay loop ></video>

</div>
</div>

-->



  <!-- ######################   VIDEO   BLOQUE DERECHA  2    ################## -->

  <!-- ######################   BOTONES FACEBOOK    ################## -->
<div class="art-block clearfix">
<div class="art-blockcontent img_face" style="color:#3B0B24; font-size:11px; font-family: Georgia; font-weight: bold; ">
<!-- BACKGROUND-COLOR: #3B0B24; -->
<center>

<a href="https://www.facebook.com/Guia-Ofertas-AQP-321878174870602/?fref=ts">
<IMG class="img_face" style="height:60px" src="Siguenos_en_facebook.png">
</a>

<div class="fb-like" data-href="https://www.facebook.com/Guia-Ofertas-AQP-321878174870602/?fref=ts" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>


<p style="margin-left:10px;">
Enterate de todas las promociones y descuentos que hay en la ciudad
<br>
</p>

</center>

</div>
</div>

  <!-- ######################   BOTONES FACEBOOK    ################## -->






						
<div class="art-block clearfix">
<!-- ####################      BLOQUE DERECHA 1      ###################   -->

 <div class="art-blockheader">

<!-- ########################### ADD GOOGLE ############################## -->

<?

include 'banner_adaptable.php';

?>


<!-- ########################### ADD GOOGLE ############################## -->

<HR>            

</div>

<div class="art-blockcontent"><p>
<!-- ##########################   CONTENT   #$#################### -->
</p>
</div>
</div>

<!--
<div class="art-block clearfix">
<div class="art-blockcontent">
-->
  <!-- ######################   CONTENT     BLOQUE DERECHA  2    ################## -->
<!--
</div>
</div>


<div class="art-block clearfix">
        <div class="art-blockcontent">
<p><br>
-->
  <!-- ######################   CONTENT   BLOQUE DERECHA  3   ################# -->
<!--
</p>
</div>
</div>
-->
<!-- $$$$$$$$$$$$$$$$$$$$$$          ESPACIO PUBLI     $$$$$$$$$$$$$$$$$$$$$ -->
<?
$i=0;
while($i<15)
{
echo "<br>";
$i++;
}
?>
<!-- $$$$$$$$$$$$$$$$$$$$$$          ESPACIO PUBLI     $$$$$$$$$$$$$$$$$$$$$ -->

<div id="resultado_tipo4">
</div>

<div id='fade' class="black_overlay"></div>
</div>
            
	</div>
        </div>
            </div>
			
			
			<footer class="art-footer clearfix">
<p>www.Agensisgroup.com</p>
<p>AgensisGroup © 2016. All Rights Reserved</p>
</footer>

    <!--</div>-->
    <p class="art-page-footer">
        <span id="art-footnote-links"><a href="http://www.artisteer.com/" target="_blank">Web Template</a> created with Artisteer.</span>
    </p>
<!--</div>
</div>
</div>
-->




</div>
</div>
<div id='fade' class="black_overlay"></div>
<!--
<input type="button" value="Pop up en Zoom In" class="button" data-type="zoomin" />
	
	<input type="button" value="Pop up en Zoom Out" class="button" data-type="zoomout" />



<div class="overlay-container">
		<div class="window-container zoomin">
			<h3>Versión en Zoom in</h3> 
			Texto de la ventana emergente<br/>
			<br/>
			<span class="close">Cerrar</span>
		</div>
		<div class="window-container zoomout">
			<h3>Versión en Zoom out </h3> 
			Texto de la ventana emergente<br/>
			<br/>
			<span class="close">Cerrar</span>
		</div>
	</div>


 <script src="jquery.js" ></script> 
 <script type="text/javascript" src="demo.js"></script>
-->

<!--<script    async="async">-->
<script>
/*
document.getElementById("boton_busqueda1").onclick = obtener_busqueda();
var el = document.getElementById("boton_busqueda1");
if (el.addEventListener)
    el.addEventListener("click", obtener_busqueda(), false);
else if (el.attachEvent)
    el.attachEvent('onclick', obtener_busqueda());
*/

/*
$("input[id=boton_busqueda1]").click(function(){
//$("#boton_busqueda1]").on("click",function(){
		//var texto_busqueda= $("#texto_busqueda1").val();
          	//var texto_busqueda= $("#texto_busqueda1").text();
var texto_busqueda= $("#texto_busqueda1").val();
$.post('set_session_busqueda.php', { var_busqueda: texto_busqueda});
$.post('set_session_busqueda.php', { var_busqueda: texto_busqueda}); 

   MostrarConsulta_busqueda('form_busqueda.php','busqueda.php');

		});
*/

function ocultar() {
//var menu=document.getElementById("resultado_menu");
//menu.class = 'art-hmenu css3-notification';
//menu.style.display = 'none';
//menu.innerHTML="";
//$('#link_categoria1').unbind('click');
//$('.disableAfterClick').click(function (e) {
//   $(this).addClass('disabled'))
//});
//               $('ul li').click(function(e) {
//    e.preventDefault();
//    //$('ul').addClass('expanded');
//    $('ul').addClass('hidden');
//    //$('ul.expanded').fadeIn(300);
//    $('ul.hidden').fadeIn(300);
//    //return false;
//});
//$('#cabecera_categoria').load(dato);


//window.onload = function startrefresh('resultado_menu',5,'menu.php')
//window.onload = function startrefresh(div,sec,dato){
//refreshDivs(div,sec,dato);
//refreshDivs('div2',3,'div2.php');
//refreshDivs('div3',10,'div3.php');
//}

}

function mostrar(){
//var menu=document.getElementById("resultado_menu");
//menu.class = 'art-hmenu css3-notification';
//menu.style.display = 'block';
//$('#link_categoria1').bind('click');
}

function LimpiaCache(){
    for (var x in jQuery.cache){
        delete jQuery.cache[x];
    }
}





function tempAlert(msg,duration)
{
 var el = document.createElement("div");
 el.setAttribute("style","position:absolute;top:40%;left:20%;background-color:white;");
 el.innerHTML = msg;
 setTimeout(function(){
  el.parentNode.removeChild(el);
 },duration);
 document.body.appendChild(el);
}


function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}




function fantasma(variable_categoriaJS){

var var_class_active='class="active"';
var var_class_inactive='class=""';

//alert(variable_categoriaJS);
$.post('setsessionvariable.php', { var_categoria_activa: variable_categoriaJS, 
var_distrito_activo: variable_categoriaJS,
var_class_active_categoria: var_class_active,
var_class_active_distrito: var_class_inactive
 });
$.post('setsessionvariable.php', { var_categoria_activa: variable_categoriaJS, 
var_distrito_activo: variable_categoriaJS,
var_class_active_categoria: var_class_active,
var_class_active_distrito: var_class_inactive
 });


//sleep(2000);
//return true;
}


function SetVariablesDistrito(variable_distritoJS){
var var_class_active='class="active"';
var var_class_inactive='class=""';

//While(variable_distritoJS != $_SESSION['var_distrito_activo'])
//{
$.post('setsessionvariable.php', { var_categoria_activa: variable_distritoJS, 
var_distrito_activo: variable_distritoJS,
var_class_active_categoria: var_class_inactive,
var_class_active_distrito: var_class_active
 });
//}

$.post('setsessionvariable.php', { var_categoria_activa: variable_distritoJS, 
var_distrito_activo: variable_distritoJS,
var_class_active_categoria: var_class_inactive,
var_class_active_distrito: var_class_active
 });

}


function active_opciones_distrito(variable_distritoJS){

//alert();
var var_class_active='class="active"';
var var_class_inactive='class=""';

$.post('setsessionvariable.php', { var_categoria_activa: variable_distritoJS, 
var_distrito_activo: variable_distritoJS,
var_class_active_categoria: var_class_inactive,
var_class_active_distrito: var_class_active
 });
/*
$.post('setsessionvariable.php', { var_categoria_activa: variable_distritoJS, 
var_distrito_activo: variable_distritoJS,
var_class_active_categoria: var_class_inactive,
var_class_active_distrito: var_class_active
 });
*/
//var var_distrito='<? echo $_SESSION['var_distrito_activo']; ?>';
var var_distrito=1;
//alert(var_distrito);

//$.post('setsessionvariable2.php', { var_distrito_activo: variable_distritoJS});

//setInterval('contador()',2000);
//setTimeout('contador()',2000);
//var var_distrito='<? echo $_SESSION['var_distrito_activo']; ?>';
//alert(var_distrito);

//tempAlert("close",1000);

//location.reload(forceGet);
//location.reload(true);

//$.get('consulta_promociones_distrito.php', { varPHP: variable_distritoJS});

//document.write("Hola como estas ");

//MostrarConsulta('consulta_promociones_distrito.php');
//window.location('consulta_promociones_distrito.php?varPHP='+variable_distritoJS);
//MostrarConsulta('consulta_promociones_distrito.php?varPHP='+variable_distritoJS);


MostrarConsulta2('form_busqueda.php','_promociones_distrito_tipo1.php','_promociones_distrito_tipo1_2.php','_promociones_distrito_tipo1_3.php','_promociones_distrito_tipo2.php','_promociones_distrito_tipo2_2.php','_promociones_distrito_tipo2_3.php','_promociones_distrito_tipo3.php','_promociones_distrito_tipo3_2.php','_promociones_distrito_tipo3_3.php','_promociones_distrito_tipo4.php');



//MostrarConsultaMenu('menu.php');
LimpiaCache();


}



//});

//active_publi_izquierda()
//{
//< ?
//include 'publi_izq_1.php';
//? >
//}


window.onload = function() {


active_opciones_categoria_inicio(7);
//active_opciones_categoria(7);

//$("#publi_izq1").load("ready",function(){

//});

};

/*
$(document).ready(function() {
	
	$('.button').click(function() {
		
		type = $(this).attr('data-type');
		
		$('.overlay-container').fadeIn(function() {
			
			window.setTimeout(function(){
				$('.window-container.'+type).addClass('window-container-visible');
			}, 100);
			
		});
	});
	
	$('.close').click(function() {
		$('.overlay-container').fadeOut().end().find('.window-container').removeClass('window-container-visible');
	});
	
});
*/
</script>




</body>
 
</html>