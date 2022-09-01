
async function getDatos() {
    const res = await fetch("../../paquetes/rutina/data/rutina013.json");
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
    //var b_idenActivo        = $('#b_idenActivo').val();
    //var b_nroActivo         = $('#b_nroActivo').val();
    //var b1_noAplica         = $('#b1_noAplica').prop('checked');
    //var b1_idenActivo       = $('#b1_idenActivo').val();
    //var b1_nroActivo        = $('#b1_nroActivo').val();
    var d_horainicio        = $('#d_horainicio').val();
    var d_horafin           = $('#d_horafin').val();
    var d_transcurrido      = "";
    var c_fechaRealizacion  = $('#c_fechaRealizacion').val();
    var e_personal          = $('#e_personal').val();

    //var f1_01_01 = $('#f1_01_01').prop('checked'); var f1_01_02 = $('#f1_01_02').prop('checked'); var f1_01_03 = $('#f1_01_03').val();
    /* e_contacto */
    var e_01_01 = $('#e_01_01').val(); var e_01_02 = $('#e_01_02').val();
    var e_02_01 = $('#e_02_01').val(); var e_02_02 = $('#e_02_02').val();
    var e_03_01 = $('#e_03_01').val(); var e_03_02 = $('#e_03_02').val();
    var e_04_01 = $('#e_04_01').val(); var e_04_02 = $('#e_04_02').val();

    /* f_predio */
    var f_01_01 = $('#f_01_01').val(); var f_01_02 = $('#f_01_02').val(); var f_01_03 = $('#f_01_03').val();
    var f_02_01 = $('#f_02_01').val(); var f_02_02 = $('#f_02_02').val();
    var f_03_01 = $('#f_03_01').val(); var f_03_02 = $('#f_03_02').val();

    /* g_estructura */
    var g_01_01 = $('#g_01_01').val(); var g_01_02 = $('#g_01_02').val(); var g_01_03 = $('#g_01_03').val();
    var g_02_01 = $('#g_02_01').val(); var g_02_02 = $('#g_02_02').val(); var g_02_03 = $('#g_02_03').val();
    var g_03_01 = $('#g_03_01').val(); var g_03_02 = $('#g_03_02').val(); var g_03_03 = $('#g_03_03').val();

    /* h_desarrollo */
    var h_01_01 = $('#h_01_01').prop('checked'); var h_01_02 = $('#h_01_02').prop('checked'); var h_01_03 = $('#h_01_03').val();
    var h_02_01 = $('#h_02_01').prop('checked'); var h_02_02 = $('#h_02_02').prop('checked'); var h_02_03 = $('#h_02_03').val();
    var h_03_01 = $('#h_03_01').prop('checked'); var h_03_02 = $('#h_03_02').prop('checked'); var h_03_03 = $('#h_03_03').val();
    var h_04_01 = $('#h_04_01').prop('checked'); var h_04_02 = $('#h_04_02').prop('checked'); var h_04_03 = $('#h_04_03').val();
    var h_05_01 = $('#h_05_01').prop('checked'); var h_05_02 = $('#h_05_02').prop('checked'); var h_05_03 = $('#h_05_03').val();
    var h_06_01 = $('#h_06_01').prop('checked'); var h_06_02 = $('#h_06_02').prop('checked'); var h_06_03 = $('#h_06_03').val();
    var h_07_01 = $('#h_07_01').prop('checked'); var h_07_02 = $('#h_07_02').prop('checked'); var h_07_03 = $('#h_07_03').val();
    var h_08_01 = $('#h_08_01').prop('checked'); var h_08_02 = $('#h_08_02').prop('checked'); var h_08_03 = $('#h_08_03').val();
    var h_09_01 = $('#h_09_01').prop('checked'); var h_09_02 = $('#h_09_02').prop('checked'); var h_09_03 = $('#h_09_03').val();
    var h_10_01 = $('#h_10_01').prop('checked'); var h_10_02 = $('#h_10_02').prop('checked'); var h_10_03 = $('#h_10_03').val();
    var h_11_01 = $('#h_11_01').prop('checked'); var h_11_02 = $('#h_11_02').prop('checked'); var h_11_03 = $('#h_11_03').val();
    var h_12_01 = $('#h_12_01').prop('checked'); var h_12_02 = $('#h_12_02').prop('checked'); var h_12_03 = $('#h_12_03').val();
    var h_13_01 = $('#h_13_01').prop('checked'); var h_13_02 = $('#h_13_02').prop('checked'); var h_13_03 = $('#h_13_03').val();
    var h_14_01 = $('#h_14_01').prop('checked'); var h_14_02 = $('#h_14_02').prop('checked'); var h_14_03 = $('#h_14_03').val();
    var h_15_01 = $('#h_15_01').prop('checked'); var h_15_02 = $('#h_15_02').prop('checked'); var h_15_03 = $('#h_15_03').val();
    var h_16_01 = $('#h_16_01').prop('checked'); var h_16_02 = $('#h_16_02').prop('checked'); var h_16_03 = $('#h_16_03').val();
    var h_17_01 = $('#h_17_01').prop('checked'); var h_17_02 = $('#h_17_02').prop('checked'); var h_17_03 = $('#h_17_03').val();
    var h_18_01 = $('#h_18_01').prop('checked'); var h_18_02 = $('#h_18_02').prop('checked'); var h_18_03 = $('#h_18_03').val();
    var h_19_01 = $('#h_19_01').prop('checked'); var h_19_02 = $('#h_19_02').prop('checked'); var h_19_03 = $('#h_19_03').val();
    var h_20_01 = $('#h_20_01').prop('checked'); var h_20_02 = $('#h_20_02').prop('checked'); var h_20_03 = $('#h_20_03').val();
    var h_21_01 = $('#h_21_01').prop('checked'); var h_21_02 = $('#h_21_02').prop('checked'); var h_21_03 = $('#h_21_03').val();
    var h_22_01 = $('#h_22_01').prop('checked'); var h_22_02 = $('#h_22_02').prop('checked'); var h_22_03 = $('#h_22_03').val();
    var h_23_01 = $('#h_23_01').prop('checked'); var h_23_02 = $('#h_23_02').prop('checked'); var h_23_03 = $('#h_23_03').val();
    var h_24_01 = $('#h_24_01').prop('checked'); var h_24_02 = $('#h_24_02').prop('checked'); var h_24_03 = $('#h_24_03').val();
    var h_25_01 = $('#h_25_01').prop('checked'); var h_25_02 = $('#h_25_02').prop('checked'); var h_25_03 = $('#h_25_03').val();
    var h_26_01 = $('#h_26_01').prop('checked'); var h_26_02 = $('#h_26_02').prop('checked'); var h_26_03 = $('#h_26_03').val();
    var h_27_01 = $('#h_27_01').prop('checked'); var h_27_02 = $('#h_27_02').prop('checked'); var h_27_03 = $('#h_27_03').val();

    /** footer **/
    var i_observaciones     = $('#i_observaciones').val()

/** ------------------------ **/
getDatos().then( (datos) => {

    datos.cm                 = cm;
    datos.sitioId            = sitioId;
    datos.propertyId         = propertyId;
    //datos.b_idenActivo       = b_idenActivo;
    //datos.b_nroActivo        = b_nroActivo;
    //datos.b1_noAplica        = b1_noAplica;
    //datos.b1_idenActivo      = b1_idenActivo;
    //datos.b1_nroActivo       = b1_nroActivo;
    datos.d_horainicio       = d_horainicio;
    datos.d_horafin          = d_horafin;
    datos.d_transcurrido     = d_transcurrido;
    datos.c_fechaRealizacion = c_fechaRealizacion;
    datos.e_personal         = e_personal;

    /* e_contacto */
    datos.e_contacto.e_01_01 = e_01_01; datos.e_contacto.e_01_02 = e_01_02;
    datos.e_contacto.e_02_01 = e_02_01; datos.e_contacto.e_02_02 = e_02_02;
    datos.e_contacto.e_03_01 = e_03_01; datos.e_contacto.e_03_02 = e_03_02;
    datos.e_contacto.e_04_01 = e_04_01; datos.e_contacto.e_04_02 = e_04_02;

    /* f_predio */
    datos.f_predio.f_01_01 = f_01_01; datos.f_predio.f_01_02 = f_01_02; datos.f_predio.f_01_03 = f_01_03;
    datos.f_predio.f_02_01 = f_02_01; datos.f_predio.f_02_02 = f_02_02;
    datos.f_predio.f_03_01 = f_03_01; datos.f_predio.f_03_02 = f_03_02;


    /* g_estructura */
    datos.g_estructura.g_01_01 = g_01_01; datos.g_estructura.g_01_02 = g_01_02; datos.g_estructura.g_01_03 = g_01_03;
    datos.g_estructura.g_02_01 = g_02_01; datos.g_estructura.g_02_02 = g_02_02; datos.g_estructura.g_02_03 = g_02_03;
    datos.g_estructura.g_03_01 = g_03_01; datos.g_estructura.g_03_02 = g_03_02; datos.g_estructura.g_03_03 = g_03_03;

    /* h_desarrollo */
    datos.h_desarrollo.h_01_01 = h_01_01; datos.h_desarrollo.h_01_02 = h_01_02; datos.h_desarrollo.h_01_03 = h_01_03;
    datos.h_desarrollo.h_02_01 = h_02_01; datos.h_desarrollo.h_02_02 = h_02_02; datos.h_desarrollo.h_02_03 = h_02_03;
    datos.h_desarrollo.h_03_01 = h_03_01; datos.h_desarrollo.h_03_02 = h_03_02; datos.h_desarrollo.h_03_03 = h_03_03;
    datos.h_desarrollo.h_04_01 = h_04_01; datos.h_desarrollo.h_04_02 = h_04_02; datos.h_desarrollo.h_04_03 = h_04_03;
    datos.h_desarrollo.h_05_01 = h_05_01; datos.h_desarrollo.h_05_02 = h_05_02; datos.h_desarrollo.h_05_03 = h_05_03;
    datos.h_desarrollo.h_06_01 = h_06_01; datos.h_desarrollo.h_06_02 = h_06_02; datos.h_desarrollo.h_06_03 = h_06_03;
    datos.h_desarrollo.h_07_01 = h_07_01; datos.h_desarrollo.h_07_02 = h_07_02; datos.h_desarrollo.h_07_03 = h_07_03;
    datos.h_desarrollo.h_08_01 = h_08_01; datos.h_desarrollo.h_08_02 = h_08_02; datos.h_desarrollo.h_08_03 = h_08_03;
    datos.h_desarrollo.h_09_01 = h_09_01; datos.h_desarrollo.h_09_02 = h_09_02; datos.h_desarrollo.h_09_03 = h_09_03;
    datos.h_desarrollo.h_10_01 = h_10_01; datos.h_desarrollo.h_10_02 = h_10_02; datos.h_desarrollo.h_10_03 = h_10_03;
    datos.h_desarrollo.h_11_01 = h_11_01; datos.h_desarrollo.h_11_02 = h_11_02; datos.h_desarrollo.h_11_03 = h_11_03;
    datos.h_desarrollo.h_12_01 = h_12_01; datos.h_desarrollo.h_12_02 = h_12_02; datos.h_desarrollo.h_12_03 = h_12_03;
    datos.h_desarrollo.h_13_01 = h_13_01; datos.h_desarrollo.h_13_02 = h_13_02; datos.h_desarrollo.h_13_03 = h_13_03;
    datos.h_desarrollo.h_14_01 = h_14_01; datos.h_desarrollo.h_14_02 = h_14_02; datos.h_desarrollo.h_14_03 = h_14_03;
    datos.h_desarrollo.h_15_01 = h_15_01; datos.h_desarrollo.h_15_02 = h_15_02; datos.h_desarrollo.h_15_03 = h_15_03;
    datos.h_desarrollo.h_16_01 = h_16_01; datos.h_desarrollo.h_16_02 = h_16_02; datos.h_desarrollo.h_16_03 = h_16_03;
    datos.h_desarrollo.h_17_01 = h_17_01; datos.h_desarrollo.h_17_02 = h_17_02; datos.h_desarrollo.h_17_03 = h_17_03;
    datos.h_desarrollo.h_18_01 = h_18_01; datos.h_desarrollo.h_18_02 = h_18_02; datos.h_desarrollo.h_18_03 = h_18_03;
    datos.h_desarrollo.h_19_01 = h_19_01; datos.h_desarrollo.h_19_02 = h_19_02; datos.h_desarrollo.h_19_03 = h_19_03;
    datos.h_desarrollo.h_20_01 = h_20_01; datos.h_desarrollo.h_20_02 = h_20_02; datos.h_desarrollo.h_20_03 = h_20_03;
    datos.h_desarrollo.h_21_01 = h_21_01; datos.h_desarrollo.h_21_02 = h_21_02; datos.h_desarrollo.h_21_03 = h_21_03;
    datos.h_desarrollo.h_22_01 = h_22_01; datos.h_desarrollo.h_22_02 = h_22_02; datos.h_desarrollo.h_22_03 = h_22_03;
    datos.h_desarrollo.h_23_01 = h_23_01; datos.h_desarrollo.h_23_02 = h_23_02; datos.h_desarrollo.h_23_03 = h_23_03;
    datos.h_desarrollo.h_24_01 = h_24_01; datos.h_desarrollo.h_24_02 = h_24_02; datos.h_desarrollo.h_24_03 = h_24_03;
    datos.h_desarrollo.h_25_01 = h_25_01; datos.h_desarrollo.h_25_02 = h_25_02; datos.h_desarrollo.h_25_03 = h_25_03;
    datos.h_desarrollo.h_26_01 = h_26_01; datos.h_desarrollo.h_26_02 = h_26_02; datos.h_desarrollo.h_26_03 = h_26_03;
    datos.h_desarrollo.h_27_01 = h_27_01; datos.h_desarrollo.h_27_02 = h_27_02; datos.h_desarrollo.h_27_03 = h_27_03;



    datos.i_observaciones   = i_observaciones;

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
