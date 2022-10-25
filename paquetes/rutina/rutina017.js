
async function getDatos() {
    const res = await fetch("../../paquetes/rutina/data/rutina017.json");
    const datosFetch = await res.json();
    return datosFetch;
}

$(document).ready(function() {
    $('#botonHead, #botonF, #botonFooter').click(function(){
        alert("Guardando...");

    var idrutina            = $('#rutinaId').val();
    var codigoForm          = $('#codigoForm').val();

    //var cm                  = $('#cm').val();
    var sitioId             = $('#sitioId').val();
    var propertyId          = $('#propertyId').val();
    //var b_idenActivo        = $('#b_idenActivo').val();
    //var b_nroActivo         = $('#b_nroActivo').val();
    //var b1_noAplica         = $('#b1_noAplica').prop('checked');
    //var b1_idenActivo       = $('#b1_idenActivo').val();
    //var b1_nroActivo        = $('#b1_nroActivo').val();
    var d_horainicio        = $('#d_horainicio').val();
    var d_horafin           = $('#d_horafin').val();
    //var t_transcurrido      = $('#t_transcurrido').val();
    var t_transcurrido      = '';
    var c_fechaRealizacion  = $('#c_fechaRealizacion').val();
    var e_personal          = $('#e_personal').val();

    var d_horainicio1        = $('#d_horainicio1').val();
    var d_horafin1           = $('#d_horafin1').val();
    var c_fechaherbicida  = $('#c_fechaherbicida').val();
    //var f1_01_01 = $('#f1_01_01').prop('checked'); var f1_01_02 = $('#f1_01_02').prop('checked'); var f1_01_03 = $('#f1_01_03').val();
  //d_herbicida
var d_01_01 = $('#d_01_01').val(); var d_01_02 = $('#d_01_02').val();
var d_02_01 = $('#d_02_01').val(); var d_02_02 = $('#d_02_02').val();
var d_03_01 = $('#d_03_01').val(); var d_03_02 = $('#d_03_02').val();
var d_04_02 = $('#d_04_02').val();
var d_05_01 = $('#d_05_01').prop('checked'); var d_05_02 = $('#d_05_02').prop('checked');
var d_06_01 = $('#d_06_01').val();
var d_07_01 = $('#d_07_01').val();
var d_08_01 = $('#d_08_01').prop('checked');
var d_08_02 = $('#d_08_02').prop('checked');
var d_08_03 = $('#d_08_03').prop('checked');
var d_08_04 = $('#d_08_04').prop('checked');
var d_08_05 = $('#d_08_05').prop('checked');
var d_08_06 = $('#d_08_06').prop('checked');
var d_08_07 = $('#d_08_07').prop('checked');
var d_08_08 = $('#d_08_08').prop('checked');
var d_08_09 = $('#d_08_09').prop('checked');

//a_datos
var a_01_01 = $('#a_01_01').val(); var a_01_02 = $('#a_01_02').val(); var a_01_03 = $('#a_01_03').val();
var a_02_01 = $('#a_02_01').val(); var a_02_02 = $('#a_02_02').val(); var a_02_03 = $('#a_02_03').val();
var a_03_01 = $('#a_03_01').val(); var a_03_02 = $('#a_03_02').val(); var a_03_03 = $('#a_03_03').val();
var a_04_01 = $('#a_04_01').val(); var a_04_02 = $('#a_04_02').val(); var a_04_03 = $('#a_04_03').val();
var a_05_01 = $('#a_05_01').val();
var a_06_01 = $('#a_06_01').val();
var a_07_01 = $('#a_07_01').val();
var a_08_01 = $('#a_08_01').val();
var a_09_01 = $('#a_09_01').val();
var a_10_01 = $('#a_10_01').val();
var a_11_01 = $('#a_11_01').val();
var a_12_01 = $('#a_12_01').val();
var a_13_01 = $('#a_13_01').val();

    /** footer **/
    var pendientes        = $('#pendientes').val();
    var recomendaciones   = $('#recomendaciones').val();
    var observaciones     = $('#observaciones').val();

/** ------------------------ **/
getDatos().then( (datos) => {

    //datos.cm                 = cm;
    datos.sitioId            = sitioId;
    datos.propertyId         = propertyId;
   // datos.b_idenActivo       = b_idenActivo;
    //datos.b_nroActivo        = b_nroActivo;
    //datos.b1_noAplica        = b1_noAplica;
    //datos.b1_idenActivo      = b1_idenActivo;
    //datos.b1_nroActivo       = b1_nroActivo;
    datos.d_horainicio       = d_horainicio;
    datos.d_horafin          = d_horafin;
    datos.t_transcurrido     = t_transcurrido;
    datos.c_fechaRealizacion = c_fechaRealizacion;
    datos.e_personal         = e_personal;

    datos.d_horainicio1       = d_horainicio1;
    datos.d_horafin1          = d_horafin1;
    datos.c_fechaherbicida = c_fechaherbicida;
    /* d_herbicida */
// datos.b_acceso.b_01_01 = b_01_01;
    datos.d_herbicida.d_01_01 = d_01_01; datos.d_herbicida.d_01_02 = d_01_02;
    datos.d_herbicida.d_02_01 = d_02_01; datos.d_herbicida.d_02_02 = d_02_02;
    datos.d_herbicida.d_03_01 = d_03_01; datos.d_herbicida.d_03_02 = d_03_02;
    datos.d_herbicida.d_04_02 = d_04_02;
    datos.d_herbicida.d_05_01 = d_05_01; datos.d_herbicida.d_05_02 = d_05_02;
    datos.d_herbicida.d_06_01 = d_06_01;
    datos.d_herbicida.d_07_01 = d_07_01;
    datos.d_herbicida.d_08_01 = d_08_01;
    datos.d_herbicida.d_08_02 = d_08_02;
    datos.d_herbicida.d_08_03 = d_08_03;
    datos.d_herbicida.d_08_04 = d_08_04;
    datos.d_herbicida.d_08_05 = d_08_05;
    datos.d_herbicida.d_08_06 = d_08_06;
    datos.d_herbicida.d_08_07 = d_08_07;
    datos.d_herbicida.d_08_08 = d_08_08;
    datos.d_herbicida.d_08_09 = d_08_09;
    //a_datos
    datos.a_datos.a_01_01 = a_01_01; datos.a_datos.a_01_02 = a_01_02; datos.a_datos.a_01_03 = a_01_03;
    datos.a_datos.a_02_01 = a_02_01; datos.a_datos.a_02_02 = a_02_02; datos.a_datos.a_02_03 = a_02_03;
    datos.a_datos.a_03_01 = a_03_01; datos.a_datos.a_03_02 = a_03_02; datos.a_datos.a_03_03 = a_03_03;
    datos.a_datos.a_04_01 = a_04_01; datos.a_datos.a_04_02 = a_04_02; datos.a_datos.a_04_03 = a_04_03;
    datos.a_datos.a_05_01 = a_05_01;
    datos.a_datos.a_06_01 = a_06_01;
    datos.a_datos.a_07_01 = a_07_01;
    datos.a_datos.a_08_01 = a_08_01;
    datos.a_datos.a_09_01 = a_09_01;
    datos.a_datos.a_10_01 = a_10_01;
    datos.a_datos.a_11_01 = a_11_01;
    datos.a_datos.a_12_01 = a_12_01;
    datos.a_datos.a_13_01 = a_13_01;

    datos.pendientes      = pendientes;
    datos.recomendaciones = recomendaciones;
    datos.observaciones   = observaciones;

    //alert(JSON.stringify( datos ));

                jQuery.post("../../paquetes/rutina/update_rutina.php", {
                    idrutina: idrutina,
                    codigoForm: codigoForm,
                    jsonData: JSON.stringify( datos )
                    }, function(data, textStatus){
                        //$("#table-routine").load(window.location + " #table-routine");
                    }
                );

            })

    });
});
