
async function getDatos() {
    const res = await fetch("../../paquetes/rutina/data/rutina016.json");
    const datosFetch = await res.json();
    return datosFetch;
}

$(document).ready(function() {
    $('#botonHead, #botonF, #botonFooter').click(function(){
        alert("Guardando...");

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

    /** d_relevamiento **/
    //var f01_1 = $('#f01_1').prop('checked'); var f01_2 = $('#f01_2').prop('checked'); var f01_3 = $('#f01_3').val();
    var d1_01_01 = $('#d1_01_01').val();
    var d1_02_01 = $('#d1_02_01').val();
    var d1_03_01 = $('#d1_03_01').val();

    /** e1_equipo **/
    //var g1_01_01 = $('#g1_01_01').prop('checked'); var g1_01_02 = $('#g1_01_02').prop('checked'); var g1_01_03 = $('#g1_01_03').val();
    var e1_01_01 = $('#e1_01_01').val(); var e1_01_02 = $('#e1_01_02').val(); var e1_01_03 = $('#e1_01_03').val(); var e1_01_04 = $('#e1_01_04').val(); var e1_01_05 = $('#e1_01_05').val();
    var e1_02_01 = $('#e1_02_01').val(); var e1_02_02 = $('#e1_02_02').val(); var e1_02_03 = $('#e1_02_03').val(); var e1_02_04 = $('#e1_02_04').val(); var e1_02_05 = $('#e1_02_05').val();
    var e1_03_01 = $('#e1_03_01').val(); var e1_03_02 = $('#e1_03_02').val(); var e1_03_03 = $('#e1_03_03').val(); var e1_03_04 = $('#e1_03_04').val(); var e1_03_05 = $('#e1_03_05').val();
    var e1_04_01 = $('#e1_04_01').val(); var e1_04_02 = $('#e1_04_02').val(); var e1_04_03 = $('#e1_04_03').val(); var e1_04_04 = $('#e1_04_04').val(); var e1_04_05 = $('#e1_04_05').val();
    var e1_05_01 = $('#e1_05_01').val(); var e1_05_02 = $('#e1_05_02').val(); var e1_05_03 = $('#e1_05_03').val(); var e1_05_04 = $('#e1_05_04').val(); var e1_05_05 = $('#e1_05_05').val();
    var e1_06_01 = $('#e1_06_01').val(); var e1_06_02 = $('#e1_06_02').val(); var e1_06_03 = $('#e1_06_03').val(); var e1_06_04 = $('#e1_06_04').val(); var e1_06_05 = $('#e1_06_05').val();
    var e1_07_01 = $('#e1_07_01').val(); var e1_07_02 = $('#e1_07_02').val(); var e1_07_03 = $('#e1_07_03').val(); var e1_07_04 = $('#e1_07_04').val(); var e1_07_05 = $('#e1_07_05').val();
    var e1_08_01 = $('#e1_08_01').val(); var e1_08_02 = $('#e1_08_02').val(); var e1_08_03 = $('#e1_08_03').val(); var e1_08_04 = $('#e1_08_04').val(); var e1_08_05 = $('#e1_08_05').val();
    var e1_09_01 = $('#e1_09_01').val(); var e1_09_02 = $('#e1_09_02').val(); var e1_09_03 = $('#e1_09_03').val(); var e1_09_04 = $('#e1_09_04').val(); var e1_09_05 = $('#e1_09_05').val();
    var e1_10_01 = $('#e1_10_01').val(); var e1_10_02 = $('#e1_10_02').val(); var e1_10_03 = $('#e1_10_03').val(); var e1_10_04 = $('#e1_10_04').val(); var e1_10_05 = $('#e1_10_05').val();
    var e1_11_01 = $('#e1_11_01').val(); var e1_11_02 = $('#e1_11_02').val(); var e1_11_03 = $('#e1_11_03').val(); var e1_11_04 = $('#e1_11_04').val(); var e1_11_05 = $('#e1_11_05').val();
    var e1_12_01 = $('#e1_12_01').val(); var e1_12_02 = $('#e1_12_02').val(); var e1_12_03 = $('#e1_12_03').val(); var e1_12_04 = $('#e1_12_04').val(); var e1_12_05 = $('#e1_12_05').val();
    var e1_13_01 = $('#e1_13_01').val(); var e1_13_02 = $('#e1_13_02').val(); var e1_13_03 = $('#e1_13_03').val(); var e1_13_04 = $('#e1_13_04').val(); var e1_13_05 = $('#e1_13_05').val();
    var e1_14_01 = $('#e1_14_01').val(); var e1_14_02 = $('#e1_14_02').val(); var e1_14_03 = $('#e1_14_03').val(); var e1_14_04 = $('#e1_14_04').val(); var e1_14_05 = $('#e1_14_05').val();

    /** p_puerto1_2**/
    //var g2_01_01 = $('#g2_01_01').prop('checked'); var g2_01_02 = $('#g2_01_02').val();
    var p_01_01 = $('#p_01_01').val(); var p_01_02 = $('#p_01_02').val(); var p_01_03 = $('#p_01_03').val();
    var p_02_01 = $('#p_02_01').val(); var p_02_02 = $('#p_02_02').val(); var p_02_03 = $('#p_02_03').val();
    var p_03_01 = $('#p_03_01').val(); var p_03_02 = $('#p_03_02').val(); var p_03_03 = $('#p_03_03').val();
    var p_04_01 = $('#p_04_01').val(); var p_04_02 = $('#p_04_02').val(); var p_04_03 = $('#p_04_03').val();
    var p_05_01 = $('#p_05_01').val(); var p_05_02 = $('#p_05_02').val(); var p_05_03 = $('#p_05_03').val();
    var p_06_01 = $('#p_06_01').val(); var p_06_02 = $('#p_06_02').val(); var p_06_03 = $('#p_06_03').val();
    var p_07_01 = $('#p_07_01').val(); var p_07_02 = $('#p_07_02').val(); var p_07_03 = $('#p_07_03').val();
    var p_08_01 = $('#p_08_01').val(); var p_08_02 = $('#p_08_02').val(); var p_08_03 = $('#p_08_03').val();
    var p_09_01 = $('#p_09_01').val(); var p_09_02 = $('#p_09_02').val(); var p_09_03 = $('#p_09_03').val();
    var p_10_01 = $('#p_10_01').val(); var p_10_02 = $('#p_10_02').val(); var p_10_03 = $('#p_10_03').val();

    /** g_desarrollo_g1 **/
    //var g3_20_01 = $('#g3_20_01').val(); var g3_20_02 = $('#g3_20_02').val(); var g3_20_03 = $('#g3_20_03').prop('checked');
    var g1_01_01 = $('#g1_01_01').prop('checked');  var g1_01_02 = $('#g1_01_02').prop('checked'); var g1_01_03 = $('#g1_01_03').val();
    var g1_02_01 = $('#g1_02_01').prop('checked');  var g1_02_02 = $('#g1_02_02').prop('checked'); var g1_02_03 = $('#g1_02_03').val();
    var g1_03_01 = $('#g1_03_01').prop('checked');  var g1_03_02 = $('#g1_03_02').prop('checked'); var g1_03_03 = $('#g1_03_03').val();
    var g1_04_01 = $('#g1_04_01').prop('checked');  var g1_04_02 = $('#g1_04_02').prop('checked'); var g1_04_03 = $('#g1_04_03').val();
    var g1_05_01 = $('#g1_05_01').prop('checked');  var g1_05_02 = $('#g1_05_02').prop('checked'); var g1_05_03 = $('#g1_05_03').val();
    var g1_06_01 = $('#g1_06_01').prop('checked');  var g1_06_02 = $('#g1_06_02').prop('checked'); var g1_06_03 = $('#g1_06_03').val();
    var g1_07_01 = $('#g1_07_01').prop('checked');  var g1_07_02 = $('#g1_07_02').prop('checked'); var g1_07_03 = $('#g1_07_03').val();
    var g1_08_01 = $('#g1_08_01').prop('checked');  var g1_08_02 = $('#g1_08_02').prop('checked'); var g1_08_03 = $('#g1_08_03').val();
    var g1_09_01 = $('#g1_09_01').prop('checked');  var g1_09_02 = $('#g1_09_02').prop('checked'); var g1_09_03 = $('#g1_09_03').val();
    var g1_10_01 = $('#g1_10_01').prop('checked');  var g1_10_02 = $('#g1_10_02').prop('checked'); var g1_10_03 = $('#g1_10_03').val();
    var g1_11_01 = $('#g1_11_01').prop('checked');  var g1_11_02 = $('#g1_11_02').prop('checked'); var g1_11_03 = $('#g1_11_03').val();
    var g1_12_01 = $('#g1_12_01').prop('checked');  var g1_12_02 = $('#g1_12_02').prop('checked'); var g1_12_03 = $('#g1_12_03').val();
    var g1_13_01 = $('#g1_13_01').prop('checked');  var g1_13_02 = $('#g1_13_02').prop('checked'); var g1_13_03 = $('#g1_13_03').val();
    var g1_14_01 = $('#g1_14_01').prop('checked');  var g1_14_02 = $('#g1_14_02').prop('checked'); var g1_14_03 = $('#g1_14_03').val();
    var g1_15_01 = $('#g1_15_01').prop('checked');  var g1_15_02 = $('#g1_15_02').prop('checked'); var g1_15_03 = $('#g1_15_03').val();
    var g1_16_01 = $('#g1_16_01').prop('checked');  var g1_16_02 = $('#g1_16_02').prop('checked'); var g1_16_03 = $('#g1_16_03').val();
    var g1_17_01 = $('#g1_17_01').prop('checked');  var g1_17_02 = $('#g1_17_02').prop('checked'); var g1_17_03 = $('#g1_17_03').val();
    var g1_18_01 = $('#g1_18_01').prop('checked');  var g1_18_02 = $('#g1_18_02').prop('checked'); var g1_18_03 = $('#g1_18_03').val();
    var g1_19_01 = $('#g1_19_01').prop('checked');  var g1_19_02 = $('#g1_19_02').prop('checked'); var g1_19_03 = $('#g1_19_03').val();
    var g1_20_01 = $('#g1_20_01').prop('checked');  var g1_20_02 = $('#g1_20_02').prop('checked'); var g1_20_03 = $('#g1_20_03').val();
    var g1_21_01 = $('#g1_21_01').prop('checked');  var g1_21_02 = $('#g1_21_02').prop('checked'); var g1_21_03 = $('#g1_21_03').val();

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

    /**  d_relevamiento **/
    //datos.d_relevamiento.d1_01_01 = d1_01_01; datos.d_relevamiento.f01_2 = f01_2; datos.d_relevamiento.f01_3 = f01_3;
    datos.d_relevamiento_d1.d1_01_01 = d1_01_01;
    datos.d_relevamiento_d1.d1_02_01 = d1_02_01;
    datos.d_relevamiento_d1.d1_03_01 = d1_03_01;

    /** e1_equipo **/
    //datos.e1_equipo_e1.g1_01_01 = g1_01_01; datos.e1_equipo_e1.g1_01_02 = g1_01_02; datos.e1_equipo_e1.g1_01_03 = g1_01_03;
    datos.e1_equipo_e1.e1_01_01 = e1_01_01;datos.e1_equipo_e1.e1_01_02 = e1_01_02; datos.e1_equipo_e1.e1_01_03 = e1_01_03; datos.e1_equipo_e1.e1_01_04 = e1_01_04; datos.e1_equipo_e1.e1_01_05 = e1_01_05;
    datos.e1_equipo_e1.e1_02_01 = e1_02_01;datos.e1_equipo_e1.e1_02_02 = e1_02_02; datos.e1_equipo_e1.e1_02_03 = e1_02_03; datos.e1_equipo_e1.e1_02_04 = e1_02_04; datos.e1_equipo_e1.e1_02_05 = e1_02_05;
    datos.e1_equipo_e1.e1_03_01 = e1_03_01;datos.e1_equipo_e1.e1_03_02 = e1_03_02; datos.e1_equipo_e1.e1_03_03 = e1_03_03; datos.e1_equipo_e1.e1_03_04 = e1_03_04; datos.e1_equipo_e1.e1_03_05 = e1_03_05;
    datos.e1_equipo_e1.e1_04_01 = e1_04_01;datos.e1_equipo_e1.e1_04_02 = e1_04_02; datos.e1_equipo_e1.e1_04_03 = e1_04_03; datos.e1_equipo_e1.e1_04_04 = e1_04_04; datos.e1_equipo_e1.e1_04_05 = e1_04_05;
    datos.e1_equipo_e1.e1_05_01 = e1_05_01;datos.e1_equipo_e1.e1_05_02 = e1_05_02; datos.e1_equipo_e1.e1_05_03 = e1_05_03; datos.e1_equipo_e1.e1_05_04 = e1_05_04; datos.e1_equipo_e1.e1_05_05 = e1_05_05;
    datos.e1_equipo_e1.e1_06_01 = e1_06_01;datos.e1_equipo_e1.e1_06_02 = e1_06_02; datos.e1_equipo_e1.e1_06_03 = e1_06_03; datos.e1_equipo_e1.e1_06_04 = e1_06_04; datos.e1_equipo_e1.e1_06_05 = e1_06_05;
    datos.e1_equipo_e1.e1_07_01 = e1_07_01;datos.e1_equipo_e1.e1_07_02 = e1_07_02; datos.e1_equipo_e1.e1_07_03 = e1_07_03; datos.e1_equipo_e1.e1_07_04 = e1_07_04; datos.e1_equipo_e1.e1_07_05 = e1_07_05;
    datos.e1_equipo_e1.e1_08_01 = e1_08_01;datos.e1_equipo_e1.e1_08_02 = e1_08_02; datos.e1_equipo_e1.e1_08_03 = e1_08_03; datos.e1_equipo_e1.e1_08_04 = e1_08_04; datos.e1_equipo_e1.e1_08_05 = e1_08_05;
    datos.e1_equipo_e1.e1_09_01 = e1_09_01;datos.e1_equipo_e1.e1_09_02 = e1_09_02; datos.e1_equipo_e1.e1_09_03 = e1_09_03; datos.e1_equipo_e1.e1_09_04 = e1_09_04; datos.e1_equipo_e1.e1_09_05 = e1_09_05;
    datos.e1_equipo_e1.e1_10_01 = e1_10_01;datos.e1_equipo_e1.e1_10_02 = e1_10_02; datos.e1_equipo_e1.e1_10_03 = e1_10_03; datos.e1_equipo_e1.e1_10_04 = e1_10_04; datos.e1_equipo_e1.e1_10_05 = e1_10_05;
    datos.e1_equipo_e1.e1_11_01 = e1_11_01;datos.e1_equipo_e1.e1_11_02 = e1_11_02; datos.e1_equipo_e1.e1_11_03 = e1_11_03; datos.e1_equipo_e1.e1_11_04 = e1_11_04; datos.e1_equipo_e1.e1_11_05 = e1_11_05;
    datos.e1_equipo_e1.e1_12_01 = e1_12_01;datos.e1_equipo_e1.e1_12_02 = e1_12_02; datos.e1_equipo_e1.e1_12_03 = e1_12_03; datos.e1_equipo_e1.e1_12_04 = e1_12_04; datos.e1_equipo_e1.e1_12_05 = e1_12_05;
    datos.e1_equipo_e1.e1_13_01 = e1_13_01;datos.e1_equipo_e1.e1_13_02 = e1_13_02; datos.e1_equipo_e1.e1_13_03 = e1_13_03; datos.e1_equipo_e1.e1_13_04 = e1_13_04; datos.e1_equipo_e1.e1_13_05 = e1_13_05;
    datos.e1_equipo_e1.e1_14_01 = e1_14_01;datos.e1_equipo_e1.e1_14_02 = e1_14_02; datos.e1_equipo_e1.e1_14_03 = e1_14_03; datos.e1_equipo_e1.e1_14_04 = e1_14_04; datos.e1_equipo_e1.e1_14_05 = e1_14_05;

    /** p_puerto12_p**/
    //datos.p_puerto12_p.g2_01_01 = g2_01_01; datos.p_puerto12_p.g2_01_02 = g2_01_02;
    datos.p_puerto12_p.p_01_01 = p_01_01; datos.p_puerto12_p.p_01_02 = p_01_02; datos.p_puerto12_p.p_01_03 = p_01_03;
    datos.p_puerto12_p.p_02_01 = p_02_01; datos.p_puerto12_p.p_02_02 = p_02_02; datos.p_puerto12_p.p_02_03 = p_02_03;
    datos.p_puerto12_p.p_03_01 = p_03_01; datos.p_puerto12_p.p_03_02 = p_03_02; datos.p_puerto12_p.p_03_03 = p_03_03;
    datos.p_puerto12_p.p_04_01 = p_04_01; datos.p_puerto12_p.p_04_02 = p_04_02; datos.p_puerto12_p.p_04_03 = p_04_03;
    datos.p_puerto12_p.p_05_01 = p_05_01; datos.p_puerto12_p.p_05_02 = p_05_02; datos.p_puerto12_p.p_05_03 = p_05_03;
    datos.p_puerto12_p.p_06_01 = p_06_01; datos.p_puerto12_p.p_06_02 = p_06_02; datos.p_puerto12_p.p_06_03 = p_06_03;
    datos.p_puerto12_p.p_07_01 = p_07_01; datos.p_puerto12_p.p_07_02 = p_07_02; datos.p_puerto12_p.p_07_03 = p_07_03;
    datos.p_puerto12_p.p_08_01 = p_08_01; datos.p_puerto12_p.p_08_02 = p_08_02; datos.p_puerto12_p.p_08_03 = p_08_03;
    datos.p_puerto12_p.p_09_01 = p_09_01; datos.p_puerto12_p.p_09_02 = p_09_02; datos.p_puerto12_p.p_09_03 = p_09_03;
    datos.p_puerto12_p.p_10_01 = p_10_01; datos.p_puerto12_p.p_10_02 = p_10_02; datos.p_puerto12_p.p_10_03 = p_10_03;

    /** g_desarrollo_g1 **/
    //datos.g_desarrollo_g1.g3_15_01 = g3_15_01; datos.g_desarrollo_g1.g3_15_02 = g3_15_02;
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
    datos.g_desarrollo_g1.g1_17_01 = g1_17_01; datos.g_desarrollo_g1.g1_17_02 = g1_17_02; datos.g_desarrollo_g1.g1_17_03 = g1_17_03;
    datos.g_desarrollo_g1.g1_18_01 = g1_18_01; datos.g_desarrollo_g1.g1_18_02 = g1_18_02; datos.g_desarrollo_g1.g1_18_03 = g1_18_03;
    datos.g_desarrollo_g1.g1_19_01 = g1_19_01; datos.g_desarrollo_g1.g1_19_02 = g1_19_02; datos.g_desarrollo_g1.g1_19_03 = g1_19_03;
    datos.g_desarrollo_g1.g1_20_01 = g1_20_01; datos.g_desarrollo_g1.g1_20_02 = g1_20_02; datos.g_desarrollo_g1.g1_20_03 = g1_20_03;
    datos.g_desarrollo_g1.g1_21_01 = g1_21_01; datos.g_desarrollo_g1.g1_21_02 = g1_21_02; datos.g_desarrollo_g1.g1_21_03 = g1_21_03;



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
