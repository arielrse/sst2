async function getDatos() {
    const res = await fetch("../../paquetes/rutina/data/rutina001.json");
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
var d_horainicio        = $('#d_horainicio').val();
var d_horafin           = $('#d_horafin').val();
var d_transcurrido      = "";
var c_fechaRealizacion  = $('#c_fechaRealizacion').val();
var e_personal          = $('#e_personal').val();


getDatos().then( (datos) => {

datos.cm                 = cm;
datos.sitioId            = sitioId;
datos.propertyId         = propertyId;
datos.d_horainicio       = d_horainicio;
datos.d_horafin          = d_horafin;
datos.d_transcurrido     = d_transcurrido;
datos.c_fechaRealizacion = c_fechaRealizacion;
datos.e_personal         = e_personal;


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