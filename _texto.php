<?
session_start(); //esta linea tiene que ir antes de cualquier cosa, incluso de espacios 
//ob_start(); 

//$menu_activo='class="active"';
//$menu_inactivo='class=""';
//$_SESSION['var_categoria_activa']=7;
//$_SESSION['var_distrito_activo']=7;
//$_SESSION['var_class_active_categoria']=$menu_inactivo;
//$_SESSION['var_class_active_distrito']=$menu_activo;


//include 'conexion_menu.php';
//conectar();
include 'funciones_obtener_menu2.php';
include 'contenido_tipo3.php';

?>


<!DOCTYPE html>
<html><head>
<!--<html dir="ltr" lang="en-US"><head> Created by Artisteer v4.0.0.58475 -->
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link id="mainStyle"  rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">

<!--<head>-->
   
<!-- ####### Cargar algo cada cierto tiempo  ############################

<script type="text/javascript" language="javascript" src="arefrescar.js"></script> 
-->

 <script src="jquery.js"></script> 
<script src="ajax.js"></script>
 <!--   <script>$.ajaxSetup({ cache:false });</script> -->
<script src="script.js"></script> 
    <script src="script.responsive.js"></script> 

<script type="text/javascript" language="javascript" src="ajaxrequest.js"></script>


<!--<style type="text/css" id="cont_estilo"></style>-->





<!-- ################  obtencion de datos BD  ###########################  -->

<script>
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
             

$("head").append("<link>");
css = $("head").children(":last");
css.attr({
rel: "stylesheet",
type: "text/css",
href: "style.css"
});

//alert("seleccion_cod_distrito");
		$("#cbOpciones_distrito_menu").click(function(){
		//var seleccion_cod_distrito= $("#cbOpciones_distrito_menu a.selected").val();
          	//var seleccion_text_distrito= $("#cbOpciones_distrito_menu a.selected").text();
		//$("#cod_distrito").val(seleccion_cod_distrito);
                //$("#carpeta_img_distrito").val(seleccion_text_distrito);
		//alert(seleccion_cod_distrito);
		});

                $("#cbOpciones_categoria_menu").click(function(){
// var seleccion= $("#cbOpciones option:selected").text();
		//var seleccion_cod_categoria= $("#cbOpciones_categoria_menu a.selected").val();
          	//var seleccion_text_categoria= $("#cbOpciones_categoria_menu a.selected").text();
		//$("#cod_categoria").val(seleccion_cod_categoria);
                //$("#carpeta_img_categoria").val(seleccion_text_categoria);
		//alert(seleccion_cod_categoria);
		});




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
MostrarConsulta('consulta_promociones_categoria.php');
LimpiaCache();

}









//active_opciones_categoria(variable_categoriaJS);




function contador()
{

//alert("se ejecuto el contador" );
}




               
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



function freshStyle(stylesheet){
   $('#mainStyle').attr('href',stylesheet);
}


$('#resultado').change(function(event){
    event.preventDefault();
    var restyled = 'style.css'; 
    freshStyle(restyled);
});


</script>




<!-- #######################  we are not using this next output div ##########" -->
<div id="div_session_write" style="display:none;"></div>
<!-- #######################display the session var passed from JavaScript -->

<style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }


<!-- ###########  MASCARA DE INICIO LOADING  ###############-->


</style></head>

<div id="cargando">
<script><body onLoad="setInterval('contador()',2000);"></script>
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

<!-- ############ OBTENCION DISTRITOS  y CATEGORIAS  ######################  -->

<!-- ############ MENU  ######################  -->
<div id="resultado_menu">

<!--< ?--> 
<!--include 'menu2.php';-->
<!--?>-->
<nav class="art-nav clearfix">
    <ul class="art-hmenu css3-notification" id="ul_categoria1"><li class="css3-notification">


<a href="#" <? echo $_SESSION['var_class_active_categoria'] ?> id="link_categoria1">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CATEGORIAS &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </a><ul   class="css3-notification">

