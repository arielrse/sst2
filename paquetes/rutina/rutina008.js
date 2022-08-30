
async function getDatos() {
    const res = await fetch("../../paquetes/rutina/data/rutina008.json");
    const datosFetch = await res.json();
    return datosFetch;
}

$(document).ready(function() {
    $('#botonHead, #botonF, #botonFooter').click(function(){
        alert("boton Guardar");

    var idrutina            = $('#rutinaId').val();
    var codigoForm          = $('#codigoForm').val();

    var cm                  = $('#cm').val();
    var sitioId             = $('#sitioId').val();
    var propertyId          = $('#propertyId').val();
    var b_idenActivo        = $('#b_idenActivo').val();
    var b_nroActivo         = $('#b_nroActivo').val();
    var b1_noAplica         = $('#b1_noAplica').prop('checked');
    var b1_idenActivo       = $('#b1_idenActivo').val();
    var b1_nroActivo        = $('#b1_nroActivo').val();
    var d_horainicio        = $('#d_horainicio').val();
    var d_horafin           = $('#d_horafin').val();
    var d_transcurrido      = "";
    var c_fechaRealizacion  = $('#c_fechaRealizacion').val();
    var e_personal          = $('#e_personal').val();

    /** f_verificacion **/
    //var f01_1 = $('#f01_1').prop('checked'); var f01_2 = $('#f01_2').prop('checked'); var f01_3 = $('#f01_3').val();
    var f1_01_01 = $('#f1_01_01').prop('checked'); var f1_01_02 = $('#f1_01_02').prop('checked'); var f1_01_03 = $('#f1_01_03').val();

    /** g_desarrollo_g1 **/
    //var g1_01_01 = $('#g1_01_01').prop('checked'); var g1_01_02 = $('#g1_01_02').prop('checked'); var g1_01_03 = $('#g1_01_03').val();
    var g1_01_01 = $('#g1_01_01').prop('checked'); var g1_01_02 = $('#g1_01_02').prop('checked'); var g1_01_03 = $('#g1_01_03').val();
    var g1_02_01 = $('#g1_02_01').prop('checked'); var g1_02_02 = $('#g1_02_02').prop('checked'); var g1_02_03 = $('#g1_02_03').val();
    var g1_03_01 = $('#g1_03_01').prop('checked'); var g1_03_02 = $('#g1_03_02').prop('checked'); var g1_03_03 = $('#g1_03_03').val();
    var g1_04_01 = $('#g1_04_01').prop('checked'); var g1_04_02 = $('#g1_04_02').prop('checked'); var g1_04_03 = $('#g1_04_03').val();
    var g1_05_01 = $('#g1_05_01').prop('checked'); var g1_05_02 = $('#g1_05_02').prop('checked'); var g1_05_03 = $('#g1_05_03').val();
    var g1_06_01 = $('#g1_06_01').prop('checked'); var g1_06_02 = $('#g1_06_02').prop('checked'); var g1_06_03 = $('#g1_06_03').val();
    var g1_07_01 = $('#g1_07_01').prop('checked'); var g1_07_02 = $('#g1_07_02').prop('checked'); var g1_07_03 = $('#g1_07_03').val();
    var g1_08_01 = $('#g1_08_01').prop('checked'); var g1_08_02 = $('#g1_08_02').prop('checked'); var g1_08_03 = $('#g1_08_03').val();
    var g1_09_01 = $('#g1_09_01').prop('checked'); var g1_09_02 = $('#g1_09_02').prop('checked'); var g1_09_03 = $('#g1_09_03').val();
    var g1_10_01 = $('#g1_10_01').prop('checked'); var g1_10_02 = $('#g1_10_02').prop('checked'); var g1_10_03 = $('#g1_10_03').val();
    var g1_11_01 = $('#g1_11_01').prop('checked'); var g1_11_02 = $('#g1_11_02').prop('checked'); var g1_11_03 = $('#g1_11_03').val();
    var g1_12_01 = $('#g1_12_01').prop('checked'); var g1_12_02 = $('#g1_12_02').prop('checked'); var g1_12_03 = $('#g1_12_03').val();
    var g1_13_01 = $('#g1_13_01').prop('checked'); var g1_13_02 = $('#g1_13_02').prop('checked'); var g1_13_03 = $('#g1_13_03').val();
    var g1_14_01 = $('#g1_14_01').prop('checked'); var g1_14_02 = $('#g1_14_02').prop('checked'); var g1_14_03 = $('#g1_14_03').val();
    var g1_15_01 = $('#g1_15_01').prop('checked'); var g1_15_02 = $('#g1_15_02').prop('checked'); var g1_15_03 = $('#g1_15_03').val();
    var g1_16_01 = $('#g1_16_01').prop('checked'); var g1_16_02 = $('#g1_16_02').prop('checked'); var g1_16_03 = $('#g1_16_03').val();

    /** g_desarrollo_g2 **/
    //var g2_01_01 = $('#g2_01_01').prop('checked'); var g2_01_02 = $('#g2_01_02').val();
    var g2_01_01 = $('#g2_01_01').prop('checked'); var g2_01_02 = $('#g2_01_02').val();
    var g2_02_01 = $('#g2_02_01').prop('checked'); var g2_02_02 = $('#g2_02_02').val();
    var g2_03_01 = $('#g2_03_01').prop('checked'); var g2_03_02 = $('#g2_03_02').val();
    var g2_04_01 = $('#g2_04_01').prop('checked'); var g2_04_02 = $('#g2_04_02').val();
    var g2_05_01 = $('#g2_05_01').prop('checked'); var g2_05_02 = $('#g2_05_02').val();
    var g2_06_01 = $('#g2_06_01').prop('checked'); var g2_06_02 = $('#g2_06_02').val();
    var g2_07_01 = $('#g2_07_01').prop('checked'); var g2_07_02 = $('#g2_07_02').val();

    /** g_desarrollo_g2 **/
    //var g3_20_01 = $('#g3_20_01').val(); var g3_20_02 = $('#g3_20_02').val(); var g3_20_03 = $('#g3_20_03').prop('checked');
    var g3_01_01=  $('#g3_01_01').val(); var g3_01_02 = $('#g3_01_02').val(); var g3_01_03 = $('#g3_01_03').val(); var g3_01_04 = $('#g3_01_04').val(); var g3_01_05 = $('#g3_01_05').val(); var g3_01_06 = $('#g3_01_06').val();
    var g3_02_01=  $('#g3_02_01').val(); var g3_02_02 = $('#g3_02_02').val(); var g3_02_03 = $('#g3_02_03').val();
    var g3_03_01=  $('#g3_03_01').val();
    var g3_04_01 = $('#g3_04_01').prop('checked'); var g3_04_02 = $('#g3_04_02').prop('checked');
    var g3_05_01 = $('#g3_05_01').prop('checked'); var g3_05_02 = $('#g3_05_02').prop('checked');
    var g3_06_01=  $('#g3_06_01').val();



    /** footer **/
    var h_pendientes        = $('#h_pendientes').val()
    var i_recomendaciones   = $('#i_recomendaciones').val()
    var j_observaciones     = $('#j_observaciones').val()

/** ------------------------ **/
getDatos().then( (datos) => {

    datos.cm                 = cm;
    datos.sitioId            = sitioId;
    datos.propertyId         = propertyId;
    datos.b_idenActivo       = b_idenActivo;
    datos.b_nroActivo        = b_nroActivo;
    datos.b1_noAplica        = b1_noAplica;
    datos.b1_idenActivo      = b1_idenActivo;
    datos.b1_nroActivo       = b1_nroActivo;
    datos.d_horainicio       = d_horainicio;
    datos.d_horafin          = d_horafin;
    datos.d_transcurrido     = d_transcurrido;
    datos.c_fechaRealizacion = c_fechaRealizacion;
    datos.e_personal         = e_personal;

    /** f_verificacion **/
    //datos.f_verificacion.f01_1 = f01_1; datos.f_verificacion.f01_2 = f01_2; datos.f_verificacion.f01_3 = f01_3;
    datos.f_verificacion.f1_01_01 = f1_01_01; datos.f_verificacion.f1_01_02 = f1_01_02; datos.f_verificacion.f1_01_03 = f1_01_03;

    /** g_desarrollo_g1 **/
    //datos.g_desarrollo_g1.g1_01_01 = g1_01_01; datos.g_desarrollo_g1.g1_01_02 = g1_01_02; datos.g_desarrollo_g1.g1_01_03 = g1_01_03;
    datos.g_desarrollo_g1.g1_01_01 = g1_01_01; datos.g_desarrollo_g1.g1_01_02 = g1_01_02; datos.g_desarrollo_g1.g1_01_03 = g1_01_03;
    datos.g_desarrollo_g1.g1_02_01 = g1_02_01; datos.g_desarrollo_g1.g1_02_02 = g1_02_02; datos.g_desarrollo_g1.g1_02_03 = g1_02_03;
    datos.g_desarrollo_g1.g1_03_01 = g1_03_01; datos.g_desarrollo_g1.g1_03_02 = g1_03_02; datos.g_desarrollo_g1.g1_03_03 = g1_03_03;
    datos.g_desarrollo_g1.g1_04_01 = g1_04_01; datos.g_desarrollo_g1.g1_04_02 = g1_04_02; datos.g_desarrollo_g1.g1_04_03 = g1_04_03;
    datos.g_desarrollo_g1.g1_05_01 = g1_05_01; datos.g_desarrollo_g1.g1_05_02 = g1_05_02; datos.g_desarrollo_g1.g1_05_03 = g1_05_03;
    datos.g_desarrollo_g1.g1_06_01 = g1_06_01; datos.g_desarrollo_g1.g1_06_02 = g1_06_02; datos.g_desarrollo_g1.g1_06_03 = g1_06_03;
    datos.g_desarrollo_g1.g1_07_01 = g1_07_01; datos.g_desarrollo_g1.g1_07_02 = g1_07_02; datos.g_desarrollo_g1.g1_07_03 = g1_07_03;
    datos.g_desarrollo_g1.g1_08_01 = g1_08_01; datos.g_desarrollo_g1.g1_08_02 = g1_08_02; datos.g_desarrollo_g1.g1_08_03 = g1_08_03;
    datos.g_desarrollo_g1.g1_09_01 = g1_09_01; datos.g_desarrollo_g1.g1_09_02 = g1_09_02; datos.g_desarrollo_g1.g1_09_03 = g1_09_03;
    datos.g_desarrollo_g1.g1_10_01 = g1_10_01; datos.g_desarrollo_g1.g1_10_02 = g1_10_02; datos.g_desarrollo_g1.g1_10_03 = g1_10_03;
    datos.g_desarrollo_g1.g1_11_01 = g1_11_01; datos.g_desarrollo_g1.g1_11_02 = g1_11_02; datos.g_desarrollo_g1.g1_11_03 = g1_11_03;
    datos.g_desarrollo_g1.g1_12_01 = g1_12_01; datos.g_desarrollo_g1.g1_12_02 = g1_12_02; datos.g_desarrollo_g1.g1_12_03 = g1_12_03;
    datos.g_desarrollo_g1.g1_13_01 = g1_13_01; datos.g_desarrollo_g1.g1_13_02 = g1_13_02; datos.g_desarrollo_g1.g1_13_03 = g1_13_03;
    datos.g_desarrollo_g1.g1_14_01 = g1_14_01; datos.g_desarrollo_g1.g1_14_02 = g1_14_02; datos.g_desarrollo_g1.g1_14_03 = g1_14_03;
    datos.g_desarrollo_g1.g1_15_01 = g1_15_01; datos.g_desarrollo_g1.g1_15_02 = g1_15_02; datos.g_desarrollo_g1.g1_15_03 = g1_15_03;
    datos.g_desarrollo_g1.g1_16_01 = g1_16_01; datos.g_desarrollo_g1.g1_16_02 = g1_16_02; datos.g_desarrollo_g1.g1_16_03 = g1_16_03;

    /** g_desarrollo_g2 **/
    datos.g_desarrollo_g2.g2_01_01 = g2_01_01; datos.g_desarrollo_g2.g2_01_02 = g2_01_02;
    datos.g_desarrollo_g2.g2_02_01 = g2_02_01; datos.g_desarrollo_g2.g2_02_02 = g2_02_02;
    datos.g_desarrollo_g2.g2_03_01 = g2_03_01; datos.g_desarrollo_g2.g2_03_02 = g2_03_02;
    datos.g_desarrollo_g2.g2_04_01 = g2_04_01; datos.g_desarrollo_g2.g2_04_02 = g2_04_02;
    datos.g_desarrollo_g2.g2_05_01 = g2_05_01; datos.g_desarrollo_g2.g2_05_02 = g2_05_02;
    datos.g_desarrollo_g2.g2_06_01 = g2_06_01; datos.g_desarrollo_g2.g2_06_02 = g2_06_02;
    datos.g_desarrollo_g2.g2_07_01 = g2_07_01; datos.g_desarrollo_g2.g2_07_02 = g2_07_02;


    /** g_desarrollo_g3 **/
    //datos.g_desarrollo_g3.g3_15_01 = g3_15_01; datos.g_desarrollo_g3.g3_15_02 = g3_15_02;
    datos.g_desarrollo_g3.g3_01_01 = g3_01_01; datos.g_desarrollo_g3.g3_01_02 = g3_01_02; datos.g_desarrollo_g3.g3_01_03 = g3_01_03; datos.g_desarrollo_g3.g3_01_04 = g3_01_04; datos.g_desarrollo_g3.g3_01_05 = g3_01_05; datos.g_desarrollo_g3.g3_01_06 = g3_01_06;
    datos.g_desarrollo_g3.g3_02_01 = g3_02_01; datos.g_desarrollo_g3.g3_02_02 = g3_02_02; datos.g_desarrollo_g3.g3_02_03 = g3_02_03;
    datos.g_desarrollo_g3.g3_03_01 = g3_03_01;
    datos.g_desarrollo_g3.g3_04_01 = g3_04_01; datos.g_desarrollo_g3.g3_04_02 = g3_04_02;
    datos.g_desarrollo_g3.g3_05_01 = g3_05_01; datos.g_desarrollo_g3.g3_05_02 = g3_05_02;
    datos.g_desarrollo_g3.g3_06_01 = g3_06_01;

    datos.h_pendientes      = h_pendientes;
    datos.i_recomendaciones = i_recomendaciones;
    datos.j_observaciones   = j_observaciones;

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
