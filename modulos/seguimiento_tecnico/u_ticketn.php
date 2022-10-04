<?
$estacion_val = "";
$filas = 0;
if(isset($_GET["ticket"])){
	$ticket = $_GET["ticket"];
	$consulta = "SELECT st_ticketn.id_st_ticket,
	centro.nombre,
	st_ticketn.ticket,
	st_ticketn.idnodo,	
	estacionentel.nombreestacion,
	estacionentel.tiponodo,
	st_ticketn.idtecnologia,
	st_ticketn.idatencion,
	st_ticketn.idafectacionservicio,
	st_ticketn.idsistemafalla,
	st_ticketn.idequipofalla,
	st_ticketn.idtipofalla,
	st_ticketn.idsolucion,
	st_ticketn.descripcionfalla,	
	fecha_inicio_rif,
	hora_inicio_rif,
	fecha_not_dim,
	hora_not_dim,
	fecha_not_sitio,
	hora_not_sitio,
	fecha_fin_rif,
	hora_fin_rif,
	st_ticketn.observaciones
	from

st_ticketn
	LEFT JOIN estacionentel ON st_ticketn.idnodo= estacionentel.idestacionentel
	LEFT JOIN centro ON estacionentel.idcentro= centro.idcentro
	LEFT JOIN ticket_atencion ON st_ticketn.idatencion= ticket_atencion.idatencion
	LEFT JOIN tecnologia ON st_ticketn.idtecnologia= tecnologia.idtecnologia
	LEFT JOIN ticket_afectacionservicio ON st_ticketn.idafectacionservicio= ticket_afectacionservicio.idafectacionservicio
	LEFT JOIN ticket_sistemafalla ON st_ticketn.idsistemafalla= ticket_sistemafalla.idsistemafalla
	LEFT JOIN ticket_equipofalla ON st_ticketn.idequipofalla= ticket_equipofalla.idequipofalla
	LEFT JOIN ticket_tipofalla ON st_ticketn.idtipofalla= ticket_tipofalla.idtipofalla
	LEFT JOIN ticket_solucion ON st_ticketn.idsolucion= ticket_solucion.idsolucion
	where	
	st_ticketn.ticket='$ticket'";
	$resultado 	= mysqli_query($conexion, $consulta);
	$filas	   	= mysqli_num_rows($resultado);
	$dato		= mysqli_fetch_array($resultado);
    $estacion_val = $dato['nombreestacion'];
    $idestacion = $dato['idnodo'];
    $id_st_ticket=$dato['id_st_ticket'];
}

