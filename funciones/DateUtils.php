<?php

/**
 * @param null $date format: yyyy-mm-dd
 * @return string
 */
function dateToLiteral($date=null){
    $meses = array("","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    if($date && strlen($date)==10){
        $date_2=explode("-",$date);
        return $date_2[2]." de ".$meses[(int) $date_2[1]]." del ".$date_2[0];
    }
}

function timeDiff($time1, $time2){
    $inicio = new DateTime($time1);
    $fin    = new DateTime($time2);
    $diff = $inicio->diff($fin);

    return $diff->format('%d d %H hr %i min');
}

function currentMonthLiteral(){
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    return $meses[date('n')-1];
}

function monthLiteral($date){
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    $mes = date('n', $date)-1;
    return $meses[$mes];
}

?>