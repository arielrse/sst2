async function getDatos() {
    const res = await fetch("../../paquetes/catastro/data/catastro008.json");
    const datosFetch = await res.json();
    return datosFetch;
}


$(document).ready(function() {
    $('#botonHead, #botonF, #botonFooter').click(function(){
        alert("boton Guardar");

var idcatastro          = $('#catastroId').val();
var codigoForm          = $('#codigoForm').val();

var cm                  = $('#cm').val();
var sitioId             = $('#sitioId').val();
var propertyId          = $('#propertyId').val();
var c_fechaRealizacion  = $('#c_fechaRealizacion').val();
var e_personal          = $('#e_personal').val();

var indoor_outdoor      = $('#indoor_outdoor').val();
var cod_activo          = $('#cod_activo').val();
var cod_fijo            = $('#cod_fijo').val();
var cod_complemento     = $('#cod_complemento').val();

var reca1               = $('#reca1').val();
var reca2               = $('#reca2').val();
var recb1               = $('#recb1').val();
var recb2               = $('#recb2').val();
var upsa1               = $('#upsa1').val();
var upsa2               = $('#upsa2').val();
var upsb1               = $('#upsb1').val();
var upsb2               = $('#upsb2').val();
var ups_fuente_a        = $('#ups_fuente_a').val();
var ups_fuente_b        = $('#ups_fuente_b').val();
var rec_fuente_a        = $('#rec_fuente_a').val();
var rec_fuente_b        = $('#rec_fuente_b').val();
//var d01_01 = $('#d01_01').val();
var d01_01 = $('#d01_01').val();
var d02_01 = $('#d02_01').val();
var d03_01 = $('#d03_01').val();
var d04_01 = $('#d04_01').val(); var d04_02 = $('#d04_02').val();
var d05_01 = $('#d05_01').val(); var d05_02 = $('#d05_02').val();
var d06_01 = $('#d06_01').val(); var d06_02 = $('#d06_02').val();
var d07_01 = $('#d07_01').val();
var d08_01 = $('#d08_01').val(); var d08_02 = $('#d08_02').val(); var d08_03 = $('#d08_03').val();
var d09_01 = $('#d09_01').val();
var d10_01 = $('#d10_01').val();
var d11_01 = $('#d11_01').val();
var d12_01 = $('#d12_01').val();
var d13_01 = $('#d13_01').val();
var d14_01 = $('#d14_01').val();


var observaciones = $('#observaciones').val();

getDatos().then( (datos) => {

datos.cm                 = cm;
datos.sitioId            = sitioId;
datos.propertyId         = propertyId;
datos.c_fechaRealizacion = c_fechaRealizacion;
datos.e_personal         = e_personal;
datos.indoor_outdoor     = indoor_outdoor;
datos.cod_fijo           = cod_fijo;
datos.cod_activo         = cod_activo;
datos.cod_complemento    = cod_complemento;
datos.observaciones      = observaciones;
datos.reca1              = reca1;
datos.reca2              = reca2;
datos.recb1              = recb1;
datos.recb2              = recb2;
datos.upsa1              = upsa1;
datos.upsa2              = upsa2;
datos.upsb1              = upsb1;
datos.upsb2              = upsb2;
datos.ups_fuente_a       = ups_fuente_a;
datos.ups_fuente_b       = ups_fuente_b;
datos.rec_fuente_a       = rec_fuente_a;
datos.rec_fuente_b       = rec_fuente_b;



    /** desarrollo_d **/
datos.desarrollo_d.d01_01 = d01_01;
datos.desarrollo_d.d02_01 = d02_01;
datos.desarrollo_d.d03_01 = d03_01;
datos.desarrollo_d.d04_01 = d04_01; datos.desarrollo_d.d04_02 = d04_02;
datos.desarrollo_d.d05_01 = d05_01; datos.desarrollo_d.d05_02 = d05_02;
datos.desarrollo_d.d06_01 = d06_01; datos.desarrollo_d.d06_02 = d06_02;
datos.desarrollo_d.d07_01 = d07_01;
datos.desarrollo_d.d08_01 = d08_01; datos.desarrollo_d.d08_02 = d08_02; datos.desarrollo_d.d08_03 = d08_03;
datos.desarrollo_d.d09_01 = d09_01;
datos.desarrollo_d.d10_01 = d10_01;
datos.desarrollo_d.d11_01 = d11_01;
datos.desarrollo_d.d12_01 = d12_01;
datos.desarrollo_d.d13_01 = d13_01;
datos.desarrollo_d.d14_01 = d14_01;

                jQuery.post("../../paquetes/catastro/update_catastro.php", {
                    idcatastro: idcatastro,
                    codigoForm: codigoForm,
                    jsonData: JSON.stringify( datos )
                    }, function(data, textStatus){
                        //$("#table-routine").load(window.location + " #table-routine");
                    }
                );

            })

    });
});