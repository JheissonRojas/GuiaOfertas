<?

function tipo0($desc_2, $negocio)
{
echo '

<div class="art-layout-wrapper clearfix">
<div class="art-content-layout">
<div class="art-content-layout-row">

<div class="art-layout-cell art-content clearfix">
<div class="art-block clearfix">
<div class="art-blockcontent"><p><br>';

echo "$desc_2 <br>
$negocio  <br>";

echo '
<hr>

</p>
</div>
</div>
</div>
	 
 </div>
 </div>
 </div>

<br>
<br>
<br>
<br>

';
}

//  $$$$$$$$$$$$$$$$$$$$$$$$$$$$   TIPO 4    $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


function tipo4($imagen, $desc_1, $desc_2, $precio, $negocio, $url, $telefono, $codigo_promo, $fin_promo, $desc_promo)
{
echo '

<div class="art-layout-wrapper clearfix">
<div class="art-content-layout">
<div class="art-content-layout-row">

<div class="art-layout-cell art-content clearfix">
<div class="art-block clearfix">
<div class="art-blockcontent">
<!--<br><br>-->
';


    
/*WIDTH=178 HEIGHT=180 BORDER=2 VSPACE=3 HSPACE=3 ALT="Obra de K. Haring"*/


/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              INICIO  IMPRESION                  TIPO  4                            $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/

include '_contenido_bloque_tipo4.php';

/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              FIN  IMPRESION                  TIPO  4                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/


}





// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$    TIPO 1_1 $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


function tipo1_1($imagen, $desc_1, $desc_2, $precio, $negocio, $url, $telefono, $codigo_promo, $fin_promo, $desc_promo)
{
echo '

<div class="art-layout-wrapper clearfix">
<div class="art-content-layout">
<div class="art-content-layout-row">

<div class="art-layout-cell art-content clearfix">
<div class="art-block clearfix">
<div class="art-blockcontent">
<!--<br><br>-->
';


    
/*WIDTH=178 HEIGHT=180 BORDER=2 VSPACE=3 HSPACE=3 ALT="Obra de K. Haring"*/


/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              INICIO  IMPRESION                  TIPO  1_1                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/

include '_contenido_bloque_tipo1_1.php';

/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              FIN  IMPRESION                  TIPO  1_1                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/


}

// ##############################  TIPO 1 - 2 ####################################


function tipo1_2($imagen, $desc_1, $desc_2, $precio, $negocio, $url, $telefono, $codigo_promo, $fin_promo, $desc_promo)
{
echo '

<div class="art-layout-wrapper clearfix">
<div class="art-content-layout">
<div class="art-content-layout-row">

<div class="art-layout-cell art-content clearfix">
<div class="art-block clearfix">
<div class="art-blockcontent">
';

/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              INICIO  IMPRESION                  TIPO  1_2                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/

include '_contenido_bloque_tipo1_1.php';

/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              FIN  IMPRESION                  TIPO  1_2                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/


}




// ################################  TIPO 2  #####################################

function tipo2($imagen, $desc_1, $desc_2, $precio, $negocio, $url, $telefono, $codigo_promo, $fin_promo, $desc_promo,  $flag, $flag2)
{

if($flag==1)
{
/* style="width:48%;" */
echo '


<div class="art-layout-wrapper clearfix">
<div class="art-content-layout">
<div class="art-content-layout-row">

<div class="art-layout-cell art-sidebar1_bloque2 clearfix" >
<div class="art-block clearfix" >
<div class="art-blockcontent" >
<!-- ########################### ADD GOOGLE ############################## -->
';

/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              INICIO  IMPRESION                  TIPO  2_1                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/

include '_contenido_bloque_tipo2_1.php';

/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              FIN  IMPRESION                  TIPO  2_1                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/


if($flag2==1)
{
echo '
<div class="art-layout-cell art-content_bloque2 clearfix">
<div class="">
<!-- ####################      BLOQUE DERECHA 1      ###################   -->
<div class=""><p>
<!-- ##########################   CONTENT   ##################### -->
</p>
</div>
</div>
</div>
             
			 
 </div>
 </div>
 </div>
<br><br><br><br><br><br>
';

}

}
if($flag==2){

echo ' 
<div class="art-layout-cell art-content_bloque2 clearfix"  >
<div class="art-block clearfix"  >
<div class="art-blockcontent" >
  <!-- ##########################   CONTENT  PROMOCIONES  ##################### -->
';

/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              INICIO  IMPRESION                  TIPO  2_2                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/

include '_contenido_bloque_tipo2_2.php';

/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              FIN  IMPRESION                  TIPO  2_2                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/

}
}

// ################################  TIPO 3_1  #####################################

function tipo3_1($imagen, $desc_1, $desc_2, $precio, $negocio, $url, $telefono, $codigo_promo, $fin_promo, $desc_promo,  $flag, $flag2)
{
//echo"$flag";
if($flag==1)
{
echo '

<div class="art-layout-wrapper clearfix">
<div class="art-content-layout">
				
<div class="art-content-layout-row">

<div class="art-layout-cell art-sidebar1_bloque3 clearfix">
<div class="art-block clearfix">
<div class="art-blockcontent">
';

/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              INICIO  IMPRESION                  TIPO 3_1                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/

include '_contenido_bloque_tipo3_1.php';

/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              FIN  IMPRESION                  TIPO  3_1                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/



if($flag2==1)
{
echo '
<div class="art-layout-cell art-content_bloque3 clearfix">
<div class="">
<!-- ####################      BLOQUE DERECHA 1      ###################   -->
<div class=""><p>
<!-- ##########################   CONTENT   ##################### -->
</p>
</div>
</div>
</div>
             
			 
 </div>
 </div>
 </div>

<br><br><br><br><br><br>
';

}


}
if($flag==2)
{
echo '
<div class="art-layout-cell art-content_bloque3 clearfix">
<div class="art-block clearfix">
<!-- ####################      BLOQUE DERECHA 1      ###################   -->
<div class="art-blockcontent">
';

/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              INICIO  IMPRESION                  TIPO  3_2                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/

include '_contenido_bloque_tipo3_2.php';

/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              FIN  IMPRESION                  TIPO  3_2                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/


if($flag2==1)
{
echo '
<div class="art-layout-cell art-content_bloque3 clearfix">
<div class="">
<!-- ####################      BLOQUE DERECHA 1      ###################   -->
<div class=""><p>
<!-- ##########################   CONTENT   ##################### -->
</p>
</div>
</div>
</div>
             
			 
 </div>
 </div>
 </div>

<br><br><br><br><br><br>
';


}


}

if($flag==3)
{
echo '
<div class="art-layout-cell art-content_bloque3 clearfix">
<div class="art-block clearfix">
<!-- ####################      BLOQUE DERECHA 1      ###################   -->
<div class=""art-blockcontent"">
';
    
/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              INICIO  IMPRESION                  TIPO  3_3                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/

include '_contenido_bloque_tipo3_3.php';

/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              FIN  IMPRESION                  TIPO  3_3                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/


}


}


?>