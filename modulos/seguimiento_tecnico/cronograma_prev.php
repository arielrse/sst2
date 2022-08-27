<?php

$adm = 0;

if($nively=='1'){ $adm=1;}

$mes        = isset($_POST["mes"])       ? $_POST["mes"]      : date("n");
$anio       = isset($_POST["anio"])      ? $_POST["anio"]     : date("Y");
$codCentro  = isset($_POST["centro"])    ? $_POST["centro"]   : '';

$param_volver = base64_encode("&mes=$mes&anio=$anio&centro=$codCentro");
$diaActual  = date("j");
# Devuelve 0 para domingo, 6 para sabado
$diaSemana = date("w", mktime(0,0,0, $mes,1, $anio))+0;
# Obtenemos el ultimo dia del mes
$ultimoDiaMes = date("d",(mktime(0,0,0,$mes+1,1, $anio)-1));
//print($ultimoDiaMes);
$meses = array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$inicio = $anio."-".$mes."-"."01";
$fin    = $anio."-".$mes."-".$ultimoDiaMes;

$resultado = mysqli_query($conexion, "
SELECT ev.idevento, ev.estado, ev.inicio, ev.fin, es.codigo, es.nombre, g.codigo AS codigog, c.idcentro, c.codigo as codCentro
FROM evento ev
JOIN estacion es ON ev.idestacion = es.idestacion
JOIN grupo g 	 ON ev.idgrupo = g.idgrupo
JOIN centro c    ON ev.idcentro = c.idcentro
WHERE ev.inicio BETWEEN '$inicio' AND '$fin'
AND c.codigo = '$codCentro'");


$filas	   = mysqli_num_rows($resultado);
?>

<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

            <div class="breadcrumb-title pe-3">SST</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Cronogramas</li>
                    </ol>
                </nav>
            </div>
        </div>

        <hr/>

        <div class="card">
            <div class="card-body">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <span class="input-group-text">Centro de Mantenimiento:</span>
                    </div>

                    <div class="col">
                        <select name="centro" class="single-select">
                            <?php
                            $res=mysqli_query($conexion, "SELECT idcentro, nombre, codigo FROM centro");
                            while($dato=mysqli_fetch_array($res)){
                                $nombre = $dato['nombre'];
                                $codigo = $dato['codigo'];
                                $selected = '';
                                if($codCentro == $codigo) $selected = "class='naranja' selected";
                                echo"<option value='$codigo' $selected>$nombre</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col">
                        <select name="mes" class="single-select">
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
                    </div>

                    <div class="col">
                        <select name="anio" class="single-select">
                            <option value="2022" <? if($anio==2022) echo"class='naranja' selected"; ?>>2022</option>
                            <option value="2021" <? if($anio==2021) echo"class='naranja' selected"; ?>>2021</option>
                            <option value="2020" <? if($anio==2020) echo"class='naranja' selected"; ?>>2020</option>
                            <option value="2019" <? if($anio==2019) echo"class='naranja' selected"; ?>>2019</option>
                            <option value="2018" <? if($anio==2018) echo"class='naranja' selected"; ?>>2018</option>
                            <option value="2017" <? if($anio==2017) echo"class='naranja' selected"; ?>>2017</option>
                            <option value="2016" <? if($anio==2016) echo"class='naranja' selected"; ?>>2016</option>
                        </select>&nbsp;
                    </div>

                    <div class="col">
                        <input name="ver" type="submit"  value=" Ver " class="btn btn-primary px-5" />
                    </div>

                    <div class="col">
                        <input name="nuevoE" type="button" value="Nuevo Evento" class="btn btn-primary px-5" onClick="location.href='<?=$link_modulo?>?path=nuevo_evento.php'" />
                    </div>

                    <div class="col">
                        <input name="estacion" type="button" value="Estaciones" class="btn btn-primary px-5" onClick="location.href='<?=$link_modulo?>?path=estaciones.php'" />
                    </div>

                </div>

            </div>
        </div>

        <table border="0" width="100%">

            <tr>
                <td  align="center"></td>
                <td class="marco_">
                    <form name="amper" method="post" action="#">
                    </form>
                </td>

                <!--<td class="" align="center"><a class="enlacebtn" href="<?/* echo $link_modulo . '?path=reporte_mtto_prev.php' */?>">&nbsp;Reportes x Formulario&nbsp;</a></td>-->

            </tr>
        </table>

    </div>
</div>

<link href="../../paquetes/greybox/gb_styles.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript">var GB_ROOT_DIR = "./../../paquetes/greybox/";</script>
<script type="text/javascript" src="../../paquetes/greybox/AJS.js"></script>
<script type="text/javascript" src="../../paquetes/greybox/AJS_fx.js"></script>
<script type="text/javascript" src="../../paquetes/greybox/gb_scripts_no_reload.js"></script>
