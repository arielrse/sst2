<?php

function getJsonData_rutinaArr($conexion, $idrutinax, $cform){
    $res3 = mysqli_query($conexion, "SELECT r.id, r.cabecera, ru.idformulario
                                        FROM rutina$cform r
                                        LEFT JOIN rutina ru ON r.idrutina = ru.idrutina
                                        WHERE r.id = ".$idrutinax);
    $data3 = mysqli_fetch_array($res3);

    return [$data3['idformulario'], $data3['cabecera']];
}

function getTitulosRutinas($conexion, $idformulario){
    $res  = mysqli_query($conexion, "SELECT f.titulo0, f.titulo1, f.titulo2, f.titulo3 FROM formulario f WHERE f.idformulario = ".$idformulario);
    $data = mysqli_fetch_array($res );
    $titulosArr = [ $data['titulo0'], $data['titulo1'], $data['titulo2'], $data['titulo3'] ];
    return $titulosArr;
}

function getNombreArchivoReporte($jsonData, $titulo0){
    $obj   = json_decode($jsonData);
    $fecha = $obj->c_fechaRealizacion;
    $propertyId = $obj->propertyId;

    return $fecha . " " . $titulo0 . " " . $propertyId;
}

function getJsonData_fibra_r15($conexion, $idrutinax){

    $res3 = mysqli_query($conexion, "SELECT r.id, r.table_e1, r.table_e2, r.table_e3, r.table_e4
                                        FROM rutina015 r
                                        WHERE r.id = ".$idrutinax);
    $data3 = mysqli_fetch_array($res3);

    return [ $data3['table_e1'], $data3['table_e2'], $data3['table_e3'], $data3['table_e4'] ];
}

/** Para Catastros **/
function getJsonData_catastroArr($conexion, $idcatastrox, $cform){
    $res3 = mysqli_query($conexion, "SELECT c.id, c.data, ca.idformulario
                                        FROM catastro$cform c
                                        LEFT JOIN catastro ca ON c.idcatastro = ca.idcatastro
                                        WHERE c.id = ".$idcatastrox);
    $data3 = mysqli_fetch_array($res3);

    return [$data3['idformulario'], $data3['data']];
}

?>
