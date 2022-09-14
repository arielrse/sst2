<?php
require("../../../funciones/DateUtils.php");
require("../ReporteMtoUtils.php");
require("variable_text.php");

function getPlantilla($conexion, $jsonData, $idgrupo){

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $titulo = 'RUTINA DE MANTENIMIENTO PREVENTIVO - RADIO BASES';
    $cabecera        = getCabecera($conexion, $jsonData, $idgrupo, $titulo, false);
    $footerPlantilla = getFooter($jsonData);
    //---------------------------
    $d_relevamiento = $obj->{'d_relevamiento'};

    $d_01_01 = $d_relevamiento->d_01_01; $d_01_02 = $d_relevamiento->d_01_02;
    $d_02_01 = $d_relevamiento->d_02_01; $d_02_02 = $d_relevamiento->d_02_02;
    $d_03_01 = $d_relevamiento->d_03_01; $d_03_02 = $d_relevamiento->d_03_02;
    $d_04_01 = $d_relevamiento->d_04_01; $d_04_02 = $d_relevamiento->d_04_02;

    $d_sectores = $obj->{'d_sectores'};

    $bts_01_01 = $d_sectores->bts_01_01;
    $bts_02_01 = $d_sectores->bts_02_01;
    $bts_03_01 = $d_sectores->bts_03_01;
    $bts_04_01 = $d_sectores->bts_04_01;
    $d1_01_01 = $d_sectores->d1_01_01; $d1_01_02 = $d_sectores->d1_01_02; $d1_01_03 = $d_sectores->d1_01_03; $d1_01_04 = $d_sectores->d1_01_04; $d1_01_05 = $d_sectores->d1_01_05; $d1_01_06 = $d_sectores->d1_01_06; $d1_01_07 = $d_sectores->d1_01_07; $d1_01_08 = $d_sectores->d1_01_08; $d1_01_09 = $d_sectores->d1_01_09; $d1_01_10 = $d_sectores->d1_01_10; $d1_01_11 = $d_sectores->d1_01_11; $d1_01_12 = $d_sectores->d1_01_12; $d1_01_13 = $d_sectores->d1_01_13;
    $d1_02_01 = $d_sectores->d1_02_01; $d1_02_02 = $d_sectores->d1_02_02; $d1_02_03 = $d_sectores->d1_02_03; $d1_02_04 = $d_sectores->d1_02_04; $d1_02_05 = $d_sectores->d1_02_05; $d1_02_06 = $d_sectores->d1_02_06; $d1_02_07 = $d_sectores->d1_02_07; $d1_02_08 = $d_sectores->d1_02_08; $d1_02_09 = $d_sectores->d1_02_09; $d1_02_10 = $d_sectores->d1_02_10; $d1_02_11 = $d_sectores->d1_02_11; $d1_02_12 = $d_sectores->d1_02_12; $d1_02_13 = $d_sectores->d1_02_13;
    $d1_03_01 = $d_sectores->d1_03_01; $d1_03_02 = $d_sectores->d1_03_02; $d1_03_03 = $d_sectores->d1_03_03; $d1_03_04 = $d_sectores->d1_03_04; $d1_03_05 = $d_sectores->d1_03_05; $d1_03_06 = $d_sectores->d1_03_06; $d1_03_07 = $d_sectores->d1_03_07; $d1_03_08 = $d_sectores->d1_03_08; $d1_03_09 = $d_sectores->d1_03_09; $d1_03_10 = $d_sectores->d1_03_10; $d1_03_11 = $d_sectores->d1_03_11; $d1_03_12 = $d_sectores->d1_03_12; $d1_03_13 = $d_sectores->d1_03_13;
    $d1_04_01 = $d_sectores->d1_04_01; $d1_04_02 = $d_sectores->d1_04_02; $d1_04_03 = $d_sectores->d1_04_03; $d1_04_04 = $d_sectores->d1_04_04; $d1_04_05 = $d_sectores->d1_04_05; $d1_04_06 = $d_sectores->d1_04_06; $d1_04_07 = $d_sectores->d1_04_07; $d1_04_08 = $d_sectores->d1_04_08; $d1_04_09 = $d_sectores->d1_04_09; $d1_04_10 = $d_sectores->d1_04_10; $d1_04_11 = $d_sectores->d1_04_11; $d1_04_12 = $d_sectores->d1_04_12; $d1_04_13 = $d_sectores->d1_04_13;
    $d1_05_01 = $d_sectores->d1_05_01; $d1_05_02 = $d_sectores->d1_05_02; $d1_05_03 = $d_sectores->d1_05_03; $d1_05_04 = $d_sectores->d1_05_04; $d1_05_05 = $d_sectores->d1_05_05; $d1_05_06 = $d_sectores->d1_05_06; $d1_05_07 = $d_sectores->d1_05_07; $d1_05_08 = $d_sectores->d1_05_08; $d1_05_09 = $d_sectores->d1_05_09; $d1_05_10 = $d_sectores->d1_05_10; $d1_05_11 = $d_sectores->d1_05_11; $d1_05_12 = $d_sectores->d1_05_12; $d1_05_13 = $d_sectores->d1_05_13;
    $d1_06_01 = $d_sectores->d1_06_01; $d1_06_02 = $d_sectores->d1_06_02; $d1_06_03 = $d_sectores->d1_06_03; $d1_06_04 = $d_sectores->d1_06_04; $d1_06_05 = $d_sectores->d1_06_05; $d1_06_06 = $d_sectores->d1_06_06; $d1_06_07 = $d_sectores->d1_06_07; $d1_06_08 = $d_sectores->d1_06_08; $d1_06_09 = $d_sectores->d1_06_09; $d1_06_10 = $d_sectores->d1_06_10; $d1_06_11 = $d_sectores->d1_06_11; $d1_06_12 = $d_sectores->d1_06_12; $d1_06_13 = $d_sectores->d1_06_13;

    $d_sectores = $obj->{'d_sectores'};

    $nodoB_01_01 = $d_sectores->nodoB_01_01;
    $nodoB_02_01 = $d_sectores->nodoB_02_01;
    $nodoB_03_01 = $d_sectores->nodoB_03_01;
    $nodoB_04_01 = $d_sectores->nodoB_04_01;
    $d2_01_01 = $d_sectores->d2_01_01; $d2_01_02 = $d_sectores->d2_01_02; $d2_01_03 = $d_sectores->d2_01_03; $d2_01_04 = $d_sectores->d2_01_04; $d2_01_05 = $d_sectores->d2_01_05; $d2_01_06 = $d_sectores->d2_01_06; $d2_01_07 = $d_sectores->d2_01_07; $d2_01_08 = $d_sectores->d2_01_08; $d2_01_09 = $d_sectores->d2_01_09; $d2_01_10 = $d_sectores->d2_01_10; $d2_01_11 = $d_sectores->d2_01_11; $d2_01_12 = $d_sectores->d2_01_12; $d2_01_13 = $d_sectores->d2_01_13;
    $d2_02_01 = $d_sectores->d2_02_01; $d2_02_02 = $d_sectores->d2_02_02; $d2_02_03 = $d_sectores->d2_02_03; $d2_02_04 = $d_sectores->d2_02_04; $d2_02_05 = $d_sectores->d2_02_05; $d2_02_06 = $d_sectores->d2_02_06; $d2_02_07 = $d_sectores->d2_02_07; $d2_02_08 = $d_sectores->d2_02_08; $d2_02_09 = $d_sectores->d2_02_09; $d2_02_10 = $d_sectores->d2_02_10; $d2_02_11 = $d_sectores->d2_02_11; $d2_02_12 = $d_sectores->d2_02_12; $d2_02_13 = $d_sectores->d2_02_13;
    $d2_03_01 = $d_sectores->d2_03_01; $d2_03_02 = $d_sectores->d2_03_02; $d2_03_03 = $d_sectores->d2_03_03; $d2_03_04 = $d_sectores->d2_03_04; $d2_03_05 = $d_sectores->d2_03_05; $d2_03_06 = $d_sectores->d2_03_06; $d2_03_07 = $d_sectores->d2_03_07; $d2_03_08 = $d_sectores->d2_03_08; $d2_03_09 = $d_sectores->d2_03_09; $d2_03_10 = $d_sectores->d2_03_10; $d2_03_11 = $d_sectores->d2_03_11; $d2_03_12 = $d_sectores->d2_03_12; $d2_03_13 = $d_sectores->d2_03_13;
    $d2_04_01 = $d_sectores->d2_04_01; $d2_04_02 = $d_sectores->d2_04_02; $d2_04_03 = $d_sectores->d2_04_03; $d2_04_04 = $d_sectores->d2_04_04; $d2_04_05 = $d_sectores->d2_04_05; $d2_04_06 = $d_sectores->d2_04_06; $d2_04_07 = $d_sectores->d2_04_07; $d2_04_08 = $d_sectores->d2_04_08; $d2_04_09 = $d_sectores->d2_04_09; $d2_04_10 = $d_sectores->d2_04_10; $d2_04_11 = $d_sectores->d2_04_11; $d2_04_12 = $d_sectores->d2_04_12; $d2_04_13 = $d_sectores->d2_04_13;
    $d2_05_01 = $d_sectores->d2_05_01; $d2_05_02 = $d_sectores->d2_05_02; $d2_05_03 = $d_sectores->d2_05_03; $d2_05_04 = $d_sectores->d2_05_04; $d2_05_05 = $d_sectores->d2_05_05; $d2_05_06 = $d_sectores->d2_05_06; $d2_05_07 = $d_sectores->d2_05_07; $d2_05_08 = $d_sectores->d2_05_08; $d2_05_09 = $d_sectores->d2_05_09; $d2_05_10 = $d_sectores->d2_05_10; $d2_05_11 = $d_sectores->d2_05_11; $d2_05_12 = $d_sectores->d2_05_12; $d2_05_13 = $d_sectores->d2_05_13;
    $d2_06_01 = $d_sectores->d2_06_01; $d2_06_02 = $d_sectores->d2_06_02; $d2_06_03 = $d_sectores->d2_06_03; $d2_06_04 = $d_sectores->d2_06_04; $d2_06_05 = $d_sectores->d2_06_05; $d2_06_06 = $d_sectores->d2_06_06; $d2_06_07 = $d_sectores->d2_06_07; $d2_06_08 = $d_sectores->d2_06_08; $d2_06_09 = $d_sectores->d2_06_09; $d2_06_10 = $d_sectores->d2_06_10; $d2_06_11 = $d_sectores->d2_06_11; $d2_06_12 = $d_sectores->d2_06_12; $d2_06_13 = $d_sectores->d2_06_13;
    $d2_07_01 = $d_sectores->d2_07_01; $d2_07_02 = $d_sectores->d2_07_02; $d2_07_03 = $d_sectores->d2_07_03; $d2_07_04 = $d_sectores->d2_07_04; $d2_07_05 = $d_sectores->d2_07_05; $d2_07_06 = $d_sectores->d2_07_06; $d2_07_07 = $d_sectores->d2_07_07; $d2_07_08 = $d_sectores->d2_07_08; $d2_07_09 = $d_sectores->d2_07_09; $d2_07_10 = $d_sectores->d2_07_10; $d2_07_11 = $d_sectores->d2_07_11; $d2_07_12 = $d_sectores->d2_07_12; $d2_07_13 = $d_sectores->d2_07_13;
    $d2_08_01 = $d_sectores->d2_08_01; $d2_08_02 = $d_sectores->d2_08_02; $d2_08_03 = $d_sectores->d2_08_03; $d2_08_04 = $d_sectores->d2_08_04; $d2_08_05 = $d_sectores->d2_08_05; $d2_08_06 = $d_sectores->d2_08_06; $d2_08_07 = $d_sectores->d2_08_07; $d2_08_08 = $d_sectores->d2_08_08; $d2_08_09 = $d_sectores->d2_08_09; $d2_08_10 = $d_sectores->d2_08_10; $d2_08_11 = $d_sectores->d2_08_11; $d2_08_12 = $d_sectores->d2_08_12; $d2_08_13 = $d_sectores->d2_08_13;
    $d2_09_01 = $d_sectores->d2_09_01; $d2_09_02 = $d_sectores->d2_09_02; $d2_09_03 = $d_sectores->d2_09_03; $d2_09_04 = $d_sectores->d2_09_04; $d2_09_05 = $d_sectores->d2_09_05; $d2_09_06 = $d_sectores->d2_09_06; $d2_09_07 = $d_sectores->d2_09_07; $d2_09_08 = $d_sectores->d2_09_08; $d2_09_09 = $d_sectores->d2_09_09; $d2_09_10 = $d_sectores->d2_09_10; $d2_09_11 = $d_sectores->d2_09_11; $d2_09_12 = $d_sectores->d2_09_12; $d2_09_13 = $d_sectores->d2_09_13;
    $d2_10_01 = $d_sectores->d2_10_01; $d2_10_02 = $d_sectores->d2_10_02; $d2_10_03 = $d_sectores->d2_10_03; $d2_10_04 = $d_sectores->d2_10_04; $d2_10_05 = $d_sectores->d2_10_05; $d2_10_06 = $d_sectores->d2_10_06; $d2_10_07 = $d_sectores->d2_10_07; $d2_10_08 = $d_sectores->d2_10_08; $d2_10_09 = $d_sectores->d2_10_09; $d2_10_10 = $d_sectores->d2_10_10; $d2_10_11 = $d_sectores->d2_10_11; $d2_10_12 = $d_sectores->d2_10_12; $d2_10_13 = $d_sectores->d2_10_13;
    $d2_11_01 = $d_sectores->d2_11_01; $d2_11_02 = $d_sectores->d2_11_02; $d2_11_03 = $d_sectores->d2_11_03; $d2_11_04 = $d_sectores->d2_11_04; $d2_11_05 = $d_sectores->d2_11_05; $d2_11_06 = $d_sectores->d2_11_06; $d2_11_07 = $d_sectores->d2_11_07; $d2_11_08 = $d_sectores->d2_11_08; $d2_11_09 = $d_sectores->d2_11_09; $d2_11_10 = $d_sectores->d2_11_10; $d2_11_11 = $d_sectores->d2_11_11; $d2_11_12 = $d_sectores->d2_11_12; $d2_11_13 = $d_sectores->d2_11_13;
    $d2_12_01 = $d_sectores->d2_12_01; $d2_12_02 = $d_sectores->d2_12_02; $d2_12_03 = $d_sectores->d2_12_03; $d2_12_04 = $d_sectores->d2_12_04; $d2_12_05 = $d_sectores->d2_12_05; $d2_12_06 = $d_sectores->d2_12_06; $d2_12_07 = $d_sectores->d2_12_07; $d2_12_08 = $d_sectores->d2_12_08; $d2_12_09 = $d_sectores->d2_12_09; $d2_12_10 = $d_sectores->d2_12_10; $d2_12_11 = $d_sectores->d2_12_11; $d2_12_12 = $d_sectores->d2_12_12; $d2_12_13 = $d_sectores->d2_12_13;


    $enodoB_01_01 = $d_sectores->enodoB_01_01;
    $enodoB_02_01 = $d_sectores->enodoB_02_01;
    $enodoB_03_01 = $d_sectores->enodoB_03_01;
    $enodoB_04_01 = $d_sectores->enodoB_04_01;
    $d3_01_01 = $d_sectores->d3_01_01; $d3_01_02 = $d_sectores->d3_01_02; $d3_01_03 = $d_sectores->d3_01_03; $d3_01_04 = $d_sectores->d3_01_04; $d3_01_05 = $d_sectores->d3_01_05; $d3_01_06 = $d_sectores->d3_01_06; $d3_01_07 = $d_sectores->d3_01_07; $d3_01_08 = $d_sectores->d3_01_08; $d3_01_09 = $d_sectores->d3_01_09; $d3_01_10 = $d_sectores->d3_01_10; $d3_01_11 = $d_sectores->d3_01_11; $d3_01_12 = $d_sectores->d3_01_12; $d3_01_13 = $d_sectores->d3_01_13;
    $d3_02_01 = $d_sectores->d3_02_01; $d3_02_02 = $d_sectores->d3_02_02; $d3_02_03 = $d_sectores->d3_02_03; $d3_02_04 = $d_sectores->d3_02_04; $d3_02_05 = $d_sectores->d3_02_05; $d3_02_06 = $d_sectores->d3_02_06; $d3_02_07 = $d_sectores->d3_02_07; $d3_02_08 = $d_sectores->d3_02_08; $d3_02_09 = $d_sectores->d3_02_09; $d3_02_10 = $d_sectores->d3_02_10; $d3_02_11 = $d_sectores->d3_02_11; $d3_02_12 = $d_sectores->d3_02_12; $d3_02_13 = $d_sectores->d3_02_13;
    $d3_03_01 = $d_sectores->d3_03_01; $d3_03_02 = $d_sectores->d3_03_02; $d3_03_03 = $d_sectores->d3_03_03; $d3_03_04 = $d_sectores->d3_03_04; $d3_03_05 = $d_sectores->d3_03_05; $d3_03_06 = $d_sectores->d3_03_06; $d3_03_07 = $d_sectores->d3_03_07; $d3_03_08 = $d_sectores->d3_03_08; $d3_03_09 = $d_sectores->d3_03_09; $d3_03_10 = $d_sectores->d3_03_10; $d3_03_11 = $d_sectores->d3_03_11; $d3_03_12 = $d_sectores->d3_03_12; $d3_03_13 = $d_sectores->d3_03_13;
    $d3_04_01 = $d_sectores->d3_04_01; $d3_04_02 = $d_sectores->d3_04_02; $d3_04_03 = $d_sectores->d3_04_03; $d3_04_04 = $d_sectores->d3_04_04; $d3_04_05 = $d_sectores->d3_04_05; $d3_04_06 = $d_sectores->d3_04_06; $d3_04_07 = $d_sectores->d3_04_07; $d3_04_08 = $d_sectores->d3_04_08; $d3_04_09 = $d_sectores->d3_04_09; $d3_04_10 = $d_sectores->d3_04_10; $d3_04_11 = $d_sectores->d3_04_11; $d3_04_12 = $d_sectores->d3_04_12; $d3_04_13 = $d_sectores->d3_04_13;
    $d3_05_01 = $d_sectores->d3_05_01; $d3_05_02 = $d_sectores->d3_05_02; $d3_05_03 = $d_sectores->d3_05_03; $d3_05_04 = $d_sectores->d3_05_04; $d3_05_05 = $d_sectores->d3_05_05; $d3_05_06 = $d_sectores->d3_05_06; $d3_05_07 = $d_sectores->d3_05_07; $d3_05_08 = $d_sectores->d3_05_08; $d3_05_09 = $d_sectores->d3_05_09; $d3_05_10 = $d_sectores->d3_05_10; $d3_05_11 = $d_sectores->d3_05_11; $d3_05_12 = $d_sectores->d3_05_12; $d3_05_13 = $d_sectores->d3_05_13;
    $d3_06_01 = $d_sectores->d3_06_01; $d3_06_02 = $d_sectores->d3_06_02; $d3_06_03 = $d_sectores->d3_06_03; $d3_06_04 = $d_sectores->d3_06_04; $d3_06_05 = $d_sectores->d3_06_05; $d3_06_06 = $d_sectores->d3_06_06; $d3_06_07 = $d_sectores->d3_06_07; $d3_06_08 = $d_sectores->d3_06_08; $d3_06_09 = $d_sectores->d3_06_09; $d3_06_10 = $d_sectores->d3_06_10; $d3_06_11 = $d_sectores->d3_06_11; $d3_06_12 = $d_sectores->d3_06_12; $d3_06_13 = $d_sectores->d3_06_13;
    $d3_07_01 = $d_sectores->d3_07_01; $d3_07_02 = $d_sectores->d3_07_02; $d3_07_03 = $d_sectores->d3_07_03; $d3_07_04 = $d_sectores->d3_07_04; $d3_07_05 = $d_sectores->d3_07_05; $d3_07_06 = $d_sectores->d3_07_06; $d3_07_07 = $d_sectores->d3_07_07; $d3_07_08 = $d_sectores->d3_07_08; $d3_07_09 = $d_sectores->d3_07_09; $d3_07_10 = $d_sectores->d3_07_10; $d3_07_11 = $d_sectores->d3_07_11; $d3_07_12 = $d_sectores->d3_07_12; $d3_07_13 = $d_sectores->d3_07_13;
    $d3_08_01 = $d_sectores->d3_08_01; $d3_08_02 = $d_sectores->d3_08_02; $d3_08_03 = $d_sectores->d3_08_03; $d3_08_04 = $d_sectores->d3_08_04; $d3_08_05 = $d_sectores->d3_08_05; $d3_08_06 = $d_sectores->d3_08_06; $d3_08_07 = $d_sectores->d3_08_07; $d3_08_08 = $d_sectores->d3_08_08; $d3_08_09 = $d_sectores->d3_08_09; $d3_08_10 = $d_sectores->d3_08_10; $d3_08_11 = $d_sectores->d3_08_11; $d3_08_12 = $d_sectores->d3_08_12; $d3_08_13 = $d_sectores->d3_08_13;
    $d3_09_01 = $d_sectores->d3_09_01; $d3_09_02 = $d_sectores->d3_09_02; $d3_09_03 = $d_sectores->d3_09_03; $d3_09_04 = $d_sectores->d3_09_04; $d3_09_05 = $d_sectores->d3_09_05; $d3_09_06 = $d_sectores->d3_09_06; $d3_09_07 = $d_sectores->d3_09_07; $d3_09_08 = $d_sectores->d3_09_08; $d3_09_09 = $d_sectores->d3_09_09; $d3_09_10 = $d_sectores->d3_09_10; $d3_09_11 = $d_sectores->d3_09_11; $d3_09_12 = $d_sectores->d3_09_12; $d3_09_13 = $d_sectores->d3_09_13;

    $e_desarrollo = $obj->{'e_desarrollo'};
    $e1_01_01 = $e_desarrollo->e1_01_01 ? $check : $uncheck; $e1_01_02 = $e_desarrollo->e1_01_02 ? $check : $uncheck; $e1_01_03 = $e_desarrollo->e1_01_03;
    $e1_02_01 = $e_desarrollo->e1_02_01 ? $check : $uncheck; $e1_02_02 = $e_desarrollo->e1_02_02 ? $check : $uncheck; $e1_02_03 = $e_desarrollo->e1_02_03;
    $e1_03_01 = $e_desarrollo->e1_03_01 ? $check : $uncheck; $e1_03_02 = $e_desarrollo->e1_03_02 ? $check : $uncheck; $e1_03_03 = $e_desarrollo->e1_03_03;
    $e1_04_01 = $e_desarrollo->e1_04_01 ? $check : $uncheck; $e1_04_02 = $e_desarrollo->e1_04_02 ? $check : $uncheck; $e1_04_03 = $e_desarrollo->e1_04_03;
    $e1_05_01 = $e_desarrollo->e1_05_01 ? $check : $uncheck; $e1_05_02 = $e_desarrollo->e1_05_02 ? $check : $uncheck; $e1_05_03 = $e_desarrollo->e1_05_03;
    $e1_06_01 = $e_desarrollo->e1_06_01 ? $check : $uncheck; $e1_06_02 = $e_desarrollo->e1_06_02 ? $check : $uncheck; $e1_06_03 = $e_desarrollo->e1_06_03;
    $e1_07_01 = $e_desarrollo->e1_07_01 ? $check : $uncheck; $e1_07_02 = $e_desarrollo->e1_07_02 ? $check : $uncheck; $e1_07_03 = $e_desarrollo->e1_07_03;
    $e1_08_01 = $e_desarrollo->e1_08_01 ? $check : $uncheck; $e1_08_02 = $e_desarrollo->e1_08_02 ? $check : $uncheck; $e1_08_03 = $e_desarrollo->e1_08_03;
    $e1_09_01 = $e_desarrollo->e1_09_01 ? $check : $uncheck; $e1_09_02 = $e_desarrollo->e1_09_02 ? $check : $uncheck; $e1_09_03 = $e_desarrollo->e1_09_03;
    $e1_10_01 = $e_desarrollo->e1_10_01 ? $check : $uncheck; $e1_10_02 = $e_desarrollo->e1_10_02 ? $check : $uncheck; $e1_10_03 = $e_desarrollo->e1_10_03;
    $e1_11_01 = $e_desarrollo->e1_11_01 ? $check : $uncheck; $e1_11_02 = $e_desarrollo->e1_11_02 ? $check : $uncheck; $e1_11_03 = $e_desarrollo->e1_11_03;
    $e1_12_01 = $e_desarrollo->e1_12_01 ? $check : $uncheck; $e1_12_02 = $e_desarrollo->e1_12_02 ? $check : $uncheck; $e1_12_03 = $e_desarrollo->e1_12_03;
    $e1_13_01 = $e_desarrollo->e1_13_01 ? $check : $uncheck; $e1_13_02 = $e_desarrollo->e1_13_02 ? $check : $uncheck; $e1_13_03 = $e_desarrollo->e1_13_03;
    $e1_14_01 = $e_desarrollo->e1_14_01 ? $check : $uncheck; $e1_14_02 = $e_desarrollo->e1_14_02 ? $check : $uncheck; $e1_14_03 = $e_desarrollo->e1_14_03;
    $e1_15_01 = $e_desarrollo->e1_15_01 ? $check : $uncheck; $e1_15_02 = $e_desarrollo->e1_15_02 ? $check : $uncheck; $e1_15_03 = $e_desarrollo->e1_15_03;
    $e1_16_01 = $e_desarrollo->e1_16_01 ? $check : $uncheck; $e1_16_02 = $e_desarrollo->e1_16_02 ? $check : $uncheck; $e1_16_03 = $e_desarrollo->e1_16_03;

    $e2_17_01 = $e_desarrollo->e2_17_01; $e2_17_02 = $e_desarrollo->e2_17_02; $e2_17_03 = $e_desarrollo->e2_17_03;
    $e2_18_01 = $e_desarrollo->e2_18_01; $e2_18_02 = $e_desarrollo->e2_18_02; $e2_18_03 = $e_desarrollo->e2_18_03;
    $e2_19_01 = $e_desarrollo->e2_19_01; $e2_19_02 = $e_desarrollo->e2_19_02; $e2_19_03 = $e_desarrollo->e2_19_03;

    $e3_01_01 = $e_desarrollo->e3_01_01; $e3_01_02 = $e_desarrollo->e3_01_02;
    $e3_02_01 = $e_desarrollo->e3_02_01; $e3_02_02 = $e_desarrollo->e3_02_02;
    $e3_03_01 = $e_desarrollo->e3_03_01; $e3_03_02 = $e_desarrollo->e3_03_02;
    $e3_04_01 = $e_desarrollo->e3_04_01; $e3_04_02 = $e_desarrollo->e3_04_02;
    $e3_05_01 = $e_desarrollo->e3_05_01; $e3_05_02 = $e_desarrollo->e3_05_02;
    $e3_06_01 = $e_desarrollo->e3_06_01; $e3_06_02 = $e_desarrollo->e3_06_02;
    $e3_07_01 = $e_desarrollo->e3_07_01; $e3_07_02 = $e_desarrollo->e3_07_02;
    $e3_08_01 = $e_desarrollo->e3_08_01; $e3_08_02 = $e_desarrollo->e3_08_02;
    $e3_09_01 = $e_desarrollo->e3_09_01; $e3_09_02 = $e_desarrollo->e3_09_02;
    $e3_10_01 = $e_desarrollo->e3_10_01; $e3_10_02 = $e_desarrollo->e3_10_02;
    $e3_11_01 = $e_desarrollo->e3_11_01; $e3_11_02 = $e_desarrollo->e3_11_02;
    $e3_12_01 = $e_desarrollo->e3_12_01; $e3_12_02 = $e_desarrollo->e3_12_02;

    $e4_01_01 = $e_desarrollo->e4_01_01; $e4_01_02 = $e_desarrollo->e4_01_02; $e4_01_03 = $e_desarrollo->e4_01_03; $e4_01_04 = $e_desarrollo->e4_01_04; $e4_01_05 = $e_desarrollo->e4_01_05;
    $e4_02_01 = $e_desarrollo->e4_02_01; $e4_02_02 = $e_desarrollo->e4_02_02; $e4_02_03 = $e_desarrollo->e4_02_03; $e4_02_04 = $e_desarrollo->e4_02_04; $e4_02_05 = $e_desarrollo->e4_02_05;
    $e4_03_01 = $e_desarrollo->e4_03_01; $e4_03_02 = $e_desarrollo->e4_03_02; $e4_03_03 = $e_desarrollo->e4_03_03; $e4_03_04 = $e_desarrollo->e4_03_04; $e4_03_05 = $e_desarrollo->e4_03_05;
    $e4_04_01 = $e_desarrollo->e4_04_01; $e4_04_02 = $e_desarrollo->e4_04_02; $e4_04_03 = $e_desarrollo->e4_04_03; $e4_04_04 = $e_desarrollo->e4_04_04; $e4_04_05 = $e_desarrollo->e4_04_05;
    $e4_05_01 = $e_desarrollo->e4_05_01; $e4_05_02 = $e_desarrollo->e4_05_02; $e4_05_03 = $e_desarrollo->e4_05_03; $e4_05_04 = $e_desarrollo->e4_05_04; $e4_05_05 = $e_desarrollo->e4_05_05;
    $e4_06_01 = $e_desarrollo->e4_06_01; $e4_06_02 = $e_desarrollo->e4_06_02; $e4_06_03 = $e_desarrollo->e4_06_03; $e4_06_04 = $e_desarrollo->e4_06_04; $e4_06_05 = $e_desarrollo->e4_06_05;

    $e5_01_01 = $e_desarrollo->e5_01_01; $e5_01_02 = $e_desarrollo->e5_01_02; $e5_01_03 = $e_desarrollo->e5_01_03; $e5_01_04 = $e_desarrollo->e5_01_04; $e5_01_05 = $e_desarrollo->e5_01_05; $e5_01_06 = $e_desarrollo->e5_01_06; $e5_01_07 = $e_desarrollo->e5_01_07; $e5_01_08 = $e_desarrollo->e5_01_08; $e5_01_09 = $e_desarrollo->e5_01_09; $e5_01_10 = $e_desarrollo->e5_01_10; $e5_01_11 = $e_desarrollo->e5_01_11;
    $e5_02_01 = $e_desarrollo->e5_02_01; $e5_02_02 = $e_desarrollo->e5_02_02; $e5_02_03 = $e_desarrollo->e5_02_03; $e5_02_04 = $e_desarrollo->e5_02_04; $e5_02_05 = $e_desarrollo->e5_02_05; $e5_02_06 = $e_desarrollo->e5_02_06; $e5_02_07 = $e_desarrollo->e5_02_07; $e5_02_08 = $e_desarrollo->e5_02_08; $e5_02_09 = $e_desarrollo->e5_02_09; $e5_02_10 = $e_desarrollo->e5_02_10; $e5_02_11 = $e_desarrollo->e5_02_11;
    $e5_03_01 = $e_desarrollo->e5_03_01; $e5_03_02 = $e_desarrollo->e5_03_02; $e5_03_03 = $e_desarrollo->e5_03_03; $e5_03_04 = $e_desarrollo->e5_03_04; $e5_03_05 = $e_desarrollo->e5_03_05; $e5_03_06 = $e_desarrollo->e5_03_06; $e5_03_07 = $e_desarrollo->e5_03_07; $e5_03_08 = $e_desarrollo->e5_03_08; $e5_03_09 = $e_desarrollo->e5_03_09; $e5_03_10 = $e_desarrollo->e5_03_10; $e5_03_11 = $e_desarrollo->e5_03_11;


    $plantilla =
'<body>    
    <div class="card-">
        <div class="card-body-">
            <div id="invoice">
                <div class="invoice">
                '. $cabecera .'
                <main>
                    <div class="notices">
                        <div class="notice"><strong>'.constant('FTITLE').'</strong></div>
                    </div>
                </main>	
               <main>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <table class="tborder">
                                                <tr>
                                                    <td></td>
                                                    <td><strong>V Vdc</strong></td>
                                                    <td><strong>I A</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Cadena 1</td>
                                                    <td>'.$g3_01_01.'</td>
                                                    <td>'.$g3_01_02.'</td>
                                                </tr>
                                                <tr>
                                                    <td>Array 2</td>
                                                    <td>'.$g3_01_03.'</td>
                                                    <td>'.$g3_01_04.'</td>
                                                </tr>
                                                <tr>
                                                    <td>Array 3</td>
                                                    <td>'.$g3_01_05.'</td>
                                                    <td>'.$g3_01_06.'</td>
                                                </tr>
                                                <tr>
                                                    <td>Array 4</td>
                                                    <td>'.$g3_01_07.'</td>
                                                    <td>'.$g3_01_08.'</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="tborder">
                                                <tr>
                                                    <td></td>
                                                    <td><strong>V Vdc</strong></td>
                                                    <td><strong>I A</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Array 1</td>
                                                    <td>'.$g3_01_09.'</td>
                                                    <td>'.$g3_01_10.'</td>
                                                </tr>
                                                <tr>
                                                    <td>Array 2</td>
                                                    <td>'.$g3_01_11.'</td>
                                                    <td>'.$g3_01_12.'</td>
                                                </tr>
                                                <tr>
                                                    <td>Array 3</td>
                                                    <td>'.$g3_01_13.'</td>
                                                    <td>'.$g3_01_14.'</td>
                                                </tr>
                                                <tr>
                                                    <td>Array 4</td>
                                                    <td>'.$g3_01_15.'</td>
                                                    <td>'.$g3_01_16.'</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>   
                            </td>
                        </tr>
                    </table>
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

