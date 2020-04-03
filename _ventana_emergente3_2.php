<?
$hoy = getdate();
$tamano_letra='11px';
echo "

<center>
<input type=\"button\" value=\"DESCUENTO\" class=\"button\" data-type=\"zoomout\"  style=\"font-size:$tamano_letra\"  onclick = \"document.getElementById('$negocio').style.display='block';document.getElementById('$desc_2').style.display='block'\" />
</center>



<!--
<center>
<input type=\"button\" value=\" DESCUENTO\" class=\"button\" data-type=\"zoomout\"  onclick = \"document.getElementById('$negocio').style.display='block';document.getElementById('fade').style.display='block'\" />
</center>
-->

<div id='$negocio' class=\"white_content\">

<div style=' color:#FDFEFE; font-size:35px; font-family: Lora; font-weight: bold; BACKGROUND-COLOR: #3B0B24;'>
<br>
&nbsp; $negocio  <br>
<br>
</div>

$desc_promo
";

if($fin_promo==$hoy)
{
echo " 
<h4>
$desc_promo
<br>
La promoción es valida hasta el d&iacute;a de hoy 
<br>
</h4>
<h3>
El c&oacute;digo de la promoci&oacute;n es 
</h3>
<h2>
$codigo_promo
</h2>
<br>
<h6>
Deber&aacute; anotar y mostrar el c&oacute;digo para hacer v&aacute;lido el descuento 
</h6>
<br>
<h7>

Pronto podrás recibir promociones a tu celular de aquello que estas buscando s &iacute;guenos en Facebook 

</h7>

";

}
elseif($fin_promo>$hoy)
{

echo "
<h4>
$desc_promo
<br>
 La promoci&oacute;n es valida hasta  el  $fin_promo 
<br>
</h4>
<h3>
El c&oacute;digo de la promoci&oacute;n es 
</h3>
<h2>
$codigo_promo
</h2>
<br>
<h6>
Deber&aacute; anotar y mostrar el c&oacute;digo para hacer v&aacute;lido el descuento 
</h6>

<h7>

Pronto podrás recibir promociones a tu celular de aquello que estas buscando s &iacute;guenos en Facebook 

</h7>


";
}
else
{
echo " 
<h4>
No existe promoci&oacute;n por el momento
<br>

<!--
$desc_promo
<br>
 La promoción es valida hasta  el  $fin_promo 
</h4>
<h3>
El codigo de la promocion es 
</h3>
<h2>
$codigo_promo
</h2>
<br>
<h6>
Deberá  de mostrar el código para hacer valido su descuento 
</h6>
-->

<h7>

Pronto podrás recibir promociones a tu celular de aquello que estas buscando siguenos en Facebook 

</h7>


";
}



echo"

<a href = \"javascript:void(0)\" onclick = \"document.getElementById('$negocio').style.display='none';document.getElementById('fade').style.display='none'\">

<center>
<input type=\"button\" value=\"cerrar\" class=\"button\" />
</center>
</a>
<!--</div>-->

";

?>