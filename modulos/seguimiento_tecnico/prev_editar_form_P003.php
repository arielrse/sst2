<HTML>
<HEAD>
<TITLE> T�tulo de la p�gina </TITLE>


	<STYLE type="text/css">
		#container {
  margin: 20px;
  width: 400px;
  height: 8px;
  position: relative;
}

 .datagrid-cell{
        font-size: 11px;
    }

  
.datagrid-header .datagrid-cell span{
    font-weight: bold;
    /*color: blue;*/
    font-size:10px;
}	


</STYLE>
</HEAD>
<BODY>
<?  

$web=$_SESSION["web"];

if (isset($_GET['idevento']))   $idevento     = $_GET['idevento'];
if (isset($_GET['idform']))     $idformulario = $_GET['idform'];
if (isset($_GET['idformtto'])) $idformtto 	= $_GET['idformtto'];
if (isset($_GET['nombreForm'])) $nombreForm   = $_GET['nombreForm'];
if (isset($_GET['params']))       $params	= base64_decode($_GET['params']);

$resultado = mysqli_query($conexion, "
SELECT ev.idevento, ev.estado, ev.inicio, ev.fin, es.codigo as codigoest, es.nombre as nombreest,es.departamento as departamento,es.provicia as provincia, g.codigo AS codigog, c.idcentro, c.codigo as codCentro,c.nombre as nombrecentro, f.responsable, f.fechamantenimiento, f.p13, f.p14, f.observaciones FROM evento ev
JOIN estacion es ON ev.idestacion = es.idestacion
JOIN grupo g 	 ON ev.idgrupo = g.idgrupo
JOIN centro c    ON ev.idcentro = c.idcentro
JOIN p003_formulario f ON ev.idevento = f.idevento
WHERE f.id = '$idformtto' ");
$dato = mysqli_fetch_array($resultado);



$arr = explode('-', $dato['inicio']);

$anio			= $arr[0];
$codCentro 		= $dato['codCentro'];
$nombrecentro 	= $dato['nombrecentro'];
$codCentro 		= $dato['codCentro'];
$ini			= $dato['inicio'];
$fin			= $dato['fin'];
$idev 			= $idevento;
$codEs			= $dato['codigoest'];
$nomEs 			= $dato['nombreest'];
$departamento 	= $dato['departamento'];
$provincia 		= $dato['provincia'];
$responsable 	= $dato['responsable'];
$fechamantenimiento 		= $dato['fechamantenimiento'];
$p13 		= $dato['p13'];
$p14 	= $dato['p14'];
$observaciones 	= $dato['observaciones'];




$resultados=mysqli_query($conexion, "SELECT localidad FROM estacion,estacionentel
WHERE estacion.codigo=estacionentel.idsitio
AND estacion.codigo='$codEs'");

$datolocalidad = mysqli_fetch_array($resultados);
$localidad=$datolocalidad["localidad"];



$resultQuery = mysqli_query($conexion, "SELECT * FROM formulario_p003 p WHERE p.id = ".$idformtto);
$result      = mysqli_fetch_array($resultQuery);

$titulo = $result['titulo'];
$p01	= $result['p01'];
$p02	= $result['p02'];
$p03	= $result['p03'];
$p04	= $result['p04'];
$p05	= $result['p05'];
$p06	= $result['p06'];
$p07	= $result['p07'];
$p08	= $result['p08'];
$p09	= $result['p09'];
$p10	= $result['p10'];
$p11	= $result['p11'];
$p12	= $result['p12'];

$opContacto	= array("...", "Sereno", "Propietario(a)", "No existe", "Comunario");

?>
<form name="amper" method="post" action="<?=$link_modulo_r?>" onSubmit=" return VerifyOne ();">
	<input type="hidden" name="path" value="prev_nuevo_form_P003_r.php" />
	<input type="hidden" name="idevento" value="<?=$idevento?>" />
	<input type="hidden" name="idformulario" value="<?=$idformulario?>" />
	<input type="hidden" name="params" value="<?=$params?>" />
	<input type="hidden" name="idformtto" value="<?=$idformtto?>" />

<table width="900" align="center" class="table2">
	<caption>FORMULARIO DE MANTENIIENTO PREVENTIVO <br /> PERSONA DE CONTACTO EN SITIO</caption>
</table>
<TABLE width="900" align="center" class="table2">
	
	<TR>
		<TD>
			CM/SCM:
		</TD>
		<TD>
			<input name="nombrecentro" type="text" id="nombrecentro" size="30" value="<?ECHO($nombrecentro);?>" />
		</TD>				
		<TD>
			
		</TD>				
		<TD>
			Departamento:
		</TD>				
			
		<TD>
			<input name="departamento" type="text" id="departamento" size="30" value="<? ECHO($departamento);?>" />
		</TD>				
		
	</TR>		
	<TR>
		<TD>
			Nomb. Responsable:
		</TD>
		<TD>
			<input name="responsable" type="text" id="responsable" size="30" value="<? ECHO(utf8_decode($responsable));?>" />
		</TD>				
		<TD>
			
		</TD>				
		<TD>
			Provincia:
		</TD>				
			
		<TD>
			<input name="provincia" type="text" id="provincia" size="30" value="<? ECHO($provincia);?>" />
		</TD>				
		
	</TR>		
	<TR>
		<TD>
			Fecha de mantenimiento:
		</TD>
		<TD>
			<input name="fechamantenimiento" value="<? ECHO($fechamantenimiento);?>" type="text" id="fechamantenimiento" size="10" class="Text_left" value="" onclick="displayCalendar(this,'yyyy-mm-dd',this,false)" readonly="yes"/>
            <img onclick="displayCalendar(document.amper.fechamantenimiento,'yyyy-mm-dd',this,false)" src="../../img/cal.gif" alt="Seleccionar fecha" width="16" height="16">		
			
		</TD>				
		<TD>
			
		</TD>				
		<TD>
			Localidad:
		</TD>				
			
		<TD>					
			
			<input name="localidad" type="text" id="localidad" size="30" value="<? ECHO($localidad);?>" />
		</TD>				
		
	</TR>
	<TR>
		<TD>
			Property_id:
		</TD>
		<TD>
			<input name="nomES" type="text" id="nomEs" size="30" value="<? ECHO($nomEs);?>" />
			
		</TD>				
		<TD>
			
		</TD>				
		<TD>
			ID Sitio:
		</TD>				
			
		<TD>
			<input name="localidad" type="text" id="localidad" size="30" value="<? echo($codEs); ?>" />
		</TD>				
		
	</TR>				
		

</TABLE>
	

<br />



<br />
<table width="900" align="center" class="table2">
	<tr> <!-- Filas -->
		<th width="25%">Estaci�n</th>	<!-- Columna -->
		<td width="75%" class="resaltar"><? echo $codEs . " - " . $nomEs; ?></td> <!-- Columna -->
	</tr>
	<tr>
		<th width="25%">Titulo</th>
		<td width="75%" class="resaltar">
			<input name="titulo" type="text" id="titulo" value="<?=$titulo?>" size="70" />
		</td>
	</tr>
	
	<tr><th colspan="2"><strong class="verde">1.- Relevamiento</strong></th></tr>
	
	<tr><td colspan="2" class="cafe"><strong>PERSONA DE CONTACTO EN SITIO 1</strong></td></tr>
	
	<tr>
		<th width="25%">Persona de contacto en sitio</th>
		<td width="75%">
			<select name="p01">
				<?
				foreach($opContacto as $opcion){
					echo '<option value="'.$opcion.'" ';
					if($opcion == $p01) echo 'selected';
					echo'>'.$opcion.'</option>';
				}
				?>
			</select>
		</td>
	</tr>
	<tr>
	  	<th width="25%">Apellido Paterno</th>
	  	<td width="75%"><input name="p02" type="text" id="p02" size="20" value="<?=$p02?>" /></td>
	</tr>
	<tr>
	  	<th width="25%">Apellido Materno</th>
	  	<td width="75%"><input name="p03" type="text" id="p03" size="20" value="<?=$p03?>" /></td>
	</tr>
	<tr>
	  	<th width="25%">Nombres</th>
		<td width="75%"><input name="p04" type="text" id="p04" size="20" value="<?=$p04?>" /></td>
	</tr>
	<tr>
	  	<th width="25%">Tel. Celular</th>
		<td width="75%"><input name="p05" type="text" id="p05" size="20" value="<?=$p05?>" /></td>
	</tr>
	<tr>
	  	<th width="25%">Tel. Celular (ALTERNATIVO)</th>
		<td width="75%"><input name="p13" type="text" id="p13" size="20" value="<?=$p13?>" /></td>
	</tr>
	<tr>
	  	<th width="25%">Tel. Fijo</th>
		<td width="75%"><input name="p06" type="text" id="p06" size="20" value="<?=$p06?>" /></td>
	</tr>

	<tr><td colspan="2" class="cafe"><strong>PERSONA DE CONTACTO EN SITIO 2</strong></td></tr>

	<tr>
		<th width="25%">Persona de contacto en sitio</th>
		<td width="75%">
			<select name="p07">
				<?
				foreach($opContacto as $opcion){
					echo '<option value="'.$opcion.'" ';
					if($opcion == $p07) echo 'selected';
					echo'>'.$opcion.'</option>';
				}
				?>
			</select>
		</td>
	</tr>

	<tr>
		<th width="25%">Apellido Paterno</th>
		<td width="75%"><input name="p08" type="text" id="p08" size="20" value="<?=$p08?>" /></td>
	</tr>
	<tr>
		<th width="25%">Apellido Materno</th>
		<td width="75%"><input name="p09" type="text" id="p09" size="20" value="<?=$p09?>" /></td>
	</tr>
	<tr>
		<th width="25%">Nombres</th>
		<td width="75%"><input name="p10" type="text" id="p10" size="20" value="<?=$p10?>" /></td>
	</tr>
	<tr>
		<th width="25%">Tel. Celular</th>
		<td width="75%"><input name="p11" type="text" id="p11" size="20" value="<?=$p11?>" /></td>
	</tr>
	
	<tr>
		<th width="25%">Tel. Celular (ALTERNATIVO)</th>
		<td width="75%"><input name="p14" type="text" id="p14" size="20" value="<?=$p14?>" /></td>
	</tr>

	<tr>
		<th width="25%">Tel. Fijo</th>
		<td width="75%"><input name="p12" type="text" id="p12" size="20" value="<?=$p12?>" /></td>
	</tr>

</table>

<br />
<TABLE width="900" align="center" class="table2">
		<caption>Otras observaciones</caption>
	<td colspan="2" align="center">
	    
	<textarea name="observaciones" class="resizable" style="width: 9000px; height: 80px;" id="observaciones" ><? ECHO(utf8_decode($observaciones));?></textarea>
</td>
</TABLE>
<br />

<table width="900" align="center" class="table2" cellspacing="2" class="table2">
	<tr>
		<td>
			<!--<input name="guardar" type="submit"  value="Guardar" />
			<input type="button" name="Submit" value="<< Atras" onclick="javascript:history.back(1)" />-->
			<?php include("prev_form_buttons.php"); ?>
		</td>
	</tr>
</table>
</form>

<script>
     var xa = $("#nombrecentro").val();
    var campo = document.getElementById('responsable');
    if(xa=='VILLA TUNARI'){
    campo.readOnly = true; // Se a�ade el atributo
    }
</script>

<script type="text/javascript" src="../../paquetes/autocompletar/ajax.js"></script>
<script type="text/javascript" src="../../paquetes/autocompletar/ajax-dynamic-list.js"></script>
<link href="../../paquetes/autocompletar/ajax-dynamic-list.css" rel="stylesheet" type="text/css" />
<SCRIPT src="../../js/epoch_classes.js" type=text/javascript></SCRIPT>
<LINK href="../../css/epochprime_styles.css" type=text/css rel=stylesheet />
<script src="../../paquetes/nicEdit/nicEdit.js" type="text/javascript"></script>             

<script type=text/javascript>
bkLib.onDomLoaded(function() {
	new nicEditor({buttonList : ['removeformat','bold','italic','underline','html']}).panelInstance('obs');
});
</script>
<script type=text/javascript>
var calendar;
var calendarb;
window.onload = function() {
	calendar = new Epoch('dp_cal','popup',document.getElementById('fecha_ini'));
	calendarb = new Epoch('dp_cal','popup',document.getElementById('fecha_fin'));
}
</script>  

<script type="text/javascript">var GB_ROOT_DIR = "./../../paquetes/greybox/";</script>
<script type="text/javascript" src="../../paquetes/greybox/AJS.js"></script>
<script type="text/javascript" src="../../paquetes/greybox/AJS_fx.js"></script>
<script type="text/javascript" src="../../paquetes/greybox/gb_scripts_no_reload.js"></script>
<link href="../../paquetes/greybox/gb_styles.css" rel="stylesheet" type="text/css" media="all" />
<link href="../../paquetes/tooltip/tooltip.css" rel="stylesheet" type="text/css">
<script language=javascript type="text/javascript" src="../../paquetes/tooltip/tooltip.js"></script>

<script src="../../js/validador.js" type=text/javascript></script>
<script type="text/javascript">
function VerifyOne () {
    if( checkField( document.amper.cliente, isName, false ) &&
	    isNull( document.amper.fecha_ini) &&
		isNull( document.amper.obs) 
		)
		{
			if(confirm("Verifico bien los datos antes de continuar?"))
			{return true;}
			else {return false;}
    }
else {	
return false;
     }
}
</script>




<script type=text/javascript>
bkLib.onDomLoaded(function() {
	new nicEditor({buttonList : ['removeformat','bold','italic','underline','html']}).panelInstance('obs');
});
</script>
<script type=text/javascript>
var calendar;
var calendarb;
window.onload = function() {
	//calendar = new Epoch('dp_cal','popup',document.getElementById('fechamantenimiento'));
	//calendarb = new Epoch('dp_cal','popup',document.getElementById('fecha_fin'));
}
</script>  

<link type="text/css" rel="stylesheet" href="../../paquetes/calendar/dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>
<script type="text/javascript" src="../../paquetes/calendar/dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>



<script>
var maximo_lineas=9;  //Pon lo que quieras
function checar(contenido){
lineas=contenido.split("\n");
if(lineas.length<=maximo_lineas){
return true
}else{
return false
}
}
</script>


</BODY>
</HTML>