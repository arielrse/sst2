<?php
require("../../../funciones/DateUtils.php");
require("../ReporteMtoUtils.php");
require("variable_text.php");

function getPlantilla($conexion, $jsonData, $idgrupo){

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $titulo = 'RUTINA DE MANTENIMIENTO PREVENTIVO - BANCO DE BATERÍAS';
    $cabecera        = getCabecera($conexion, $jsonData, $idgrupo, $titulo, true);
    $footerPlantilla = getFooter($jsonData);


    /** f_verificacion **/
    $f_verificacion = $obj->{'f_verificacion'};
    $f01_1 = $f_verificacion[0]->f01_1 ? $check : $uncheck;
    $f01_2 = $f_verificacion[0]->f01_2 ? $check : $uncheck;

    $plantilla =
'<body>
    <div class="card-">
        <div class="card-body-">
            <div id="invoice">
                <div class="invoice">
                
                '. $cabecera .'
                                                
                <main>
                    <div class="notices">
                        <div class="notice"><strong>F. Verificación Visual - Estado del Activo</strong></div>
                    </div>
                </main>
               
              
               
                '. $footerPlantilla .'
                </div>
            </div>
        </div>
	</div>
</body>
';

    return $plantilla;
}


?>