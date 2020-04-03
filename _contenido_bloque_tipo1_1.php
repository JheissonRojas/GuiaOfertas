<?
/*
echo"

<html>
	<head>
	
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
			-moz-opacity: 0.8;
			opacity:.80;
			filter: alpha(opacity=80);
		}
		.white_content {
			display: none;
			position: absolute;
			top: 50%;
			left: 25%;
			bottom: 10%;
			width: 50%;
			height: 50%;
			padding: 8px;
			border: 16px solid orange #FF5201;
			background-color: white;
			z-index:1002;
			overflow: auto;
		}
	</style>
	</head>
	<body>

";
*/


/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              INICIO  IMPRESION                  TIPO  1_1                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/
if ($url)
{
echo "
<!--<a href='$url' target='_blank '> <img class='zoom1' src='/ofertasaqp/$imagen' WIDTH=100% 
-->
<a href='$url' target='_blank '> <img class='zoom1' src='/$imagen' WIDTH=100% 
HEIGHT=100% BORDER=2 ALT='$desc_2'/>
</a>
";
}
else
{
echo "
<!--
<img class='zoom1' src='/ofertasaqp/$imagen' WIDTH=100% HEIGHT=100% BORDER=2 
-->
<img class='zoom1' src='/$imagen' WIDTH=100% HEIGHT=100% BORDER=2 
ALT='$desc_2'/>

";
}


echo"
<!--
<a href='$url' target='_blank '> <img class='zoom1' src='/ofertasaqp/$imagen' WIDTH=100% HEIGHT=50% BORDER=2 ALT='$desc_2'/>
</a>
-->

<div style=' color:#FDFEFE; font-size:35px; font-family: Lora; font-weight: bold; BACKGROUND-COLOR: #3B0B24;'>
<br>
&nbsp; $negocio  <br>
<br>
</div>
<br>

<div style=' margin-left:10px; color:#2E2E2E; font-size:25px; font-family: Open Sans; font-weight: bold;'>
$desc_1 <br>
</div>

<br>
";

if($url){
echo"
<div style='width:100px;
color:#FDFEFE; font-size:25px; font-family: Slabo; font-weight: bold;' >


<a href='$url' target='_blank ' onmouseover='this.style.color=#3B0B24;' 
style='
margin-left:10px; background-color:#FF5201;
text-align:center; padding-bottom: 5px; padding-top: 5px; padding-left: 10px; padding-right: 10px;word-wrap:break-word;


border: solid #3B0B24 0.5px; border-radius: 10%;'>
VER MAS</a>

</div>
";
}

echo"
<!--<hr style='color:#3B0B24; border:1px; border-style: dashed; width:100%; height=1px' noshade>-->
<hr style='color:#3B0B24; border:1px; border-style:solid; width:100%; height=1px' noshade>

<table style='width:100%;'>
<tr>
<td width='50%'>
<center>
<div style='color:#FDFEFE; font-size:25px; font-family: Ubuntu Light; font-weight: bold;
margin-left:30px; margin-right:20%; background-color:#1DD804;
text-align:center; padding-bottom: 5px; padding-top: 5px; padding-left: 10px; padding-right: 10px;word-wrap:break-word;

border: solid #3B0B24 0.5px; border-radius: 5%;
'>
$telefono <br>
</center>
</div>

</td>
<td width='50%'>

<!--
<div style='color:#FDFEFE; font-size:25px; font-family: Roboto Light; font-weight: bold;
margin-left:20%; margin-right:0px; background-color:#FF5201;
text-align:center; padding-bottom: 5px; padding-top: 5px; padding-left: 10px; padding-right: 10px;word-wrap:break-word;

border: solid #3B0B24 0.5px; border-radius: 5%;
'>


 $precio  <br>
<H2>OBTENER DESCUENTO<H2>
</div> 
-->
<!--
<input type=\"button\" value=\"OBTENER DESCUENTO\" class=\"button\" data-type=\"zoomout\" />
-->
";



include '_ventana_emergente1.php';



echo "

</div>
</td>
</tr>
</table>

";

echo "
<!--<hr style='color:#3B0B24; border:1px; border-style: dashed; width:100%; height=5px' noshade>-->
<hr style='color:#3B0B24; border:1px; width:100%; height=5px' noshade>
<!-- </P>-->
</div>
</div>
</div>

	 
 </div>
 </div>
 </div>

<br><br><br><br><br><br>

";
/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              FIN  IMPRESION                  TIPO  1_1                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/
/*
echo"</body> </html>";
*/
?>