<?php
$mes      = isset($_GET["mes"]) ? $_GET["mes"] : date("n");
$anio     = isset($_GET["anio"]) ?  $_GET["anio"] : date("Y");
$idcentro = isset($_GET["cm"]) ? $_GET["cm"] : 0;

if ($idcentro == 0) {
    $mes      = isset($_POST["mes"]) ? $_POST["mes"] : date("n");
    $anio     = isset($_POST["anio"]) ? $_POST["anio"] : date("Y");
    $idcentro = isset($_POST["idcentro"]) ? $_POST["idcentro"] : 0;
}

if ($idcentro == 0){
    $resCentro = mysqli_query($conexion, "select c.idcentro from centro c where c.iddepartamento = " . $iddepartamento);
    $arrayCentro = mysqli_fetch_array($resCentro);
    $idcentro = $arrayCentro[0];
}

//$param_volver = base64_encode("&mes=$mes&anio=$anio&centro=$codCentro");
//$param_volver ="";

/** ----- **/

# definimos los valores iniciales para nuestro calendario
//$month      = date("n")-1;
$month      = $mes;
//$year       = date("Y");
$year       = $anio;
$diaActual  = date("j");

# Devuelve 0 para domingo, 6 para sabado
$diaSemana = date("w",mktime(0,0,0,$month,1,$year))+0;
# Obtenemos el ultimo dia del mes
$ultimoDiaMes = date("d",(mktime(0,0,0,$month+1,1,$year)-1));
$meses = array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

$inicio = $anio."-".$mes."-"."01";
$fin    = $anio."-".$mes."-".$ultimoDiaMes;

