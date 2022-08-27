<?php

$idform = base64_decode($_GET['idform']);
$codigo = strtolower($_GET['codigo']);
$params = base64_decode($_GET['params']);
$idevento= ($_GET['idevento']);

//echo ($idevento);
//echo ($codigo);
//echo ($params);

// $resultado = mysqli_query($conexion, "SELECT * FROM p013_formulario WHERE idevento = '$idevento' ");
// $totalFilas    =    mysqli_num_rows($resultado);  

// if ($totalFilas>0){
	
	
	
// 	mysqli_query($conexion, "DELETE FROM p013_verificacionalarmasexternas WHERE idevento = " . $idevento);	
// 	mysqli_query($conexion, "DELETE FROM p013_alarmas WHERE idevento = " . $idevento);	
// 	mysqli_query($conexion, "DELETE FROM p013_verificacionfisica WHERE  idevento = " . $idevento);	
// 	mysqli_query($conexion, "DELETE FROM p013_formularioestaciones WHERE  idevento = " . $idevento);	
// 	mysqli_query($conexion, "DELETE FROM p013_pruebasservicios WHERE  idevento = " . $idevento);	
// 	mysqli_query($conexion, "DELETE FROM p013_relevamientosceldas WHERE  idevento = " . $idevento);	
// 	mysqli_query($conexion, "DELETE FROM p013_formulario WHERE  idevento = " . $idevento);	
// 	mysqli_query($conexion, "DELETE FROM formulario_mtto_n WHERE codigo='P013n' and idevento = " . $idevento);	
// 	mysqli_query($conexion, "DELETE FROM p013_observaciones WHERE idevento = " . $idevento);	

// }else{
// 	mysqli_query($conexion, "DELETE FROM formulario_".$codigo." WHERE id = " . $idform);	
// 	//mysqli_query($conexion, "DELETE FROM ".$codigo." _formulario WHERE idevento = " . $idevento);	

// }



