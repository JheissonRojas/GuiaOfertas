<?

/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              INICIO  IMPRESION                  TIPO  2_1                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/

if ($url)
{
echo "
<a href='$url' target='_blank '> <img class='zoom1' src='/$imagen' WIDTH=100% HEIGHT=100% BORDER=2 ALT='$desc_2'/>
</a>
";
}
else
{
echo "

<img class='zoom1' src='/$imagen' WIDTH=100% HEIGHT=100% BORDER=2 ALT='$desc_2'/>

";
}


echo "

<div style=' color:#FDFEFE; font-size:30px; font-family: Lora; font-weight: bold; BACKGROUND-COLOR: #3B0B24;'>
<p style='font-size:7px'><br> </p>
&nbsp; $negocio  <br>
<p style='font-size:7px'><br> </p>
</div>
<br>

<div style=' margin-left:10px; color:#2E2E2E; font-size:21px; font-family: Open Sans; font-weight: bold;'>
$desc_1 <br>
</div>

<br>
";

if($url){
echo"
<div style='width:100px;
color:#FDFEFE; font-size:8px; font-family: Slabo; font-weight: bold;' >


<a href='$url' target='_blank ' onmouseover='this.style.color=#FFFFFF;' 
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
<div style='color:#FDFEFE; font-size:19px; font-family: Ubuntu Light; font-weight: bold;
margin-left:0px; margin-right:20%; background-color:#1DD804;
text-align:center; padding-bottom: 5px; padding-top: 5px; padding-left: 10px; padding-right: 10px;word-wrap:break-word;

border: solid #3B0B24 0.5px; border-radius: 5%;
'>
$telefono <br>
</div>

</td>
<td width='50%'>
<!--
<div style='color:#FDFEFE; font-size:19px; font-family: Roboto Light; font-weight: bold;
margin-left:20%; margin-right:0px; background-color:#FF5201;
text-align:center; padding-bottom: 5px; padding-top: 5px; padding-left: 10px; padding-right: 10px;word-wrap:break-word;

border: solid #3B0B24 0.5px; border-radius: 5%;
'>
$precio  <br>
</div>
-->
";

include '_ventana_emergente2.php';


echo"
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

	 


";
/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$$$$$$$$$              FIN  IMPRESION                  TIPO  2_1                             $$$$$$$$$$$$
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/

?>