$resultado = mysqli_query($conexion, "
SELECT ev.idevento, ev.estado, ev.inicio, ev.fin, s.codsitio AS codigo, s.nombre, g.idgrupo, g.codigo AS codigog, c.idcentro, c.codigo AS codCentro
FROM evento ev
JOIN sitio s ON ev.idsitio = s.idsitio
JOIN grupo g 	 ON ev.idgrupo = g.idgrupo
JOIN centro c    ON ev.idcentro = c.idcentro
WHERE ev.inicio BETWEEN '$inicio' AND '$fin'
AND c.idcentro = " . $idcentro);

$filas	   = mysqli_num_rows($resultado);

$param_volver = "&mes=$mes&anio=$anio&cm=$idcentro";

?>
<div class="page-wrapper">
    <div class="page-content">

        <table width="100%">
            <tr>
                <td  align="center"><span class="naranja">&nbsp;CM/SCM: <?php /*echo $idcentro . ' - ' . $mes . ' - ' . $ultimoDiaMes;*/ ?></span></td>
                <td>
                    <form name="amper" method="post" action="<?=$link_modulo?>?path=cronograma_cm.php">
                        <input type="hidden" name="param_volver" id="param_volver" value="<?php echo $param_volver ?>" />
                        <select name="idcentro" class="selectbuscar">
                            <?php
                            $res=mysqli_query($conexion, "SELECT idcentro, nombre, codigo FROM centro where iddepartamento=".$iddepartamento);
                            while($dato=mysqli_fetch_array($res)){
                                $nombre = $dato['nombre'];
                                $codigo = $dato['codigo'];
                                $idc    = $dato['idcentro'];
                                $selected = '';
                                if($idcentro == $idc) $selected = "class='naranja' selected";
                                echo"<option value='$idc' $selected>$nombre</option>";
                            }
                            ?>
                        </select>

                        <select name="mes" class="selectbuscar">
                            <option value="01" <?php if($mes=='01') echo"class='naranja' selected"; ?>>Enero</option>
                            <option value="02" <?php if($mes=='02') echo"class='naranja' selected"; ?>>Febrero</option>
                            <option value="03" <?php if($mes=='03') echo"class='naranja' selected"; ?>>Marzo</option>
                            <option value="04" <?php if($mes=='04') echo"class='naranja' selected"; ?>>Abril</option>
                            <option value="05" <?php if($mes=='05') echo"class='naranja' selected"; ?>>Mayo</option>
                            <option value="06" <?php if($mes=='06') echo"class='naranja' selected"; ?>>Junio</option>
                            <option value="07" <?php if($mes=='07') echo"class='naranja' selected"; ?>>Julio</option>
                            <option value="08" <?php if($mes=='08') echo"class='naranja' selected"; ?>>Agosto</option>
                            <option value="09" <?php if($mes=='09') echo"class='naranja' selected"; ?>>Septiembre</option>
                            <option value="10" <?php if($mes=='10') echo"class='naranja' selected"; ?>>Octubre</option>
                            <option value="11" <?php if($mes=='11') echo"class='naranja' selected"; ?>>Noviembre</option>
                            <option value="12" <?php if($mes=='12') echo"class='naranja' selected"; ?>>Diciembre</option>
                        </select>

                        <select name="anio" class="selectbuscar">
                            <option value="2021" <? if($anio==2021) echo"class='naranja' selected"; ?>>2021</option>
                            <option value="2022" <? if($anio==2022) echo"class='naranja' selected"; ?>>2022</option>
                            <option value="2023" <? if($anio==2023) echo"class='naranja' selected"; ?>>2023</option>
                            <option value="2024" <? if($anio==2024) echo"class='naranja' selected"; ?>>2024</option>
                        </select>&nbsp;
                        <input class="btn btn-sm btn-secondary px-3" name="ver" type="submit"  value="Ver" />

                        <?php if (isAdmin() || isExpert()) { ?>
                        <input name="nuevoE" type="button" value="Nuevo" class="btn btn-sm btn-primary px-3"
                               onClick="location.href='<?=$link_modulo?>?path=nuevo_evento.php<?=$param_volver?>'" />
                        <?php } ?>
                    </form>
                </td>
                <td>
                    <div>
                        <i class='bx bxs-circle text-danger align-middle'><small>Pendiente</small></i>
                        <i class='bx bxs-circle text-primary align-middle'><small>Ejecutado</small></i>
                        <i class='bx bxs-circle text-warning align-middle'><small>Reprogramado</small></i>
                    </div>
                </td>
            </tr>
        </table>

        <table width="100%"  class="table table-sm mb-0 table-bordered table-hover">
        <!--<caption>CRONOGRAMA CENTRO DE MANTENIMIENTO</caption>-->
            <tr bgcolor="#d3d3d3">
                <td width="1%"  class="small text-dark" align="center">F.</td>
                <td width="20%" class="small text-dark" align="center">GRUPO 1</td>
                <td width="20%" class="small text-dark" align="center">GRUPO 2</td>
                <td width="20%" class="small text-dark" align="center">GRUPO 3</td>
                <td width="20%" class="small text-dark" align="center">GRUPO 4</td>
                <td width="20%" class="small text-dark" align="center">GRUPO 5</td>
            </tr>

        <?php

        // Columnas (Grupos)
        for ($c=1; $c<=6; $c++){
            $a[0][$c]= $c;
        }
        // Filas (Fechas)
        for ($f=0; $f<=$ultimoDiaMes; $f++){
            $a[$f][0] = $f;
        }

        // Cargando estaciones y datos a la matriz
        while($dato=mysqli_fetch_array($resultado)){

            $idevento       = $dato['idevento'];
            $codigoEstacion = $dato['codigo'];
            $nombreEstacion = $dato['nombre'];
            $idgrupo        = $dato['idgrupo'];
            $grupo          = $dato['codigog'];
            $fechaInicio    = $dato['inicio'];
            $fechaFin       = $dato['fin'];
            $estado         = $dato['estado'];

            $fecha = explode("-", $dato['inicio']);

            $href = "$link_modulo?path=prev_estacion.php&event=".$idevento."&gp=".$dato['idgrupo']."&volver=".base64_encode($param_volver);

            $f = intval($fecha[2]);
            $c = $dato['codigog'];

            if ($estado == "PEN") $stateClass = "text-danger";
            if ($estado == "EJE") $stateClass = "text-primary";
            if ($estado == "REP") $stateClass = "text-warning";


            if ( isset($a[$f][$c]) ){
                $a[$f][$c] .= "<br />";
                $a[$f][$c] .= "<span class='small'><a href='$href' class='$stateClass'>" . $dato['nombre'] . "</a></span>";
            }
            else{
                $a[$f][$c] = "<span class='small'><a href='$href' class='$stateClass'>" . $dato['nombre'] . "</a></span>";

            }

        }

        // Mostrando matriz con datos pcargados previamente
        $html_tr = "";
        for ($i=1;$i<=$ultimoDiaMes;$i++){
            $html_tr .= '<tr>';
            for($j=0;$j<6;$j++) {
                $var = isset($a[$i][$j]) ? $a[$i][$j] : '';
                $html_tr .= "<td class='small'>". $var ."</td>";
            }
            $html_tr .= '</tr>';
        }
        print $html_tr;
        ?>
            <tr bgcolor="#d3d3d3">
                <td width="1%"  class="small text-dark" align="center">F.</td>
                <td width="20%" class="small text-dark" align="center">GRUPO 1</td>
                <td width="20%" class="small text-dark" align="center">GRUPO 2</td>
                <td width="20%" class="small text-dark" align="center">GRUPO 3</td>
                <td width="20%" class="small text-dark" align="center">GRUPO 4</td>
                <td width="20%" class="small text-dark" align="center">GRUPO 5</td>
            </tr>
        </table>
    </div>
</div>

<link href="../../paquetes/greybox/gb_styles.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript">var GB_ROOT_DIR = "./../../paquetes/greybox/";</script>
<script type="text/javascript" src="../../paquetes/greybox/AJS.js"></script>
<script type="text/javascript" src="../../paquetes/greybox/AJS_fx.js"></script>
<script type="text/javascript" src="../../paquetes/greybox/gb_scripts_no_reload.js"></script>

