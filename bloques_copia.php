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

';
}





function tipo1_1($imagen, $desc_1, $desc_2, $precio, $negocio, $url, $telefono)
{
echo '

<div class="art-layout-wrapper clearfix">
<div class="art-content-layout">
<div class="art-content-layout-row">

<div class="art-layout-cell art-content clearfix">
<div class="art-block clearfix">
<div class="art-blockcontent"><p><br>';
/*
<div class="zoom1">Efecto de zoom con CSS3</div>
    <img class="zoom1" src="http://www.lawebdelprogramador.com/logolwp100x25.jpg" />
*/
echo "$imagen <br>
$desc_1 <br>
$desc_2 <br>
$negocio  <br>
$url <br>
$telefono <br>";

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
}

// ##############################  TIPO 1 - 2 ####################################


function tipo1_2($imagen, $desc_1, $desc_2, $precio, $negocio, $url, $telefono)
{
echo '

<div class="art-layout-wrapper clearfix">
<div class="art-content-layout">
<div class="art-content-layout-row">

<div class="art-layout-cell art-content clearfix">
<div class="art-block clearfix">
<div class="art-blockcontent"><p><br>';

echo "$imagen <br>
$desc_1 <br>
$desc_2 <br>
$negocio  <br>
$url <br>
$telefono <br>";

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
}




// ################################  TIPO 2  #####################################

function tipo2($imagen, $desc_1, $desc_2, $precio, $negocio, $url, $telefono,  $flag, $flag2)
{

if($flag==1)
{
echo '


<div class="art-layout-wrapper clearfix">
<div class="art-content-layout">
				
<div class="art-content-layout-row">

<div class="art-layout-cell art-sidebar1_bloque2 clearfix">
<div class="art-block clearfix">
<div class="art-blockcontent"><p>
<!-- ########################### ADD GOOGLE ############################## -->
';

echo "$imagen <br>
$desc_1 <br>
$desc_2 <br>
$negocio  <br>
$url <br>
$telefono <br>";

echo '
<!-- ##### LINEA VERTICAL ################################ -->
<!-- <div class="vertical-line" style="height: 45px;" />  -->
<hr>
</div>
</div>
</div>
';

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
';

}

}
if($flag==2){
echo ' 
<div class="art-layout-cell art-content_bloque2 clearfix">
<div class="art-block clearfix">
<div class="art-blockcontent"><p><br>
  <!-- ##########################   CONTENT  PROMOCIONES  ##################### -->
';

echo "$imagen <br>
$desc_1 <br>
$desc_2 <br>
$negocio  <br>
$url <br>
$telefono <br>";

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

}

}

// ################################  TIPO 3_1  #####################################

function tipo3_1($imagen, $desc_1, $desc_2, $precio, $negocio, $url, $telefono,  $flag, $flag2)
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
<div class="art-blockcontent"><p>
<!-- ########################### ADD GOOGLE ############################## -->

<!-- ##### LINEA VERTICAL ################################ -->
<!-- <div class="vertical-line" style="height: 45px;" />  -->
<hr>
</div>
</div>
</div>
';
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
';

}


}
if($flag==2)
{
echo '
<div class="art-layout-cell art-content_bloque3 clearfix">
<div class="art-block clearfix">
<!-- ####################      BLOQUE DERECHA 1      ###################   -->
<div class="art-blockcontent"><p>
<!-- ##########################   CONTENT   ##################### -->
<hr>
</p>
</div>
</div>
</div>
';

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
';


}


}

if($flag==3)
{
echo '
<div class="art-layout-cell art-content_bloque3 clearfix">
<div class="art-block clearfix">
<!-- ####################      BLOQUE DERECHA 1      ###################   -->
<div class=""art-blockcontent""><p>
<!-- ##########################   CONTENT   ##################### -->
<hr>
</p>
</div>
</div>
</div>
             
			 
 </div>
 </div>
 </div>
';
    
}


}


?>