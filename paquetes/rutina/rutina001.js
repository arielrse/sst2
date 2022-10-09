async function getDatos() {
    const res = await fetch("../../paquetes/rutina/data/rutina001.json");
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

/* F. */
var f01_1 = $('#f01_1').prop('checked'); var f01_2 = $('#f01_2').prop('checked'); var f01_3 = $('#f01_3').val();
var f02_1 = $('#f02_1').prop('checked'); var f02_2 = $('#f02_2').prop('checked'); var f02_3 = $('#f02_3').val();
var f03_1 = $('#f03_1').prop('checked'); var f03_2 = $('#f03_2').prop('checked'); var f03_3 = $('#f03_3').val();
var f04_1 = $('#f04_1').prop('checked'); var f04_2 = $('#f04_2').prop('checked'); var f04_3 = $('#f04_3').val();
var f05_1 = $('#f05_1').prop('checked'); var f05_2 = $('#f05_2').prop('checked'); var f05_3 = $('#f05_3').val();
var f06_1 = $('#f06_1').prop('checked'); var f06_2 = $('#f06_2').prop('checked'); var f06_3 = $('#f06_3').val();
var f07_1 = $('#f07_1').prop('checked'); var f07_2 = $('#f07_2').prop('checked'); var f07_3 = $('#f07_3').val();
var f08_1 = $('#f08_1').prop('checked'); var f08_2 = $('#f08_2').prop('checked'); var f08_3 = $('#f08_3').val();
var f09_1 = $('#f09_1').prop('checked'); var f09_2 = $('#f09_2').prop('checked'); var f09_3 = $('#f09_3').val();

/* g_desarrollo */
var g01_1 = $('#g01_1').prop('checked'); var g01_2 = $('#g01_2').prop('checked'); var g01_3 = $('#g01_3').val();
var g02_1 = $('#g02_1').prop('checked'); var g02_2 = $('#g02_2').prop('checked'); var g02_3 = $('#g02_3').val();
var g03_1 = $('#g03_1').prop('checked'); var g03_2 = $('#g03_2').prop('checked'); var g03_3 = $('#g03_3').val();
var g04_1 = $('#g04_1').prop('checked'); var g04_2 = $('#g04_2').prop('checked'); var g04_3 = $('#g04_3').val();
var g05_1 = $('#g05_1').prop('checked'); var g05_2 = $('#g05_2').prop('checked'); var g05_3 = $('#g05_3').val();
var g06_1 = $('#g06_1').prop('checked'); var g06_2 = $('#g06_2').prop('checked'); var g06_3 = $('#g06_3').val();
var g07_1 = $('#g07_1').prop('checked'); var g07_2 = $('#g07_2').prop('checked'); var g07_3 = $('#g07_3').val();
var g08_1 = $('#g08_1').prop('checked'); var g08_2 = $('#g08_2').prop('checked'); var g08_3 = $('#g08_3').val();
var g09_1  = $('#g09_1').val(); var g09_2  = $('#g09_2').val();
var g10_1  = $('#g10_1').val(); var g10_2  = $('#g10_2').val();
var g11_1  = $('#g11_1').val(); var g11_2  = $('#g11_2').val();
var g12_1  = $('#g12_1').val(); var g12_2  = $('#g12_2').val();
var g13_1  = $('#g13_1').val(); var g13_2  = $('#g13_2').val();
var g14_1  = $('#g14_1').val(); var g14_2  = $('#g14_2').val();
var g15_1  = $('#g15_1').val(); var g15_2  = $('#g15_2').val();
var g16_1  = $('#g16_1').val(); var g16_2  = $('#g16_2').val();
var g17_1  = $('#g17_1').val(); var g17_2  = $('#g17_2').val();
var g18_1  = $('#g18_1').val(); var g18_2  = $('#g18_2').val();

/** g_voltaje **/
var g19_b01 = $('#g19_b01').val(); var g19_b02 = $('#g19_b02').val(); var g19_b03 = $('#g19_b03').val(); var g19_b04 = $('#g19_b04').val(); var g19_b05 = $('#g19_b05').val(); var g19_b06 = $('#g19_b06').val();
var g19_b07 = $('#g19_b07').val(); var g19_b08 = $('#g19_b08').val(); var g19_b09 = $('#g19_b09').val(); var g19_b10 = $('#g19_b10').val(); var g19_b11 = $('#g19_b11').val(); var g19_b12 = $('#g19_b12').val();
var g19_b13 = $('#g19_b13').val(); var g19_b14 = $('#g19_b14').val(); var g19_b15 = $('#g19_b15').val(); var g19_b16 = $('#g19_b16').val(); var g19_b17 = $('#g19_b17').val(); var g19_b18 = $('#g19_b18').val();
var g19_b19 = $('#g19_b19').val(); var g19_b20 = $('#g19_b20').val(); var g19_b21 = $('#g19_b21').val(); var g19_b22 = $('#g19_b22').val(); var g19_b23 = $('#g19_b23').val(); var g19_b24 = $('#g19_b24').val();

/** g_descarga **/
var g20_1_1 = $('#g20_1_1').val();
var g20_1_2 = $('#g20_1_2').val();
var g20_1_3 = $('#g20_1_3').val();
var g20_2_1 = $('#g20_2_1').val();
var g20_2_2 = $('#g20_2_2').val();
var g20_2_3 = $('#g20_2_3').val();

/** g_tiempo_tension **/
var g_bb2_t1  = $('#g_bb2_t1').val();
var g_bb2_t2  = $('#g_bb2_t2').val();
var g_bb2_t3  = $('#g_bb2_t3').val();

var g_bb2_b1_1  = $('#g_bb2_b1_1').val();
var g_bb2_b1_2  = $('#g_bb2_b1_2').val();
var g_bb2_b1_3  = $('#g_bb2_b1_3').val();
var g_bb2_b1_4  = $('#g_bb2_b1_4').val();
var g_bb2_b1_5  = $('#g_bb2_b1_5').val();
var g_bb2_b1_6  = $('#g_bb2_b1_6').val();
var g_bb2_b1_7  = $('#g_bb2_b1_7').val();
var g_bb2_b1_8  = $('#g_bb2_b1_8').val();
var g_bb2_b1_9  = $('#g_bb2_b1_9').val();
var g_bb2_b1_10  = $('#g_bb2_b1_10').val();
var g_bb2_b1_11  = $('#g_bb2_b1_11').val();

var g_bb2_b2_1  = $('#g_bb2_b2_1').val();
var g_bb2_b2_2  = $('#g_bb2_b2_2').val();
var g_bb2_b2_3  = $('#g_bb2_b2_3').val();
var g_bb2_b2_4  = $('#g_bb2_b2_4').val();
var g_bb2_b2_5  = $('#g_bb2_b2_5').val();
var g_bb2_b2_6  = $('#g_bb2_b2_6').val();
var g_bb2_b2_7  = $('#g_bb2_b2_7').val();
var g_bb2_b2_8  = $('#g_bb2_b2_8').val();
var g_bb2_b2_9  = $('#g_bb2_b2_9').val();
var g_bb2_b2_10 = $('#g_bb2_b2_10').val();
var g_bb2_b2_11 = $('#g_bb2_b2_11').val();

var g_bb2_b3_1  = $('#g_bb2_b3_1').val();
var g_bb2_b3_2  = $('#g_bb2_b3_2').val();
var g_bb2_b3_3  = $('#g_bb2_b3_3').val();
var g_bb2_b3_4  = $('#g_bb2_b3_4').val();
var g_bb2_b3_5  = $('#g_bb2_b3_5').val();
var g_bb2_b3_6  = $('#g_bb2_b3_6').val();
var g_bb2_b3_7  = $('#g_bb2_b3_7').val();
var g_bb2_b3_8  = $('#g_bb2_b3_8').val();
var g_bb2_b3_9  = $('#g_bb2_b3_9').val();
var g_bb2_b3_10 = $('#g_bb2_b3_10').val();
var g_bb2_b3_11 = $('#g_bb2_b3_11').val();

var g_bb2_b4_1  = $('#g_bb2_b4_1').val();
var g_bb2_b4_2  = $('#g_bb2_b4_2').val();
var g_bb2_b4_3  = $('#g_bb2_b4_3').val();
var g_bb2_b4_4  = $('#g_bb2_b4_4').val();
var g_bb2_b4_5  = $('#g_bb2_b4_5').val();
var g_bb2_b4_6  = $('#g_bb2_b4_6').val();
var g_bb2_b4_7  = $('#g_bb2_b4_7').val();
var g_bb2_b4_8  = $('#g_bb2_b4_8').val();
var g_bb2_b4_9  = $('#g_bb2_b4_9').val();
var g_bb2_b4_10 = $('#g_bb2_b4_10').val();
var g_bb2_b4_11 = $('#g_bb2_b4_11').val();

var g_bb2_b5_1  = $('#g_bb2_b5_1').val();
var g_bb2_b5_2  = $('#g_bb2_b5_2').val();
var g_bb2_b5_3  = $('#g_bb2_b5_3').val();
var g_bb2_b5_4  = $('#g_bb2_b5_4').val();
var g_bb2_b5_5  = $('#g_bb2_b5_5').val();
var g_bb2_b5_6  = $('#g_bb2_b5_6').val();
var g_bb2_b5_7  = $('#g_bb2_b5_7').val();
var g_bb2_b5_8  = $('#g_bb2_b5_8').val();
var g_bb2_b5_9  = $('#g_bb2_b5_9').val();
var g_bb2_b5_10 = $('#g_bb2_b5_10').val();
var g_bb2_b5_11 = $('#g_bb2_b5_11').val();

var g_bb2_b6_1  = $('#g_bb2_b6_1').val();
var g_bb2_b6_2  = $('#g_bb2_b6_2').val();
var g_bb2_b6_3  = $('#g_bb2_b6_3').val();
var g_bb2_b6_4  = $('#g_bb2_b6_4').val();
var g_bb2_b6_5  = $('#g_bb2_b6_5').val();
var g_bb2_b6_6  = $('#g_bb2_b6_6').val();
var g_bb2_b6_7  = $('#g_bb2_b6_7').val();
var g_bb2_b6_8  = $('#g_bb2_b6_8').val();
var g_bb2_b6_9  = $('#g_bb2_b6_9').val();
var g_bb2_b6_10 = $('#g_bb2_b6_10').val();
var g_bb2_b6_11 = $('#g_bb2_b6_11').val();

var g_bb2_b7_1  = $('#g_bb2_b7_1').val();
var g_bb2_b7_2  = $('#g_bb2_b7_2').val();
var g_bb2_b7_3  = $('#g_bb2_b7_3').val();
var g_bb2_b7_4  = $('#g_bb2_b7_4').val();
var g_bb2_b7_5  = $('#g_bb2_b7_5').val();
var g_bb2_b7_6  = $('#g_bb2_b7_6').val();
var g_bb2_b7_7  = $('#g_bb2_b7_7').val();
var g_bb2_b7_8  = $('#g_bb2_b7_8').val();
var g_bb2_b7_9  = $('#g_bb2_b7_9').val();
var g_bb2_b7_10 = $('#g_bb2_b7_10').val();
var g_bb2_b7_11 = $('#g_bb2_b7_11').val();

var g_bb2_b8_1  = $('#g_bb2_b8_1').val();
var g_bb2_b8_2  = $('#g_bb2_b8_2').val();
var g_bb2_b8_3  = $('#g_bb2_b8_3').val();
var g_bb2_b8_4  = $('#g_bb2_b8_4').val();
var g_bb2_b8_5  = $('#g_bb2_b8_5').val();
var g_bb2_b8_6  = $('#g_bb2_b8_6').val();
var g_bb2_b8_7  = $('#g_bb2_b8_7').val();
var g_bb2_b8_8  = $('#g_bb2_b8_8').val();
var g_bb2_b8_9  = $('#g_bb2_b8_9').val();
var g_bb2_b8_10 = $('#g_bb2_b8_10').val();
var g_bb2_b8_11 = $('#g_bb2_b8_11').val();

var g_bb2_b9_1  = $('#g_bb2_b9_1').val();
var g_bb2_b9_2  = $('#g_bb2_b9_2').val();
var g_bb2_b9_3  = $('#g_bb2_b9_3').val();
var g_bb2_b9_4  = $('#g_bb2_b9_4').val();
var g_bb2_b9_5  = $('#g_bb2_b9_5').val();
var g_bb2_b9_6  = $('#g_bb2_b9_6').val();
var g_bb2_b9_7  = $('#g_bb2_b9_7').val();
var g_bb2_b9_8  = $('#g_bb2_b9_8').val();
var g_bb2_b9_9  = $('#g_bb2_b9_9').val();
var g_bb2_b9_10 = $('#g_bb2_b9_10').val();
var g_bb2_b9_11 = $('#g_bb2_b9_11').val();

var g_bb2_b10_1 = $('#g_bb2_b10_1').val();
var g_bb2_b10_2 = $('#g_bb2_b10_2').val();
var g_bb2_b10_3 = $('#g_bb2_b10_3').val();
var g_bb2_b10_4 = $('#g_bb2_b10_4').val();
var g_bb2_b10_5 = $('#g_bb2_b10_5').val();
var g_bb2_b10_6 = $('#g_bb2_b10_6').val();
var g_bb2_b10_7 = $('#g_bb2_b10_7').val();
var g_bb2_b10_8 = $('#g_bb2_b10_8').val();
var g_bb2_b10_9  = $('#g_bb2_b10_9').val();
var g_bb2_b10_10 = $('#g_bb2_b10_10').val();
var g_bb2_b10_11 = $('#g_bb2_b10_11').val();

var g_bb2_b11_1 = $('#g_bb2_b11_1').val();
var g_bb2_b11_2 = $('#g_bb2_b11_2').val();
var g_bb2_b11_3 = $('#g_bb2_b11_3').val();
var g_bb2_b11_4 = $('#g_bb2_b11_4').val();
var g_bb2_b11_5 = $('#g_bb2_b11_5').val();
var g_bb2_b11_6 = $('#g_bb2_b11_6').val();
var g_bb2_b11_7 = $('#g_bb2_b11_7').val();
var g_bb2_b11_8 = $('#g_bb2_b11_8').val();
var g_bb2_b11_9  = $('#g_bb2_b11_9').val();
var g_bb2_b11_10 = $('#g_bb2_b11_10').val();
var g_bb2_b11_11 = $('#g_bb2_b11_11').val();

var g_bb2_b12_1 = $('#g_bb2_b12_1').val();
var g_bb2_b12_2 = $('#g_bb2_b12_2').val();
var g_bb2_b12_3 = $('#g_bb2_b12_3').val();
var g_bb2_b12_4 = $('#g_bb2_b12_4').val();
var g_bb2_b12_5 = $('#g_bb2_b12_5').val();
var g_bb2_b12_6 = $('#g_bb2_b12_6').val();
var g_bb2_b12_7 = $('#g_bb2_b12_7').val();
var g_bb2_b12_8 = $('#g_bb2_b12_8').val();
var g_bb2_b12_9  = $('#g_bb2_b12_9').val();
var g_bb2_b12_10 = $('#g_bb2_b12_10').val();
var g_bb2_b12_11 = $('#g_bb2_b12_11').val();

var g_bb2_b13_1 = $('#g_bb2_b13_1').val();
var g_bb2_b13_2 = $('#g_bb2_b13_2').val();
var g_bb2_b13_3 = $('#g_bb2_b13_3').val();
var g_bb2_b13_4 = $('#g_bb2_b13_4').val();
var g_bb2_b13_5 = $('#g_bb2_b13_5').val();
var g_bb2_b13_6 = $('#g_bb2_b13_6').val();
var g_bb2_b13_7 = $('#g_bb2_b13_7').val();
var g_bb2_b13_8 = $('#g_bb2_b13_8').val();
var g_bb2_b13_9  = $('#g_bb2_b13_9').val();
var g_bb2_b13_10 = $('#g_bb2_b13_10').val();
var g_bb2_b13_11 = $('#g_bb2_b13_11').val();

var g_bb2_b14_1 = $('#g_bb2_b14_1').val();
var g_bb2_b14_2 = $('#g_bb2_b14_2').val();
var g_bb2_b14_3 = $('#g_bb2_b14_3').val();
var g_bb2_b14_4 = $('#g_bb2_b14_4').val();
var g_bb2_b14_5 = $('#g_bb2_b14_5').val();
var g_bb2_b14_6 = $('#g_bb2_b14_6').val();
var g_bb2_b14_7 = $('#g_bb2_b14_7').val();
var g_bb2_b14_8 = $('#g_bb2_b14_8').val();
var g_bb2_b14_9  = $('#g_bb2_b14_9').val();
var g_bb2_b14_10 = $('#g_bb2_b14_10').val();
var g_bb2_b14_11 = $('#g_bb2_b14_11').val();

var g_bb2_b15_1 = $('#g_bb2_b15_1').val();
var g_bb2_b15_2 = $('#g_bb2_b15_2').val();
var g_bb2_b15_3 = $('#g_bb2_b15_3').val();
var g_bb2_b15_4 = $('#g_bb2_b15_4').val();
var g_bb2_b15_5 = $('#g_bb2_b15_5').val();
var g_bb2_b15_6 = $('#g_bb2_b15_6').val();
var g_bb2_b15_7 = $('#g_bb2_b15_7').val();
var g_bb2_b15_8 = $('#g_bb2_b15_8').val();
var g_bb2_b15_9  = $('#g_bb2_b15_9').val();
var g_bb2_b15_10 = $('#g_bb2_b15_10').val();
var g_bb2_b15_11 = $('#g_bb2_b15_11').val();

var g_bb2_b16_1 = $('#g_bb2_b16_1').val();
var g_bb2_b16_2 = $('#g_bb2_b16_2').val();
var g_bb2_b16_3 = $('#g_bb2_b16_3').val();
var g_bb2_b16_4 = $('#g_bb2_b16_4').val();
var g_bb2_b16_5 = $('#g_bb2_b16_5').val();
var g_bb2_b16_6 = $('#g_bb2_b16_6').val();
var g_bb2_b16_7 = $('#g_bb2_b16_7').val();
var g_bb2_b16_8 = $('#g_bb2_b16_8').val();
var g_bb2_b16_9  = $('#g_bb2_b16_9').val();
var g_bb2_b16_10 = $('#g_bb2_b16_10').val();
var g_bb2_b16_11 = $('#g_bb2_b16_11').val();

var g_bb2_b17_1 = $('#g_bb2_b17_1').val();
var g_bb2_b17_2 = $('#g_bb2_b17_2').val();
var g_bb2_b17_3 = $('#g_bb2_b17_3').val();
var g_bb2_b17_4 = $('#g_bb2_b17_4').val();
var g_bb2_b17_5 = $('#g_bb2_b17_5').val();
var g_bb2_b17_6 = $('#g_bb2_b17_6').val();
var g_bb2_b17_7 = $('#g_bb2_b17_7').val();
var g_bb2_b17_8 = $('#g_bb2_b17_8').val();
var g_bb2_b17_9  = $('#g_bb2_b17_9').val();
var g_bb2_b17_10 = $('#g_bb2_b17_10').val();
var g_bb2_b17_11 = $('#g_bb2_b17_11').val();

var g_bb2_b18_1 = $('#g_bb2_b18_1').val();
var g_bb2_b18_2 = $('#g_bb2_b18_2').val();
var g_bb2_b18_3 = $('#g_bb2_b18_3').val();
var g_bb2_b18_4 = $('#g_bb2_b18_4').val();
var g_bb2_b18_5 = $('#g_bb2_b18_5').val();
var g_bb2_b18_6 = $('#g_bb2_b18_6').val();
var g_bb2_b18_7 = $('#g_bb2_b18_7').val();
var g_bb2_b18_8 = $('#g_bb2_b18_8').val();
var g_bb2_b18_9  = $('#g_bb2_b18_9').val();
var g_bb2_b18_10 = $('#g_bb2_b18_10').val();
var g_bb2_b18_11 = $('#g_bb2_b18_11').val();

var g_bb2_b19_1 = $('#g_bb2_b19_1').val();
var g_bb2_b19_2 = $('#g_bb2_b19_2').val();
var g_bb2_b19_3 = $('#g_bb2_b19_3').val();
var g_bb2_b19_4 = $('#g_bb2_b19_4').val();
var g_bb2_b19_5 = $('#g_bb2_b19_5').val();
var g_bb2_b19_6 = $('#g_bb2_b19_6').val();
var g_bb2_b19_7 = $('#g_bb2_b19_7').val();
var g_bb2_b19_8 = $('#g_bb2_b19_8').val();
var g_bb2_b19_9  = $('#g_bb2_b19_9').val();
var g_bb2_b19_10 = $('#g_bb2_b19_10').val();
var g_bb2_b19_11 = $('#g_bb2_b19_11').val();

var g_bb2_b20_1 = $('#g_bb2_b20_1').val();
var g_bb2_b20_2 = $('#g_bb2_b20_2').val();
var g_bb2_b20_3 = $('#g_bb2_b20_3').val();
var g_bb2_b20_4 = $('#g_bb2_b20_4').val();
var g_bb2_b20_5 = $('#g_bb2_b20_5').val();
var g_bb2_b20_6 = $('#g_bb2_b20_6').val();
var g_bb2_b20_7 = $('#g_bb2_b20_7').val();
var g_bb2_b20_8 = $('#g_bb2_b20_8').val();
var g_bb2_b20_9  = $('#g_bb2_b20_9').val();
var g_bb2_b20_10 = $('#g_bb2_b20_10').val();
var g_bb2_b20_11 = $('#g_bb2_b20_11').val();

var g_bb2_b21_1 = $('#g_bb2_b21_1').val();
var g_bb2_b21_2 = $('#g_bb2_b21_2').val();
var g_bb2_b21_3 = $('#g_bb2_b21_3').val();
var g_bb2_b21_4 = $('#g_bb2_b21_4').val();
var g_bb2_b21_5 = $('#g_bb2_b21_5').val();
var g_bb2_b21_6 = $('#g_bb2_b21_6').val();
var g_bb2_b21_7 = $('#g_bb2_b21_7').val();
var g_bb2_b21_8 = $('#g_bb2_b21_8').val();
var g_bb2_b21_9  = $('#g_bb2_b21_9').val();
var g_bb2_b21_10 = $('#g_bb2_b21_10').val();
var g_bb2_b21_11 = $('#g_bb2_b21_11').val();

var g_bb2_b22_1 = $('#g_bb2_b22_1').val();
var g_bb2_b22_2 = $('#g_bb2_b22_2').val();
var g_bb2_b22_3 = $('#g_bb2_b22_3').val();
var g_bb2_b22_4 = $('#g_bb2_b22_4').val();
var g_bb2_b22_5 = $('#g_bb2_b22_5').val();
var g_bb2_b22_6 = $('#g_bb2_b22_6').val();
var g_bb2_b22_7 = $('#g_bb2_b22_7').val();
var g_bb2_b22_8 = $('#g_bb2_b22_8').val();
var g_bb2_b22_9  = $('#g_bb2_b22_9').val();
var g_bb2_b22_10 = $('#g_bb2_b22_10').val();
var g_bb2_b22_11 = $('#g_bb2_b22_11').val();

var g_bb2_b23_1 = $('#g_bb2_b23_1').val();
var g_bb2_b23_2 = $('#g_bb2_b23_2').val();
var g_bb2_b23_3 = $('#g_bb2_b23_3').val();
var g_bb2_b23_4 = $('#g_bb2_b23_4').val();
var g_bb2_b23_5 = $('#g_bb2_b23_5').val();
var g_bb2_b23_6 = $('#g_bb2_b23_6').val();
var g_bb2_b23_7 = $('#g_bb2_b23_7').val();
var g_bb2_b23_8 = $('#g_bb2_b23_8').val();
var g_bb2_b23_9  = $('#g_bb2_b23_9').val();
var g_bb2_b23_10 = $('#g_bb2_b23_10').val();
var g_bb2_b23_11 = $('#g_bb2_b23_11').val();

var g_bb2_b24_1 = $('#g_bb2_b24_1').val();
var g_bb2_b24_2 = $('#g_bb2_b24_2').val();
var g_bb2_b24_3 = $('#g_bb2_b24_3').val();
var g_bb2_b24_4 = $('#g_bb2_b24_4').val();
var g_bb2_b24_5 = $('#g_bb2_b24_5').val();
var g_bb2_b24_6 = $('#g_bb2_b24_6').val();
var g_bb2_b24_7 = $('#g_bb2_b24_7').val();
var g_bb2_b24_8 = $('#g_bb2_b24_8').val();
var g_bb2_b24_9  = $('#g_bb2_b24_9').val();
var g_bb2_b24_10 = $('#g_bb2_b24_10').val();
var g_bb2_b24_11 = $('#g_bb2_b24_11').val();



/** g_resistencia_bb **/
var g21_1 = $('#g21_1').val();
var g21_2 = $('#g21_2').val();

/** g22_medidas **/
var g22_obs = $('#g22_obs').val();
var g22_b01 = $('#g22_b01').val(); var g22_b02 = $('#g22_b02').val(); var g22_b03 = $('#g22_b03').val(); var g22_b04 = $('#g22_b04').val(); var g22_b05 = $('#g22_b05').val(); var g22_b06 = $('#g22_b06').val();
var g22_b07 = $('#g22_b07').val(); var g22_b08 = $('#g22_b08').val(); var g22_b09 = $('#g22_b09').val(); var g22_b10 = $('#g22_b10').val(); var g22_b11 = $('#g22_b11').val(); var g22_b12 = $('#g22_b12').val();
var g22_b13 = $('#g22_b13').val(); var g22_b14 = $('#g22_b14').val(); var g22_b15 = $('#g22_b15').val(); var g22_b16 = $('#g22_b16').val(); var g22_b17 = $('#g22_b17').val(); var g22_b18 = $('#g22_b18').val();
var g22_b19 = $('#g22_b19').val(); var g22_b20 = $('#g22_b20').val(); var g22_b21 = $('#g22_b21').val(); var g22_b22 = $('#g22_b22').val(); var g22_b23 = $('#g22_b23').val(); var g22_b24 = $('#g22_b24').val();

/** footer **/
var pendientes        = $('#pendientes').val()
var recomendaciones   = $('#recomendaciones').val()
var observaciones     = $('#observaciones').val()

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

datos.f_verificacion[0].f01_1 = f01_1;
datos.f_verificacion[0].f01_2 = f01_2;
datos.f_verificacion[0].f01_3 = f01_3;

datos.f_verificacion[1].f02_1 = f02_1;
datos.f_verificacion[1].f02_2 = f02_2;
datos.f_verificacion[1].f02_3 = f02_3;

datos.f_verificacion[2].f03_1 = f03_1;
datos.f_verificacion[2].f03_2 = f03_2;
datos.f_verificacion[2].f03_3 = f03_3;

datos.f_verificacion[3].f04_1 = f04_1;
datos.f_verificacion[3].f04_2 = f04_2;
datos.f_verificacion[3].f04_3 = f04_3;

datos.f_verificacion[4].f05_1 = f05_1;
datos.f_verificacion[4].f05_2 = f05_2;
datos.f_verificacion[4].f05_3 = f05_3;

datos.f_verificacion[5].f06_1 = f06_1;
datos.f_verificacion[5].f06_2 = f06_2;
datos.f_verificacion[5].f06_3 = f06_3;

datos.f_verificacion[6].f07_1 = f07_1;
datos.f_verificacion[6].f07_2 = f07_2;
datos.f_verificacion[6].f07_3 = f07_3;

datos.f_verificacion[7].f08_1 = f08_1;
datos.f_verificacion[7].f08_2 = f08_2;
datos.f_verificacion[7].f08_3 = f08_3;

datos.f_verificacion[8].f09_1 = f09_1;
datos.f_verificacion[8].f09_2 = f09_2;
datos.f_verificacion[8].f09_3 = f09_3;

/** g_desarrollo **/
datos.g_desarrollo[0].g01_1 = g01_1;    datos.g_desarrollo[0].g01_2 = g01_2;    datos.g_desarrollo[0].g01_3 = g01_3;
datos.g_desarrollo[1].g02_1 = g02_1;    datos.g_desarrollo[1].g02_2 = g02_2;    datos.g_desarrollo[1].g02_3 = g02_3;
datos.g_desarrollo[2].g03_1 = g03_1;    datos.g_desarrollo[2].g03_2 = g03_2;    datos.g_desarrollo[2].g03_3 = g03_3;
datos.g_desarrollo[3].g04_1 = g04_1;    datos.g_desarrollo[3].g04_2 = g04_2;    datos.g_desarrollo[3].g04_3 = g04_3;
datos.g_desarrollo[4].g05_1 = g05_1;    datos.g_desarrollo[4].g05_2 = g05_2;    datos.g_desarrollo[4].g05_3 = g05_3;
datos.g_desarrollo[5].g06_1 = g06_1;    datos.g_desarrollo[5].g06_2 = g06_2;    datos.g_desarrollo[5].g06_3 = g06_3;
datos.g_desarrollo[6].g07_1 = g07_1;    datos.g_desarrollo[6].g07_2 = g07_2;    datos.g_desarrollo[6].g07_3 = g07_3;
datos.g_desarrollo[7].g08_1 = g08_1;    datos.g_desarrollo[7].g08_2 = g08_2;    datos.g_desarrollo[7].g08_3 = g08_3;
datos.g_desarrollo[8].g09_1 = g09_1;    datos.g_desarrollo[8].g09_2 = g09_2;
datos.g_desarrollo[9].g10_1 = g10_1;    datos.g_desarrollo[9].g10_2 = g10_2;
datos.g_desarrollo[10].g11_1 = g11_1;   datos.g_desarrollo[10].g11_2 = g11_2;
datos.g_desarrollo[11].g12_1 = g12_1;   datos.g_desarrollo[11].g12_2 = g12_2;
datos.g_desarrollo[12].g13_1 = g13_1;   datos.g_desarrollo[12].g13_2 = g13_2;
datos.g_desarrollo[13].g14_1 = g14_1;   datos.g_desarrollo[13].g14_2 = g14_2;
datos.g_desarrollo[14].g15_1 = g15_1;   datos.g_desarrollo[14].g15_2 = g15_2;
datos.g_desarrollo[15].g16_1 = g16_1;   datos.g_desarrollo[15].g16_2 = g16_2;
datos.g_desarrollo[16].g17_1 = g17_1;   datos.g_desarrollo[16].g17_2 = g17_2;
datos.g_desarrollo[17].g18_1 = g18_1;   datos.g_desarrollo[17].g18_2 = g18_2;

/** g_voltaje **/
datos.g_voltaje.g19_b01 = g19_b01; datos.g_voltaje.g19_b02 = g19_b02; datos.g_voltaje.g19_b03 = g19_b03; datos.g_voltaje.g19_b04 = g19_b04; datos.g_voltaje.g19_b05 = g19_b05; datos.g_voltaje.g19_b06 = g19_b06;
datos.g_voltaje.g19_b07 = g19_b07; datos.g_voltaje.g19_b08 = g19_b08; datos.g_voltaje.g19_b09 = g19_b09; datos.g_voltaje.g19_b10 = g19_b10; datos.g_voltaje.g19_b11 = g19_b11; datos.g_voltaje.g19_b12 = g19_b12;
datos.g_voltaje.g19_b13 = g19_b13; datos.g_voltaje.g19_b14 = g19_b14; datos.g_voltaje.g19_b15 = g19_b15; datos.g_voltaje.g19_b16 = g19_b16; datos.g_voltaje.g19_b17 = g19_b17; datos.g_voltaje.g19_b18 = g19_b18;
datos.g_voltaje.g19_b19 = g19_b19; datos.g_voltaje.g19_b20 = g19_b20; datos.g_voltaje.g19_b21 = g19_b21; datos.g_voltaje.g19_b22 = g19_b22; datos.g_voltaje.g19_b23 = g19_b23; datos.g_voltaje.g19_b24 = g19_b24;

/** g_descarga **/
datos.g_descarga.g20_1_1 = g20_1_1;
datos.g_descarga.g20_1_2 = g20_1_2;
datos.g_descarga.g20_1_3 = g20_1_3;
datos.g_descarga.g20_2_1 = g20_2_1;
datos.g_descarga.g20_2_2 = g20_2_2;
datos.g_descarga.g20_2_3 = g20_2_3;

/** g_tiempo_tension **/
datos.g_tiempo_tension.g_bb2_t1  = g_bb2_t1;
datos.g_tiempo_tension.g_bb2_t2  = g_bb2_t2;
datos.g_tiempo_tension.g_bb2_t3  = g_bb2_t3;

datos.g_tiempo_tension.g_bb2_b1_1  = g_bb2_b1_1;
datos.g_tiempo_tension.g_bb2_b1_2  = g_bb2_b1_2;
datos.g_tiempo_tension.g_bb2_b1_3  = g_bb2_b1_3;
datos.g_tiempo_tension.g_bb2_b1_4  = g_bb2_b1_4;
datos.g_tiempo_tension.g_bb2_b1_5  = g_bb2_b1_5;
datos.g_tiempo_tension.g_bb2_b1_6  = g_bb2_b1_6;
datos.g_tiempo_tension.g_bb2_b1_7  = g_bb2_b1_7;
datos.g_tiempo_tension.g_bb2_b1_8  = g_bb2_b1_8;
datos.g_tiempo_tension.g_bb2_b1_9  = g_bb2_b1_9;
datos.g_tiempo_tension.g_bb2_b1_10 = g_bb2_b1_10;
datos.g_tiempo_tension.g_bb2_b1_11 = g_bb2_b1_11;

datos.g_tiempo_tension.g_bb2_b2_1  = g_bb2_b2_1;
datos.g_tiempo_tension.g_bb2_b2_2  = g_bb2_b2_2;
datos.g_tiempo_tension.g_bb2_b2_3  = g_bb2_b2_3;
datos.g_tiempo_tension.g_bb2_b2_4  = g_bb2_b2_4;
datos.g_tiempo_tension.g_bb2_b2_5  = g_bb2_b2_5;
datos.g_tiempo_tension.g_bb2_b2_6  = g_bb2_b2_6;
datos.g_tiempo_tension.g_bb2_b2_7  = g_bb2_b2_7;
datos.g_tiempo_tension.g_bb2_b2_8  = g_bb2_b2_8;
datos.g_tiempo_tension.g_bb2_b2_9  = g_bb2_b2_9;
datos.g_tiempo_tension.g_bb2_b2_10 = g_bb2_b2_10;
datos.g_tiempo_tension.g_bb2_b2_11 = g_bb2_b2_11;

datos.g_tiempo_tension.g_bb2_b3_1  = g_bb2_b3_1;
datos.g_tiempo_tension.g_bb2_b3_2  = g_bb2_b3_2;
datos.g_tiempo_tension.g_bb2_b3_3  = g_bb2_b3_3;
datos.g_tiempo_tension.g_bb2_b3_4  = g_bb2_b3_4;
datos.g_tiempo_tension.g_bb2_b3_5  = g_bb2_b3_5;
datos.g_tiempo_tension.g_bb2_b3_6  = g_bb2_b3_6;
datos.g_tiempo_tension.g_bb2_b3_7  = g_bb2_b3_7;
datos.g_tiempo_tension.g_bb2_b3_8  = g_bb2_b3_8;
datos.g_tiempo_tension.g_bb2_b3_9  = g_bb2_b3_9;
datos.g_tiempo_tension.g_bb2_b3_10 = g_bb2_b3_10;
datos.g_tiempo_tension.g_bb2_b3_11 = g_bb2_b3_11;

datos.g_tiempo_tension.g_bb2_b4_1  = g_bb2_b4_1;
datos.g_tiempo_tension.g_bb2_b4_2  = g_bb2_b4_2;
datos.g_tiempo_tension.g_bb2_b4_3  = g_bb2_b4_3;
datos.g_tiempo_tension.g_bb2_b4_4  = g_bb2_b4_4;
datos.g_tiempo_tension.g_bb2_b4_5  = g_bb2_b4_5;
datos.g_tiempo_tension.g_bb2_b4_6  = g_bb2_b4_6;
datos.g_tiempo_tension.g_bb2_b4_7  = g_bb2_b4_7;
datos.g_tiempo_tension.g_bb2_b4_8  = g_bb2_b4_8;
datos.g_tiempo_tension.g_bb2_b4_9  = g_bb2_b4_9;
datos.g_tiempo_tension.g_bb2_b4_10 = g_bb2_b4_10;
datos.g_tiempo_tension.g_bb2_b4_11 = g_bb2_b4_11;

datos.g_tiempo_tension.g_bb2_b5_1  = g_bb2_b5_1;
datos.g_tiempo_tension.g_bb2_b5_2  = g_bb2_b5_2;
datos.g_tiempo_tension.g_bb2_b5_3  = g_bb2_b5_3;
datos.g_tiempo_tension.g_bb2_b5_4  = g_bb2_b5_4;
datos.g_tiempo_tension.g_bb2_b5_5  = g_bb2_b5_5;
datos.g_tiempo_tension.g_bb2_b5_6  = g_bb2_b5_6;
datos.g_tiempo_tension.g_bb2_b5_7  = g_bb2_b5_7;
datos.g_tiempo_tension.g_bb2_b5_8  = g_bb2_b5_8;
datos.g_tiempo_tension.g_bb2_b5_9  = g_bb2_b5_9;
datos.g_tiempo_tension.g_bb2_b5_10 = g_bb2_b5_10;
datos.g_tiempo_tension.g_bb2_b5_11 = g_bb2_b5_11;

datos.g_tiempo_tension.g_bb2_b6_1  = g_bb2_b6_1;
datos.g_tiempo_tension.g_bb2_b6_2  = g_bb2_b6_2;
datos.g_tiempo_tension.g_bb2_b6_3  = g_bb2_b6_3;
datos.g_tiempo_tension.g_bb2_b6_4  = g_bb2_b6_4;
datos.g_tiempo_tension.g_bb2_b6_5  = g_bb2_b6_5;
datos.g_tiempo_tension.g_bb2_b6_6  = g_bb2_b6_6;
datos.g_tiempo_tension.g_bb2_b6_7  = g_bb2_b6_7;
datos.g_tiempo_tension.g_bb2_b6_8  = g_bb2_b6_8;
datos.g_tiempo_tension.g_bb2_b6_9  = g_bb2_b6_9;
datos.g_tiempo_tension.g_bb2_b6_10 = g_bb2_b6_10;
datos.g_tiempo_tension.g_bb2_b6_11 = g_bb2_b6_11;

datos.g_tiempo_tension.g_bb2_b7_1  = g_bb2_b7_1;
datos.g_tiempo_tension.g_bb2_b7_2  = g_bb2_b7_2;
datos.g_tiempo_tension.g_bb2_b7_3  = g_bb2_b7_3;
datos.g_tiempo_tension.g_bb2_b7_4  = g_bb2_b7_4;
datos.g_tiempo_tension.g_bb2_b7_5  = g_bb2_b7_5;
datos.g_tiempo_tension.g_bb2_b7_6  = g_bb2_b7_6;
datos.g_tiempo_tension.g_bb2_b7_7  = g_bb2_b7_7;
datos.g_tiempo_tension.g_bb2_b7_8  = g_bb2_b7_8;
datos.g_tiempo_tension.g_bb2_b7_9  = g_bb2_b7_9;
datos.g_tiempo_tension.g_bb2_b7_10 = g_bb2_b7_10;
datos.g_tiempo_tension.g_bb2_b7_11 = g_bb2_b7_11;

datos.g_tiempo_tension.g_bb2_b8_1  = g_bb2_b8_1;
datos.g_tiempo_tension.g_bb2_b8_2  = g_bb2_b8_2;
datos.g_tiempo_tension.g_bb2_b8_3  = g_bb2_b8_3;
datos.g_tiempo_tension.g_bb2_b8_4  = g_bb2_b8_4;
datos.g_tiempo_tension.g_bb2_b8_5  = g_bb2_b8_5;
datos.g_tiempo_tension.g_bb2_b8_6  = g_bb2_b8_6;
datos.g_tiempo_tension.g_bb2_b8_7  = g_bb2_b8_7;
datos.g_tiempo_tension.g_bb2_b8_8  = g_bb2_b8_8;
datos.g_tiempo_tension.g_bb2_b8_9  = g_bb2_b8_9;
datos.g_tiempo_tension.g_bb2_b8_10 = g_bb2_b8_10;
datos.g_tiempo_tension.g_bb2_b8_11 = g_bb2_b8_11;

datos.g_tiempo_tension.g_bb2_b9_1  = g_bb2_b9_1;
datos.g_tiempo_tension.g_bb2_b9_2  = g_bb2_b9_2;
datos.g_tiempo_tension.g_bb2_b9_3  = g_bb2_b9_3;
datos.g_tiempo_tension.g_bb2_b9_4  = g_bb2_b9_4;
datos.g_tiempo_tension.g_bb2_b9_5  = g_bb2_b9_5;
datos.g_tiempo_tension.g_bb2_b9_6  = g_bb2_b9_6;
datos.g_tiempo_tension.g_bb2_b9_7  = g_bb2_b9_7;
datos.g_tiempo_tension.g_bb2_b9_8  = g_bb2_b9_8;
datos.g_tiempo_tension.g_bb2_b9_9  = g_bb2_b9_9;
datos.g_tiempo_tension.g_bb2_b9_10 = g_bb2_b9_10;
datos.g_tiempo_tension.g_bb2_b9_11 = g_bb2_b9_11;

datos.g_tiempo_tension.g_bb2_b10_1 = g_bb2_b10_1;
datos.g_tiempo_tension.g_bb2_b10_2 = g_bb2_b10_2;
datos.g_tiempo_tension.g_bb2_b10_3 = g_bb2_b10_3;
datos.g_tiempo_tension.g_bb2_b10_4 = g_bb2_b10_4;
datos.g_tiempo_tension.g_bb2_b10_5 = g_bb2_b10_5;
datos.g_tiempo_tension.g_bb2_b10_6 = g_bb2_b10_6;
datos.g_tiempo_tension.g_bb2_b10_7 = g_bb2_b10_7;
datos.g_tiempo_tension.g_bb2_b10_8 = g_bb2_b10_8;
datos.g_tiempo_tension.g_bb2_b10_9  = g_bb2_b10_9;
datos.g_tiempo_tension.g_bb2_b10_10 = g_bb2_b10_10;
datos.g_tiempo_tension.g_bb2_b10_11 = g_bb2_b10_11;

datos.g_tiempo_tension.g_bb2_b11_1 = g_bb2_b11_1;
datos.g_tiempo_tension.g_bb2_b11_2 = g_bb2_b11_2;
datos.g_tiempo_tension.g_bb2_b11_3 = g_bb2_b11_3;
datos.g_tiempo_tension.g_bb2_b11_4 = g_bb2_b11_4;
datos.g_tiempo_tension.g_bb2_b11_5 = g_bb2_b11_5;
datos.g_tiempo_tension.g_bb2_b11_6 = g_bb2_b11_6;
datos.g_tiempo_tension.g_bb2_b11_7 = g_bb2_b11_7;
datos.g_tiempo_tension.g_bb2_b11_8 = g_bb2_b11_8;
datos.g_tiempo_tension.g_bb2_b11_9  = g_bb2_b11_9;
datos.g_tiempo_tension.g_bb2_b11_10 = g_bb2_b11_10;
datos.g_tiempo_tension.g_bb2_b11_11 = g_bb2_b11_11;

datos.g_tiempo_tension.g_bb2_b12_1 = g_bb2_b12_1;
datos.g_tiempo_tension.g_bb2_b12_2 = g_bb2_b12_2;
datos.g_tiempo_tension.g_bb2_b12_3 = g_bb2_b12_3;
datos.g_tiempo_tension.g_bb2_b12_4 = g_bb2_b12_4;
datos.g_tiempo_tension.g_bb2_b12_5 = g_bb2_b12_5;
datos.g_tiempo_tension.g_bb2_b12_6 = g_bb2_b12_6;
datos.g_tiempo_tension.g_bb2_b12_7 = g_bb2_b12_7;
datos.g_tiempo_tension.g_bb2_b12_8 = g_bb2_b12_8;
datos.g_tiempo_tension.g_bb2_b12_9  = g_bb2_b12_9;
datos.g_tiempo_tension.g_bb2_b12_10 = g_bb2_b12_10;
datos.g_tiempo_tension.g_bb2_b12_11 = g_bb2_b12_11;

datos.g_tiempo_tension.g_bb2_b13_1 = g_bb2_b13_1;
datos.g_tiempo_tension.g_bb2_b13_2 = g_bb2_b13_2;
datos.g_tiempo_tension.g_bb2_b13_3 = g_bb2_b13_3;
datos.g_tiempo_tension.g_bb2_b13_4 = g_bb2_b13_4;
datos.g_tiempo_tension.g_bb2_b13_5 = g_bb2_b13_5;
datos.g_tiempo_tension.g_bb2_b13_6 = g_bb2_b13_6;
datos.g_tiempo_tension.g_bb2_b13_7 = g_bb2_b13_7;
datos.g_tiempo_tension.g_bb2_b13_8 = g_bb2_b13_8;
datos.g_tiempo_tension.g_bb2_b13_9  = g_bb2_b13_9;
datos.g_tiempo_tension.g_bb2_b13_10 = g_bb2_b13_10;
datos.g_tiempo_tension.g_bb2_b13_11 = g_bb2_b13_11;

datos.g_tiempo_tension.g_bb2_b14_1 = g_bb2_b14_1;
datos.g_tiempo_tension.g_bb2_b14_2 = g_bb2_b14_2;
datos.g_tiempo_tension.g_bb2_b14_3 = g_bb2_b14_3;
datos.g_tiempo_tension.g_bb2_b14_4 = g_bb2_b14_4;
datos.g_tiempo_tension.g_bb2_b14_5 = g_bb2_b14_5;
datos.g_tiempo_tension.g_bb2_b14_6 = g_bb2_b14_6;
datos.g_tiempo_tension.g_bb2_b14_7 = g_bb2_b14_7;
datos.g_tiempo_tension.g_bb2_b14_8 = g_bb2_b14_8;
datos.g_tiempo_tension.g_bb2_b14_9  = g_bb2_b14_9;
datos.g_tiempo_tension.g_bb2_b14_10 = g_bb2_b14_10;
datos.g_tiempo_tension.g_bb2_b14_11 = g_bb2_b14_11;

datos.g_tiempo_tension.g_bb2_b15_1 = g_bb2_b15_1;
datos.g_tiempo_tension.g_bb2_b15_2 = g_bb2_b15_2;
datos.g_tiempo_tension.g_bb2_b15_3 = g_bb2_b15_3;
datos.g_tiempo_tension.g_bb2_b15_4 = g_bb2_b15_4;
datos.g_tiempo_tension.g_bb2_b15_5 = g_bb2_b15_5;
datos.g_tiempo_tension.g_bb2_b15_6 = g_bb2_b15_6;
datos.g_tiempo_tension.g_bb2_b15_7 = g_bb2_b15_7;
datos.g_tiempo_tension.g_bb2_b15_8 = g_bb2_b15_8;
datos.g_tiempo_tension.g_bb2_b15_9  = g_bb2_b15_9;
datos.g_tiempo_tension.g_bb2_b15_10 = g_bb2_b15_10;
datos.g_tiempo_tension.g_bb2_b15_11 = g_bb2_b15_11;

datos.g_tiempo_tension.g_bb2_b16_1 = g_bb2_b16_1;
datos.g_tiempo_tension.g_bb2_b16_2 = g_bb2_b16_2;
datos.g_tiempo_tension.g_bb2_b16_3 = g_bb2_b16_3;
datos.g_tiempo_tension.g_bb2_b16_4 = g_bb2_b16_4;
datos.g_tiempo_tension.g_bb2_b16_5 = g_bb2_b16_5;
datos.g_tiempo_tension.g_bb2_b16_6 = g_bb2_b16_6;
datos.g_tiempo_tension.g_bb2_b16_7 = g_bb2_b16_7;
datos.g_tiempo_tension.g_bb2_b16_8 = g_bb2_b16_8;
datos.g_tiempo_tension.g_bb2_b16_9  = g_bb2_b16_9;
datos.g_tiempo_tension.g_bb2_b16_10 = g_bb2_b16_10;
datos.g_tiempo_tension.g_bb2_b16_11 = g_bb2_b16_11;

datos.g_tiempo_tension.g_bb2_b17_1 = g_bb2_b17_1;
datos.g_tiempo_tension.g_bb2_b17_2 = g_bb2_b17_2;
datos.g_tiempo_tension.g_bb2_b17_3 = g_bb2_b17_3;
datos.g_tiempo_tension.g_bb2_b17_4 = g_bb2_b17_4;
datos.g_tiempo_tension.g_bb2_b17_5 = g_bb2_b17_5;
datos.g_tiempo_tension.g_bb2_b17_6 = g_bb2_b17_6;
datos.g_tiempo_tension.g_bb2_b17_7 = g_bb2_b17_7;
datos.g_tiempo_tension.g_bb2_b17_8 = g_bb2_b17_8;
datos.g_tiempo_tension.g_bb2_b17_9  = g_bb2_b17_9;
datos.g_tiempo_tension.g_bb2_b17_10 = g_bb2_b17_10;
datos.g_tiempo_tension.g_bb2_b17_11 = g_bb2_b17_11;

datos.g_tiempo_tension.g_bb2_b18_1 = g_bb2_b18_1;
datos.g_tiempo_tension.g_bb2_b18_2 = g_bb2_b18_2;
datos.g_tiempo_tension.g_bb2_b18_3 = g_bb2_b18_3;
datos.g_tiempo_tension.g_bb2_b18_4 = g_bb2_b18_4;
datos.g_tiempo_tension.g_bb2_b18_5 = g_bb2_b18_5;
datos.g_tiempo_tension.g_bb2_b18_6 = g_bb2_b18_6;
datos.g_tiempo_tension.g_bb2_b18_7 = g_bb2_b18_7;
datos.g_tiempo_tension.g_bb2_b18_8 = g_bb2_b18_8;
datos.g_tiempo_tension.g_bb2_b18_9  = g_bb2_b18_9;
datos.g_tiempo_tension.g_bb2_b18_10 = g_bb2_b18_10;
datos.g_tiempo_tension.g_bb2_b18_11 = g_bb2_b18_11;

datos.g_tiempo_tension.g_bb2_b19_1 = g_bb2_b19_1;
datos.g_tiempo_tension.g_bb2_b19_2 = g_bb2_b19_2;
datos.g_tiempo_tension.g_bb2_b19_3 = g_bb2_b19_3;
datos.g_tiempo_tension.g_bb2_b19_4 = g_bb2_b19_4;
datos.g_tiempo_tension.g_bb2_b19_5 = g_bb2_b19_5;
datos.g_tiempo_tension.g_bb2_b19_6 = g_bb2_b19_6;
datos.g_tiempo_tension.g_bb2_b19_7 = g_bb2_b19_7;
datos.g_tiempo_tension.g_bb2_b19_8 = g_bb2_b19_8;
datos.g_tiempo_tension.g_bb2_b19_9  = g_bb2_b19_9;
datos.g_tiempo_tension.g_bb2_b19_10 = g_bb2_b19_10;
datos.g_tiempo_tension.g_bb2_b19_11 = g_bb2_b19_11;

datos.g_tiempo_tension.g_bb2_b20_1 = g_bb2_b20_1;
datos.g_tiempo_tension.g_bb2_b20_2 = g_bb2_b20_2;
datos.g_tiempo_tension.g_bb2_b20_3 = g_bb2_b20_3;
datos.g_tiempo_tension.g_bb2_b20_4 = g_bb2_b20_4;
datos.g_tiempo_tension.g_bb2_b20_5 = g_bb2_b20_5;
datos.g_tiempo_tension.g_bb2_b20_6 = g_bb2_b20_6;
datos.g_tiempo_tension.g_bb2_b20_7 = g_bb2_b20_7;
datos.g_tiempo_tension.g_bb2_b20_8 = g_bb2_b20_8;
datos.g_tiempo_tension.g_bb2_b20_9  = g_bb2_b20_9;
datos.g_tiempo_tension.g_bb2_b20_10 = g_bb2_b20_10;
datos.g_tiempo_tension.g_bb2_b20_11 = g_bb2_b20_11;

datos.g_tiempo_tension.g_bb2_b21_1 = g_bb2_b21_1;
datos.g_tiempo_tension.g_bb2_b21_2 = g_bb2_b21_2;
datos.g_tiempo_tension.g_bb2_b21_3 = g_bb2_b21_3;
datos.g_tiempo_tension.g_bb2_b21_4 = g_bb2_b21_4;
datos.g_tiempo_tension.g_bb2_b21_5 = g_bb2_b21_5;
datos.g_tiempo_tension.g_bb2_b21_6 = g_bb2_b21_6;
datos.g_tiempo_tension.g_bb2_b21_7 = g_bb2_b21_7;
datos.g_tiempo_tension.g_bb2_b21_8 = g_bb2_b21_8;
datos.g_tiempo_tension.g_bb2_b21_9  = g_bb2_b21_9;
datos.g_tiempo_tension.g_bb2_b21_10 = g_bb2_b21_10;
datos.g_tiempo_tension.g_bb2_b21_11 = g_bb2_b21_11;

datos.g_tiempo_tension.g_bb2_b22_1 = g_bb2_b22_1;
datos.g_tiempo_tension.g_bb2_b22_2 = g_bb2_b22_2;
datos.g_tiempo_tension.g_bb2_b22_3 = g_bb2_b22_3;
datos.g_tiempo_tension.g_bb2_b22_4 = g_bb2_b22_4;
datos.g_tiempo_tension.g_bb2_b22_5 = g_bb2_b22_5;
datos.g_tiempo_tension.g_bb2_b22_6 = g_bb2_b22_6;
datos.g_tiempo_tension.g_bb2_b22_7 = g_bb2_b22_7;
datos.g_tiempo_tension.g_bb2_b22_8 = g_bb2_b22_8;
datos.g_tiempo_tension.g_bb2_b22_9  = g_bb2_b22_9;
datos.g_tiempo_tension.g_bb2_b22_10 = g_bb2_b22_10;
datos.g_tiempo_tension.g_bb2_b22_11 = g_bb2_b22_11;

datos.g_tiempo_tension.g_bb2_b23_1 = g_bb2_b23_1;
datos.g_tiempo_tension.g_bb2_b23_2 = g_bb2_b23_2;
datos.g_tiempo_tension.g_bb2_b23_3 = g_bb2_b23_3;
datos.g_tiempo_tension.g_bb2_b23_4 = g_bb2_b23_4;
datos.g_tiempo_tension.g_bb2_b23_5 = g_bb2_b23_5;
datos.g_tiempo_tension.g_bb2_b23_6 = g_bb2_b23_6;
datos.g_tiempo_tension.g_bb2_b23_7 = g_bb2_b23_7;
datos.g_tiempo_tension.g_bb2_b23_8 = g_bb2_b23_8;
datos.g_tiempo_tension.g_bb2_b23_9  = g_bb2_b23_9;
datos.g_tiempo_tension.g_bb2_b23_10 = g_bb2_b23_10;
datos.g_tiempo_tension.g_bb2_b23_11 = g_bb2_b23_11;

datos.g_tiempo_tension.g_bb2_b24_1 = g_bb2_b24_1;
datos.g_tiempo_tension.g_bb2_b24_2 = g_bb2_b24_2;
datos.g_tiempo_tension.g_bb2_b24_3 = g_bb2_b24_3;
datos.g_tiempo_tension.g_bb2_b24_4 = g_bb2_b24_4;
datos.g_tiempo_tension.g_bb2_b24_5 = g_bb2_b24_5;
datos.g_tiempo_tension.g_bb2_b24_6 = g_bb2_b24_6;
datos.g_tiempo_tension.g_bb2_b24_7 = g_bb2_b24_7;
datos.g_tiempo_tension.g_bb2_b24_8 = g_bb2_b24_8;
datos.g_tiempo_tension.g_bb2_b24_9  = g_bb2_b24_9;
datos.g_tiempo_tension.g_bb2_b24_10 = g_bb2_b24_10;
datos.g_tiempo_tension.g_bb2_b24_11 = g_bb2_b24_11;

/** g_resistencia_bb **/
datos.g_resistencia_bb.g21_1 = g21_1;
datos.g_resistencia_bb.g21_2 = g21_2;

/** g22_medidas **/
datos.g22_medidas.g22_obs = g22_obs;
datos.g22_medidas.g22_b01 = g22_b01; datos.g22_medidas.g22_b02 = g22_b02; datos.g22_medidas.g22_b03 = g22_b03; datos.g22_medidas.g22_b04 = g22_b04; datos.g22_medidas.g22_b05 = g22_b05; datos.g22_medidas.g22_b06 = g22_b06;
datos.g22_medidas.g22_b07 = g22_b07; datos.g22_medidas.g22_b08 = g22_b08; datos.g22_medidas.g22_b09 = g22_b09; datos.g22_medidas.g22_b10 = g22_b10; datos.g22_medidas.g22_b11 = g22_b11; datos.g22_medidas.g22_b12 = g22_b12;
datos.g22_medidas.g22_b13 = g22_b13; datos.g22_medidas.g22_b14 = g22_b14; datos.g22_medidas.g22_b15 = g22_b15; datos.g22_medidas.g22_b16 = g22_b16; datos.g22_medidas.g22_b17 = g22_b17; datos.g22_medidas.g22_b18 = g22_b18;
datos.g22_medidas.g22_b19 = g22_b19; datos.g22_medidas.g22_b20 = g22_b20; datos.g22_medidas.g22_b21 = g22_b21; datos.g22_medidas.g22_b22 = g22_b22; datos.g22_medidas.g22_b23 = g22_b23; datos.g22_medidas.g22_b24 = g22_b24;

datos.pendientes      = pendientes;
datos.recomendaciones = recomendaciones;
datos.observaciones   = observaciones;

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