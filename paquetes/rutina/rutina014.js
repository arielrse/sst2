
async function getDatos() {
    const res = await fetch("../../paquetes/rutina/data/rutina014.json");
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

    /**  d_relevamiento **/
    var d_01_01 = $('#d_01_01').val(); var d_01_02 = $('#d_01_02').val();
    var d_02_01 = $('#d_02_01').val(); var d_02_02 = $('#d_02_02').val();
    var d_03_01 = $('#d_03_01').val(); var d_03_02 = $('#d_03_02').val();
    var d_04_01 = $('#d_04_01').val(); var d_04_02 = $('#d_04_02').val();

    /** e_desarrollo **/
    var e1_01_01 = $('#e1_01_01').prop('checked'); var e1_01_02 = $('#e1_01_02').prop('checked'); var e1_01_03 = $('#e1_01_03').val();
    var e1_02_01 = $('#e1_02_01').prop('checked'); var e1_02_02 = $('#e1_02_02').prop('checked'); var e1_02_03 = $('#e1_02_03').val();
    var e1_03_01 = $('#e1_03_01').prop('checked'); var e1_03_02 = $('#e1_03_02').prop('checked'); var e1_03_03 = $('#e1_03_03').val();
    var e1_04_01 = $('#e1_04_01').prop('checked'); var e1_04_02 = $('#e1_04_02').prop('checked'); var e1_04_03 = $('#e1_04_03').val();
    var e1_05_01 = $('#e1_05_01').prop('checked'); var e1_05_02 = $('#e1_05_02').prop('checked'); var e1_05_03 = $('#e1_05_03').val();
    var e1_06_01 = $('#e1_06_01').prop('checked'); var e1_06_02 = $('#e1_06_02').prop('checked'); var e1_06_03 = $('#e1_06_03').val();
    var e1_07_01 = $('#e1_07_01').prop('checked'); var e1_07_02 = $('#e1_07_02').prop('checked'); var e1_07_03 = $('#e1_07_03').val();
    var e1_08_01 = $('#e1_08_01').prop('checked'); var e1_08_02 = $('#e1_08_02').prop('checked'); var e1_08_03 = $('#e1_08_03').val();
    var e1_09_01 = $('#e1_09_01').prop('checked'); var e1_09_02 = $('#e1_09_02').prop('checked'); var e1_09_03 = $('#e1_09_03').val();
    var e1_10_01 = $('#e1_10_01').prop('checked'); var e1_10_02 = $('#e1_10_02').prop('checked'); var e1_10_03 = $('#e1_10_03').val();
    var e1_11_01 = $('#e1_11_01').prop('checked'); var e1_11_02 = $('#e1_11_02').prop('checked'); var e1_11_03 = $('#e1_11_03').val();
    var e1_12_01 = $('#e1_12_01').prop('checked'); var e1_12_02 = $('#e1_12_02').prop('checked'); var e1_12_03 = $('#e1_12_03').val();
    var e1_13_01 = $('#e1_13_01').prop('checked'); var e1_13_02 = $('#e1_13_02').prop('checked'); var e1_13_03 = $('#e1_13_03').val();
    var e1_14_01 = $('#e1_14_01').prop('checked'); var e1_14_02 = $('#e1_14_02').prop('checked'); var e1_14_03 = $('#e1_14_03').val();
    var e1_15_01 = $('#e1_15_01').prop('checked'); var e1_15_02 = $('#e1_15_02').prop('checked'); var e1_15_03 = $('#e1_15_03').val();
    var e1_16_01 = $('#e1_16_01').prop('checked'); var e1_16_02 = $('#e1_16_02').prop('checked'); var e1_16_03 = $('#e1_16_03').val();

    var e2_17_01 = $('#e2_17_01').val(); var e2_17_02 = $('#e2_17_02').val(); var e2_17_03 = $('#e2_17_03').val();
    var e2_18_01 = $('#e2_18_01').val(); var e2_18_02 = $('#e2_18_02').val(); var e2_18_03 = $('#e2_18_03').val();
    var e2_19_01 = $('#e2_19_01').val(); var e2_19_02 = $('#e2_19_02').val(); var e2_19_03 = $('#e2_19_03').val();

    var e3_01_01 = $('#e3_01_01').val(); var e3_01_02 = $('#e3_01_02').val();
    var e3_02_01 = $('#e3_02_01').val(); var e3_02_02 = $('#e3_02_02').val();
    var e3_03_01 = $('#e3_03_01').val(); var e3_03_02 = $('#e3_03_02').val();
    var e3_04_01 = $('#e3_04_01').val(); var e3_04_02 = $('#e3_04_02').val();
    var e3_05_01 = $('#e3_05_01').val(); var e3_05_02 = $('#e3_05_02').val();
    var e3_06_01 = $('#e3_06_01').val(); var e3_06_02 = $('#e3_06_02').val();
    var e3_07_01 = $('#e3_07_01').val(); var e3_07_02 = $('#e3_07_02').val();
    var e3_08_01 = $('#e3_08_01').val(); var e3_08_02 = $('#e3_08_02').val();
    var e3_09_01 = $('#e3_09_01').val(); var e3_09_02 = $('#e3_09_02').val();
    var e3_10_01 = $('#e3_10_01').val(); var e3_10_02 = $('#e3_10_02').val();
    var e3_11_01 = $('#e3_11_01').val(); var e3_11_02 = $('#e3_11_02').val();
    var e3_12_01 = $('#e3_12_01').val(); var e3_12_02 = $('#e3_12_02').val();

    var e4_01_01 = $('#e4_01_01').val(); var e4_01_02 = $('#e4_01_02').val(); var e4_01_03 = $('#e4_01_03').val(); var e4_01_04 = $('#e4_01_04').val(); var e4_01_05 = $('#e4_01_05').val();
    var e4_02_01 = $('#e4_02_01').val(); var e4_02_02 = $('#e4_02_02').val(); var e4_02_03 = $('#e4_02_03').val(); var e4_02_04 = $('#e4_02_04').val(); var e4_02_05 = $('#e4_02_05').val();
    var e4_03_01 = $('#e4_03_01').val(); var e4_03_02 = $('#e4_03_02').val(); var e4_03_03 = $('#e4_03_03').val(); var e4_03_04 = $('#e4_03_04').val(); var e4_03_05 = $('#e4_03_05').val();
    var e4_04_01 = $('#e4_04_01').val(); var e4_04_02 = $('#e4_04_02').val(); var e4_04_03 = $('#e4_04_03').val(); var e4_04_04 = $('#e4_04_04').val(); var e4_04_05 = $('#e4_04_05').val();
    var e4_05_01 = $('#e4_05_01').val(); var e4_05_02 = $('#e4_05_02').val(); var e4_05_03 = $('#e4_05_03').val(); var e4_05_04 = $('#e4_05_04').val(); var e4_05_05 = $('#e4_05_05').val();
    var e4_06_01 = $('#e4_06_01').val(); var e4_06_02 = $('#e4_06_02').val(); var e4_06_03 = $('#e4_06_03').val(); var e4_06_04 = $('#e4_06_04').val(); var e4_06_05 = $('#e4_06_05').val();

    var e5_01_01 = $('#e5_01_01').val(); var e5_01_02 = $('#e5_01_02').val(); var e5_01_03 = $('#e5_01_03').val(); var e5_01_04 = $('#e5_01_04').val(); var e5_01_05 = $('#e5_01_05').val(); var e5_01_06 = $('#e5_01_06').val(); var e5_01_07 = $('#e5_01_07').val(); var e5_01_08 = $('#e5_01_08').val(); var e5_01_09 = $('#e5_01_09').val(); var e5_01_10 = $('#e5_01_10').val(); var e5_01_11 = $('#e5_01_11').val(); 
    var e5_02_01 = $('#e5_02_01').val(); var e5_02_02 = $('#e5_02_02').val(); var e5_02_03 = $('#e5_02_03').val(); var e5_02_04 = $('#e5_02_04').val(); var e5_02_05 = $('#e5_02_05').val(); var e5_02_06 = $('#e5_02_06').val(); var e5_02_07 = $('#e5_02_07').val(); var e5_02_08 = $('#e5_02_08').val(); var e5_02_09 = $('#e5_02_09').val(); var e5_02_10 = $('#e5_02_10').val(); var e5_02_11 = $('#e5_02_11').val(); 
    var e5_03_01 = $('#e5_03_01').val(); var e5_03_02 = $('#e5_03_02').val(); var e5_03_03 = $('#e5_03_03').val(); var e5_03_04 = $('#e5_03_04').val(); var e5_03_05 = $('#e5_03_05').val(); var e5_03_06 = $('#e5_03_06').val(); var e5_03_07 = $('#e5_03_07').val(); var e5_03_08 = $('#e5_03_08').val(); var e5_03_09 = $('#e5_03_09').val(); var e5_03_10 = $('#e5_03_10').val(); var e5_03_11 = $('#e5_03_11').val();

    /** d_sectores **/
    var bts_01_01 = $('#bts_01_01').val();
    var bts_02_01 = $('#bts_02_01').val();
    var bts_03_01 = $('#bts_03_01').val();
    var bts_04_01 = $('#bts_04_01').val();
    var d1_01_01 = $('#d1_01_01').val(); var d1_01_02 = $('#d1_01_02').val(); var d1_01_03 = $('#d1_01_03').val(); var d1_01_04 = $('#d1_01_04').val(); var d1_01_05 = $('#d1_01_05').val(); var d1_01_06 = $('#d1_01_06').val(); var d1_01_07 = $('#d1_01_07').val(); var d1_01_08 = $('#d1_01_08').val(); var d1_01_09 = $('#d1_01_09').val(); var d1_01_10 = $('#d1_01_10').val(); var d1_01_11 = $('#d1_01_11').val(); var d1_01_12 = $('#d1_01_12').val(); var d1_01_13 = $('#d1_01_13').val();
    var d1_02_01 = $('#d1_02_01').val(); var d1_02_02 = $('#d1_02_02').val(); var d1_02_03 = $('#d1_02_03').val(); var d1_02_04 = $('#d1_02_04').val(); var d1_02_05 = $('#d1_02_05').val(); var d1_02_06 = $('#d1_02_06').val(); var d1_02_07 = $('#d1_02_07').val(); var d1_02_08 = $('#d1_02_08').val(); var d1_02_09 = $('#d1_02_09').val(); var d1_02_10 = $('#d1_02_10').val(); var d1_02_11 = $('#d1_02_11').val(); var d1_02_12 = $('#d1_02_12').val(); var d1_02_13 = $('#d1_02_13').val();
    var d1_03_01 = $('#d1_03_01').val(); var d1_03_02 = $('#d1_03_02').val(); var d1_03_03 = $('#d1_03_03').val(); var d1_03_04 = $('#d1_03_04').val(); var d1_03_05 = $('#d1_03_05').val(); var d1_03_06 = $('#d1_03_06').val(); var d1_03_07 = $('#d1_03_07').val(); var d1_03_08 = $('#d1_03_08').val(); var d1_03_09 = $('#d1_03_09').val(); var d1_03_10 = $('#d1_03_10').val(); var d1_03_11 = $('#d1_03_11').val(); var d1_03_12 = $('#d1_03_12').val(); var d1_03_13 = $('#d1_03_13').val();
    var d1_04_01 = $('#d1_04_01').val(); var d1_04_02 = $('#d1_04_02').val(); var d1_04_03 = $('#d1_04_03').val(); var d1_04_04 = $('#d1_04_04').val(); var d1_04_05 = $('#d1_04_05').val(); var d1_04_06 = $('#d1_04_06').val(); var d1_04_07 = $('#d1_04_07').val(); var d1_04_08 = $('#d1_04_08').val(); var d1_04_09 = $('#d1_04_09').val(); var d1_04_10 = $('#d1_04_10').val(); var d1_04_11 = $('#d1_04_11').val(); var d1_04_12 = $('#d1_04_12').val(); var d1_04_13 = $('#d1_04_13').val();
    var d1_05_01 = $('#d1_05_01').val(); var d1_05_02 = $('#d1_05_02').val(); var d1_05_03 = $('#d1_05_03').val(); var d1_05_04 = $('#d1_05_04').val(); var d1_05_05 = $('#d1_05_05').val(); var d1_05_06 = $('#d1_05_06').val(); var d1_05_07 = $('#d1_05_07').val(); var d1_05_08 = $('#d1_05_08').val(); var d1_05_09 = $('#d1_05_09').val(); var d1_05_10 = $('#d1_05_10').val(); var d1_05_11 = $('#d1_05_11').val(); var d1_05_12 = $('#d1_05_12').val(); var d1_05_13 = $('#d1_05_13').val();
    var d1_06_01 = $('#d1_06_01').val(); var d1_06_02 = $('#d1_06_02').val(); var d1_06_03 = $('#d1_06_03').val(); var d1_06_04 = $('#d1_06_04').val(); var d1_06_05 = $('#d1_06_05').val(); var d1_06_06 = $('#d1_06_06').val(); var d1_06_07 = $('#d1_06_07').val(); var d1_06_08 = $('#d1_06_08').val(); var d1_06_09 = $('#d1_06_09').val(); var d1_06_10 = $('#d1_06_10').val(); var d1_06_11 = $('#d1_06_11').val(); var d1_06_12 = $('#d1_06_12').val(); var d1_06_13 = $('#d1_06_13').val();

    var nodoB_01_01 = $('#nodoB_01_01').val();
    var nodoB_02_01 = $('#nodoB_02_01').val();
    var nodoB_03_01 = $('#nodoB_03_01').val();
    var nodoB_04_01 = $('#nodoB_04_01').val();
    var d2_01_01 = $('#d2_01_01').val(); var d2_01_02 = $('#d2_01_02').val(); var d2_01_03 = $('#d2_01_03').val(); var d2_01_04 = $('#d2_01_04').val(); var d2_01_05 = $('#d2_01_05').val(); var d2_01_06 = $('#d2_01_06').val(); var d2_01_07 = $('#d2_01_07').val(); var d2_01_08 = $('#d2_01_08').val(); var d2_01_09 = $('#d2_01_09').val(); var d2_01_10 = $('#d2_01_10').val(); var d2_01_11 = $('#d2_01_11').val(); var d2_01_12 = $('#d2_01_12').val(); var d2_01_13 = $('#d2_01_13').val();
    var d2_02_01 = $('#d2_02_01').val(); var d2_02_02 = $('#d2_02_02').val(); var d2_02_03 = $('#d2_02_03').val(); var d2_02_04 = $('#d2_02_04').val(); var d2_02_05 = $('#d2_02_05').val(); var d2_02_06 = $('#d2_02_06').val(); var d2_02_07 = $('#d2_02_07').val(); var d2_02_08 = $('#d2_02_08').val(); var d2_02_09 = $('#d2_02_09').val(); var d2_02_10 = $('#d2_02_10').val(); var d2_02_11 = $('#d2_02_11').val(); var d2_02_12 = $('#d2_02_12').val(); var d2_02_13 = $('#d2_02_13').val();
    var d2_03_01 = $('#d2_03_01').val(); var d2_03_02 = $('#d2_03_02').val(); var d2_03_03 = $('#d2_03_03').val(); var d2_03_04 = $('#d2_03_04').val(); var d2_03_05 = $('#d2_03_05').val(); var d2_03_06 = $('#d2_03_06').val(); var d2_03_07 = $('#d2_03_07').val(); var d2_03_08 = $('#d2_03_08').val(); var d2_03_09 = $('#d2_03_09').val(); var d2_03_10 = $('#d2_03_10').val(); var d2_03_11 = $('#d2_03_11').val(); var d2_03_12 = $('#d2_03_12').val(); var d2_03_13 = $('#d2_03_13').val();
    var d2_04_01 = $('#d2_04_01').val(); var d2_04_02 = $('#d2_04_02').val(); var d2_04_03 = $('#d2_04_03').val(); var d2_04_04 = $('#d2_04_04').val(); var d2_04_05 = $('#d2_04_05').val(); var d2_04_06 = $('#d2_04_06').val(); var d2_04_07 = $('#d2_04_07').val(); var d2_04_08 = $('#d2_04_08').val(); var d2_04_09 = $('#d2_04_09').val(); var d2_04_10 = $('#d2_04_10').val(); var d2_04_11 = $('#d2_04_11').val(); var d2_04_12 = $('#d2_04_12').val(); var d2_04_13 = $('#d2_04_13').val();
    var d2_05_01 = $('#d2_05_01').val(); var d2_05_02 = $('#d2_05_02').val(); var d2_05_03 = $('#d2_05_03').val(); var d2_05_04 = $('#d2_05_04').val(); var d2_05_05 = $('#d2_05_05').val(); var d2_05_06 = $('#d2_05_06').val(); var d2_05_07 = $('#d2_05_07').val(); var d2_05_08 = $('#d2_05_08').val(); var d2_05_09 = $('#d2_05_09').val(); var d2_05_10 = $('#d2_05_10').val(); var d2_05_11 = $('#d2_05_11').val(); var d2_05_12 = $('#d2_05_12').val(); var d2_05_13 = $('#d2_05_13').val();
    var d2_06_01 = $('#d2_06_01').val(); var d2_06_02 = $('#d2_06_02').val(); var d2_06_03 = $('#d2_06_03').val(); var d2_06_04 = $('#d2_06_04').val(); var d2_06_05 = $('#d2_06_05').val(); var d2_06_06 = $('#d2_06_06').val(); var d2_06_07 = $('#d2_06_07').val(); var d2_06_08 = $('#d2_06_08').val(); var d2_06_09 = $('#d2_06_09').val(); var d2_06_10 = $('#d2_06_10').val(); var d2_06_11 = $('#d2_06_11').val(); var d2_06_12 = $('#d2_06_12').val(); var d2_06_13 = $('#d2_06_13').val();
    var d2_07_01 = $('#d2_07_01').val(); var d2_07_02 = $('#d2_07_02').val(); var d2_07_03 = $('#d2_07_03').val(); var d2_07_04 = $('#d2_07_04').val(); var d2_07_05 = $('#d2_07_05').val(); var d2_07_06 = $('#d2_07_06').val(); var d2_07_07 = $('#d2_07_07').val(); var d2_07_08 = $('#d2_07_08').val(); var d2_07_09 = $('#d2_07_09').val(); var d2_07_10 = $('#d2_07_10').val(); var d2_07_11 = $('#d2_07_11').val(); var d2_07_12 = $('#d2_07_12').val(); var d2_07_13 = $('#d2_07_13').val();
    var d2_08_01 = $('#d2_08_01').val(); var d2_08_02 = $('#d2_08_02').val(); var d2_08_03 = $('#d2_08_03').val(); var d2_08_04 = $('#d2_08_04').val(); var d2_08_05 = $('#d2_08_05').val(); var d2_08_06 = $('#d2_08_06').val(); var d2_08_07 = $('#d2_08_07').val(); var d2_08_08 = $('#d2_08_08').val(); var d2_08_09 = $('#d2_08_09').val(); var d2_08_10 = $('#d2_08_10').val(); var d2_08_11 = $('#d2_08_11').val(); var d2_08_12 = $('#d2_08_12').val(); var d2_08_13 = $('#d2_08_13').val();
    var d2_09_01 = $('#d2_09_01').val(); var d2_09_02 = $('#d2_09_02').val(); var d2_09_03 = $('#d2_09_03').val(); var d2_09_04 = $('#d2_09_04').val(); var d2_09_05 = $('#d2_09_05').val(); var d2_09_06 = $('#d2_09_06').val(); var d2_09_07 = $('#d2_09_07').val(); var d2_09_08 = $('#d2_09_08').val(); var d2_09_09 = $('#d2_09_09').val(); var d2_09_10 = $('#d2_09_10').val(); var d2_09_11 = $('#d2_09_11').val(); var d2_09_12 = $('#d2_09_12').val(); var d2_09_13 = $('#d2_09_13').val();
    var d2_10_01 = $('#d2_10_01').val(); var d2_10_02 = $('#d2_10_02').val(); var d2_10_03 = $('#d2_10_03').val(); var d2_10_04 = $('#d2_10_04').val(); var d2_10_05 = $('#d2_10_05').val(); var d2_10_06 = $('#d2_10_06').val(); var d2_10_07 = $('#d2_10_07').val(); var d2_10_08 = $('#d2_10_08').val(); var d2_10_09 = $('#d2_10_09').val(); var d2_10_10 = $('#d2_10_10').val(); var d2_10_11 = $('#d2_10_11').val(); var d2_10_12 = $('#d2_10_12').val(); var d2_10_13 = $('#d2_10_13').val();
    var d2_11_01 = $('#d2_11_01').val(); var d2_11_02 = $('#d2_11_02').val(); var d2_11_03 = $('#d2_11_03').val(); var d2_11_04 = $('#d2_11_04').val(); var d2_11_05 = $('#d2_11_05').val(); var d2_11_06 = $('#d2_11_06').val(); var d2_11_07 = $('#d2_11_07').val(); var d2_11_08 = $('#d2_11_08').val(); var d2_11_09 = $('#d2_11_09').val(); var d2_11_10 = $('#d2_11_10').val(); var d2_11_11 = $('#d2_11_11').val(); var d2_11_12 = $('#d2_11_12').val(); var d2_11_13 = $('#d2_11_13').val();
    var d2_12_01 = $('#d2_12_01').val(); var d2_12_02 = $('#d2_12_02').val(); var d2_12_03 = $('#d2_12_03').val(); var d2_12_04 = $('#d2_12_04').val(); var d2_12_05 = $('#d2_12_05').val(); var d2_12_06 = $('#d2_12_06').val(); var d2_12_07 = $('#d2_12_07').val(); var d2_12_08 = $('#d2_12_08').val(); var d2_12_09 = $('#d2_12_09').val(); var d2_12_10 = $('#d2_12_10').val(); var d2_12_11 = $('#d2_12_11').val(); var d2_12_12 = $('#d2_12_12').val(); var d2_12_13 = $('#d2_12_13').val();

    var enodoB_01_01 = $('#enodoB_01_01').val();
    var enodoB_02_01 = $('#enodoB_02_01').val();
    var enodoB_03_01 = $('#enodoB_03_01').val();
    var enodoB_04_01 = $('#enodoB_04_01').val();
    var d3_01_01 = $('#d3_01_01').val(); var d3_01_02 = $('#d3_01_02').val(); var d3_01_03 = $('#d3_01_03').val(); var d3_01_04 = $('#d3_01_04').val(); var d3_01_05 = $('#d3_01_05').val(); var d3_01_06 = $('#d3_01_06').val(); var d3_01_07 = $('#d3_01_07').val(); var d3_01_08 = $('#d3_01_08').val(); var d3_01_09 = $('#d3_01_09').val(); var d3_01_10 = $('#d3_01_10').val(); var d3_01_11 = $('#d3_01_11').val(); var d3_01_12 = $('#d3_01_12').val(); var d3_01_13 = $('#d3_01_13').val();
    var d3_02_01 = $('#d3_02_01').val(); var d3_02_02 = $('#d3_02_02').val(); var d3_02_03 = $('#d3_02_03').val(); var d3_02_04 = $('#d3_02_04').val(); var d3_02_05 = $('#d3_02_05').val(); var d3_02_06 = $('#d3_02_06').val(); var d3_02_07 = $('#d3_02_07').val(); var d3_02_08 = $('#d3_02_08').val(); var d3_02_09 = $('#d3_02_09').val(); var d3_02_10 = $('#d3_02_10').val(); var d3_02_11 = $('#d3_02_11').val(); var d3_02_12 = $('#d3_02_12').val(); var d3_02_13 = $('#d3_02_13').val();
    var d3_03_01 = $('#d3_03_01').val(); var d3_03_02 = $('#d3_03_02').val(); var d3_03_03 = $('#d3_03_03').val(); var d3_03_04 = $('#d3_03_04').val(); var d3_03_05 = $('#d3_03_05').val(); var d3_03_06 = $('#d3_03_06').val(); var d3_03_07 = $('#d3_03_07').val(); var d3_03_08 = $('#d3_03_08').val(); var d3_03_09 = $('#d3_03_09').val(); var d3_03_10 = $('#d3_03_10').val(); var d3_03_11 = $('#d3_03_11').val(); var d3_03_12 = $('#d3_03_12').val(); var d3_03_13 = $('#d3_03_13').val();
    var d3_04_01 = $('#d3_04_01').val(); var d3_04_02 = $('#d3_04_02').val(); var d3_04_03 = $('#d3_04_03').val(); var d3_04_04 = $('#d3_04_04').val(); var d3_04_05 = $('#d3_04_05').val(); var d3_04_06 = $('#d3_04_06').val(); var d3_04_07 = $('#d3_04_07').val(); var d3_04_08 = $('#d3_04_08').val(); var d3_04_09 = $('#d3_04_09').val(); var d3_04_10 = $('#d3_04_10').val(); var d3_04_11 = $('#d3_04_11').val(); var d3_04_12 = $('#d3_04_12').val(); var d3_04_13 = $('#d3_04_13').val();
    var d3_05_01 = $('#d3_05_01').val(); var d3_05_02 = $('#d3_05_02').val(); var d3_05_03 = $('#d3_05_03').val(); var d3_05_04 = $('#d3_05_04').val(); var d3_05_05 = $('#d3_05_05').val(); var d3_05_06 = $('#d3_05_06').val(); var d3_05_07 = $('#d3_05_07').val(); var d3_05_08 = $('#d3_05_08').val(); var d3_05_09 = $('#d3_05_09').val(); var d3_05_10 = $('#d3_05_10').val(); var d3_05_11 = $('#d3_05_11').val(); var d3_05_12 = $('#d3_05_12').val(); var d3_05_13 = $('#d3_05_13').val();
    var d3_06_01 = $('#d3_06_01').val(); var d3_06_02 = $('#d3_06_02').val(); var d3_06_03 = $('#d3_06_03').val(); var d3_06_04 = $('#d3_06_04').val(); var d3_06_05 = $('#d3_06_05').val(); var d3_06_06 = $('#d3_06_06').val(); var d3_06_07 = $('#d3_06_07').val(); var d3_06_08 = $('#d3_06_08').val(); var d3_06_09 = $('#d3_06_09').val(); var d3_06_10 = $('#d3_06_10').val(); var d3_06_11 = $('#d3_06_11').val(); var d3_06_12 = $('#d3_06_12').val(); var d3_06_13 = $('#d3_06_13').val();
    var d3_07_01 = $('#d3_07_01').val(); var d3_07_02 = $('#d3_07_02').val(); var d3_07_03 = $('#d3_07_03').val(); var d3_07_04 = $('#d3_07_04').val(); var d3_07_05 = $('#d3_07_05').val(); var d3_07_06 = $('#d3_07_06').val(); var d3_07_07 = $('#d3_07_07').val(); var d3_07_08 = $('#d3_07_08').val(); var d3_07_09 = $('#d3_07_09').val(); var d3_07_10 = $('#d3_07_10').val(); var d3_07_11 = $('#d3_07_11').val(); var d3_07_12 = $('#d3_07_12').val(); var d3_07_13 = $('#d3_07_13').val();
    var d3_08_01 = $('#d3_08_01').val(); var d3_08_02 = $('#d3_08_02').val(); var d3_08_03 = $('#d3_08_03').val(); var d3_08_04 = $('#d3_08_04').val(); var d3_08_05 = $('#d3_08_05').val(); var d3_08_06 = $('#d3_08_06').val(); var d3_08_07 = $('#d3_08_07').val(); var d3_08_08 = $('#d3_08_08').val(); var d3_08_09 = $('#d3_08_09').val(); var d3_08_10 = $('#d3_08_10').val(); var d3_08_11 = $('#d3_08_11').val(); var d3_08_12 = $('#d3_08_12').val(); var d3_08_13 = $('#d3_08_13').val();
    var d3_09_01 = $('#d3_09_01').val(); var d3_09_02 = $('#d3_09_02').val(); var d3_09_03 = $('#d3_09_03').val(); var d3_09_04 = $('#d3_09_04').val(); var d3_09_05 = $('#d3_09_05').val(); var d3_09_06 = $('#d3_09_06').val(); var d3_09_07 = $('#d3_09_07').val(); var d3_09_08 = $('#d3_09_08').val(); var d3_09_09 = $('#d3_09_09').val(); var d3_09_10 = $('#d3_09_10').val(); var d3_09_11 = $('#d3_09_11').val(); var d3_09_12 = $('#d3_09_12').val(); var d3_09_13 = $('#d3_09_13').val();

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


    //datos.f_verificacion.f01_1 = f01_1; datos.f_verificacion.f01_2 = f01_2; datos.f_verificacion.f01_3 = f01_3;
    /**  d_relevamiento **/
    datos.d_relevamiento.d_01_01 = d_01_01; datos.d_relevamiento.d_01_02 = d_01_02;
    datos.d_relevamiento.d_02_01 = d_02_01; datos.d_relevamiento.d_02_02 = d_02_02;
    datos.d_relevamiento.d_03_01 = d_03_01; datos.d_relevamiento.d_03_02 = d_03_02;
    datos.d_relevamiento.d_04_01 = d_04_01; datos.d_relevamiento.d_04_02 = d_04_02;

    /** e_desarrollo **/
    datos.e_desarrollo.e1_01_01 = e1_01_01; datos.e_desarrollo.e1_01_02 = e1_01_02; datos.e_desarrollo.e1_01_03 = e1_01_03;
    datos.e_desarrollo.e1_02_01 = e1_02_01; datos.e_desarrollo.e1_02_02 = e1_02_02; datos.e_desarrollo.e1_02_03 = e1_02_03;
    datos.e_desarrollo.e1_03_01 = e1_03_01; datos.e_desarrollo.e1_03_02 = e1_03_02; datos.e_desarrollo.e1_03_03 = e1_03_03;
    datos.e_desarrollo.e1_04_01 = e1_04_01; datos.e_desarrollo.e1_04_02 = e1_04_02; datos.e_desarrollo.e1_04_03 = e1_04_03;
    datos.e_desarrollo.e1_05_01 = e1_05_01; datos.e_desarrollo.e1_05_02 = e1_05_02; datos.e_desarrollo.e1_05_03 = e1_05_03;
    datos.e_desarrollo.e1_06_01 = e1_06_01; datos.e_desarrollo.e1_06_02 = e1_06_02; datos.e_desarrollo.e1_06_03 = e1_06_03;
    datos.e_desarrollo.e1_07_01 = e1_07_01; datos.e_desarrollo.e1_07_02 = e1_07_02; datos.e_desarrollo.e1_07_03 = e1_07_03;
    datos.e_desarrollo.e1_08_01 = e1_08_01; datos.e_desarrollo.e1_08_02 = e1_08_02; datos.e_desarrollo.e1_08_03 = e1_08_03;
    datos.e_desarrollo.e1_09_01 = e1_09_01; datos.e_desarrollo.e1_09_02 = e1_09_02; datos.e_desarrollo.e1_09_03 = e1_09_03;
    datos.e_desarrollo.e1_10_01 = e1_10_01; datos.e_desarrollo.e1_10_02 = e1_10_02; datos.e_desarrollo.e1_10_03 = e1_10_03;
    datos.e_desarrollo.e1_11_01 = e1_11_01; datos.e_desarrollo.e1_11_02 = e1_11_02; datos.e_desarrollo.e1_11_03 = e1_11_03;
    datos.e_desarrollo.e1_12_01 = e1_12_01; datos.e_desarrollo.e1_12_02 = e1_12_02; datos.e_desarrollo.e1_12_03 = e1_12_03;
    datos.e_desarrollo.e1_13_01 = e1_13_01; datos.e_desarrollo.e1_13_02 = e1_13_02; datos.e_desarrollo.e1_13_03 = e1_13_03;
    datos.e_desarrollo.e1_14_01 = e1_14_01; datos.e_desarrollo.e1_14_02 = e1_14_02; datos.e_desarrollo.e1_14_03 = e1_14_03;
    datos.e_desarrollo.e1_15_01 = e1_15_01; datos.e_desarrollo.e1_15_02 = e1_15_02; datos.e_desarrollo.e1_15_03 = e1_15_03;
    datos.e_desarrollo.e1_16_01 = e1_16_01; datos.e_desarrollo.e1_16_02 = e1_16_02; datos.e_desarrollo.e1_16_03 = e1_16_03;

    datos.e_desarrollo.e2_17_01 = e2_17_01; datos.e_desarrollo.e2_17_02 = e2_17_02; datos.e_desarrollo.e2_17_03 = e2_17_03;
    datos.e_desarrollo.e2_18_01 = e2_18_01; datos.e_desarrollo.e2_18_02 = e2_18_02; datos.e_desarrollo.e2_18_03 = e2_18_03;
    datos.e_desarrollo.e2_19_01 = e2_19_01; datos.e_desarrollo.e2_19_02 = e2_19_02; datos.e_desarrollo.e2_19_03 = e2_19_03;

    datos.e_desarrollo.e3_01_01 = e3_01_01; datos.e_desarrollo.e3_01_02 = e3_01_02;
    datos.e_desarrollo.e3_02_01 = e3_02_01; datos.e_desarrollo.e3_02_02 = e3_02_02;
    datos.e_desarrollo.e3_03_01 = e3_03_01; datos.e_desarrollo.e3_03_02 = e3_03_02;
    datos.e_desarrollo.e3_04_01 = e3_04_01; datos.e_desarrollo.e3_04_02 = e3_04_02;
    datos.e_desarrollo.e3_05_01 = e3_05_01; datos.e_desarrollo.e3_05_02 = e3_05_02;
    datos.e_desarrollo.e3_06_01 = e3_06_01; datos.e_desarrollo.e3_06_02 = e3_06_02;
    datos.e_desarrollo.e3_07_01 = e3_07_01; datos.e_desarrollo.e3_07_02 = e3_07_02;
    datos.e_desarrollo.e3_08_01 = e3_08_01; datos.e_desarrollo.e3_08_02 = e3_08_02;
    datos.e_desarrollo.e3_09_01 = e3_09_01; datos.e_desarrollo.e3_09_02 = e3_09_02;
    datos.e_desarrollo.e3_10_01 = e3_10_01; datos.e_desarrollo.e3_10_02 = e3_10_02;
    datos.e_desarrollo.e3_11_01 = e3_11_01; datos.e_desarrollo.e3_11_02 = e3_11_02;
    datos.e_desarrollo.e3_12_01 = e3_12_01; datos.e_desarrollo.e3_12_02 = e3_12_02;

    datos.e_desarrollo.e4_01_01 = e4_01_01; datos.e_desarrollo.e4_01_02 = e4_01_02; datos.e_desarrollo.e4_01_03 = e4_01_03; datos.e_desarrollo.e4_01_04 = e4_01_04; datos.e_desarrollo.e4_01_05 = e4_01_05;
    datos.e_desarrollo.e4_02_01 = e4_02_01; datos.e_desarrollo.e4_02_02 = e4_02_02; datos.e_desarrollo.e4_02_03 = e4_02_03; datos.e_desarrollo.e4_02_04 = e4_02_04; datos.e_desarrollo.e4_02_05 = e4_02_05;
    datos.e_desarrollo.e4_03_01 = e4_03_01; datos.e_desarrollo.e4_03_02 = e4_03_02; datos.e_desarrollo.e4_03_03 = e4_03_03; datos.e_desarrollo.e4_03_04 = e4_03_04; datos.e_desarrollo.e4_03_05 = e4_03_05;
    datos.e_desarrollo.e4_04_01 = e4_04_01; datos.e_desarrollo.e4_04_02 = e4_04_02; datos.e_desarrollo.e4_04_03 = e4_04_03; datos.e_desarrollo.e4_04_04 = e4_04_04; datos.e_desarrollo.e4_04_05 = e4_04_05;
    datos.e_desarrollo.e4_05_01 = e4_05_01; datos.e_desarrollo.e4_05_02 = e4_05_02; datos.e_desarrollo.e4_05_03 = e4_05_03; datos.e_desarrollo.e4_05_04 = e4_05_04; datos.e_desarrollo.e4_05_05 = e4_05_05;
    datos.e_desarrollo.e4_06_01 = e4_06_01; datos.e_desarrollo.e4_06_02 = e4_06_02; datos.e_desarrollo.e4_06_03 = e4_06_03; datos.e_desarrollo.e4_06_04 = e4_06_04; datos.e_desarrollo.e4_06_05 = e4_06_05;

    datos.e_desarrollo.e5_01_01 = e5_01_01; datos.e_desarrollo.e5_01_02 = e5_01_02; datos.e_desarrollo.e5_01_03 = e5_01_03; datos.e_desarrollo.e5_01_04 = e5_01_04; datos.e_desarrollo.e5_01_05 = e5_01_05; datos.e_desarrollo.e5_01_06 = e5_01_06; datos.e_desarrollo.e5_01_07 = e5_01_07; datos.e_desarrollo.e5_01_08 = e5_01_08; datos.e_desarrollo.e5_01_09 = e5_01_09; datos.e_desarrollo.e5_01_10 = e5_01_10; datos.e_desarrollo.e5_01_11 = e5_01_11;
    datos.e_desarrollo.e5_02_01 = e5_02_01; datos.e_desarrollo.e5_02_02 = e5_02_02; datos.e_desarrollo.e5_02_03 = e5_02_03; datos.e_desarrollo.e5_02_04 = e5_02_04; datos.e_desarrollo.e5_02_05 = e5_02_05; datos.e_desarrollo.e5_02_06 = e5_02_06; datos.e_desarrollo.e5_02_07 = e5_02_07; datos.e_desarrollo.e5_02_08 = e5_02_08; datos.e_desarrollo.e5_02_09 = e5_02_09; datos.e_desarrollo.e5_02_10 = e5_02_10; datos.e_desarrollo.e5_02_11 = e5_02_11;
    datos.e_desarrollo.e5_03_01 = e5_03_01; datos.e_desarrollo.e5_03_02 = e5_03_02; datos.e_desarrollo.e5_03_03 = e5_03_03; datos.e_desarrollo.e5_03_04 = e5_03_04; datos.e_desarrollo.e5_03_05 = e5_03_05; datos.e_desarrollo.e5_03_06 = e5_03_06; datos.e_desarrollo.e5_03_07 = e5_03_07; datos.e_desarrollo.e5_03_08 = e5_03_08; datos.e_desarrollo.e5_03_09 = e5_03_09; datos.e_desarrollo.e5_03_10 = e5_03_10; datos.e_desarrollo.e5_03_11 = e5_03_11;

    /** d_sectores **/
    datos.d_sectores.bts_01_01 = bts_01_01;
    datos.d_sectores.bts_02_01 = bts_02_01;
    datos.d_sectores.bts_03_01 = bts_03_01;
    datos.d_sectores.bts_04_01 = bts_04_01;
    datos.d_sectores.d1_01_01 = d1_01_01; datos.d_sectores.d1_01_02 = d1_01_02; datos.d_sectores.d1_01_03 = d1_01_03; datos.d_sectores.d1_01_04 = d1_01_04; datos.d_sectores.d1_01_05 = d1_01_05; datos.d_sectores.d1_01_06 = d1_01_06; datos.d_sectores.d1_01_07 = d1_01_07; datos.d_sectores.d1_01_08 = d1_01_08; datos.d_sectores.d1_01_09 = d1_01_09; datos.d_sectores.d1_01_10 = d1_01_10; datos.d_sectores.d1_01_11 = d1_01_11; datos.d_sectores.d1_01_12 = d1_01_12; datos.d_sectores.d1_01_13 = d1_01_13;
    datos.d_sectores.d1_02_01 = d1_02_01; datos.d_sectores.d1_02_02 = d1_02_02; datos.d_sectores.d1_02_03 = d1_02_03; datos.d_sectores.d1_02_04 = d1_02_04; datos.d_sectores.d1_02_05 = d1_02_05; datos.d_sectores.d1_02_06 = d1_02_06; datos.d_sectores.d1_02_07 = d1_02_07; datos.d_sectores.d1_02_08 = d1_02_08; datos.d_sectores.d1_02_09 = d1_02_09; datos.d_sectores.d1_02_10 = d1_02_10; datos.d_sectores.d1_02_11 = d1_02_11; datos.d_sectores.d1_02_12 = d1_02_12; datos.d_sectores.d1_02_13 = d1_02_13;
    datos.d_sectores.d1_03_01 = d1_03_01; datos.d_sectores.d1_03_02 = d1_03_02; datos.d_sectores.d1_03_03 = d1_03_03; datos.d_sectores.d1_03_04 = d1_03_04; datos.d_sectores.d1_03_05 = d1_03_05; datos.d_sectores.d1_03_06 = d1_03_06; datos.d_sectores.d1_03_07 = d1_03_07; datos.d_sectores.d1_03_08 = d1_03_08; datos.d_sectores.d1_03_09 = d1_03_09; datos.d_sectores.d1_03_10 = d1_03_10; datos.d_sectores.d1_03_11 = d1_03_11; datos.d_sectores.d1_03_12 = d1_03_12; datos.d_sectores.d1_03_13 = d1_03_13;
    datos.d_sectores.d1_04_01 = d1_04_01; datos.d_sectores.d1_04_02 = d1_04_02; datos.d_sectores.d1_04_03 = d1_04_03; datos.d_sectores.d1_04_04 = d1_04_04; datos.d_sectores.d1_04_05 = d1_04_05; datos.d_sectores.d1_04_06 = d1_04_06; datos.d_sectores.d1_04_07 = d1_04_07; datos.d_sectores.d1_04_08 = d1_04_08; datos.d_sectores.d1_04_09 = d1_04_09; datos.d_sectores.d1_04_10 = d1_04_10; datos.d_sectores.d1_04_11 = d1_04_11; datos.d_sectores.d1_04_12 = d1_04_12; datos.d_sectores.d1_04_13 = d1_04_13;
    datos.d_sectores.d1_05_01 = d1_05_01; datos.d_sectores.d1_05_02 = d1_05_02; datos.d_sectores.d1_05_03 = d1_05_03; datos.d_sectores.d1_05_04 = d1_05_04; datos.d_sectores.d1_05_05 = d1_05_05; datos.d_sectores.d1_05_06 = d1_05_06; datos.d_sectores.d1_05_07 = d1_05_07; datos.d_sectores.d1_05_08 = d1_05_08; datos.d_sectores.d1_05_09 = d1_05_09; datos.d_sectores.d1_05_10 = d1_05_10; datos.d_sectores.d1_05_11 = d1_05_11; datos.d_sectores.d1_05_12 = d1_05_12; datos.d_sectores.d1_05_13 = d1_05_13;
    datos.d_sectores.d1_06_01 = d1_06_01; datos.d_sectores.d1_06_02 = d1_06_02; datos.d_sectores.d1_06_03 = d1_06_03; datos.d_sectores.d1_06_04 = d1_06_04; datos.d_sectores.d1_06_05 = d1_06_05; datos.d_sectores.d1_06_06 = d1_06_06; datos.d_sectores.d1_06_07 = d1_06_07; datos.d_sectores.d1_06_08 = d1_06_08; datos.d_sectores.d1_06_09 = d1_06_09; datos.d_sectores.d1_06_10 = d1_06_10; datos.d_sectores.d1_06_11 = d1_06_11; datos.d_sectores.d1_06_12 = d1_06_12; datos.d_sectores.d1_06_13 = d1_06_13;

    datos.d_sectores.nodoB_01_01 = nodoB_01_01;
    datos.d_sectores.nodoB_02_01 = nodoB_02_01;
    datos.d_sectores.nodoB_03_01 = nodoB_03_01;
    datos.d_sectores.nodoB_04_01 = nodoB_04_01;
    datos.d_sectores.d2_01_01 = d2_01_01; datos.d_sectores.d2_01_02 = d2_01_02; datos.d_sectores.d2_01_03 = d2_01_03; datos.d_sectores.d2_01_04 = d2_01_04; datos.d_sectores.d2_01_05 = d2_01_05; datos.d_sectores.d2_01_06 = d2_01_06; datos.d_sectores.d2_01_07 = d2_01_07; datos.d_sectores.d2_01_08 = d2_01_08; datos.d_sectores.d2_01_09 = d2_01_09; datos.d_sectores.d2_01_10 = d2_01_10; datos.d_sectores.d2_01_11 = d2_01_11; datos.d_sectores.d2_01_12 = d2_01_12; datos.d_sectores.d2_01_13 = d2_01_13;
    datos.d_sectores.d2_02_01 = d2_02_01; datos.d_sectores.d2_02_02 = d2_02_02; datos.d_sectores.d2_02_03 = d2_02_03; datos.d_sectores.d2_02_04 = d2_02_04; datos.d_sectores.d2_02_05 = d2_02_05; datos.d_sectores.d2_02_06 = d2_02_06; datos.d_sectores.d2_02_07 = d2_02_07; datos.d_sectores.d2_02_08 = d2_02_08; datos.d_sectores.d2_02_09 = d2_02_09; datos.d_sectores.d2_02_10 = d2_02_10; datos.d_sectores.d2_02_11 = d2_02_11; datos.d_sectores.d2_02_12 = d2_02_12; datos.d_sectores.d2_02_13 = d2_02_13;
    datos.d_sectores.d2_03_01 = d2_03_01; datos.d_sectores.d2_03_02 = d2_03_02; datos.d_sectores.d2_03_03 = d2_03_03; datos.d_sectores.d2_03_04 = d2_03_04; datos.d_sectores.d2_03_05 = d2_03_05; datos.d_sectores.d2_03_06 = d2_03_06; datos.d_sectores.d2_03_07 = d2_03_07; datos.d_sectores.d2_03_08 = d2_03_08; datos.d_sectores.d2_03_09 = d2_03_09; datos.d_sectores.d2_03_10 = d2_03_10; datos.d_sectores.d2_03_11 = d2_03_11; datos.d_sectores.d2_03_12 = d2_03_12; datos.d_sectores.d2_03_13 = d2_03_13;
    datos.d_sectores.d2_04_01 = d2_04_01; datos.d_sectores.d2_04_02 = d2_04_02; datos.d_sectores.d2_04_03 = d2_04_03; datos.d_sectores.d2_04_04 = d2_04_04; datos.d_sectores.d2_04_05 = d2_04_05; datos.d_sectores.d2_04_06 = d2_04_06; datos.d_sectores.d2_04_07 = d2_04_07; datos.d_sectores.d2_04_08 = d2_04_08; datos.d_sectores.d2_04_09 = d2_04_09; datos.d_sectores.d2_04_10 = d2_04_10; datos.d_sectores.d2_04_11 = d2_04_11; datos.d_sectores.d2_04_12 = d2_04_12; datos.d_sectores.d2_04_13 = d2_04_13;
    datos.d_sectores.d2_05_01 = d2_05_01; datos.d_sectores.d2_05_02 = d2_05_02; datos.d_sectores.d2_05_03 = d2_05_03; datos.d_sectores.d2_05_04 = d2_05_04; datos.d_sectores.d2_05_05 = d2_05_05; datos.d_sectores.d2_05_06 = d2_05_06; datos.d_sectores.d2_05_07 = d2_05_07; datos.d_sectores.d2_05_08 = d2_05_08; datos.d_sectores.d2_05_09 = d2_05_09; datos.d_sectores.d2_05_10 = d2_05_10; datos.d_sectores.d2_05_11 = d2_05_11; datos.d_sectores.d2_05_12 = d2_05_12; datos.d_sectores.d2_05_13 = d2_05_13;
    datos.d_sectores.d2_06_01 = d2_06_01; datos.d_sectores.d2_06_02 = d2_06_02; datos.d_sectores.d2_06_03 = d2_06_03; datos.d_sectores.d2_06_04 = d2_06_04; datos.d_sectores.d2_06_05 = d2_06_05; datos.d_sectores.d2_06_06 = d2_06_06; datos.d_sectores.d2_06_07 = d2_06_07; datos.d_sectores.d2_06_08 = d2_06_08; datos.d_sectores.d2_06_09 = d2_06_09; datos.d_sectores.d2_06_10 = d2_06_10; datos.d_sectores.d2_06_11 = d2_06_11; datos.d_sectores.d2_06_12 = d2_06_12; datos.d_sectores.d2_06_13 = d2_06_13;
    datos.d_sectores.d2_07_01 = d2_07_01; datos.d_sectores.d2_07_02 = d2_07_02; datos.d_sectores.d2_07_03 = d2_07_03; datos.d_sectores.d2_07_04 = d2_07_04; datos.d_sectores.d2_07_05 = d2_07_05; datos.d_sectores.d2_07_06 = d2_07_06; datos.d_sectores.d2_07_07 = d2_07_07; datos.d_sectores.d2_07_08 = d2_07_08; datos.d_sectores.d2_07_09 = d2_07_09; datos.d_sectores.d2_07_10 = d2_07_10; datos.d_sectores.d2_07_11 = d2_07_11; datos.d_sectores.d2_07_12 = d2_07_12; datos.d_sectores.d2_07_13 = d2_07_13;
    datos.d_sectores.d2_08_01 = d2_08_01; datos.d_sectores.d2_08_02 = d2_08_02; datos.d_sectores.d2_08_03 = d2_08_03; datos.d_sectores.d2_08_04 = d2_08_04; datos.d_sectores.d2_08_05 = d2_08_05; datos.d_sectores.d2_08_06 = d2_08_06; datos.d_sectores.d2_08_07 = d2_08_07; datos.d_sectores.d2_08_08 = d2_08_08; datos.d_sectores.d2_08_09 = d2_08_09; datos.d_sectores.d2_08_10 = d2_08_10; datos.d_sectores.d2_08_11 = d2_08_11; datos.d_sectores.d2_08_12 = d2_08_12; datos.d_sectores.d2_08_13 = d2_08_13;
    datos.d_sectores.d2_09_01 = d2_09_01; datos.d_sectores.d2_09_02 = d2_09_02; datos.d_sectores.d2_09_03 = d2_09_03; datos.d_sectores.d2_09_04 = d2_09_04; datos.d_sectores.d2_09_05 = d2_09_05; datos.d_sectores.d2_09_06 = d2_09_06; datos.d_sectores.d2_09_07 = d2_09_07; datos.d_sectores.d2_09_08 = d2_09_08; datos.d_sectores.d2_09_09 = d2_09_09; datos.d_sectores.d2_09_10 = d2_09_10; datos.d_sectores.d2_09_11 = d2_09_11; datos.d_sectores.d2_09_12 = d2_09_12; datos.d_sectores.d2_09_13 = d2_09_13;
    datos.d_sectores.d2_10_01 = d2_10_01; datos.d_sectores.d2_10_02 = d2_10_02; datos.d_sectores.d2_10_03 = d2_10_03; datos.d_sectores.d2_10_04 = d2_10_04; datos.d_sectores.d2_10_05 = d2_10_05; datos.d_sectores.d2_10_06 = d2_10_06; datos.d_sectores.d2_10_07 = d2_10_07; datos.d_sectores.d2_10_08 = d2_10_08; datos.d_sectores.d2_10_09 = d2_10_09; datos.d_sectores.d2_10_10 = d2_10_10; datos.d_sectores.d2_10_11 = d2_10_11; datos.d_sectores.d2_10_12 = d2_10_12; datos.d_sectores.d2_10_13 = d2_10_13;
    datos.d_sectores.d2_11_01 = d2_11_01; datos.d_sectores.d2_11_02 = d2_11_02; datos.d_sectores.d2_11_03 = d2_11_03; datos.d_sectores.d2_11_04 = d2_11_04; datos.d_sectores.d2_11_05 = d2_11_05; datos.d_sectores.d2_11_06 = d2_11_06; datos.d_sectores.d2_11_07 = d2_11_07; datos.d_sectores.d2_11_08 = d2_11_08; datos.d_sectores.d2_11_09 = d2_11_09; datos.d_sectores.d2_11_10 = d2_11_10; datos.d_sectores.d2_11_11 = d2_11_11; datos.d_sectores.d2_11_12 = d2_11_12; datos.d_sectores.d2_11_13 = d2_11_13;
    datos.d_sectores.d2_12_01 = d2_12_01; datos.d_sectores.d2_12_02 = d2_12_02; datos.d_sectores.d2_12_03 = d2_12_03; datos.d_sectores.d2_12_04 = d2_12_04; datos.d_sectores.d2_12_05 = d2_12_05; datos.d_sectores.d2_12_06 = d2_12_06; datos.d_sectores.d2_12_07 = d2_12_07; datos.d_sectores.d2_12_08 = d2_12_08; datos.d_sectores.d2_12_09 = d2_12_09; datos.d_sectores.d2_12_10 = d2_12_10; datos.d_sectores.d2_12_11 = d2_12_11; datos.d_sectores.d2_12_12 = d2_12_12; datos.d_sectores.d2_12_13 = d2_12_13;

    datos.d_sectores.enodoB_01_01 = enodoB_01_01;
    datos.d_sectores.enodoB_02_01 = enodoB_02_01;
    datos.d_sectores.enodoB_03_01 = enodoB_03_01;
    datos.d_sectores.enodoB_04_01 = enodoB_04_01;
    datos.d_sectores.d3_01_01 = d3_01_01; datos.d_sectores.d3_01_02 = d3_01_02; datos.d_sectores.d3_01_03 = d3_01_03; datos.d_sectores.d3_01_04 = d3_01_04; datos.d_sectores.d3_01_05 = d3_01_05; datos.d_sectores.d3_01_06 = d3_01_06; datos.d_sectores.d3_01_07 = d3_01_07; datos.d_sectores.d3_01_08 = d3_01_08; datos.d_sectores.d3_01_09 = d3_01_09; datos.d_sectores.d3_01_10 = d3_01_10; datos.d_sectores.d3_01_11 = d3_01_11; datos.d_sectores.d3_01_12 = d3_01_12; datos.d_sectores.d3_01_13 = d3_01_13;
    datos.d_sectores.d3_02_01 = d3_02_01; datos.d_sectores.d3_02_02 = d3_02_02; datos.d_sectores.d3_02_03 = d3_02_03; datos.d_sectores.d3_02_04 = d3_02_04; datos.d_sectores.d3_02_05 = d3_02_05; datos.d_sectores.d3_02_06 = d3_02_06; datos.d_sectores.d3_02_07 = d3_02_07; datos.d_sectores.d3_02_08 = d3_02_08; datos.d_sectores.d3_02_09 = d3_02_09; datos.d_sectores.d3_02_10 = d3_02_10; datos.d_sectores.d3_02_11 = d3_02_11; datos.d_sectores.d3_02_12 = d3_02_12; datos.d_sectores.d3_02_13 = d3_02_13;
    datos.d_sectores.d3_03_01 = d3_03_01; datos.d_sectores.d3_03_02 = d3_03_02; datos.d_sectores.d3_03_03 = d3_03_03; datos.d_sectores.d3_03_04 = d3_03_04; datos.d_sectores.d3_03_05 = d3_03_05; datos.d_sectores.d3_03_06 = d3_03_06; datos.d_sectores.d3_03_07 = d3_03_07; datos.d_sectores.d3_03_08 = d3_03_08; datos.d_sectores.d3_03_09 = d3_03_09; datos.d_sectores.d3_03_10 = d3_03_10; datos.d_sectores.d3_03_11 = d3_03_11; datos.d_sectores.d3_03_12 = d3_03_12; datos.d_sectores.d3_03_13 = d3_03_13;
    datos.d_sectores.d3_04_01 = d3_04_01; datos.d_sectores.d3_04_02 = d3_04_02; datos.d_sectores.d3_04_03 = d3_04_03; datos.d_sectores.d3_04_04 = d3_04_04; datos.d_sectores.d3_04_05 = d3_04_05; datos.d_sectores.d3_04_06 = d3_04_06; datos.d_sectores.d3_04_07 = d3_04_07; datos.d_sectores.d3_04_08 = d3_04_08; datos.d_sectores.d3_04_09 = d3_04_09; datos.d_sectores.d3_04_10 = d3_04_10; datos.d_sectores.d3_04_11 = d3_04_11; datos.d_sectores.d3_04_12 = d3_04_12; datos.d_sectores.d3_04_13 = d3_04_13;
    datos.d_sectores.d3_05_01 = d3_05_01; datos.d_sectores.d3_05_02 = d3_05_02; datos.d_sectores.d3_05_03 = d3_05_03; datos.d_sectores.d3_05_04 = d3_05_04; datos.d_sectores.d3_05_05 = d3_05_05; datos.d_sectores.d3_05_06 = d3_05_06; datos.d_sectores.d3_05_07 = d3_05_07; datos.d_sectores.d3_05_08 = d3_05_08; datos.d_sectores.d3_05_09 = d3_05_09; datos.d_sectores.d3_05_10 = d3_05_10; datos.d_sectores.d3_05_11 = d3_05_11; datos.d_sectores.d3_05_12 = d3_05_12; datos.d_sectores.d3_05_13 = d3_05_13;
    datos.d_sectores.d3_06_01 = d3_06_01; datos.d_sectores.d3_06_02 = d3_06_02; datos.d_sectores.d3_06_03 = d3_06_03; datos.d_sectores.d3_06_04 = d3_06_04; datos.d_sectores.d3_06_05 = d3_06_05; datos.d_sectores.d3_06_06 = d3_06_06; datos.d_sectores.d3_06_07 = d3_06_07; datos.d_sectores.d3_06_08 = d3_06_08; datos.d_sectores.d3_06_09 = d3_06_09; datos.d_sectores.d3_06_10 = d3_06_10; datos.d_sectores.d3_06_11 = d3_06_11; datos.d_sectores.d3_06_12 = d3_06_12; datos.d_sectores.d3_06_13 = d3_06_13;
    datos.d_sectores.d3_07_01 = d3_07_01; datos.d_sectores.d3_07_02 = d3_07_02; datos.d_sectores.d3_07_03 = d3_07_03; datos.d_sectores.d3_07_04 = d3_07_04; datos.d_sectores.d3_07_05 = d3_07_05; datos.d_sectores.d3_07_06 = d3_07_06; datos.d_sectores.d3_07_07 = d3_07_07; datos.d_sectores.d3_07_08 = d3_07_08; datos.d_sectores.d3_07_09 = d3_07_09; datos.d_sectores.d3_07_10 = d3_07_10; datos.d_sectores.d3_07_11 = d3_07_11; datos.d_sectores.d3_07_12 = d3_07_12; datos.d_sectores.d3_07_13 = d3_07_13;
    datos.d_sectores.d3_08_01 = d3_08_01; datos.d_sectores.d3_08_02 = d3_08_02; datos.d_sectores.d3_08_03 = d3_08_03; datos.d_sectores.d3_08_04 = d3_08_04; datos.d_sectores.d3_08_05 = d3_08_05; datos.d_sectores.d3_08_06 = d3_08_06; datos.d_sectores.d3_08_07 = d3_08_07; datos.d_sectores.d3_08_08 = d3_08_08; datos.d_sectores.d3_08_09 = d3_08_09; datos.d_sectores.d3_08_10 = d3_08_10; datos.d_sectores.d3_08_11 = d3_08_11; datos.d_sectores.d3_08_12 = d3_08_12; datos.d_sectores.d3_08_13 = d3_08_13;
    datos.d_sectores.d3_09_01 = d3_09_01; datos.d_sectores.d3_09_02 = d3_09_02; datos.d_sectores.d3_09_03 = d3_09_03; datos.d_sectores.d3_09_04 = d3_09_04; datos.d_sectores.d3_09_05 = d3_09_05; datos.d_sectores.d3_09_06 = d3_09_06; datos.d_sectores.d3_09_07 = d3_09_07; datos.d_sectores.d3_09_08 = d3_09_08; datos.d_sectores.d3_09_09 = d3_09_09; datos.d_sectores.d3_09_10 = d3_09_10; datos.d_sectores.d3_09_11 = d3_09_11; datos.d_sectores.d3_09_12 = d3_09_12; datos.d_sectores.d3_09_13 = d3_09_13;

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
