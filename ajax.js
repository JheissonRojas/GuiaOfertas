

function objetoAjax(){
        var xmlhttp=false;
        try {
               xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
               try {
                  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
               } catch (E) {
                       xmlhttp = false;
               }
        }
 
        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
               xmlhttp = new XMLHttpRequest();

        }

        return xmlhttp;

}



function MostrarConsulta_conDiv(datos1, div ){

var zona_resultado=div;
$.ajaxSetup({ cache:false });

        divResultado1 = document.getElementById(zona_resultado);
        

        ajax1=objetoAjax();
       

        ajax1.open("GET", datos1,true);
        

        ajax1.onreadystatechange=function() {

               if (ajax1.readyState==4) {

                       divResultado1.innerHTML = ajax1.responseText;

               }
        }
        ajax1.send(null);

}




function MostrarConsulta_tipo3(datos1, datos2, datos3, datos4){

$.ajaxSetup({ cache:false });

        divResultado1 = document.getElementById('resultado_tipo1_1_1');
        divResultado2 = document.getElementById('resultado_tipo2_1_1');
        divResultado3 = document.getElementById('resultado_tipo3_1_1');
        divResultado4 = document.getElementById('resultado_tipo4_1_!);

        ajax1=objetoAjax();
        ajax2=objetoAjax();
        ajax3=objetoAjax();
        ajax4=objetoAjax();

        ajax1.open("GET", datos1,true);
        ajax2.open("GET", datos2,true);
        ajax3.open("GET", datos3,true);
        ajax4.open("GET", datos4,true);

        ajax1.onreadystatechange=function() {

               if (ajax1.readyState==4) {

                       divResultado1.innerHTML = ajax1.responseText;

               }
        }
        ajax1.send(null);

ajax2.onreadystatechange=function() {

               if (ajax2.readyState==4) {

                       divResultado2.innerHTML = ajax2.responseText;

               }
        }
ajax2.send(null);


ajax3.onreadystatechange=function() {

               if (ajax3.readyState==4) {

                       divResultado3.innerHTML = ajax3.responseText;

               }
        }
ajax3.send(null);



ajax4.onreadystatechange=function() {

               if (ajax4.readyState==4) {

                       divResultado4.innerHTML = ajax4.responseText;

               }
        }
ajax4.send(null);




}


function MostrarConsulta(datos,div){

$.ajaxSetup({ cache:false });
        divResultado = document.getElementById(div);

        ajax=objetoAjax();

//ajaxCSS=new objetoAjax();
//ajaxCSS.pedirTexto("style.css","cont_estilo");

        ajax.open("GET", datos,true);

//return parseInt(new Date().getTime().toString().substring(0, 10))
//{
//var timestamp = fetch_unix_timestamp();
//var nocacheurl = url+"?t="+timestamp;

        ajax.onreadystatechange=function() {

               if (ajax.readyState==4) {

//divResultado.innerHTML = ajaxCSS.responseText;
                       divResultado.innerHTML = ajax.responseText;


//                  setTimeout(function(){refreshDivs(divResultado,secs,url);},secs*1000);

               }
        }
//}

//        ajax.open("GET",nocacheurl,true);
//  $.ajaxSetup({ cache:false });
        ajax.send(null);

}



function MostrarConsultaMenu2(datosMenu){

        divResultadoMenu = document.getElementById('resultado_menu');
        ajax=objetoAjax();
        var datos=ajax.open("GET", datosMenu);
$('#resultado_menu').load(datos);
        //ajax.onreadystatechange=function() {
        //       if (ajax.readyState==4) {
        //               divResultadoMenu.innerHTML = ajax.responseText
        //       }
        //}
        ajax.send(null)
}


function MostrarConsultaMenu(datosMenu){

        divResultadoMenu = document.getElementById('cbOpciones_categoria_menu');
        ajax=objetoAjax();
        ajax.open("GET", datosMenu);
        ajax.onreadystatechange=function() {
               if (ajax.readyState==4) {
                       divResultadoMenu.innerHTML = ajax.responseText
               }
        }
        ajax.send(null)
}


function MostrarConsultaMenu(datos1, datos2){

        divResultado1 = document.getElementById('resultado');
        divResultado2 = document.getElementById('resultado_menu');

        ajax=objetoAjax();

        ajax.open("GET", datos1, datos2);

        ajax.onreadystatechange=function() {

               if (ajax.readyState==4) {

                       divResultado1.innerHTML = ajax.responseText
                       divResultado2.innerHTML = ajax.responseText

               }

        }

          ajax.send(null)

}

function MostrarConsultaMenuCategorias(datosMenu){

        divResultadoMenu = document.getElementById('cbOpciones_categoria_menu');
        ajax=objetoAjax();
        ajax.open("GET", datosMenu);
        ajax.onreadystatechange=function() {
               if (ajax.readyState==4) {
                       divResultadoMenu.innerHTML = ajax.responseText
               }
        }
        ajax.send(null)
}

function MostrarConsultaMenuDistritos(datosMenu){

        divResultadoMenu = document.getElementById('cbOpciones_distrito_menu');
        ajax=objetoAjax();
        ajax.open("GET", datosMenu);
        ajax.onreadystatechange=function() {
               if (ajax.readyState==4) {
                       divResultadoMenu.innerHTML = ajax.responseText
               }
        }
        ajax.send(null)
}