switch($codigo)
{
    case 'p013n';
    	$resultado = mysqli_query($conexion, "SELECT * FROM p013_formulario WHERE idevento = '$idevento' ");
		$totalFilas    =    mysqli_num_rows($resultado);  

		if ($totalFilas>0){
			
			
			
			mysqli_query($conexion, "DELETE FROM p013_verificacionalarmasexternas WHERE idevento = " . $idevento);	
			mysqli_query($conexion, "DELETE FROM p013_alarmas WHERE idevento = " . $idevento);	
			mysqli_query($conexion, "DELETE FROM p013_verificacionfisica WHERE  idevento = " . $idevento);	
			mysqli_query($conexion, "DELETE FROM p013_formularioestaciones WHERE  idevento = " . $idevento);	
			mysqli_query($conexion, "DELETE FROM p013_pruebasservicios WHERE  idevento = " . $idevento);	
			mysqli_query($conexion, "DELETE FROM p013_relevamientosceldas WHERE  idevento = " . $idevento);	
			mysqli_query($conexion, "DELETE FROM p013_formulario WHERE  idevento = " . $idevento);	
			mysqli_query($conexion, "DELETE FROM formulario_mtto_n WHERE codigo='P013n' and idevento = " . $idevento);	
			mysqli_query($conexion, "DELETE FROM p013_observaciones WHERE idevento = " . $idevento);	

		}
		break;
    case 'p019';
	    mysqli_query($conexion, "DELETE FROM p019_formulario WHERE idevento = " . $idevento);	
	    mysqli_query($conexion, "DELETE FROM formulario_mtto_n WHERE codigo='P019' and idevento = " . $idevento);	
	    mysqli_query($conexion, "DELETE FROM p019_disptarjetasequipos WHERE idevento = " . $idevento);	
	    mysqli_query($conexion, "DELETE FROM p019_mantenimientopreventivo WHERE idevento = " . $idevento);
	    mysqli_query($conexion, "DELETE FROM p019_relevamientoinfraestructura WHERE idevento = " . $idevento);
	    mysqli_query($conexion, "DELETE FROM p019_relevamientoserviciomovil WHERE idevento = " . $idevento);
	    mysqli_query($conexion, "DELETE FROM p019_transportefibra WHERE idevento = " . $idevento);	
	    mysqli_query($conexion, "DELETE FROM p019_transportemicroondas WHERE idevento = " . $idevento);	
	    mysqli_query($conexion, "DELETE FROM p019_transportesatelital WHERE idevento = " . $idevento);	
	                             
	    break;
	    
	   case 'p019v';
	    mysqli_query($conexion, "DELETE FROM p019v_formulario WHERE idevento = " . $idevento);	
	    mysqli_query($conexion, "DELETE FROM formulario_mtto_n WHERE codigo='P019v' and idevento = " . $idevento);	
	    mysqli_query($conexion, "DELETE FROM p019v_disptarjetasequipos WHERE idevento = " . $idevento);	
	    mysqli_query($conexion, "DELETE FROM p019v_mantenimientopreventivo WHERE idevento = " . $idevento);
	    mysqli_query($conexion, "DELETE FROM p019v_relevamientoinfraestructura WHERE idevento = " . $idevento);
	    mysqli_query($conexion, "DELETE FROM p019v_relevamientoserviciomovil WHERE idevento = " . $idevento);
	    mysqli_query($conexion, "DELETE FROM p019v_transportefibra WHERE idevento = " . $idevento);	
	    mysqli_query($conexion, "DELETE FROM p019v_transportemicroondas WHERE idevento = " . $idevento);	
	    mysqli_query($conexion, "DELETE FROM p019v_transportesatelital WHERE idevento = " . $idevento);	
	                             
	    break;
	    
	    
	    case 'P019v';
	    mysqli_query($conexion, "DELETE FROM p019v_formulario WHERE idevento = " . $idevento);	
	    mysqli_query($conexion, "DELETE FROM formulario_mtto_n WHERE codigo='P019v' and idevento = " . $idevento);	
	    mysqli_query($conexion, "DELETE FROM p019v_disptarjetasequipos WHERE idevento = " . $idevento);	
	    mysqli_query($conexion, "DELETE FROM p019v_mantenimientopreventivo WHERE idevento = " . $idevento);
	    mysqli_query($conexion, "DELETE FROM p019v_relevamientoinfraestructura WHERE idevento = " . $idevento);
	    mysqli_query($conexion, "DELETE FROM p019v_relevamientoserviciomovil WHERE idevento = " . $idevento);
	    mysqli_query($conexion, "DELETE FROM p019v_transportefibra WHERE idevento = " . $idevento);	
	    mysqli_query($conexion, "DELETE FROM p019v_transportemicroondas WHERE idevento = " . $idevento);	
	    mysqli_query($conexion, "DELETE FROM p019v_transportesatelital WHERE idevento = " . $idevento);	
	                             
	    break;
	    
    case 'p002v';
	    mysqli_query($conexion, "DELETE FROM p002v_formulario WHERE id = " . $idform);
	    
	    mysqli_query($conexion, "DELETE FROM formulario_mtto_n WHERE codigo='P002v' and id = " . $idform);	
	    
	   mysqli_query($conexion, "DELETE FROM formulario_p002v WHERE id = " . $idform);

	                             
	    break;
	    
    case 'P002v';
	    mysqli_query($conexion, "DELETE FROM p002v_formulario WHERE id = " . $idform);
	    
	    mysqli_query($conexion, "DELETE FROM formulario_mtto_n WHERE codigo='P002v' and id = " . $idform);	
	    
	   mysqli_query($conexion, "DELETE FROM formulario_p002v WHERE id = " . $idform);

	                             
	    break;
	    
    case 'p001v';
	    mysqli_query($conexion, "DELETE FROM p001v_formulario WHERE id = " . $idform);
	    
	    mysqli_query($conexion, "DELETE FROM formulario_mtto_n WHERE codigo='P001v' and id = " . $idform);		
	    
	   mysqli_query($conexion, "DELETE FROM formulario_p001v WHERE id = " . $idform);

	                             
	    break;
	    
    case 'P001v';
	    mysqli_query($conexion, "DELETE FROM p001v_formulario WHERE id = " . $idform);
	    
	    mysqli_query($conexion, "DELETE FROM formulario_mtto_n WHERE codigo='P001v' and id = " . $idform);	
	    
	   mysqli_query($conexion, "DELETE FROM formulario_p001v WHERE id = " . $idform);

	                             
	    break;
	    

    case 'p013v';
	    mysqli_query($conexion, "DELETE FROM p013v_formulario WHERE id = " . $idform);
	    
	    mysqli_query($conexion, "DELETE FROM formulario_mtto_n WHERE codigo='P013v' and id = " . $idform);		
	    
	   mysqli_query($conexion, "DELETE FROM formulario_p013v WHERE id = " . $idform);

	                             
	    break;
	    
    case 'P013v';
	    mysqli_query($conexion, "DELETE FROM p013v_formulario WHERE id = " . $idform);
	    
	    mysqli_query($conexion, "DELETE FROM formulario_mtto_n WHERE codigo='P013v' and id = " . $idform);		
	    
	   mysqli_query($conexion, "DELETE FROM formulario_p013v WHERE id = " . $idform);

	                             
	    break;
	    
	        case 'p017v';
	    mysqli_query($conexion, "DELETE FROM p017v_formulario WHERE id = " . $idform);
	    
	    mysqli_query($conexion, "DELETE FROM formulario_mtto_n WHERE codigo='P017v' and id = " . $idform);		
	    
	   mysqli_query($conexion, "DELETE FROM formulario_p017v WHERE id = " . $idform);

	                             
	    break;
	    
    case 'P017v';
	    mysqli_query($conexion, "DELETE FROM p017v_formulario WHERE id = " . $idform);
	    
	    mysqli_query($conexion, "DELETE FROM formulario_mtto_n WHERE codigo='P017v' and id = " . $idform);		
	    
	   mysqli_query($conexion, "DELETE FROM formulario_p017v WHERE id = " . $idform);

	                             
	    break;
	    
    default;
        mysqli_query($conexion, "DELETE FROM formulario_".$codigo." WHERE id = " . $idform);

    	break;
    	
}

$url_volver = $link_modulo."?path=prev_estacion.php$params";

header("Location: ".$url_volver);

?>