?>
<div class="page-wrapper">
    <div class="page-content">


        <!--<div class="row">
            <div class="col-xl-10 mx-auto">-->

                <h6 class="mb-0 text-uppercase">Editar Ticket</h6>
                <hr/>

                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">

                        <form name="amper" method="post" class="row g-3" action="../../modulos/seguimiento_tecnico/___s_ticket.php" onSubmit=" return VerifyOne ();" >
                            <input type="hidden" name="filas" id="filas" value="<?=$filas?>" />
                            <input type="hidden" name="id_st_ticket" id="id_st_ticket" value="<?=$id_st_ticket?>" />

                            <h6 class="mb-0 text-uppercase">Detalles</h6>
                            <hr/>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Nro de Ticket:</span>
                                    <input type="text" class="form-control" name="ticket" aria-label="First name" type="text" id="ticket"
                                           value="<?=$dato['ticket'];?>" size="20" maxlength="15"/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Estacion:</span>
                                    <select name="estacion" id="estacion" class="single-select">
                                        <option value="0" selected > Seleccionar... </option>
                                        <?php
                                        //$res2=mysqli_query($conexion, "SELECT idestacionentel, nombreestacion FROM estacionentel");
                                        $res2=mysqli_query($conexion, "SELECT e.idestacionentel, e.nombreestacion, e.tipo, c.coddep
                                                                     FROM estacionentel e
                                                                     LEFT JOIN centro c on e.idcentro = c.idcentro");
                                        while($dato2=mysqli_fetch_array($res2)){
                                            $idestacionentel  = $dato2['idestacionentel'];
                                            $descripcion = $dato2['nombreestacion'].' ('.$dato2['coddep'].'-'.$dato2['tipo'].')';
                                            echo '<option value="'.$idestacionentel.'" ';
                                            if( $idestacionentel == $idestacion ) echo 'selected';
                                            echo'>'.$descripcion.'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Fecha de Inicio:</span>
                                    <input name="fecha_inicio_rif" type="date" id="fecha_inicio_rif" size="20" class="result form-control"
                                           value="<?=$dato['fecha_inicio_rif']?>" />

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Hora Inicio:</span>
                                    <input name="hora_inicio_rif" type="time" id="hora_inicio_rif" size="15"
                                           value="<?=$dato['hora_inicio_rif']?>" class="form-control" placeholder="hh:mm" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Fecha de Fin:</span>
                                    <input name="fecha_fin_rif" type="date" id="fecha_fin_rif" size="20" class="form-control"
                                           value="<?=$dato['fecha_fin_rif']?>" />

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Hora Fin:</span>
                                    <input name="hora_fin_rif" type="time" id="hora_fin_rif" size="15"
                                           value="<?=$dato['hora_fin_rif']?>" class="form-control" placeholder="hh:mm:ss" />
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Tecnologia:</span>
                                    <select name="tecnologia" id="tecnologia" class="form-select">
                                        <option value="0" selected class="title7"> Seleccionar... </option>
                                        <?php
                                        $res2=mysqli_query($conexion, "SELECT idtecnologia, nombretecnologia FROM tecnologia");
                                        while($dato2=mysqli_fetch_array($res2)){
                                            $idtecnologia = $dato2['idtecnologia'];
                                            $nombretecnologia      = $dato2['nombretecnologia'];
                                            echo '<option value="'.$idtecnologia.'" ';
                                            if($idtecnologia==$dato['idtecnologia']) echo 'selected';
                                            echo'>'.$nombretecnologia.'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Afectacion al servicio:</span>
                                    <select name="afectacionservicio" id="afectacionservicio" class="form-select">
                                        <option value="0" selected class="title7"> Seleccionar... </option>
                                        <?php
                                        $res2=mysqli_query($conexion, "SELECT idafectacionservicio, nombreafectacionservicio FROM ticket_afectacionservicio");
                                        while($dato2=mysqli_fetch_array($res2)){
                                            $idafectacionservicio = $dato2['idafectacionservicio'];
                                            $nombreafectacionservicio     = $dato2['nombreafectacionservicio'];
                                            echo '<option value="'.$idafectacionservicio.'" ';
                                            if($idafectacionservicio==$dato['idafectacionservicio']) echo 'selected';
                                            echo'>'.$nombreafectacionservicio.'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Sistema en falla:</span>
                                    <select name="sistemafalla" id="sistemafalla" class="form-select">
                                        <option value="0" selected class="title7"> Seleccionar... </option>
                                        <?php
                                        $res2=mysqli_query($conexion, "SELECT idsistemafalla, nombresistemafalla FROM ticket_sistemafalla");
                                        while($dato2=mysqli_fetch_array($res2)){
                                            $idsistemafalla = $dato2['idsistemafalla'];
                                            $nombrefalla    = $dato2['nombresistemafalla'];
                                            echo '<option value="'.$idsistemafalla.'" ';
                                            if($idsistemafalla==$dato['idsistemafalla']) echo 'selected';
                                            echo'>'.$nombrefalla.'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Equipo en Falla:</span>
                                    <select name="equipofalla" id="equipofalla" class="form-select">
                                        <option value="0" selected class="title7"> Seleccionar... </option>
                                        <?php
                                        $res2=mysqli_query($conexion, "SELECT idequipofalla, nombreequipofalla FROM ticket_equipofalla");
                                        while($dato2=mysqli_fetch_array($res2)){
                                            $idsistemafalla = $dato2['idequipofalla'];
                                            $nombrefalla    = $dato2['nombreequipofalla'];
                                            echo '<option value="'.$idsistemafalla.'" ';
                                            if($idsistemafalla==$dato['idequipofalla']) echo 'selected';
                                            echo'>'.$nombrefalla.'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Tipo de falla:</span>
                                    <select name="tipofalla" id="tipofalla" class="form-select">
                                        <option value="0" selected class="title7"> Seleccionar... </option>
                                        <?php
                                        $res2=mysqli_query($conexion, "SELECT ticket_tipofalla.idtipofalla, ticket_tipofalla.nombretipofalla FROM ticket_tipofalla"	);
                                        while($dato2=mysqli_fetch_array($res2)){
                                            $idtipofalla = $dato2['idtipofalla'];
                                            $nombre      = $dato2['nombretipofalla'];
                                            echo '<option value="'.$idtipofalla.'" ';
                                            if($idtipofalla==$dato['idtipofalla']) echo 'selected';
                                            echo'>'.$nombre.'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Solucion:</span>
                                    <select name="solucion" id="solucion" class="form-select">
                                        <option value="0" selected class="title7"> Seleccionar... </option>
                                        <?php
                                        $res2=mysqli_query($conexion, "SELECT idsolucion, nombresolucion FROM ticket_solucion"	);
                                        while($dato2=mysqli_fetch_array($res2)){
                                            $idsolucion = $dato2['idsolucion'];
                                            $nombre      = $dato2['nombresolucion'];
                                            echo '<option value="'.$idsolucion.'" ';
                                            if($idsolucion==$dato['idsolucion']) echo 'selected';
                                            echo'>'.$nombre.'</option>';
                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Atencion:</span>
                                    <select name="atencion" id="atencion" class="form-select">
                                        <option value="0" selected class="title7"> Seleccionar... </option>
                                        <?php
                                        $res2=mysqli_query($conexion, "SELECT idatencion, nombreatencion FROM ticket_atencion");
                                        while($dato2=mysqli_fetch_array($res2)){
                                            $idatencion = $dato2['idatencion'];
                                            $nombreatencion      = $dato2['nombreatencion'];
                                            echo '<option value="'.$idatencion.'" ';
                                            if($idatencion==$dato['idatencion']) echo 'selected';
                                            echo'>'.$nombreatencion.'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <h6 class="mb-0 text-uppercase">Notificacion</h6>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Fecha:</span>
                                    <input name="fecha_not_dim" type="date" id="fecha_not_dim" size="20" class="form-control"
                                           value="<?=$dato['fecha_not_dim']?>" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Hora:</span>
                                    <input name="hora_not_dim" type="time" id="hora_not_dim" size="15" class="form-control"
                                           value="<?=$dato['hora_not_dim']?>" placeholder="hh:mm" />
                                </div>
                            </div>

                            <h6 class="mb-0 text-uppercase">Intervencion en sitio</h6>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Fecha:</span>
                                    <input name="fecha_not_sitio" type="date" id="fecha_not_sitio" size="20" class="form-control"
                                           value="<?=$dato['fecha_not_sitio']?>" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Hora:</span>
                                    <input name="hora_not_sitio" type="time" id="hora_not_sitio" size="15" class="form-control"
                                           value="<?=$dato['hora_not_sitio']?>" placeholder="hh:mm" />
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">Descripcion de falla del servicio y medida de restitucion</label>
                                <textarea class="form-control" name="descripcionfalla" id="descripcionfalla" rows="3"><?=$dato['descripcionfalla']?></textarea>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">Observaciones</label>
                                <textarea class="form-control" name="observaciones" id="observaciones" rows="3"><?=$dato['observaciones']?></textarea>
                            </div>

                            <div class="row row-cols-auto g-3">
                                <?php if (isAdmin() || isExpert()) { ?>
                                <div class="col">
                                    <input type="button" id="boton" class="btn btn-primary px-5" value="Guardar" />
                                </div>
                                <?php } ?>
                                <div class="col">
                                    <input type="button" class="btn btn-secondary px-5" name="Submit" value="Cancelar" onclick="location.href='<?=$link_modulo?>?path=tickets.php'" />
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            <!--</div>
        </div>-->

        <div id="select2lista"></div>
        <span id="res"></span>

        <!-- _todo_ -->
    </div>
</div>

<script type="text/javascript" src="../../paquetes/autocompletar/ajax.js"></script>
<script type="text/javascript" src="../../paquetes/autocompletar/ajax-dynamic-list.js"></script>
<link href="../../paquetes/autocompletar/ajax-dynamic-list.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="../../paquetes/textarea/jquery-latest.js"></script>
<script type="text/javascript" src="../../paquetes/textarea/jquery.textarearesizer.compressed.js"></script>


<script type="text/javascript">
	/* jQuery textarea resizer plugin usage */
	/*$(document).ready(function() {
	    $('textarea.resizable:not(.processed)').TextAreaResizer();
		//rellenarEstacion();		
	});*/
</script>

<script type="text/javascript">

	$(document).ready(function() {
        //$('textarea.resizable:not(.processed)').TextAreaResizer();
		$('#boton').click(function(){
			var mensaje;
	    	var opcion = confirm("Guardar los cambios?");
	    	if (opcion == true) {	

	    	    		

					
					var id_st_ticket=$('#id_st_ticket').val();//ticket,
	    			var ticket=$('#ticket').val();//ticket,
					//var idnodo=$('#idnodo').val();//idnodo,
					var fecha_inicio_rif=$('#fecha_inicio_rif').val();//fecha_inicio_rif,
					var hora_inicio_rif=$('#hora_inicio_rif').val();//hora_inicio_rif,
					var fecha_fin_rif=$('#fecha_fin_rif').val();//fecha_fin_rif,
					var hora_fin_rif=$('#hora_fin_rif').val();//hora_fin_rif,
					var fecha_not_dim=$('#fecha_not_dim').val();//fecha_not,
					var hora_not_dim=$('#hora_not_dim').val();//hora_not,
					var fecha_not_sitio=$('#fecha_not_sitio').val();//fecha_not_sitio,
					var hora_not_sitio=$('#hora_not_sitio').val();//hora_not_sitio,
					var observaciones=$('#observaciones').val();//observaciones,
					var descripcionfalla=$('#descripcionfalla').val();//descripcionfalla,
					var idtecnologia=$('#tecnologia').val();//idtecnologia,
					var idafectacionservicio=$('#afectacionservicio').val();//idafectacionservicio,
					var idsistemafalla=$('#sistemafalla').val();//idsistemafalla,
					var idtipofalla=$('#tipofalla').val();//idtipofalla,
					var idequipofalla=$('#equipofalla').val();//idequipofalla,
					var idatencion=$('#atencion').val();//idtipointervencion,
					var idestacion=$('#estacion').val();//idestacionentel,
					var idsolucion=$('#solucion').val();//idsolucion
					

	    		jQuery.post("../../paquetes/ajax/update_ticketn.php", {
	    			id_st_ticket:id_st_ticket,
	    			ticket:ticket,
					idnodo:idestacion, // ojo
					fecha_inicio_rif:fecha_inicio_rif,
					hora_inicio_rif:hora_inicio_rif,
					fecha_fin_rif:fecha_fin_rif,
					hora_fin_rif:hora_fin_rif,
					fecha_not_dim:fecha_not_dim,
					hora_not_dim:hora_not_dim,
					fecha_not_sitio:fecha_not_sitio,
					hora_not_sitio:hora_not_sitio,
					observaciones:observaciones,
					descripcionfalla:descripcionfalla,
					idtecnologia:idtecnologia,
					idafectacionservicio:idafectacionservicio,
					idsistemafalla:idsistemafalla,
					idtipofalla:idtipofalla,
					idequipofalla:idequipofalla,
					idatencion:idatencion,
					idestacion:idestacion,
					idsolucion:idsolucion
				}, function(data, textStatus){
					if(data == 1){
						$('#res').html('Datos insertados correctamente');
						$('#res').css('color','green');

                        //window.location.href = '../../usuarios/modulos/seguimiento_tecnico.php?path=tickets.php';
                        //setTimeout( function() { window.location.href = '../../usuarios/modulos/seguimiento_tecnico.php?path=tickets.php'; }, 3000 );

                        info_notify('Datos actualizados correctamente', 'info');
                        setTimeout( function() { window.location.href = '<?=$link_modulo?>?path=tickets.php'; }, 3000 );

					} else{

					    if (data == 0){
                            info_notify('Datos actualizados correctamente', 'info');
                            setTimeout( function() { window.location.href = '<?=$link_modulo?>?path=tickets.php'; }, 3000 );
                        }

                        if (data == -1){
                            info_notify('Error revisar los datos', 'warning');
                        }

						$('#res').html(data);
						$('#res').css('color','red');

                    }
				});	

				//document.amper.boton.disabled=true;

	    	}

			
		});



		


		$('#idnodo').change(function(){
			$('#estacion').val('');
			rellenarEstacion();
			//$('#estacion').val('ARQUE');
			//alert('funciona');			
		});
		//-------------------------------------------------------------------------------
		var equipofalla = $('#equipofalla');
        //var equipofalla_sel = $('#equipofalla_sel');
		$('#sistemafalla').change(function(){
			//alert('funciona');
			var idsistemafalla=$(this).val();
			if (idsistemafalla!==''){
				//alert('funciona');
				$.ajax({
					data:{idsistemafalla:idsistemafalla},
					dataType:'html',
					type:'POST',
					url:'../../paquetes/ajax/get_equipofalla.php'
				}).done(function(data){
					equipofalla.html(data);
					equipofalla.prop('disabled',false);
				});
			}else{
				equipofalla.val('');
				equipofalla.prop('disabled',false)
			}
			//$('#equipofalla')
		});
			//---------------------------------------------------------------------------
		var tipofalla = $('#tipofalla');
        //var equipofalla_sel = $('#equipofalla_sel');
		$('#equipofalla').change(function(){
			//alert('funciona');
			var idequipofalla=$(this).val();
			if (idequipofalla!==''){
				//alert('funciona');
				$.ajax({
					data:{idequipofalla:idequipofalla},
					dataType:'html',
					type:'POST',
					url:'../../paquetes/ajax/get_tipofalla.php'
				}).done(function(data){
					tipofalla.html(data);
					tipofalla.prop('disabled',false);
				});
			}else{
				tipofalla.val('');
				tipofalla.prop('disabled',false)
			}
			//$('#equipofalla')
		});

			//---------------------------------------------------------------------------
		var solucion = $('#solucion');
        //var equipofalla_sel = $('#equipofalla_sel');
		$('#tipofalla').change(function(){
			//alert('funciona');


			var idtipofalla=$(this).val();
			var idequipofalla=$('#equipofalla').val();
			//alert(idequipofalla);

			if (idtipofalla!==''){
				//alert('funciona');
				$.ajax({
					data:{idtipofalla:idtipofalla, idequipofalla:idequipofalla},
					dataType:'html',
					type:'POST',
					url:'../../paquetes/ajax/get_solucion.php'
				}).done(function(data){
					solucion.html(data);
					solucion.prop('disabled',false);
				});
			}else{
				solucion.val('');
				solucion.prop('disabled',false)
			}
			//$('#equipofalla')
		});

	});

</script>

<script type="text/javascript">
	function rellenarEstacion(){
		try{
			$.ajax({
				type:"POST",
				url:"../../paquetes/ajax/search_idnodo.php",
				data:"idestacion=" + $('#idnodo').val(),
				success:function(r){
					$('#select2lista').html(r);

				}
			});
			  //alert('bien');
		}
			catch(error) {
			  console.error(error);
			  alert(error);
			  // expected output: ReferenceError: nonExistentFunction is not defined
			  // Note - error messages will vary depending on browser
			}
	}
</script>


<script src="../../js/validador.js" type=text/javascript></script>

<script type="text/javascript">

function VerifyOne () {
	
if( checkField( document.amper.ticket, isName, false) &&
	checkField( document.amper.idnodo, isName, false) &&
	isNull( document.amper.fecha_inicio_rif) && 
	isNull( document.amper.hora_inicio_rif)&&
	checkField( document.amper.tipo, isName, false) &&
	checkField( document.amper.problema, isName, false) &&
	isNull( document.amper.fecha_not)&&
	isNull( document.amper.hora_not)
  )
{ 
	if(confirm("Esta Guardando esta información del TICKET"))
	{	return true;	}
	else {return false;}   

}
else {return false;}   	
}
</script>

