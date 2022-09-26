
async function getDatos() {
    const res = await fetch("../../paquetes/rutina/data/rutina015.json");
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

    /** "d_micro" **/
    //var f01_1 = $('#f01_1').prop('checked'); var f01_2 = $('#f01_2').prop('checked'); var f01_3 = $('#f01_3').val();
    var d1_01_01 = $('#d1_01_01').val(); var d1_01_02 = $('#d1_01_02').val(); var d1_01_03 = $('#d1_01_03').val(); var d1_01_04 = $('#d1_01_04').val(); var d1_01_05 = $('#d1_01_05').val(); var d1_01_06 = $('#d1_01_06').val();
    var d1_02_01 = $('#d1_02_01').val(); var d1_02_02 = $('#d1_02_02').val(); var d1_02_03 = $('#d1_02_03').val(); var d1_02_04 = $('#d1_02_04').val(); var d1_02_05 = $('#d1_02_05').val(); var d1_02_06 = $('#d1_02_06').val();
    var d1_03_01 = $('#d1_03_01').val(); var d1_03_02 = $('#d1_03_02').val(); var d1_03_03 = $('#d1_03_03').val(); var d1_03_04 = $('#d1_03_04').val(); var d1_03_05 = $('#d1_03_05').val(); var d1_03_06 = $('#d1_03_06').val();
    var d1_04_01 = $('#d1_04_01').val(); var d1_04_02 = $('#d1_04_02').val(); var d1_04_03 = $('#d1_04_03').val(); var d1_04_04 = $('#d1_04_04').val(); var d1_04_05 = $('#d1_04_05').val(); var d1_04_06 = $('#d1_04_06').val();
    var d1_05_01 = $('#d1_05_01').val(); var d1_05_02 = $('#d1_05_02').val(); var d1_05_03 = $('#d1_05_03').val(); var d1_05_04 = $('#d1_05_04').val(); var d1_05_05 = $('#d1_05_05').val(); var d1_05_06 = $('#d1_05_06').val();
    var d1_06_01 = $('#d1_06_01').val(); var d1_06_02 = $('#d1_06_02').val(); var d1_06_03 = $('#d1_06_03').val(); var d1_06_04 = $('#d1_06_04').val(); var d1_06_05 = $('#d1_06_05').val(); var d1_06_06 = $('#d1_06_06').val();
    var d1_07_01 = $('#d1_07_01').val(); var d1_07_02 = $('#d1_07_02').val(); var d1_07_03 = $('#d1_07_03').val(); var d1_07_04 = $('#d1_07_04').val(); var d1_07_05 = $('#d1_07_05').val(); var d1_07_06 = $('#d1_07_06').val(); var d1_07_07 = $('#d1_07_07').val();
    var d1_08_01 = $('#d1_08_01').val(); var d1_08_02 = $('#d1_08_02').val(); var d1_08_03 = $('#d1_08_03').val(); var d1_08_04 = $('#d1_08_04').val(); var d1_08_05 = $('#d1_08_05').val(); var d1_08_06 = $('#d1_08_06').val(); var d1_08_07 = $('#d1_08_07').val();
    var d1_09_01 = $('#d1_09_01').val(); var d1_09_02 = $('#d1_09_02').val(); var d1_09_03 = $('#d1_09_03').val(); var d1_09_04 = $('#d1_09_04').val(); var d1_09_05 = $('#d1_09_05').val(); var d1_09_06 = $('#d1_09_06').val(); var d1_09_07 = $('#d1_09_07').val();

    /** g_desarrollo_g1 **/
    //var g1_01_01 = $('#g1_01_01').prop('checked'); var g1_01_02 = $('#g1_01_02').prop('checked'); var g1_01_03 = $('#g1_01_03').val();
    var g1_01_01 = $('#g1_01_01').prop('checked');  var g1_01_02 = $('#g1_01_02').prop('checked'); var g1_01_03 = $('#g1_01_03').val();
    var g1_02_01 = $('#g1_02_01').prop('checked');  var g1_02_02 = $('#g1_02_02').prop('checked'); var g1_02_03 = $('#g1_02_03').val();
    var g1_03_01 = $('#g1_03_01').prop('checked');  var g1_03_02 = $('#g1_03_02').prop('checked'); var g1_03_03 = $('#g1_03_03').val();
    var g1_04_01 = $('#g1_04_01').prop('checked');  var g1_04_02 = $('#g1_04_02').prop('checked'); var g1_04_03 = $('#g1_04_03').val();
    var g1_05_01 = $('#g1_05_01').prop('checked');  var g1_05_02 = $('#g1_05_02').prop('checked'); var g1_05_03 = $('#g1_05_03').val();
    var g1_06_01 = $('#g1_06_01').prop('checked');  var g1_06_02 = $('#g1_06_02').prop('checked'); var g1_06_03 = $('#g1_06_03').val();
    var g1_07_01 = $('#g1_07_01').prop('checked');  var g1_07_02 = $('#g1_07_02').prop('checked'); var g1_07_03 = $('#g1_07_03').val();
    var g1_08_01 = $('#g1_08_01').prop('checked');  var g1_08_02 = $('#g1_08_02').prop('checked'); var g1_08_03 = $('#g1_08_03').val();
    var g1_09_01 = $('#g1_09_01').prop('checked');  var g1_09_02 = $('#g1_09_02').prop('checked'); var g1_09_03 = $('#g1_09_03').val();

    /** f_fibra **/
    var f1_01_01 = $('#f1_01_01').val(); var f1_01_02 = $('#f1_01_02').val(); var f1_01_03 = $('#f1_01_03').val(); var f1_01_04 = $('#f1_01_04').val(); var f1_01_05= $('#f1_01_05').val();
    var f1_02_01 = $('#f1_02_01').val(); var f1_02_02 = $('#f1_02_02').val(); var f1_02_03 = $('#f1_02_03').val(); var f1_02_04 = $('#f1_02_04').val(); var f1_02_05= $('#f1_02_05').val();
    var f1_03_01 = $('#f1_03_01').val(); var f1_03_02 = $('#f1_03_02').val(); var f1_03_03 = $('#f1_03_03').val(); var f1_03_04 = $('#f1_03_04').val(); var f1_03_05= $('#f1_03_05').val();

    var f1_04_01    = $('#f1_04_01').val(); var f1_04_02   = $('#f1_04_02').val();   var f1_04_03   = $('#f1_04_03').val();   var f1_04_04_from = $('#f1_04_04_from').val(); var f1_04_05 = $('#f1_04_05').val();
                                                                                                                              var f1_04_04_to   = $('#f1_04_04_to').val();
    var f1_05_01    = $('#f1_05_01').val(); var f1_05_02   = $('#f1_05_02').val();   var f1_05_03   = $('#f1_05_03').val();   var f1_05_04_from = $('#f1_05_04_from').val(); var f1_05_05 = $('#f1_05_05').val();
                                                                                                                              var f1_05_04_to   = $('#f1_05_04_to').val();
    var f1_06_01    = $('#f1_06_01').val(); var f1_06_02   = $('#f1_06_02').val();   var f1_06_03   = $('#f1_06_03').val();   var f1_06_04_from = $('#f1_06_04_from').val(); var f1_06_05 = $('#f1_06_05').val();
                                                                                                                              var f1_06_04_to   = $('#f1_06_04_to').val();
                                            var f1_07_02   = $('#f1_07_02').val();   var f1_07_03_a = $('#f1_07_03_a').val(); var f1_07_04_a    = $('#f1_07_04_a').val();    var f1_07_05_a = $('#f1_07_05_a').val();
                                                                                     var f1_07_03_b = $('#f1_07_03_b').val(); var f1_07_04_b    = $('#f1_07_04_b').val();    var f1_07_05_b = $('#f1_07_05_b').val();
                                            var f1_08_02   = $('#f1_08_02').val();   var f1_08_03_a = $('#f1_08_03_a').val(); var f1_08_04_a    = $('#f1_08_04_a').val();    var f1_08_05_a = $('#f1_08_05_a').val();
                                                                                     var f1_08_03_b = $('#f1_08_03_b').val(); var f1_08_04_b    = $('#f1_08_04_b').val();    var f1_08_05_b = $('#f1_08_05_b').val();
                                                                                     var f1_08_03_c = $('#f1_08_03_c').val(); var f1_08_04_c    = $('#f1_08_04_c').val();    var f1_08_05_c = $('#f1_08_05_c').val();

    /** g_desarrollo_g2 **/
    //var g2_01_01 = $('#g2_01_01').prop('checked'); var g2_01_02 = $('#g2_01_02').val();
    var g2_01_01 = $('#g2_01_01').prop('checked');  var g2_01_02 = $('#g2_01_02').prop('checked'); var g2_01_03 = $('#g2_01_03').val();
    var g2_02_01 = $('#g2_02_01').prop('checked');  var g2_02_02 = $('#g2_02_02').prop('checked'); var g2_02_03 = $('#g2_02_03').val();
    var g2_03_01 = $('#g2_03_01').prop('checked');  var g2_03_02 = $('#g2_03_02').prop('checked'); var g2_03_03 = $('#g2_03_03').val();
    var g2_04_01 = $('#g2_04_01').prop('checked');  var g2_04_02 = $('#g2_04_02').prop('checked'); var g2_04_03 = $('#g2_04_03').val();
    var g2_05_01 = $('#g2_05_01').prop('checked');  var g2_05_02 = $('#g2_05_02').prop('checked'); var g2_05_03 = $('#g2_05_03').val();
    var g2_06_01 = $('#g2_06_01').prop('checked');  var g2_06_02 = $('#g2_06_02').prop('checked'); var g2_06_03 = $('#g2_06_03').val();
    var g2_07_01 = $('#g2_07_01').prop('checked');  var g2_07_02 = $('#g2_07_02').prop('checked'); var g2_07_03 = $('#g2_07_03').val();
    var g2_08_01 = $('#g2_08_01').prop('checked');  var g2_08_02 = $('#g2_08_02').prop('checked'); var g2_08_03 = $('#g2_08_03').val();
    var g2_09_01 = $('#g2_09_01').prop('checked');  var g2_09_02 = $('#g2_09_02').prop('checked'); var g2_09_03 = $('#g2_09_03').val();

    /**   f_satelital_f2 **/
    var f2_01_01 = $('#f2_01_01').val(); var f2_01_02 = $('#f2_01_02').val();
    var f2_02_01 = $('#f2_02_01').val(); var f2_02_02 = $('#f2_02_02').val();
    var f2_03_01 = $('#f2_03_01').val(); var f2_03_02 = $('#f2_03_02').val();
    var f2_04_01 = $('#f2_04_01').val(); var f2_04_02 = $('#f2_04_02').val();
    var f2_05_01 = $('#f2_05_01').val(); var f2_05_02 = $('#f2_05_02').val();
    var f2_06_01 = $('#f2_06_01').val(); var f2_06_02 = $('#f2_06_02').val();
    var f2_07_01 = $('#f2_07_01').val(); var f2_07_02 = $('#f2_07_02').val();
    var f2_08_01 = $('#f2_08_01').val(); var f2_08_02 = $('#f2_08_02').val();
    var f2_09_01 = $('#f2_09_01').val();
    var f2_10_01 = $('#f2_10_01').val();
    var f2_11_01 = $('#f2_11_01').val();
    var f2_12_01 = $('#f2_12_01').val();
    var f2_13_01 = $('#f2_13_01').val();
    var f2_14_01 = $('#f2_14_01').val();
    var f2_15_01 = $('#f2_15_01').val();
    var f2_16_01 = $('#f2_16_01').val();

    /** g_desarrollo_g3 **/
    //var g3_20_01 = $('#g3_20_01').val(); var g3_20_02 = $('#g3_20_02').val(); var g3_20_03 = $('#g3_20_03').prop('checked');
    var g3_01_01 = $('#g3_01_01').prop('checked');  var g3_01_02 = $('#g3_01_02').prop('checked'); var g3_01_03 = $('#g3_01_03').val();
    var g3_02_01 = $('#g3_02_01').prop('checked');  var g3_02_02 = $('#g3_02_02').prop('checked'); var g3_02_03 = $('#g3_02_03').val();
    var g3_03_01 = $('#g3_03_01').prop('checked');  var g3_03_02 = $('#g3_03_02').prop('checked'); var g3_03_03 = $('#g3_03_03').val();
    var g3_04_01 = $('#g3_04_01').prop('checked');  var g3_04_02 = $('#g3_04_02').prop('checked'); var g3_04_03 = $('#g3_04_03').val();
    var g3_05_01 = $('#g3_05_01').prop('checked');  var g3_05_02 = $('#g3_05_02').prop('checked'); var g3_05_03 = $('#g3_05_03').val();
    var g3_06_01 = $('#g3_06_01').prop('checked');  var g3_06_02 = $('#g3_06_02').prop('checked'); var g3_06_03 = $('#g3_06_03').val();
    var g3_07_01 = $('#g3_07_01').prop('checked');  var g3_07_02 = $('#g3_07_02').prop('checked'); var g3_07_03 = $('#g3_07_03').val();

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

    /** "d_micro" **/
    //datos.d_micro.f01_1 = f01_1; datos.d_micro.f01_2 = f01_2; datos.d_micro.f01_3 = f01_3;
    datos.d_micro.d1_01_01 = d1_01_01; datos.d_micro.d1_01_02 = d1_01_02; datos.d_micro.d1_01_03 = d1_01_03; datos.d_micro.d1_01_04 = d1_01_04; datos.d_micro.d1_01_05 = d1_01_05; datos.d_micro.d1_01_06 = d1_01_06;
    datos.d_micro.d1_02_01 = d1_02_01; datos.d_micro.d1_02_02 = d1_02_02; datos.d_micro.d1_02_03 = d1_02_03; datos.d_micro.d1_02_04 = d1_02_04; datos.d_micro.d1_02_05 = d1_02_05; datos.d_micro.d1_02_06 = d1_02_06;
    datos.d_micro.d1_03_01 = d1_03_01; datos.d_micro.d1_03_02 = d1_03_02; datos.d_micro.d1_03_03 = d1_03_03; datos.d_micro.d1_03_04 = d1_03_04; datos.d_micro.d1_03_05 = d1_03_05; datos.d_micro.d1_03_06 = d1_03_06;
    datos.d_micro.d1_04_01 = d1_04_01; datos.d_micro.d1_04_02 = d1_04_02; datos.d_micro.d1_04_03 = d1_04_03; datos.d_micro.d1_04_04 = d1_04_04; datos.d_micro.d1_04_05 = d1_04_05; datos.d_micro.d1_04_06 = d1_04_06;
    datos.d_micro.d1_05_01 = d1_05_01; datos.d_micro.d1_05_02 = d1_05_02; datos.d_micro.d1_05_03 = d1_05_03; datos.d_micro.d1_05_04 = d1_05_04; datos.d_micro.d1_05_05 = d1_05_05; datos.d_micro.d1_05_06 = d1_05_06;
    datos.d_micro.d1_06_01 = d1_06_01; datos.d_micro.d1_06_02 = d1_06_02; datos.d_micro.d1_06_03 = d1_06_03; datos.d_micro.d1_06_04 = d1_06_04; datos.d_micro.d1_06_05 = d1_06_05; datos.d_micro.d1_06_06 = d1_06_06;
    datos.d_micro.d1_07_01 = d1_07_01; datos.d_micro.d1_07_02 = d1_07_02; datos.d_micro.d1_07_03 = d1_07_03; datos.d_micro.d1_07_04 = d1_07_04; datos.d_micro.d1_07_05 = d1_07_05; datos.d_micro.d1_07_06 = d1_07_06;  datos.d_micro.d1_07_07 = d1_07_07;
    datos.d_micro.d1_08_01 = d1_08_01; datos.d_micro.d1_08_02 = d1_08_02; datos.d_micro.d1_08_03 = d1_08_03; datos.d_micro.d1_08_04 = d1_08_04; datos.d_micro.d1_08_05 = d1_08_05; datos.d_micro.d1_08_06 = d1_08_06;  datos.d_micro.d1_08_07 = d1_08_07;
    datos.d_micro.d1_09_01 = d1_09_01; datos.d_micro.d1_09_02 = d1_09_02; datos.d_micro.d1_09_03 = d1_09_03; datos.d_micro.d1_09_04 = d1_09_04; datos.d_micro.d1_09_05 = d1_09_05; datos.d_micro.d1_09_06 = d1_09_06;  datos.d_micro.d1_09_07 = d1_09_07;

    /** g_desarrollo_g1 **/
    //datos.g_desarrollo_g1.g1_01_01 = g1_01_01; datos.g_desarrollo_g1.g1_01_02 = g1_01_02; datos.g_desarrollo_g1.g1_01_03 = g1_01_03;
    datos.g_desarrollo_g1.g1_01_01 = g1_01_01;  datos.g_desarrollo_g1.g1_01_02 = g1_01_02; datos.g_desarrollo_g1.g1_01_03 = g1_01_03;
    datos.g_desarrollo_g1.g1_02_01 = g1_02_01;  datos.g_desarrollo_g1.g1_02_02 = g1_02_02; datos.g_desarrollo_g1.g1_02_03 = g1_02_03;
    datos.g_desarrollo_g1.g1_03_01 = g1_03_01;  datos.g_desarrollo_g1.g1_03_02 = g1_03_02; datos.g_desarrollo_g1.g1_03_03 = g1_03_03;
    datos.g_desarrollo_g1.g1_04_01 = g1_04_01;  datos.g_desarrollo_g1.g1_04_02 = g1_04_02; datos.g_desarrollo_g1.g1_04_03 = g1_04_03;
    datos.g_desarrollo_g1.g1_05_01 = g1_05_01;  datos.g_desarrollo_g1.g1_05_02 = g1_05_02; datos.g_desarrollo_g1.g1_05_03 = g1_05_03;
    datos.g_desarrollo_g1.g1_06_01 = g1_06_01;  datos.g_desarrollo_g1.g1_06_02 = g1_06_02; datos.g_desarrollo_g1.g1_06_03 = g1_06_03;
    datos.g_desarrollo_g1.g1_07_01 = g1_07_01;  datos.g_desarrollo_g1.g1_07_02 = g1_07_02; datos.g_desarrollo_g1.g1_07_03 = g1_07_03;
    datos.g_desarrollo_g1.g1_08_01 = g1_08_01;  datos.g_desarrollo_g1.g1_08_02 = g1_08_02; datos.g_desarrollo_g1.g1_08_03 = g1_08_03;
    datos.g_desarrollo_g1.g1_09_01 = g1_09_01;  datos.g_desarrollo_g1.g1_09_02 = g1_09_02; datos.g_desarrollo_g1.g1_09_03 = g1_09_03;

    /** f_fibra **/
    datos.f_fibra.f1_01_01 = f1_01_01; datos.f_fibra.f1_01_02 = f1_01_02; datos.f_fibra.f1_01_03 = f1_01_03; datos.f_fibra.f1_01_04 = f1_01_04; datos.f_fibra.f1_01_05 = f1_01_05;
    datos.f_fibra.f1_02_01 = f1_02_01; datos.f_fibra.f1_02_02 = f1_02_02; datos.f_fibra.f1_02_03 = f1_02_03; datos.f_fibra.f1_02_04 = f1_02_04; datos.f_fibra.f1_02_05 = f1_02_05;
    datos.f_fibra.f1_03_01 = f1_03_01; datos.f_fibra.f1_03_02 = f1_03_02; datos.f_fibra.f1_03_03 = f1_03_03; datos.f_fibra.f1_03_04 = f1_03_04; datos.f_fibra.f1_03_05 = f1_03_05;

    datos.f_fibra.f1_04_01 = f1_04_01; datos.f_fibra.f1_04_02 = f1_04_02; datos.f_fibra.f1_04_03 = f1_04_03; datos.f_fibra.f1_04_04_from = f1_04_04_from; datos.f_fibra.f1_04_05 = f1_04_05;
                                                                                                             datos.f_fibra.f1_04_04_to   = f1_04_04_to;
    datos.f_fibra.f1_05_01 = f1_05_01; datos.f_fibra.f1_05_02 = f1_05_02; datos.f_fibra.f1_05_03 = f1_05_03; datos.f_fibra.f1_05_04_from = f1_05_04_from; datos.f_fibra.f1_05_05 = f1_05_05;
                                                                                                             datos.f_fibra.f1_05_04_to   = f1_05_04_to;
    datos.f_fibra.f1_06_01 = f1_06_01; datos.f_fibra.f1_06_02 = f1_06_02; datos.f_fibra.f1_06_03 = f1_06_03; datos.f_fibra.f1_06_04_from = f1_06_04_from; datos.f_fibra.f1_06_05 = f1_06_05;
                                                                                                             datos.f_fibra.f1_06_04_to   = f1_06_04_to;

                                       datos.f_fibra.f1_07_02    = f1_07_02;   datos.f_fibra.f1_07_03_a = f1_07_03_a; datos.f_fibra.f1_07_04_a = f1_07_04_a; datos.f_fibra.f1_07_05_a = f1_07_05_a;
                                                                               datos.f_fibra.f1_07_03_b = f1_07_03_b; datos.f_fibra.f1_07_04_b = f1_07_04_b; datos.f_fibra.f1_07_05_b = f1_07_05_b;

                                       datos.f_fibra.f1_08_02    = f1_08_02;   datos.f_fibra.f1_08_03_a = f1_08_03_a; datos.f_fibra.f1_08_04_a = f1_08_04_a; datos.f_fibra.f1_08_05_a = f1_08_05_a;
                                                                               datos.f_fibra.f1_08_03_b = f1_08_03_b; datos.f_fibra.f1_08_04_b = f1_08_04_b; datos.f_fibra.f1_08_05_b = f1_08_05_b;
                                                                               datos.f_fibra.f1_08_03_c = f1_08_03_c; datos.f_fibra.f1_08_04_c = f1_08_04_c; datos.f_fibra.f1_08_05_c = f1_08_05_c;

    /** g_desarrollo_g2 **/
   // datos.g_desarrollo_g2.g2_01_01 = g2_01_01; datos.g_desarrollo_g2.g2_01_02 = g2_01_02;
    datos.g_desarrollo_g2.g2_01_01 = g2_01_01;  datos.g_desarrollo_g2.g2_01_02 = g2_01_02; datos.g_desarrollo_g2.g2_01_03 = g2_01_03;
    datos.g_desarrollo_g2.g2_02_01 = g2_02_01;  datos.g_desarrollo_g2.g2_02_02 = g2_02_02; datos.g_desarrollo_g2.g2_02_03 = g2_02_03;
    datos.g_desarrollo_g2.g2_03_01 = g2_03_01;  datos.g_desarrollo_g2.g2_03_02 = g2_03_02; datos.g_desarrollo_g2.g2_03_03 = g2_03_03;
    datos.g_desarrollo_g2.g2_04_01 = g2_04_01;  datos.g_desarrollo_g2.g2_04_02 = g2_04_02; datos.g_desarrollo_g2.g2_04_03 = g2_04_03;
    datos.g_desarrollo_g2.g2_05_01 = g2_05_01;  datos.g_desarrollo_g2.g2_05_02 = g2_05_02; datos.g_desarrollo_g2.g2_05_03 = g2_05_03;
    datos.g_desarrollo_g2.g2_06_01 = g2_06_01;  datos.g_desarrollo_g2.g2_06_02 = g2_06_02; datos.g_desarrollo_g2.g2_06_03 = g2_06_03;
    datos.g_desarrollo_g2.g2_07_01 = g2_07_01;  datos.g_desarrollo_g2.g2_07_02 = g2_07_02; datos.g_desarrollo_g2.g2_07_03 = g2_07_03;
    datos.g_desarrollo_g2.g2_08_01 = g2_08_01;  datos.g_desarrollo_g2.g2_08_02 = g2_08_02; datos.g_desarrollo_g2.g2_08_03 = g2_08_03;
    datos.g_desarrollo_g2.g2_09_01 = g2_09_01;  datos.g_desarrollo_g2.g2_09_02 = g2_09_02; datos.g_desarrollo_g2.g2_09_03 = g2_09_03;

    /**  "f_satelital_f2" **/
    // datos.f_satelital_f2.f2_01_01 =
    datos.f_satelital_f2.f2_01_01 = f2_01_01; datos.f_satelital_f2.f2_01_02 = f2_01_02;
    datos.f_satelital_f2.f2_02_01 = f2_02_01; datos.f_satelital_f2.f2_02_02 = f2_02_02;
    datos.f_satelital_f2.f2_03_01 = f2_03_01; datos.f_satelital_f2.f2_03_02 = f2_03_02;
    datos.f_satelital_f2.f2_04_01 = f2_04_01; datos.f_satelital_f2.f2_04_02 = f2_04_02;
    datos.f_satelital_f2.f2_05_01 = f2_05_01; datos.f_satelital_f2.f2_05_02 = f2_05_02;
    datos.f_satelital_f2.f2_06_01 = f2_06_01; datos.f_satelital_f2.f2_06_02 = f2_06_02;
    datos.f_satelital_f2.f2_07_01 = f2_07_01; datos.f_satelital_f2.f2_07_02 = f2_07_02;
    datos.f_satelital_f2.f2_08_01 = f2_08_01; datos.f_satelital_f2.f2_08_02 = f2_08_02;
    datos.f_satelital_f2.f2_09_01 = f2_09_01;
    datos.f_satelital_f2.f2_10_01 = f2_10_01;
    datos.f_satelital_f2.f2_11_01 = f2_11_01;
    datos.f_satelital_f2.f2_12_01 = f2_12_01;
    datos.f_satelital_f2.f2_13_01 = f2_13_01;
    datos.f_satelital_f2.f2_14_01 = f2_14_01;
    datos.f_satelital_f2.f2_15_01 = f2_15_01;
    datos.f_satelital_f2.f2_16_01 = f2_16_01;

    /** g_desarrollo_g3 **/
    //datos.g_desarrollo_g3.g3_15_01 = g3_15_01; datos.g_desarrollo_g3.g3_15_02 = g3_15_02;
    datos.g_desarrollo_g3.g3_01_01 = g3_01_01;  datos.g_desarrollo_g3.g3_01_02 = g3_01_02; datos.g_desarrollo_g3.g3_01_03 = g3_01_03;
    datos.g_desarrollo_g3.g3_02_01 = g3_02_01;  datos.g_desarrollo_g3.g3_02_02 = g3_02_02; datos.g_desarrollo_g3.g3_02_03 = g3_02_03;
    datos.g_desarrollo_g3.g3_03_01 = g3_03_01;  datos.g_desarrollo_g3.g3_03_02 = g3_03_02; datos.g_desarrollo_g3.g3_03_03 = g3_03_03;
    datos.g_desarrollo_g3.g3_04_01 = g3_04_01;  datos.g_desarrollo_g3.g3_04_02 = g3_04_02; datos.g_desarrollo_g3.g3_04_03 = g3_04_03;
    datos.g_desarrollo_g3.g3_05_01 = g3_05_01;  datos.g_desarrollo_g3.g3_05_02 = g3_05_02; datos.g_desarrollo_g3.g3_05_03 = g3_05_03;
    datos.g_desarrollo_g3.g3_06_01 = g3_06_01;  datos.g_desarrollo_g3.g3_06_02 = g3_06_02; datos.g_desarrollo_g3.g3_06_03 = g3_06_03;
    datos.g_desarrollo_g3.g3_07_01 = g3_07_01;  datos.g_desarrollo_g3.g3_07_02 = g3_07_02; datos.g_desarrollo_g3.g3_07_03 = g3_07_03;



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