<div id="cbOpciones_categoria_menu"><?php obtiene_categorias_menu(); ?></div>

<!--
<div id="cbOpciones_categoria_menu">< ? include "obtiene_categorias_menu.php"; ?></div>
-->
<!--
<div id="cbOpciones_categoria_menu"><script> MostrarConsultaMenuCategorias(obtiene_categorias_menu.php )</script></div>
-->
</ul></li><li class="css3-notification">


<a href="#"  <? echo $_SESSION['var_class_active_distrito'] ?>> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp DISTRITOS  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </a>

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


<div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        
<div class="art-layout-cell art-sidebar1 clearfix">

<div class="art-block clearfix">
<!--   ######################   BLOQUE IZQUIERDA   1   ####################
       <div class="art-blockheader">

            <h3 class="t">Nuevo Bloque 6</h3>
        </div>
-->
<div class="art-blockcontent"><p>
<!-- ########################### ADD GOOGLE ############################## -->

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- adap_total -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6608960084070816"
     data-ad-slot="1982564089"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});

</script>

</p>

<!-- ##### LINEA VERTICAL ################################ -->
<!-- <div class="vertical-line" style="height: 45px;" />  -->
<hr>
</div>
</div>

<div class="art-block clearfix">
        
<div class="art-blockcontent"><p><br>
  <!-- ##########################   CONTENT   #$#################### -->
<!-- < ? echo "CARPETA: <INPUT type='text' value=".$var_carpeta." name='carpeta' id='carpeta_img_categoria'><BR> <br>"; ?>
--> 
<hr>
</p>
</div>

<div class="art-blockheader">
       <h3 class="t">Nuevo Bloque 7</h3>
</div>
</div>
</div>


<div class="art-layout-cell art-content clearfix">

<!-- ##########################    BLOQUE CENTRO   1  ####################  -->
<div class="art-block clearfix">
 <!--          <h3 class="t">Nuevo Bloque</h3>  -->
<p> 
<!-- ########################### ADD GOOGLE ############################## -->

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- adap_total -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6608960084070816"
     data-ad-slot="1982564089"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});

</script>
</p>
 </div>

 
 <div id="resultado">
</div>





<?
include('bloques_C-2.php');
include('bloques_C-3.php');

?>




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
						
						
<div class="art-block clearfix">
<!-- ####################      BLOQUE DERECHA 1      ###################   -->
 <div class="art-blockheader">
<!-- ########################### ADD GOOGLE ############################## -->

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- adap_total -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6608960084070816"
     data-ad-slot="1982564089"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});

</script>
<HR>            

</div>

<div class="art-blockcontent"><p>
<!-- ##########################   CONTENT   #$#################### -->
</p>
</div>
</div>
<div class="art-block clearfix">
<div class="art-blockcontent">

  <!-- ######################   CONTENT     BLOQUE DERECHA  2    ################## -->
</div>
</div>


<div class="art-block clearfix">
        <div class="art-blockcontent">
<p><br>
  <!-- ######################   CONTENT   BLOQUE DERECHA  3   ################# -->
</p>
</div>
</div>
</div>
            
			</div>
            </div>
            </div>
			
			
			<footer class="art-footer clearfix">
<p>www.Agensisgroup.com</p>
<p>AgensisGroup © 2016. All Rights Reserved</p>
</footer>

    </div>
    <p class="art-page-footer">
        <span id="art-footnote-links"><a href="http://www.artisteer.com/" target="_blank">Web Template</a> created with Artisteer.</span>
    </p>
</div>







<script>


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


//MostrarConsulta('consulta_promociones_distrito.php');
//window.location('consulta_promociones_distrito.php?varPHP='+variable_distritoJS);
//MostrarConsulta('consulta_promociones_distrito.php?varPHP='+variable_distritoJS);
MostrarConsulta('consulta_promociones_distrito.php');
//MostrarConsultaMenu('menu.php');
LimpiaCache();


}



//});
</script>



<?
echo " esto es un texto de prueba";

?>


</body>
 </div>
</html>










