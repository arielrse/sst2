<?php

require("../../funciones/funciones.php");

$idsitio = $_POST["sitio"];
$idcentro = $_POST["idcentro"];
$idgrupo = $_POST["idgrupo"];
$fechainicio = $_POST["fechainicio"];
$fechafin = $_POST["fechafin"];
$param_volver = $_POST["param_volver"];
$copiar = isset( $_POST["copiar"] ) ? $_POST["copiar"] : 0;

$selectIdevento = isset( $_POST["ideventoSelect"] ) ? $_POST["ideventoSelect"] : 0;

$consulta="INSERT INTO evento SET 
idgrupo='".$idgrupo."',        
titulo='MTTO PREVENTIVO',
inicio='".$fechainicio."',
fin='".$fechafin."',
rep=0,
estado='PEN',
idcentro='".$idcentro."',
idsitio='".$idsitio."'";

$resultado=mysqli_query($conexion, $consulta);
$newIdevento = mysqli_insert_id($conexion);

if ( $copiar )
    copyData($conexion, $idsitio, $selectIdevento, $newIdevento);

if($resultado) {
	header("Location: ".$link_modulo."?path=cronograma_cm.php$param_volver");
}
else
    echo "<b>Ocurrio un error, revise bien la informacion insertada!</b><br>Notifique de este error al administrador del Sistema: ".mysqli_error($conexion).
         "<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";



function copyData($conexion, $idsitio, $selectIdevento, $newIdevento){

    copyDataRutina($conexion, $selectIdevento, $newIdevento);
    copyDataCatastro($conexion, $selectIdevento, $newIdevento);

}

function copyDataRutina($conexion, $selectIdevento, $newIdevento){

    /** Rutinas del evento encontrado **/
    $resultado = mysqli_query($conexion, "SELECT * FROM rutina r WHERE r.`idevento` = " . $selectIdevento);

    while($dato=mysqli_fetch_array($resultado)){
        $idrutina = $dato['idrutina'];

        $idformulario = $dato['idformulario'];

        $query = "insert into rutina(idformulario, idevento, estado) values ($idformulario, $newIdevento, 'PEN')";
        $res = mysqli_query($conexion, $query);
        $resIdrutina = mysqli_insert_id($conexion);


        $result = mysqli_query($conexion, "SELECT * FROM formulario WHERE idformulario =  " . $dato['idformulario']);
        $datoForm = mysqli_fetch_array($result);
        $codigoForm = $datoForm['codigo'];


        $resultR = mysqli_query($conexion, "SELECT * FROM rutina".$codigoForm." where idrutina = " . $idrutina);
        $datoR = mysqli_fetch_array($resultR);

        if ( $codigoForm == "015" ){
            $table_e1 = "'".$datoR['table_e1']."'";
            $table_e2 = "'".$datoR['table_e2']."'";
            $table_e3 = "'".$datoR['table_e3']."'";
            $table_e4 = "'".$datoR['table_e4']."'";

            $queryInsert = "insert into rutina$codigoForm(idevento, idrutina, cabecera, table_e1, table_e2, table_e3, table_e4) 
                            values ($newIdevento, $resIdrutina, '". $datoR['cabecera'] ."', $table_e1, $table_e2, $table_e3, $table_e4)";
            $result = mysqli_query($conexion, $queryInsert);
        }

        if ( $codigoForm == "016" ){
            $tabla_1 = "'".$datoR['tabla_1']."'";
            $tabla_2 = "'".$datoR['tabla_2']."'";
            $tabla_3 = "'".$datoR['tabla_3']."'";
            $tabla_4 = "'".$datoR['tabla_4']."'";

            $queryInsert = "insert into rutina$codigoForm(idevento, idrutina, cabecera, tabla_1, tabla_2, tabla_3, tabla_4) 
                            values ($newIdevento, $resIdrutina, '". $datoR['cabecera'] ."', $tabla_1, $tabla_2, $tabla_3, $tabla_4)";
            $result = mysqli_query($conexion, $queryInsert);
        }

        if ( $codigoForm != "015" && $codigoForm != "016" ) {
            $queryInsert = "insert into rutina$codigoForm(idevento, idrutina, cabecera) values ($newIdevento, $resIdrutina, '" . $datoR['cabecera'] . "')";
            $result = mysqli_query($conexion, $queryInsert);
        }
    }

}

function copyDataCatastro($conexion, $selectIdevento, $newIdevento){

    /** Catastros del evento encontrado **/
    $resultado = mysqli_query($conexion, "SELECT * FROM catastro c WHERE c.`idevento` = " . $selectIdevento);

    while( $dato=mysqli_fetch_array($resultado) ){

        $idcatastro   = $dato['idcatastro'];
        $idformulario = $dato['idformulario'];

        $query = "insert into catastro(idformulario, idevento, estado) values ($idformulario, $newIdevento, 'PEN')";
        $res = mysqli_query($conexion, $query);
        $resIdcatastro = mysqli_insert_id($conexion);


        $result = mysqli_query($conexion, "SELECT * FROM formulario WHERE idformulario =  " . $idformulario);
        $datoForm = mysqli_fetch_array($result);
        $codigoForm = $datoForm['codigo'];


        $resultR = mysqli_query($conexion, "SELECT * FROM catastro".$codigoForm." where idcatastro = " . $idcatastro);
        $datoR   = mysqli_fetch_array($resultR);
        $data    = "'" . $datoR['data'] . "'";

        if ( $codigoForm == "011" ) {
            $tabla_1 = "'" . $datoR['tabla_1'] . "'";
            $tabla_2 = "'" . $datoR['tabla_2'] . "'";
            $tabla_3 = "'" . $datoR['tabla_3'] . "'";

            $queryInsert = "insert into catastro$codigoForm (idcatastro, idevento, data, tabla_1, tabla_2, tabla_3)  
                            values ($resIdcatastro, $newIdevento, $data, $tabla_1, $tabla_2, $tabla_3)";
            $result = mysqli_query($conexion, $queryInsert);

        }

        if ( $codigoForm != "011" ) {
            $queryInsert = "insert into catastro$codigoForm (idcatastro, idevento, data) values ($resIdcatastro, $newIdevento, $data)";
            $result = mysqli_query($conexion, $queryInsert);
        }

    }

}

?>

