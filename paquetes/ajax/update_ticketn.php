
<?php
require("../../funciones/motor.php");

	date_default_timezone_set('America/La_Paz');
	$id_st_ticket=$_POST['id_st_ticket'];
	$ticket=$_POST['ticket'];
	$idnodo=$_POST['idnodo'];
	$fecha_inicio_rif=$_POST['fecha_inicio_rif'];
	$hora_inicio_rif=$_POST['hora_inicio_rif'];
	$fecha_fin_rif=$_POST['fecha_fin_rif'];
	$hora_fin_rif=$_POST['hora_fin_rif'];
	$fecha_not_dim=$_POST['fecha_not_dim'];
	$hora_not_dim=$_POST['hora_not_dim'];
	$fecha_not_sitio=$_POST['fecha_not_sitio'];
	$hora_not_sitio=$_POST['hora_not_sitio'];
	$observaciones=$_POST['observaciones'];
	$descripcionfalla=$_POST['descripcionfalla'];
	$idtecnologia=$_POST['idtecnologia'];
	$idafectacionservicio=$_POST['idafectacionservicio'];
	$idsistemafalla=$_POST['idsistemafalla'];
	$idtipofalla=$_POST['idtipofalla'];
	$idequipofalla=$_POST['idequipofalla'];
	$idatencion=$_POST['idatencion'];
	$idestacion=$_POST['idestacion'];
	$idsolucion=$_POST['idsolucion'];
    $cumplimiento	= $_POST['cumplimiento'];

	//$Hoy = date("Y-m-d H:i:s");
	$texto="update st_ticketn set ticket='$ticket',
	idnodo=$idnodo,
	fecha_inicio_rif='$fecha_inicio_rif',
	hora_inicio_rif='$hora_inicio_rif',
	fecha_fin_rif='$fecha_fin_rif',
	hora_fin_rif='$hora_fin_rif',
	fecha_not_dim='$fecha_not_dim',
	hora_not_dim='$hora_not_dim',
	fecha_not_sitio='$fecha_not_sitio',
	hora_not_sitio='$hora_not_sitio',
	cumplimiento='$cumplimiento',
	observaciones='$observaciones',
	descripcionfalla='$descripcionfalla',
	idtecnologia=$idtecnologia,
	idafectacionservicio=$idafectacionservicio,
	idsistemafalla=$idsistemafalla,
	idtipofalla='$idtipofalla',
	idequipofalla='$idequipofalla',
	idatencion=$idatencion,
	idestacion='$idestacion',
	idsolucion='$idsolucion'
	where id_st_ticket=$id_st_ticket ";

	$res = mysqli_query($conexion, $texto);
	
	if( mysqli_affected_rows($conexion)>0 ){
        echo "1";
	}else{
        if ($res)
            echo "0";
        else
            echo "-1";
	}

?>