
async function getDatos() {
    const res = await fetch("../../paquetes/rutina/data/rutina010.json");
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

    /** g_desarrollo **/
    //var g1_01_01 = $('#g1_01_01').prop('checked'); var g1_01_02 = $('#g1_01_02').prop('checked'); var g1_01_03 = $('#g1_01_03').val();
    var f1_01_01 = $('#f1_01_01').prop('checked'); var f1_01_02 = $('#f1_01_02').prop('checked'); var f1_01_03 = $('#f1_01_03').val();
    var g1_01_01 = $('#g1_01_01').prop('checked'); var g1_01_02 = $('#g1_01_02').prop('checked'); var g1_01_03 = $('#g1_01_03').val();
    var g1_02_01 = $('#g1_02_01').prop('checked'); var g1_02_02 = $('#g1_02_02').prop('checked'); var g1_02_03 = $('#g1_02_03').val();
    var g1_03_01 = $('#g1_03_01').prop('checked'); var g1_03_02 = $('#g1_03_02').prop('checked'); var g1_03_03 = $('#g1_03_03').val();
    var g1_04_01 = $('#g1_04_01').prop('checked'); var g1_04_02 = $('#g1_04_02').prop('checked'); var g1_04_03 = $('#g1_04_03').val();
    var g1_05_01 = $('#g1_05_01').prop('checked'); var g1_05_02 = $('#g1_05_02').prop('checked'); var g1_05_03 = $('#g1_05_03').val();
    var g1_06_01 = $('#g1_06_01').prop('checked'); var g1_06_02 = $('#g1_06_02').prop('checked'); var g1_06_03 = $('#g1_06_03').val();
    var g1_07_01 = $('#g1_07_01').prop('checked'); var g1_07_02 = $('#g1_07_02').val();
    var g1_08_01 = $('#g1_08_01').prop('checked'); var g1_08_02 = $('#g1_08_02').val();
    var g1_09_01 = $('#g1_09_01').prop('checked'); var g1_09_02 = $('#g1_09_02').prop('checked'); var g1_09_03 = $('#g1_09_03').val();
    var g1_10_01 = $('#g1_10_01').prop('checked'); var g1_10_02 = $('#g1_10_02').val();
    var g1_11_01 = $('#g1_11_01').prop('checked'); var g1_11_02 = $('#g1_11_02').prop('checked'); var g1_11_03 = $('#g1_11_03').val();
    var g1_12_01 = $('#g1_12_01').prop('checked'); var g1_12_02 = $('#g1_12_02').prop('checked'); var g1_12_03 = $('#g1_12_03').val();
    var g1_13_01 = $('#g1_13_01').val();                 var g1_13_02 = $('#g1_13_02').val();                 var g1_13_03 = $('#g1_13_03').val();
    var g1_14_01 = $('#g1_14_01').val();                 var g1_14_02 = $('#g1_14_02').val();                 var g1_14_03 = $('#g1_14_03').val();
    var g1_15_01 = $('#g1_15_01').val();
    var g1_16_01 = $('#g1_16_01').val();                 var g1_16_02 = $('#g1_16_02').val();
    var g1_17_01 = $('#g1_17_01').val();                 var g1_17_02 = $('#g1_17_02').val();
    var g1_18_01 = $('#g1_18_01').prop('checked'); var g1_18_02 = $('#g1_18_02').prop('checked');
    var g1_19_01 = $('#g1_19_01').prop('checked'); var g1_19_02 = $('#g1_19_02').prop('checked');
    var g1_20_01 = $('#g1_20_01').val();
    var g1_21_01 = $('#g1_21_01').prop('checked'); var g1_21_02 = $('#g1_21_02').prop('checked'); var g1_21_03 = $('#g1_21_03').prop('checked'); var g1_21_04 = $('#g1_21_04').prop('checked');
    var g1_22_01 = $('#g1_22_01').prop('checked'); var g1_22_02 = $('#g1_22_02').prop('checked'); var g1_22_03 = $('#g1_22_03').prop('checked'); var g1_22_04 = $('#g1_22_04').prop('checked');
    var g1_23_01 = $('#g1_23_01').prop('checked'); var g1_23_02 = $('#g1_23_02').prop('checked'); var g1_23_03 = $('#g1_23_03').prop('checked'); var g1_23_04 = $('#g1_23_04').prop('checked');


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

    /** g_desarrollo **/
    //datos.g_desarrollo.g1_01_01 = g1_01_01; datos.g_desarrollo_g1.g1_01_02 = g1_01_02; datos.g_desarrollo_g1.g1_01_03 = g1_01_03;
    datos.g_desarrollo.f1_01_01 = f1_01_01; datos.g_desarrollo.f1_01_02 = f1_01_02; datos.g_desarrollo.f1_01_03 = f1_01_03;
    datos.g_desarrollo.g1_01_01 = g1_01_01; datos.g_desarrollo.g1_01_02 = g1_01_02; datos.g_desarrollo.g1_01_03 = g1_01_03;
    datos.g_desarrollo.g1_02_01 = g1_02_01; datos.g_desarrollo.g1_02_02 = g1_02_02; datos.g_desarrollo.g1_02_03 = g1_02_03;
    datos.g_desarrollo.g1_03_01 = g1_03_01; datos.g_desarrollo.g1_03_02 = g1_03_02; datos.g_desarrollo.g1_03_03 = g1_03_03;
    datos.g_desarrollo.g1_04_01 = g1_04_01; datos.g_desarrollo.g1_04_02 = g1_04_02; datos.g_desarrollo.g1_04_03 = g1_04_03;
    datos.g_desarrollo.g1_05_01 = g1_05_01; datos.g_desarrollo.g1_05_02 = g1_05_02; datos.g_desarrollo.g1_05_03 = g1_05_03;
    datos.g_desarrollo.g1_06_01 = g1_06_01; datos.g_desarrollo.g1_06_02 = g1_06_02; datos.g_desarrollo.g1_06_03 = g1_06_03;
    datos.g_desarrollo.g1_07_01 = g1_07_01; datos.g_desarrollo.g1_07_02 = g1_07_02;
    datos.g_desarrollo.g1_08_01 = g1_08_01; datos.g_desarrollo.g1_08_02 = g1_08_02;
    datos.g_desarrollo.g1_09_01 = g1_09_01; datos.g_desarrollo.g1_09_02 = g1_09_02; datos.g_desarrollo.g1_09_03 = g1_09_03;
    datos.g_desarrollo.g1_10_01 = g1_10_01; datos.g_desarrollo.g1_10_02 = g1_10_02;
    datos.g_desarrollo.g1_11_01 = g1_11_01; datos.g_desarrollo.g1_11_02 = g1_11_02; datos.g_desarrollo.g1_11_03 = g1_11_03;
    datos.g_desarrollo.g1_12_01 = g1_12_01; datos.g_desarrollo.g1_12_02 = g1_12_02; datos.g_desarrollo.g1_12_03 = g1_12_03;
    datos.g_desarrollo.g1_13_01 = g1_13_01; datos.g_desarrollo.g1_13_02 = g1_13_02; datos.g_desarrollo.g1_13_03 = g1_13_03;
    datos.g_desarrollo.g1_14_01 = g1_14_01; datos.g_desarrollo.g1_14_02 = g1_14_02; datos.g_desarrollo.g1_14_03 = g1_14_03;
    datos.g_desarrollo.g1_15_01 = g1_15_01;
    datos.g_desarrollo.g1_16_01 = g1_16_01; datos.g_desarrollo.g1_16_02 = g1_16_02;
    datos.g_desarrollo.g1_17_01 = g1_17_01; datos.g_desarrollo.g1_17_02 = g1_17_02;
    datos.g_desarrollo.g1_18_01 = g1_18_01; datos.g_desarrollo.g1_18_02 = g1_18_02;
    datos.g_desarrollo.g1_19_01 = g1_19_01; datos.g_desarrollo.g1_19_02 = g1_19_02;
    datos.g_desarrollo.g1_20_01 = g1_20_01;
    datos.g_desarrollo.g1_21_01 = g1_21_01; datos.g_desarrollo.g1_21_02 = g1_21_02; datos.g_desarrollo.g1_21_03 = g1_21_03; datos.g_desarrollo.g1_21_04 = g1_21_04;
    datos.g_desarrollo.g1_22_01 = g1_22_01; datos.g_desarrollo.g1_22_02 = g1_22_02; datos.g_desarrollo.g1_22_03 = g1_22_03; datos.g_desarrollo.g1_22_04 = g1_22_04;
    datos.g_desarrollo.g1_23_01 = g1_23_01; datos.g_desarrollo.g1_23_02 = g1_23_02; datos.g_desarrollo.g1_23_03 = g1_23_03; datos.g_desarrollo.g1_23_04 = g1_23_04;

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
