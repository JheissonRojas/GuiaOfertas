<?
/*$hoy = getdate();*/

$hoy= date("Y/m/d");
/*function getDia($var){*/

	$dias = array('','Lunes','Martes','Miercoles','Jueves','Viernes','Sábado','Domingo');
/*
	return $dias[$var];
}
*/
 
/*function getMes($var){*/
	
	$meses = array('','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
/*
	return $meses[$var];
}
*/

/*$fin_promo2=date("l d \d\e F \d\e\l Y",strtotime($fin_promo));*/
$dia_sem = date("N",strtotime($fin_promo));
$mes_ano= date("n",strtotime($fin_promo));

$dia_num=date("d",strtotime($fin_promo));
$ano=date("Y",strtotime($fin_promo));

$dia=$dias[$dia_sem];
$mes=$meses[$mes_ano];

?>

<?
echo "
<center>
<input type=\"button\" value=\"OBTENER DESCUENTO\" class=\"button\" data-type=\"zoomout\"  onclick = \"document.getElementById('$negocio').style.display='block';document.getElementById('fade').style.display='block'\" />
</center>


<div id='$negocio' class=\"white_content\">

<div style=' color:#FDFEFE; font-size:35px; font-family: Lora; font-weight: bold; BACKGROUND-COLOR: #3B0B24;'>
<br>
&nbsp; $negocio  <br>
<br><br>
</div>
";

if($fin_promo==$hoy)
{
echo " 
<h4>
<br><br>
$desc_promo
<br><br>
La promoción es valida hasta el día de hoy 
<br>
</h4>
<h5>
El código de la promoción es 
</h5>
<h2>
$codigo_promo
</h2>
<br>
<h6>
Deberá mostrar el código para hacer válido el descuento 
</h6>

<!--
<h7>

Pronto podrás recibir promociones a tu celular de aquello que estas buscando siguenos en Facebook 

</h7>
-->
";

}/* elseif($fin_promo>$hoy) */
elseif($fin_promo!=0)
{

echo "
<h4>
<br>
$desc_promo
<br><br>
 La promoción es valida hasta  el  
<!--$fin_promo2-->
$dia $dia_num de $mes del $ano 

</h4>
<h5>
<br><br>
El código de la promoción es 
</h5>
<h2>
$codigo_promo
</h2>
<br>
<h6>
Deberá mostrar el código para hacer válido el descuento 
</h6>

";
}
else
{
echo " 
<h4>
No existe promoción por el momento
<br>
</h4>

";
}
echo"
<br><br><br>
<h7>

Pronto podrás recibir promociones a tu celular de aquello que estas buscando síguenos en Facebook 

</h7>

";


echo"

<a href = \"javascript:void(0)\" onclick = \"document.getElementById('$negocio').style.display='none';document.getElementById('fade').style.display='none'\">

<center>
<input type=\"button\" value=\"cerrar\" class=\"button\" />
</center>
</a>
<!--</div>-->

";

?>