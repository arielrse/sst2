<?php
$web=$_SESSION["web"];

if (isset($_GET['idevento']))   $idevento     = $_GET['idevento'];
if (isset($_GET['idform']))     $idformulario = $_GET['idform'];
if (isset($_GET['idformtto'])) $idformtto 	= $_GET['idformtto'];
if (isset($_GET['nombreForm'])) $nombreForm   = $_GET['nombreForm'];
if (isset($_GET['params']))       $params	= base64_decode($_GET['params']);

$resultado = mysqli_query($conexion, "
SELECT ev.idevento, ev.estado, ev.inicio, ev.fin, es.codigo as codigoest, es.nombre as nombreest, g.codigo AS codigog, c.idcentro, c.codigo as codCentro
FROM evento ev
JOIN estacion es ON ev.idestacion = es.idestacion
JOIN grupo g 	 ON ev.idgrupo = g.idgrupo
JOIN centro c    ON ev.idcentro = c.idcentro
WHERE ev.idevento = '$idevento' ");

$dato = mysqli_fetch_array($resultado);
$arr = explode('-', $dato['inicio']);
$anio			= $arr[0];
$codCentro 		= $dato['codCentro'];
$ini			= $dato['inicio'];
$fin			= $dato['fin'];
$idev 			= $idevento;
$codEs			= $dato['codigoest'];
$nomEs 			= $dato['nombreest'];

//$params = "&anio=$anio&codCentro=$codCentro&ini=$ini&fin=$fin&idev=$idev&codEs=$codEs&nomEs=$nomEs";

$resultQuery = mysqli_query($conexion, "SELECT * FROM formulario_p002 p WHERE p.id = ".$idformtto);
$result      = mysqli_fetch_array($resultQuery);

$titulo = $result['titulo'];
$p01	= $result['p01'];
$p02	= $result['p02'];
$p03	= $result['p03'];
$p04	= $result['p04'];
$p05	= $result['p05'];
$p06	= $result['p06'];
$p07	= $result['p07'];

$opEstado 		= array("...", "En uso", "En desuso");
$opTipoEstruct1 = array("...", 	"Gabinete outdoor de calle",
	 						   	"Monoposte",
								"Torre Arriostrada GreenField",
								"Torre Arriostrada Rooftop",
								"Torre Autosoportada GreenField",
								"Torre Autosoportada Rooftop",
								"Reticular",
								"Wall Mounting",
								"InDoor",
								"Poste",
								"Tanque");

$opTipoEstruct2 = array("...",	"Cow",
								"Monoposte",
								"Mastil",
								"Torre Arriostrada GreenField",
								"Torre Arriostrada Rooftop",
								"Torre Autosoportada GreenField",
								"Torre Autosoportada Rooftop",
								"Reticular",
								"Wall Mounting",
								"InDoor",
								"Poste",
								"Tanque");

?>
<form name="amper" method="post" action="<?=$link_modulo_r?>" onSubmit=" return VerifyOne ();">
	<input type="hidden" name="path" value="prev_nuevo_form_P002_r.php" />
	<input type="hidden" name="idevento" value="<?=$idevento?>" />
	<input type="hidden" name="idformulario" value="<?=$idformulario?>" />
	<input type="hidden" name="params" value="<?=$params?>" />
	<input type="hidden" name="idformtto" value="<?=$idformtto?>" />

<table width="1000" align="center" class="table2">
	<caption>FORMULARIO DE MANTENIIENTO PREVENTIVO <br /> ESTRUCTURA</caption>
	<tr>
		<th width="25%">Estaci�n</th>
		<td width="75%" class="resaltar"><? echo $codEs . " - " . $nomEs; ?></td>
	</tr>
	<tr>
		<th width="25%">Titulo</th>
		
		<td width="75%" class="resaltar">
			<input name="titulo" type="text" id="titulo" value="<?=$titulo?>" size="70" />
		</td>
	</tr>
	
	<tr>
		<th colspan="2"><strong class="verde">1.- Relevamiento</strong></th>
	</tr>
	
	<tr>
		<th><strong>ESTRUCTURA 1</strong></th>
		<td></td>
	</tr>
	
	<tr>
		<th width="25%">Estado</th>
		<td width="75%">
			<select name="p01">
				<?
				foreach($opEstado as $opcion){
					echo '<option value="'.$opcion.'" ';
					if($opcion == $p01) echo 'selected';
					echo'>'.$opcion.'</option>';
				}
				?>
			</select>
		</td>
	</tr>
<tr>
		<th width="25%">Tipo de esctructura</th>
		<td width="75%">
			<select name="p02">
				<?
				foreach($opTipoEstruct1 as $opcion){
					echo '<option value="'.$opcion.'" ';
					if($opcion == $p02) echo 'selected';
					echo'>'.$opcion.'</option>';
				}
				?>
			</select>
		</td>
	</tr>
	<tr>
	  <th width="25%">Altura de la estructura (m)</th>
	  <td width="75%"><input name="p03" type="text" id="p03" size="10" value="<?=$p03?>" /></td>
	</tr>
	<tr>
		<th><strong>ESTRUCTURA 2</strong></th>
		<td></td>
	</tr>
	<tr>
		<th width="25%">Estado</th>
		<td width="75%">
			<select name="p04">
				<?
				foreach($opEstado as $opcion){
					echo '<option value="'.$opcion.'" ';
					if($opcion == $p04) echo 'selected';
					echo'>'.$opcion.'</option>';
				}
				?>
			</select>
		</td>
	</tr>
	<tr>
		<th width="25%">Tipo de esctructura</th>
		<td width="75%">
			<select name="p05">
				<?
				foreach($opTipoEstruct2 as $opcion){
					echo '<option value="'.$opcion.'" ';
					if($opcion == $p05) echo 'selected';
					echo'>'.$opcion.'</option>';
				}
				?>
			</select>
		</td>
	</tr>
	<tr>
	  	<th width="25%">Altura de la estructura (m)</th>
	  	<td width="75%"><input name="p06" type="text" id="p06" size="10" value="<?=$p06?>" /></td>
	</tr>
</table>
<br />
<table  width="1000" align="center" class="table2">
		<tr>
			<th colspan="11"><strong class="verde">2.- Mantenimiento Preventivo</strong></th>
		</tr>
		<tr align="center">
			<td width='40%'></td>
			<td width='6%' class="azul2">No Existe</td>
			<td width='6%'>Malo</td>
			<td width='6%'>Bajo</td>
			<td width='6%'>Medio</td>
			<td width='6%'>Alto</td>
			<td width='6%'>Bueno</td>
			<td width='6%'>Reparado</td>
			<td width='6%'>Ajustado</td>
			<td width='6%'>Cambiado</td>
			<td width='6%'>Pendiente</td>
		</tr>
		<?
		/*$text =	"Verificar la verticalidad de la estructura;;;;;;;;;;|
		Verificar si no existe puntos de oxidaci�n en la estructura y tomar fotograf�as en caso de encontrar anormalidades.;;;;;;;;;;|
		Verificar la tensi�n de los cables de arriostramiento;;;;;;;;;;|
		Verificar el estado del pintado de la estructura y adjuntar fotograf�as en caso de encontrar anormalidades.;;;;;;;;;;";*/

		$text = $p07;
		$arrays = explode('|',$text);
		$result = "";
		$a = 1;
		foreach ($arrays as $array){
			$subarray = explode(';', $array);
			$result .= "<tr align=''>";
			for ($i = 0; $i < sizeof($subarray); $i++) {
				if($i == 0){
					$result .= "<td>$subarray[$i]</td>";
					$result .= "<input name='p07$a' id='p07$a$b' type='hidden' value='$subarray[$i]'>";
				}else{
					//$result .= "<td align='center'><input type='checkbox' name='p07$a' value='$a'></td>";
					$result .= "<td align='center'><input type='checkbox' name='p07$a' value='$a'";
					if($subarray[$i] == $a) $result .= "checked";
					$result .= " ></td>";
				}
				$a++;
			}
			$result .= "</tr>";
		}
		echo $result;
		?>
		<input type="hidden" name="size7" value="<?=$a?>" />
</table>
<br />
</table>
<table width="1000" align="center" class="table2" cellspacing="2" class="table2">
	<tr>
		<td>
			<!--<input name="guardar" type="submit"  value="Guardar" />
			<input type="button" name="Submit" value="<< Atras" onclick="javascript:history.back(1)" />-->
			<?php include("prev_form_buttons.php"); ?>
		</td>
	</tr>
</table>
</form>

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