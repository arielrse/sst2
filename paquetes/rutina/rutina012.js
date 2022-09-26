
async function getDatos() {
    const res = await fetch("../../paquetes/rutina/data/rutina012.json");
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
    var f1_01_01 = $('#f1_01_01').prop('checked'); var f1_01_02 = $('#f1_01_02').prop('checked'); var f1_01_03 = $('#f1_01_03').val();
    var f1_02_01 = $('#f1_02_01').prop('checked'); var f1_02_02 = $('#f1_02_02').prop('checked'); var f1_02_03 = $('#f1_02_03').val();
    var f1_03_01 = $('#f1_03_01').prop('checked'); var f1_03_02 = $('#f1_03_02').prop('checked'); var f1_03_03 = $('#f1_03_03').val();

    var g1_01_01 = $('#g1_01_01').prop('checked'); var g1_01_02 = $('#g1_01_02').prop('checked'); var g1_01_03 = $('#g1_01_03').val();

    var g2_01_01 = $('#g2_01_01').prop('checked'); var g2_01_02 = $('#g2_01_02').prop('checked'); var g2_01_03 = $('#g2_01_03').val();
    var g2_02_01 = $('#g2_02_01').prop('checked'); var g2_02_02 = $('#g2_02_02').prop('checked'); var g2_02_03 = $('#g2_02_03').val();
    var g2_03_01 = $('#g2_03_01').prop('checked'); var g2_03_02 = $('#g2_03_02').prop('checked'); var g2_03_03 = $('#g2_03_03').val();
    var g2_04_01 = $('#g2_04_01').prop('checked'); var g2_04_02 = $('#g2_04_02').prop('checked'); var g2_04_03 = $('#g2_04_03').val();
    var g2_05_01 = $('#g2_05_01').prop('checked'); var g2_05_02 = $('#g2_05_02').prop('checked'); var g2_05_03 = $('#g2_05_03').val();
    var g2_06_01 = $('#g2_06_01').prop('checked'); var g2_06_02 = $('#g2_06_02').prop('checked'); var g2_06_03 = $('#g2_06_03').val();
    var g2_07_01 = $('#g2_07_01').prop('checked'); var g2_07_02 = $('#g2_07_02').prop('checked'); var g2_07_03 = $('#g2_07_03').val();

    var g3_01_01 = $('#g3_01_01').prop('checked'); var g3_01_02 = $('#g3_01_02').prop('checked'); var g3_01_03 = $('#g3_01_03').val();
    var g3_02_01 = $('#g3_02_01').prop('checked'); var g3_02_02 = $('#g3_02_02').prop('checked'); var g3_02_03 = $('#g3_02_03').val();
    var g3_03_01 = $('#g3_03_01').prop('checked'); var g3_03_02 = $('#g3_03_02').prop('checked'); var g3_03_03 = $('#g3_03_03').val();
    var g3_04_01 = $('#g3_04_01').prop('checked'); var g3_04_02 = $('#g3_04_02').prop('checked'); var g3_04_03 = $('#g3_04_03').val();

    var g4_01_01 = $('#g4_01_01').prop('checked'); var g4_01_02 = $('#g4_01_02').prop('checked'); var g4_01_03 = $('#g4_01_03').val();
    var g4_02_01 = $('#g4_02_01').prop('checked'); var g4_02_02 = $('#g4_02_02').prop('checked'); var g4_02_03 = $('#g4_02_03').val();
    var g4_03_01 = $('#g4_03_01').prop('checked'); var g4_03_02 = $('#g4_03_02').prop('checked'); var g4_03_03 = $('#g4_03_03').val();
    var g4_04_01 = $('#g4_04_01').prop('checked'); var g4_04_02 = $('#g4_04_02').prop('checked'); var g4_04_03 = $('#g4_04_03').val();
    var g4_05_01 = $('#g4_05_01').prop('checked'); var g4_05_02 = $('#g4_05_02').prop('checked'); var g4_05_03 = $('#g4_05_03').val();
    var g4_06_01 = $('#g4_06_01').prop('checked'); var g4_06_02 = $('#g4_06_02').prop('checked'); var g4_06_03 = $('#g4_06_03').val();
    var g4_07_01 = $('#g4_07_01').prop('checked'); var g4_07_02 = $('#g4_07_02').prop('checked'); var g4_07_03 = $('#g4_07_03').val();
    var g4_08_01 = $('#g4_08_01').prop('checked'); var g4_08_02 = $('#g4_08_02').prop('checked'); var g4_08_03 = $('#g4_08_03').val();
    var g4_09_01 = $('#g4_09_01').prop('checked'); var g4_09_02 = $('#g4_09_02').prop('checked'); var g4_09_03 = $('#g4_09_03').val();
    var g4_10_01 = $('#g4_10_01').prop('checked'); var g4_10_02 = $('#g4_10_02').prop('checked'); var g4_10_03 = $('#g4_10_03').val();
    var g4_11_01 = $('#g4_11_01').prop('checked'); var g4_11_02 = $('#g4_11_02').prop('checked'); var g4_11_03 = $('#g4_11_03').val();
    var g4_12_01 = $('#g4_12_01').prop('checked'); var g4_12_02 = $('#g4_12_02').prop('checked'); var g4_12_03 = $('#g4_12_03').val();
    var g4_13_01 = $('#g4_13_01').prop('checked'); var g4_13_02 = $('#g4_13_02').prop('checked'); var g4_13_03 = $('#g4_13_03').val();
    var g4_14_01 = $('#g4_14_01').prop('checked'); var g4_14_02 = $('#g4_14_02').prop('checked'); var g4_14_03 = $('#g4_14_03').val();
    var g4_15_01 = $('#g4_15_01').prop('checked'); var g4_15_02 = $('#g4_15_02').prop('checked'); var g4_15_03 = $('#g4_15_03').val();
    var g4_16_01 = $('#g4_16_01').prop('checked'); var g4_16_02 = $('#g4_16_02').prop('checked'); var g4_16_03 = $('#g4_16_03').val();
    var g4_17_01 = $('#g4_17_01').prop('checked'); var g4_17_02 = $('#g4_17_02').prop('checked'); var g4_17_03 = $('#g4_17_03').val();

    var g5_01_01 = $('#g5_01_01').val();
    var g5_02_01 = $('#g5_02_01').val();
    var g5_03_01 = $('#g5_03_01').val();
    var g5_04_01 = $('#g5_04_01').val();
    var g5_05_01 = $('#g5_05_01').val();    var g5_05_02 = $('#g5_05_02').val();
    var g5_06_01 = $('#g5_06_01').val();    var g5_06_02 = $('#g5_06_02').val();
    var g5_07_01 = $('#g5_07_01').val();    var g5_07_02 = $('#g5_07_02').val();
    var g5_08_01 = $('#g5_08_01').val();    var g5_08_02 = $('#g5_08_02').val();

    /** footer **/
    var pendientes        = $('#pendientes').val()
    var recomendaciones   = $('#recomendaciones').val()
    var observaciones     = $('#observaciones').val()

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
    datos.g_desarrollo.f1_01_01 = f1_01_01; datos.g_desarrollo.f1_01_02 = f1_01_02; datos.g_desarrollo.f1_01_03 = f1_01_03;
    datos.g_desarrollo.f1_02_01 = f1_02_01; datos.g_desarrollo.f1_02_02 = f1_02_02; datos.g_desarrollo.f1_02_03 = f1_02_03;
    datos.g_desarrollo.f1_03_01 = f1_03_01; datos.g_desarrollo.f1_03_02 = f1_03_02; datos.g_desarrollo.f1_03_03 = f1_03_03;

    datos.g_desarrollo.g1_01_01 = g1_01_01; datos.g_desarrollo.g1_01_02 = g1_01_02; datos.g_desarrollo.g1_01_03 = g1_01_03;

    datos.g_desarrollo.g2_01_01 = g2_01_01; datos.g_desarrollo.g2_01_02 = g2_01_02; datos.g_desarrollo.g2_01_03 = g2_01_03;
    datos.g_desarrollo.g2_02_01 = g2_02_01; datos.g_desarrollo.g2_02_02 = g2_02_02; datos.g_desarrollo.g2_02_03 = g2_02_03;
    datos.g_desarrollo.g2_03_01 = g2_03_01; datos.g_desarrollo.g2_03_02 = g2_03_02; datos.g_desarrollo.g2_03_03 = g2_03_03;
    datos.g_desarrollo.g2_04_01 = g2_04_01; datos.g_desarrollo.g2_04_02 = g2_04_02; datos.g_desarrollo.g2_04_03 = g2_04_03;
    datos.g_desarrollo.g2_05_01 = g2_05_01; datos.g_desarrollo.g2_05_02 = g2_05_02; datos.g_desarrollo.g2_05_03 = g2_05_03;
    datos.g_desarrollo.g2_06_01 = g2_06_01; datos.g_desarrollo.g2_06_02 = g2_06_02; datos.g_desarrollo.g2_06_03 = g2_06_03;
    datos.g_desarrollo.g2_07_01 = g2_07_01; datos.g_desarrollo.g2_07_02 = g2_07_02; datos.g_desarrollo.g2_07_03 = g2_07_03;

    datos.g_desarrollo.g3_01_01 = g3_01_01; datos.g_desarrollo.g3_01_02 = g3_01_02; datos.g_desarrollo.g3_01_03 = g3_01_03;
    datos.g_desarrollo.g3_02_01 = g3_02_01; datos.g_desarrollo.g3_02_02 = g3_02_02; datos.g_desarrollo.g3_02_03 = g3_02_03;
    datos.g_desarrollo.g3_03_01 = g3_03_01; datos.g_desarrollo.g3_03_02 = g3_03_02; datos.g_desarrollo.g3_03_03 = g3_03_03;
    datos.g_desarrollo.g3_04_01 = g3_04_01; datos.g_desarrollo.g3_04_02 = g3_04_02; datos.g_desarrollo.g3_04_03 = g3_04_03;

    datos.g_desarrollo.g4_01_01 = g4_01_01; datos.g_desarrollo.g4_01_02 = g4_01_02; datos.g_desarrollo.g4_01_03 = g4_01_03;
    datos.g_desarrollo.g4_02_01 = g4_02_01; datos.g_desarrollo.g4_02_02 = g4_02_02; datos.g_desarrollo.g4_02_03 = g4_02_03;
    datos.g_desarrollo.g4_03_01 = g4_03_01; datos.g_desarrollo.g4_03_02 = g4_03_02; datos.g_desarrollo.g4_03_03 = g4_03_03;
    datos.g_desarrollo.g4_04_01 = g4_04_01; datos.g_desarrollo.g4_04_02 = g4_04_02; datos.g_desarrollo.g4_04_03 = g4_04_03;
    datos.g_desarrollo.g4_05_01 = g4_05_01; datos.g_desarrollo.g4_05_02 = g4_05_02; datos.g_desarrollo.g4_05_03 = g4_05_03;
    datos.g_desarrollo.g4_06_01 = g4_06_01; datos.g_desarrollo.g4_06_02 = g4_06_02; datos.g_desarrollo.g4_06_03 = g4_06_03;
    datos.g_desarrollo.g4_07_01 = g4_07_01; datos.g_desarrollo.g4_07_02 = g4_07_02; datos.g_desarrollo.g4_07_03 = g4_07_03;
    datos.g_desarrollo.g4_08_01 = g4_08_01; datos.g_desarrollo.g4_08_02 = g4_08_02; datos.g_desarrollo.g4_08_03 = g4_08_03;
    datos.g_desarrollo.g4_09_01 = g4_09_01; datos.g_desarrollo.g4_09_02 = g4_09_02; datos.g_desarrollo.g4_09_03 = g4_09_03;
    datos.g_desarrollo.g4_10_01 = g4_10_01; datos.g_desarrollo.g4_10_02 = g4_10_02; datos.g_desarrollo.g4_10_03 = g4_10_03;
    datos.g_desarrollo.g4_11_01 = g4_11_01; datos.g_desarrollo.g4_11_02 = g4_11_02; datos.g_desarrollo.g4_11_03 = g4_11_03;
    datos.g_desarrollo.g4_12_01 = g4_12_01; datos.g_desarrollo.g4_12_02 = g4_12_02; datos.g_desarrollo.g4_12_03 = g4_12_03;
    datos.g_desarrollo.g4_13_01 = g4_13_01; datos.g_desarrollo.g4_13_02 = g4_13_02; datos.g_desarrollo.g4_13_03 = g4_13_03;
    datos.g_desarrollo.g4_14_01 = g4_14_01; datos.g_desarrollo.g4_14_02 = g4_14_02; datos.g_desarrollo.g4_14_03 = g4_14_03;
    datos.g_desarrollo.g4_15_01 = g4_15_01; datos.g_desarrollo.g4_15_02 = g4_15_02; datos.g_desarrollo.g4_15_03 = g4_15_03;
    datos.g_desarrollo.g4_16_01 = g4_16_01; datos.g_desarrollo.g4_16_02 = g4_16_02; datos.g_desarrollo.g4_16_03 = g4_16_03;
    datos.g_desarrollo.g4_17_01 = g4_17_01; datos.g_desarrollo.g4_17_02 = g4_17_02; datos.g_desarrollo.g4_17_03 = g4_17_03;

    datos.g_desarrollo.g5_01_01 = g5_01_01;
    datos.g_desarrollo.g5_02_01 = g5_02_01;
    datos.g_desarrollo.g5_03_01 = g5_03_01;
    datos.g_desarrollo.g5_04_01 = g5_04_01;
    datos.g_desarrollo.g5_05_01 = g5_05_01; datos.g_desarrollo.g5_05_02 = g5_05_02;
    datos.g_desarrollo.g5_06_01 = g5_06_01; datos.g_desarrollo.g5_06_02 = g5_06_02;
    datos.g_desarrollo.g5_07_01 = g5_07_01; datos.g_desarrollo.g5_07_02 = g5_07_02;
    datos.g_desarrollo.g5_08_01 = g5_08_01; datos.g_desarrollo.g5_08_02 = g5_08_02;

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
