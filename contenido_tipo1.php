<?

fuction tipo1()
{
echo '

<canvas height="300px" width="300px" id="micanvas"></canvas>

var canvas = document.getElementById("micanvas");
var ctx = canvas.getContext("2d")

var img = new Image();
img.src = "imagene/logo_aulambra.png";

img.onload = function(){
  ctx.drawImage(img, 0, 0);
}


<canvas height="300px" width="300px" id="micanvas">
Su navegador no soporta en elemento CANVAS</canvas>
<script>
var canvas = document.getElementById("micanvas");
var ctx = canvas.getContext("2d");

ctx.fillRect(0,0,200,200);

ctx.fillStyle="#f00";

</script>
}

';
?>