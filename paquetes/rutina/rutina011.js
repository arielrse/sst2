
async function getDatos() {
    const res = await fetch("../../paquetes/rutina/data/rutina011.json");
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
    var f1_01_01 = $('#f1_01_01').prop('checked'); var f1_01_02 = $('#f1_01_02').prop('checked'); var f1_01_03 = $('#f1_01_03').prop('checked');
    var f1_02_01 = $('#f1_02_01').prop('checked'); var f1_02_02 = $('#f1_02_02').prop('checked'); var f1_02_03 = $('#f1_02_03').prop('checked');
    var f1_03_01 = $('#f1_03_01').prop('checked'); var f1_03_02 = $('#f1_03_02').prop('checked'); var f1_03_03 = $('#f1_03_03').prop('checked');
    var f1_04_01 = $('#f1_04_01').prop('checked'); var f1_04_02 = $('#f1_04_02').prop('checked'); var f1_04_03 = $('#f1_04_03').prop('checked');
    var f1_05_01 = $('#f1_05_01').prop('checked'); var f1_05_02 = $('#f1_05_02').prop('checked'); var f1_05_03 = $('#f1_05_03').prop('checked');
    var f1_06_01 = $('#f1_06_01').prop('checked'); var f1_06_02 = $('#f1_06_02').prop('checked'); var f1_06_03 = $('#f1_06_03').prop('checked');
    var f1_07_01 = $('#f1_07_01').prop('checked'); var f1_07_02 = $('#f1_07_02').prop('checked'); var f1_07_03 = $('#f1_07_03').prop('checked');
    var f1_08_01 = $('#f1_08_01').prop('checked'); var f1_08_02 = $('#f1_08_02').prop('checked'); var f1_08_03 = $('#f1_08_03').prop('checked');
    var f1_09_01 = $('#f1_09_01').prop('checked'); var f1_09_02 = $('#f1_09_02').prop('checked'); var f1_09_03 = $('#f1_09_03').prop('checked');
    var f1_10_01 = $('#f1_10_01').prop('checked'); var f1_10_02 = $('#f1_10_02').prop('checked'); var f1_10_03 = $('#f1_10_03').prop('checked');
    var f1_11_01 = $('#f1_11_01').prop('checked'); var f1_11_02 = $('#f1_11_02').prop('checked'); var f1_11_03 = $('#f1_11_03').prop('checked');
    var f1_12_01 = $('#f1_12_01').prop('checked'); var f1_12_02 = $('#f1_12_02').prop('checked'); var f1_12_03 = $('#f1_12_03').prop('checked');
    var f1_13_01 = $('#f1_13_01').prop('checked'); var f1_13_02 = $('#f1_13_02').prop('checked'); var f1_13_03 = $('#f1_13_03').prop('checked');
    var f1_14_01 = $('#f1_14_01').prop('checked'); var f1_14_02 = $('#f1_14_02').prop('checked'); var f1_14_03 = $('#f1_14_03').prop('checked');
    var f1_15_01 = $('#f1_15_01').prop('checked'); var f1_15_02 = $('#f1_15_02').prop('checked'); var f1_15_03 = $('#f1_15_03').prop('checked');
    var f1_16_01 = $('#f1_16_01').prop('checked'); var f1_16_02 = $('#f1_16_02').prop('checked'); var f1_16_03 = $('#f1_16_03').prop('checked');

    /** g_desarrollo_g1 **/
    //var g1_01_01 = $('#g1_01_01').prop('checked'); var g1_01_02 = $('#g1_01_02').prop('checked'); var g1_01_03 = $('#g1_01_03').val();
    var g1_01_01_01 = $('#g1_01_01_01').val(); var g1_01_01_02 = $('#g1_01_01_02').val(); var g1_01_01_03 = $('#g1_01_01_03').val(); var g1_01_01_04 = $('#g1_01_01_04').val();
    var g1_01_02_01 = $('#g1_01_02_01').val(); var g1_01_02_02 = $('#g1_01_02_02').val(); var g1_01_02_03 = $('#g1_01_02_03').val(); var g1_01_02_04 = $('#g1_01_02_04').val();
    var g1_02_01_01 = $('#g1_02_01_01').val(); var g1_02_01_02 = $('#g1_02_01_02').val(); var g1_02_01_03 = $('#g1_02_01_03').val(); var g1_02_01_04 = $('#g1_02_01_04').val();
    var g1_02_02_01 = $('#g1_02_02_01').val(); var g1_02_02_02 = $('#g1_02_02_02').val(); var g1_02_02_03 = $('#g1_02_02_03').val(); var g1_02_02_04 = $('#g1_02_02_04').val();
    var g1_02_03_01 = $('#g1_02_03_01').val(); var g1_02_03_02 = $('#g1_02_03_02').val(); var g1_02_03_03 = $('#g1_02_03_03').val(); var g1_02_03_04 = $('#g1_02_03_04').val();
    var g1_03_01_01 = $('#g1_03_01_01').prop('checked'); var g1_03_01_02 =  $('#g1_03_01_02').prop('checked'); var g1_03_01_03 =  $('#g1_03_01_03').val();
    var g1_03_02_01 = $('#g1_03_02_01').prop('checked'); var g1_03_02_02 =  $('#g1_03_02_02').prop('checked'); var g1_03_02_03 =  $('#g1_03_02_03').val();
    var g1_03_03_01 = $('#g1_03_03_01').prop('checked'); var g1_03_03_02 =  $('#g1_03_03_02').prop('checked'); var g1_03_03_03 =  $('#g1_03_03_03').val();
    var g1_03_04_01 = $('#g1_03_04_01').prop('checked'); var g1_03_04_02 =  $('#g1_03_04_02').val();
    var g1_03_05_01 = $('#g1_03_05_01').prop('checked'); var g1_03_05_02 =  $('#g1_03_05_02').val();
    var g1_03_06_01 = $('#g1_03_06_01').prop('checked'); var g1_03_06_02 =  $('#g1_03_06_02').prop('checked'); var g1_03_06_03 =  $('#g1_03_06_03').val();
    var g1_04_01_01 = $('#g1_04_01_01').prop('checked'); var g1_04_01_02 =  $('#g1_04_01_02').prop('checked'); var g1_04_01_03 =  $('#g1_04_01_03').val();
    var g1_04_02_01 = $('#g1_04_02_01').prop('checked'); var g1_04_02_02 =  $('#g1_04_02_02').prop('checked'); var g1_04_02_03 =  $('#g1_04_02_03').val();
    var g1_04_03_01 = $('#g1_04_03_01').prop('checked'); var g1_04_03_02 =  $('#g1_04_03_02').val();
    var g1_04_04_01 = $('#g1_04_04_01').prop('checked'); var g1_04_04_02 =  $('#g1_04_04_02').val();
    var g1_04_05_01 = $('#g1_04_05_01').prop('checked'); var g1_04_05_02 =  $('#g1_04_05_02').prop('checked'); var g1_04_05_03 =  $('#g1_04_05_03').val();
    var g1_04_06_01 = $('#g1_04_06_01').prop('checked'); var g1_04_06_02 =  $('#g1_04_06_02').val();
    var g1_04_07_01 = $('#g1_04_07_01').prop('checked'); var g1_04_07_02 =  $('#g1_04_07_02').val();
    var g1_04_08_01 = $('#g1_04_08_01').prop('checked'); var g1_04_08_02 =  $('#g1_04_08_02').val();
    var g1_04_09_01 = $('#g1_04_09_01').prop('checked'); var g1_04_09_02 =  $('#g1_04_09_02').val();
    var g1_04_10_01 = $('#g1_04_10_01').prop('checked'); var g1_04_10_02 =  $('#g1_04_10_02').val();
    var g1_05_01_01 = $('#g1_05_01_01').prop('checked'); var g1_05_01_02 =  $('#g1_05_01_02').prop('checked'); var g1_05_01_03 =  $('#g1_05_01_03').val();
    var g1_05_02_01 = $('#g1_05_02_01').prop('checked'); var g1_05_02_02 =  $('#g1_05_02_02').val();
    var g1_05_03_01 = $('#g1_05_03_01').prop('checked'); var g1_05_03_02 =  $('#g1_05_03_02').val();

    /** g_desarrollo_g2 **/
    //var g2_01_01 = $('#g2_01_01').prop('checked'); var g2_01_02 = $('#g2_01_02').val();
    var g2_01_01 = $('#g2_01_01').prop('checked');  var g2_01_02 = $('#g2_01_02').prop('checked'); var g2_01_03 = $('#g2_01_03').val();
    var g2_02_01 = $('#g2_02_01').prop('checked');  var g2_02_02 = $('#g2_02_02').prop('checked'); var g2_02_03 = $('#g2_02_03').val();
    var g2_03_01 = $('#g2_03_01').prop('checked');  var g2_03_02 = $('#g2_03_02').prop('checked'); var g2_03_03 = $('#g2_03_03').val();
    var g2_04_01 = $('#g2_04_01').prop('checked');  var g2_04_02 = $('#g2_04_02').prop('checked'); var g2_04_03 = $('#g2_04_03').val();

    /** g_desarrollo_g2 **/
    //var g3_20_01 = $('#g3_20_01').val(); var g3_20_02 = $('#g3_20_02').val(); var g3_20_03 = $('#g3_20_03').prop('checked');
    var g3_01_01_01 = $('#g3_01_01_01').val();  var g3_01_01_02 = $('#g3_01_01_02').val(); var g3_01_01_03 = $('#g3_01_01_03').val();
    var g3_01_02_01 = $('#g3_01_02_01').val();  var g3_01_02_02 = $('#g3_01_02_02').val(); var g3_01_02_03 = $('#g3_01_02_03').val();
    var g3_02_01_01 = $('#g3_02_01_01').prop('checked');  var g3_02_01_02 = $('#g3_02_01_02').prop('checked'); var g3_02_01_03 = $('#g3_02_01_03').val();
    var g3_02_02_01 = $('#g3_02_02_01').prop('checked');  var g3_02_02_02 = $('#g3_02_02_02').prop('checked'); var g3_02_02_03 = $('#g3_02_02_03').val();
    var g3_02_03_01 = $('#g3_02_03_01').prop('checked');  var g3_02_03_02 = $('#g3_02_03_02').prop('checked'); var g3_02_03_03 = $('#g3_02_03_03').val();
    var g3_02_04_01 = $('#g3_02_04_01').prop('checked');  var g3_02_04_02 = $('#g3_02_04_02').prop('checked'); var g3_02_04_03 = $('#g3_02_04_03').val();

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
    datos.f_verificacion.f1_02_01 = f1_02_01; datos.f_verificacion.f1_02_02 = f1_02_02; datos.f_verificacion.f1_02_03 = f1_02_03;
    datos.f_verificacion.f1_03_01 = f1_03_01; datos.f_verificacion.f1_03_02 = f1_03_02; datos.f_verificacion.f1_03_03 = f1_03_03;
    datos.f_verificacion.f1_04_01 = f1_04_01; datos.f_verificacion.f1_04_02 = f1_04_02; datos.f_verificacion.f1_04_03 = f1_04_03;
    datos.f_verificacion.f1_05_01 = f1_05_01; datos.f_verificacion.f1_05_02 = f1_05_02; datos.f_verificacion.f1_05_03 = f1_05_03;
    datos.f_verificacion.f1_06_01 = f1_06_01; datos.f_verificacion.f1_06_02 = f1_06_02; datos.f_verificacion.f1_06_03 = f1_06_03;
    datos.f_verificacion.f1_07_01 = f1_07_01; datos.f_verificacion.f1_07_02 = f1_07_02; datos.f_verificacion.f1_07_03 = f1_07_03;
    datos.f_verificacion.f1_08_01 = f1_08_01; datos.f_verificacion.f1_08_02 = f1_08_02; datos.f_verificacion.f1_08_03 = f1_08_03;
    datos.f_verificacion.f1_09_01 = f1_09_01; datos.f_verificacion.f1_09_02 = f1_09_02; datos.f_verificacion.f1_09_03 = f1_09_03;
    datos.f_verificacion.f1_10_01 = f1_10_01; datos.f_verificacion.f1_10_02 = f1_10_02; datos.f_verificacion.f1_10_03 = f1_10_03;
    datos.f_verificacion.f1_11_01 = f1_11_01; datos.f_verificacion.f1_11_02 = f1_11_02; datos.f_verificacion.f1_11_03 = f1_11_03;
    datos.f_verificacion.f1_12_01 = f1_12_01; datos.f_verificacion.f1_12_02 = f1_12_02; datos.f_verificacion.f1_12_03 = f1_12_03;
    datos.f_verificacion.f1_13_01 = f1_13_01; datos.f_verificacion.f1_13_02 = f1_13_02; datos.f_verificacion.f1_13_03 = f1_13_03;
    datos.f_verificacion.f1_14_01 = f1_14_01; datos.f_verificacion.f1_14_02 = f1_14_02; datos.f_verificacion.f1_14_03 = f1_14_03;
    datos.f_verificacion.f1_15_01 = f1_15_01; datos.f_verificacion.f1_15_02 = f1_15_02; datos.f_verificacion.f1_15_03 = f1_15_03;
    datos.f_verificacion.f1_16_01 = f1_16_01; datos.f_verificacion.f1_16_02 = f1_16_02; datos.f_verificacion.f1_16_03 = f1_16_03;

    /** g_desarrollo_g1 **/
    //datos.g_desarrollo_g1.g1_01_01 = g1_01_01; datos.g_desarrollo_g1.g1_01_02 = g1_01_02; datos.g_desarrollo_g1.g1_01_03 = g1_01_03;
    datos.g_desarrollo_g1.g1_01_01_01 = g1_01_01_01; datos.g_desarrollo_g1.g1_01_01_02 = g1_01_01_02; datos.g_desarrollo_g1.g1_01_01_03 = g1_01_01_03; datos.g_desarrollo_g1.g1_01_01_04 = g1_01_01_04;
    datos.g_desarrollo_g1.g1_01_02_01 = g1_01_02_01; datos.g_desarrollo_g1.g1_01_02_02 = g1_01_02_02; datos.g_desarrollo_g1.g1_01_02_03 = g1_01_02_03; datos.g_desarrollo_g1.g1_01_02_04 = g1_01_02_04;
    datos.g_desarrollo_g1.g1_02_01_01 = g1_02_01_01; datos.g_desarrollo_g1.g1_02_01_02 = g1_02_01_02; datos.g_desarrollo_g1.g1_02_01_03 = g1_02_01_03; datos.g_desarrollo_g1.g1_02_01_04 = g1_02_01_04;
    datos.g_desarrollo_g1.g1_02_02_01 = g1_02_02_01; datos.g_desarrollo_g1.g1_02_02_02 = g1_02_02_02; datos.g_desarrollo_g1.g1_02_02_03 = g1_02_02_03; datos.g_desarrollo_g1.g1_02_02_04 = g1_02_02_04;
    datos.g_desarrollo_g1.g1_02_03_01 = g1_02_03_01; datos.g_desarrollo_g1.g1_02_03_02 = g1_02_03_02; datos.g_desarrollo_g1.g1_02_03_03 = g1_02_03_03; datos.g_desarrollo_g1.g1_02_03_04 = g1_02_03_04;
    datos.g_desarrollo_g1.g1_03_01_01 = g1_03_01_01; datos.g_desarrollo_g1.g1_03_01_02 = g1_03_01_02; datos.g_desarrollo_g1.g1_03_01_03 = g1_03_01_03;
    datos.g_desarrollo_g1.g1_03_02_01 = g1_03_02_01; datos.g_desarrollo_g1.g1_03_02_02 = g1_03_02_02; datos.g_desarrollo_g1.g1_03_02_03 = g1_03_02_03;
    datos.g_desarrollo_g1.g1_03_03_01 = g1_03_03_01; datos.g_desarrollo_g1.g1_03_03_02 = g1_03_03_02; datos.g_desarrollo_g1.g1_03_03_03 = g1_03_03_03;
    datos.g_desarrollo_g1.g1_03_04_01 = g1_03_04_01; datos.g_desarrollo_g1.g1_03_04_02 = g1_03_04_02;
    datos.g_desarrollo_g1.g1_03_05_01 = g1_03_05_01; datos.g_desarrollo_g1.g1_03_05_02 = g1_03_05_02;
    datos.g_desarrollo_g1.g1_03_06_01 = g1_03_06_01; datos.g_desarrollo_g1.g1_03_06_02 = g1_03_06_02; datos.g_desarrollo_g1.g1_03_06_03 = g1_03_06_03;
    datos.g_desarrollo_g1.g1_04_01_01 = g1_04_01_01; datos.g_desarrollo_g1.g1_04_01_02 = g1_04_01_02; datos.g_desarrollo_g1.g1_04_01_03 = g1_04_01_03;
    datos.g_desarrollo_g1.g1_04_02_01 = g1_04_02_01; datos.g_desarrollo_g1.g1_04_02_02 = g1_04_02_02; datos.g_desarrollo_g1.g1_04_02_03 = g1_04_02_03;
    datos.g_desarrollo_g1.g1_04_03_01 = g1_04_03_01; datos.g_desarrollo_g1.g1_04_03_02 = g1_04_03_02;
    datos.g_desarrollo_g1.g1_04_04_01 = g1_04_04_01; datos.g_desarrollo_g1.g1_04_04_02 = g1_04_04_02;
    datos.g_desarrollo_g1.g1_04_05_01 = g1_04_05_01; datos.g_desarrollo_g1.g1_04_05_02 = g1_04_05_02; datos.g_desarrollo_g1.g1_04_05_03 = g1_04_05_03;
    datos.g_desarrollo_g1.g1_04_06_01 = g1_04_06_01; datos.g_desarrollo_g1.g1_04_06_02 = g1_04_06_02;
    datos.g_desarrollo_g1.g1_04_07_01 = g1_04_07_01; datos.g_desarrollo_g1.g1_04_07_02 = g1_04_07_02;
    datos.g_desarrollo_g1.g1_04_08_01 = g1_04_08_01; datos.g_desarrollo_g1.g1_04_08_02 = g1_04_08_02;
    datos.g_desarrollo_g1.g1_04_09_01 = g1_04_09_01; datos.g_desarrollo_g1.g1_04_09_02 = g1_04_09_02;
    datos.g_desarrollo_g1.g1_04_10_01 = g1_04_10_01; datos.g_desarrollo_g1.g1_04_10_02 = g1_04_10_02;
    datos.g_desarrollo_g1.g1_05_01_01 = g1_05_01_01; datos.g_desarrollo_g1.g1_05_01_02 = g1_05_01_02; datos.g_desarrollo_g1.g1_05_01_03 = g1_05_01_03;
    datos.g_desarrollo_g1.g1_05_02_01 = g1_05_02_01; datos.g_desarrollo_g1.g1_05_02_02 = g1_05_02_02;
    datos.g_desarrollo_g1.g1_05_03_01 = g1_05_03_01; datos.g_desarrollo_g1.g1_05_03_02 = g1_05_03_02;

    /** g_desarrollo_g2 **/
    //datos.g_desarrollo_g2.g2_01_01 = g2_01_01; datos.g_desarrollo_g2.g2_01_02 = g2_01_02;
    datos.g_desarrollo_g2.g2_01_01 = g2_01_01;  datos.g_desarrollo_g2.g2_01_02 = g2_01_02; datos.g_desarrollo_g2.g2_01_03 = g2_01_03;
    datos.g_desarrollo_g2.g2_02_01 = g2_02_01;  datos.g_desarrollo_g2.g2_02_02 = g2_02_02; datos.g_desarrollo_g2.g2_02_03 = g2_02_03;
    datos.g_desarrollo_g2.g2_03_01 = g2_03_01;  datos.g_desarrollo_g2.g2_03_02 = g2_03_02; datos.g_desarrollo_g2.g2_03_03 = g2_03_03;
    datos.g_desarrollo_g2.g2_04_01 = g2_04_01;  datos.g_desarrollo_g2.g2_04_02 = g2_04_02; datos.g_desarrollo_g2.g2_04_03 = g2_04_03;
    /** g_desarrollo_g3 **/
    //datos.g_desarrollo_g3.g3_15_01 = g3_15_01; datos.g_desarrollo_g3.g3_15_02 = g3_15_02;
    datos.g_desarrollo_g3.g3_01_01_01 = g3_01_01_01; datos.g_desarrollo_g3.g3_01_01_02 = g3_01_01_02; datos.g_desarrollo_g3.g3_01_01_03 = g3_01_01_03;
    datos.g_desarrollo_g3.g3_01_02_01 = g3_01_02_01; datos.g_desarrollo_g3.g3_01_02_02 = g3_01_02_02; datos.g_desarrollo_g3.g3_01_02_03 = g3_01_02_03;
    datos.g_desarrollo_g3.g3_02_01_01 = g3_02_01_01; datos.g_desarrollo_g3.g3_02_01_02 = g3_02_01_02; datos.g_desarrollo_g3.g3_02_01_03 = g3_02_01_03;
    datos.g_desarrollo_g3.g3_02_02_01 = g3_02_02_01; datos.g_desarrollo_g3.g3_02_02_02 = g3_02_02_02; datos.g_desarrollo_g3.g3_02_02_03 = g3_02_02_03;
    datos.g_desarrollo_g3.g3_02_03_01 = g3_02_03_01; datos.g_desarrollo_g3.g3_02_03_02 = g3_02_03_02; datos.g_desarrollo_g3.g3_02_03_03 = g3_02_03_03;
    datos.g_desarrollo_g3.g3_02_04_01 = g3_02_04_01; datos.g_desarrollo_g3.g3_02_04_02 = g3_02_04_02; datos.g_desarrollo_g3.g3_02_04_03 = g3_02_04_03;


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
