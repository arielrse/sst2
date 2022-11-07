async function getDatos() {
    const res = await fetch("../../paquetes/catastro/data/catastro011.json");
    const datosFetch = await res.json();
    return datosFetch;
}


$(document).ready(function() {
    $('#botonHead, #botonF, #botonFooter').click(function(){
        alert("Guardando...");

var idcatastro          = $('#idcatastro').val();
var codigoForm          = $('#codigoForm').val();

var cm                  = $('#cm').val();
var sitioId             = $('#sitioId').val();
var propertyId          = $('#propertyId').val();
var c_fechaRealizacion  = $('#c_fechaRealizacion').val();
var e_personal          = $('#e_personal').val();

var observaciones1 = $('#observaciones1').val();
var observaciones2 = $('#observaciones2').val();
var observaciones3 = $('#observaciones3').val();
var observaciones  = $('#observaciones').val();
var pendientes     = $('#pendientes').val();


getDatos().then( (datos) => {

        datos.cm                 = cm;
        datos.sitioId            = sitioId;
        datos.propertyId         = propertyId;
        datos.c_fechaRealizacion = c_fechaRealizacion;
        datos.e_personal         = e_personal;

        datos.observaciones1  = observaciones1;
        datos.observaciones2  = observaciones2;
        datos.observaciones3  = observaciones3;
        datos.observaciones   = observaciones;
        datos.pendientes      = pendientes;


            jQuery.post("../../paquetes/catastro/update_catastro.php", {
                idcatastro: idcatastro,
                codigoForm: codigoForm,
                jsonData: JSON.stringify( datos )
                }, function(data, textStatus){

                }
            );

        })

    });
});