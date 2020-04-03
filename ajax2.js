

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



function MostrarConsulta(datos){

$.ajaxSetup({ cache:false });
        divResultado = document.getElementById('resultado');

        ajax=objetoAjax();

       ajax.open("GET", datos,true);

        ajax.onreadystatechange=function() {

               if (ajax.readyState==4) {

                       divResultado.innerHTML = ajax.responseText;



               }
        }


        ajax.send(null);

}



function MostrarConsulta_prueba(datos, div){

$.ajaxSetup({ cache:false });
        divResultado = document.getElementById(div);

        ajax=objetoAjax();

       ajax.open("GET", datos,true);

        ajax.onreadystatechange=function() {

               if (ajax.readyState==4) {

                       divResultado.innerHTML = ajax.responseText;



               }
        }


        ajax.send(null);

}

function ejecuta_ajax(datos,div,ajax1)
{
$.ajaxSetup({ cache:false });

//ajax1=objetoAjax();

        ajax1.open("GET", datos,true);

        ajax1.onreadystatechange=function() {

               if (ajax1.readyState==4) {

                       div.innerHTML = ajax1.responseText;

               }
        }
        ajax1.send(null);


}

function MostrarConsulta_busqueda(form_busqueda,datos1){

$.ajaxSetup({ cache:false });

        divResultado1 = document.getElementById('resultado_tipo111');
// div_busqueda=document.getElementById('form_busqueda');
/*        divResultado1_2 = document.getElementById('resultado_tipo122');
        divResultado1_3 = document.getElementById('resultado_tipo131');
        divResultado2 = document.getElementById('resultado_tipo21');
        divResultado2_2 = document.getElementById('resultado_tipo22');
        divResultado2_3 = document.getElementById('resultado_tipo23');
        divResultado3 = document.getElementById('resultado_tipo31');
        divResultado3_2 = document.getElementById('resultado_tipo32');
        divResultado3_3 = document.getElementById('resultado_tipo33');
        divResultado4 = document.getElementById('resultado_tipo4');
*/
ajax1=objetoAjax();
//ajax_busqueda=objetoAjax();




/*
ajax2=objetoAjax();
ajax3=objetoAjax();
ajax4=objetoAjax();
*/

//ejecuta_ajax(form_busqueda, div_busqueda,ajax_busqueda);
ejecuta_ajax(datos1, divResultado1,ajax1);
/*
ejecuta_ajax(datos2, divResultado2,ajax2 );
ejecuta_ajax(datos3, divResultado3,ajax3);
ejecuta_ajax(datos4, divResultado4,ajax4);



ajax12=objetoAjax();
ajax22=objetoAjax();
ajax32=objetoAjax();


ejecuta_ajax(datos1_2, divResultado1_2,ajax12);
ejecuta_ajax(datos2_2, divResultado2_2,ajax22);
ejecuta_ajax(datos3_2, divResultado3_2,ajax32);


ajax13=objetoAjax();
ajax23=objetoAjax();
ajax33=objetoAjax();

ejecuta_ajax(datos1_3, divResultado1_3,ajax13);
ejecuta_ajax(datos2_3, divResultado2_3,ajax23);
ejecuta_ajax(datos3_3, divResultado3_3,ajax33);
*/

}



function MostrarConsulta2(form_busqueda,datos1, datos1_2, datos1_3, datos2, datos2_2, datos2_3, datos3, datos3_2, datos3_3, datos4){

$.ajaxSetup({ cache:false });

//        div_busqueda=document.getElementById('form_busqueda');
        divResultado1 = document.getElementById('resultado_tipo111');
        divResultado1_2 = document.getElementById('resultado_tipo122');
        divResultado1_3 = document.getElementById('resultado_tipo131');
        divResultado2 = document.getElementById('resultado_tipo21');
        divResultado2_2 = document.getElementById('resultado_tipo22');
        divResultado2_3 = document.getElementById('resultado_tipo23');
        divResultado3 = document.getElementById('resultado_tipo31');
        divResultado3_2 = document.getElementById('resultado_tipo32');
        divResultado3_3 = document.getElementById('resultado_tipo33');
        divResultado4 = document.getElementById('resultado_tipo4');

//ajax_busqueda=objetoAjax();
ajax1=objetoAjax();
ajax2=objetoAjax();
ajax3=objetoAjax();
ajax4=objetoAjax();


//ejecuta_ajax(form_busqueda, div_busqueda,ajax_busqueda);
ejecuta_ajax(datos1, divResultado1,ajax1);
ejecuta_ajax(datos2, divResultado2,ajax2 );
ejecuta_ajax(datos3, divResultado3,ajax3);
ejecuta_ajax(datos4, divResultado4,ajax4);



ajax12=objetoAjax();
ajax22=objetoAjax();
ajax32=objetoAjax();


ejecuta_ajax(datos1_2, divResultado1_2,ajax12);
ejecuta_ajax(datos2_2, divResultado2_2,ajax22);
ejecuta_ajax(datos3_2, divResultado3_2,ajax32);


ajax13=objetoAjax();
ajax23=objetoAjax();
ajax33=objetoAjax();

ejecuta_ajax(datos1_3, divResultado1_3,ajax13);
ejecuta_ajax(datos2_3, divResultado2_3,ajax23);
ejecuta_ajax(datos3_3, divResultado3_3,ajax33);


}