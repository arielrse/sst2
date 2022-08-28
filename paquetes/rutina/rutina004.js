
async function getDatos() {
    const res = await fetch("../../paquetes/rutina/data/rutina004.json");
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
    var f01_1 = $('#f01_1').prop('checked'); var f01_2 = $('#f01_2').prop('checked'); var f01_3 = $('#f01_3').val();
    var f02_1 = $('#f02_1').prop('checked'); var f02_2 = $('#f02_2').prop('checked'); var f02_3 = $('#f02_3').val();
    var f03_1 = $('#f03_1').prop('checked'); var f03_2 = $('#f03_2').prop('checked'); var f03_3 = $('#f03_3').val();

    /** g_desarrollo_g1 **/
    //var g1_01_01 = $('#g1_01_01').prop('checked'); var g1_01_02 = $('#g1_01_02').prop('checked'); var g1_01_03 = $('#g1_01_03').val();


    /** g_desarrollo_g2 **/
    //var g2_01_01 = $('#g2_01_01').prop('checked'); var g2_01_02 = $('#g2_01_02').val();


    /** g_desarrollo_g2 **/
    //var g3_20_01 = $('#g3_20_01').val(); var g3_20_02 = $('#g3_20_02').val(); var g3_20_03 = $('#g3_20_03').prop('checked');

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

    datos.f_verificacion.f01_1 = f01_1; datos.f_verificacion.f01_2 = f01_2; datos.f_verificacion.f01_3 = f01_3;
    datos.f_verificacion.f02_1 = f02_1; datos.f_verificacion.f02_2 = f02_2; datos.f_verificacion.f02_3 = f02_3;
    datos.f_verificacion.f03_1 = f03_1; datos.f_verificacion.f03_2 = f03_2; datos.f_verificacion.f03_3 = f03_3;


    /** g_desarrollo_g1 **/
    //datos.g_desarrollo_g1.g1_01_01 = g1_01_01; datos.g_desarrollo_g1.g1_01_02 = g1_01_02; datos.g_desarrollo_g1.g1_01_03 = g1_01_03;


    /** g_desarrollo_g2 **/
    //datos.g_desarrollo_g2.g2_01_01 = g2_01_01; datos.g_desarrollo_g2.g2_01_02 = g2_01_02;


    /** g_desarrollo_g3 **/
    //datos.g_desarrollo_g3.g3_15_01 = g3_15_01; datos.g_desarrollo_g3.g3_15_02 = g3_15_02;




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
