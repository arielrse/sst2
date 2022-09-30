<?php
$idevento = $_GET['event'];

$resultado  = mysqli_query($conexion, "select idevento, idcentro, idsitio, idgrupo, inicio, fin, rep, repro, motivo from evento where idevento = ".$idevento);
$datoResult = mysqli_fetch_array($resultado);

$reprog   = $datoResult['rep'];
$disabled = !$reprog ? 'disabled' : '';
$checked  = $reprog ? 'checked' : '';

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
                        <li class="breadcrumb-item active" aria-current="page">Mantenimiento <?php echo $datoResult['idevento'] ?> </li>
                    </ol>
                </nav>
            </div>
        </div>

        <hr/>

        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card border-top border-0 border-4 border-primary">

                    <div class="card-body">

                        <h6 class="mb-0 text-uppercase">Editar Mantenimiento</h6>
                        <hr/>

                        <form name="amper" method="post" action="<?=$link_modulo_r?>" onSubmit=" return VerifyOne ();">
                            <input type="hidden" name="path" value="evento_editar_r.php" />
                            <input type="hidden" name="idevento" value="<?=$idevento?>" />

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Centro de Mantenimiento:</label>
                                <div class="col-sm-9">
                                    <select name="idcentro" id="ingreso_por" class="single-select">
                                        <option value="0" selected class="title7"> Seleccionar... </option>
                                        <?php
                                        $resultado=mysqli_query($conexion, "SELECT idcentro, nombre, codigo FROM centro where iddepartamento = $iddepartamento");
                                        while($dato=mysqli_fetch_array($resultado)) {
                                            echo '<option value="' . $dato['idcentro'] . '" ';
                                            if ($datoResult['idcentro'] == $dato['idcentro']) echo 'selected';

                                            echo '>' . $dato['nombre'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Sitio:</label>
                                <div class="col-sm-9">
                                    <select name="sitio" id="sitio" class="single-select">
                                        <option value="0" selected class="title7"> Seleccionar... </option>
                                        <?php
                                        $res2=mysqli_query($conexion, "SELECT s.idsitio, s.codsitio, s.nombre FROM sitio s where s.iddepartamento = $iddepartamento");
                                        while($dato2=mysqli_fetch_array($res2)){
                                            $idsitio  = $dato2['idsitio'];
                                            $descripcion = $dato2['nombre'].' ('.$dato2['codsitio'].')';
                                            echo '<option value="'.$idsitio.'" ';
                                            if( $datoResult['idsitio'] == $dato2['idsitio'] ) echo 'selected';

                                            echo'>'. $descripcion .'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Grupo de Mantenimiento:</label>
                                <div class="col-sm-9">
                                    <select name="idgrupo" class="single-select" id="idgrupo">
                                        <option value="0" selected class="title7"> Seleccionar... </option>
                                        <?php
                                        $resultado=mysqli_query($conexion, "
                                            SELECT g.idgrupo, g.codigo, g.nombre, c.nombre AS nombreCentro, d.iddepartamento
                                            FROM grupo g 
                                            JOIN centro c       ON g.idcentro = c.idcentro
                                            JOIN departamento d ON c.iddepartamento = d.iddepartamento
                                            WHERE d.`iddepartamento` = $iddepartamento ");
                                        while($dato=mysqli_fetch_array($resultado)){
                                            echo '<option value="'.$dato['idgrupo'].'" ';
                                            if( $datoResult['idgrupo'] == $dato['idgrupo'] ) echo 'selected';

                                            echo '>'.$dato['nombre'].' ('.$dato['nombreCentro'].')</option>';

                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Fecha Inicial:</label>
                                <div class="col-sm-9">
                                    <input type="date" name="fechainicio" id="fechainicio" class="form-control" value="<?=$datoResult['inicio']?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Fecha Final:</label>
                                <div class="col-sm-9">
                                    <input type="date" name="fechafin" id="fechafin" class="form-control" value="<?=$datoResult['fin']?>">
                                </div>
                            </div>

                            <hr/>

                            <div class="row mb-3 mt-2">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkReprog" name="checkReprog" value="<?php echo $reprog ?>" <?php echo $checked ?>>
                                        <label class="form-check-label" for="checkReprog">Reprogramación </label>
                                    </div>
                                </div>
                            </div>

                            <div id="blockReprog">
                            <?php /*if ($reprog){*/ ?>
                                <div class="row mb-3 mt-2">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Fecha Reprogramación:</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="repro" id="repro" <?php echo $disabled ?> class="form-control" value="<?=$datoResult['repro']?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Motivo:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="motivo" id="motivo" <?php echo $disabled ?> class="form-control" value="<?=$datoResult['motivo']?>">
                                    </div>
                                </div>
                            <?php /*}*/ ?>
                            </div>

                            <div class="row row-cols-auto g-3">
                                <div class="ms-auto">
                                    <input type="submit" class="btn btn-primary px-5 mt-2 mt-lg-0" name="nuevo" value="Guardar" />
                                    <input type="button" onClick="location.href='<?=$mst?>cronograma.php'" value="Cancelar" class="btn btn-secondary px-5 mt-2 mt-lg-0">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<SCRIPT src="../../js/validador.js" type=text/javascript></SCRIPT>
<script type=text/javascript>
    function VerifyOne () {
        if( validarSelect(document.amper.idcentro,'Seleccione el centro') &&
            validarSelect(document.amper.sitio,'Seleccione el sitio') &&
            validarSelect(document.amper.idgrupo,'Seleccione el grupo')&&
            isNull( document.amper.fechainicio) &&
            isNull( document.amper.fechafin) ) {

            if(confirm("Las datos Son validos!\n Continuar el Registro con estos Datos?")) { return true; }
            else { return false; }
        }
        else {
            return false;
        }
    }

    $(document).ready(function() {
        $('#checkReprog').click(function(){
            if (confirm('¿Desea reprogramar?')) {

                var checkValue = $('#checkReprog').val();
                var checkReprog = $('#checkReprog').is(':checked');

                alert("value: " + checkValue);

                if (checkReprog){
                    document.getElementById('repro').disabled = false;
                    document.getElementById('motivo').disabled = false;
                    $('#checkReprog').val(1);
                } else {
                    document.getElementById('repro').disabled = true;
                    document.getElementById('motivo').disabled = true;

                    $('#repro').val(null);
                    $('#motivo').val(null);
                    $('#checkReprog').val(0);
                }



                /*jQuery.post("../../modulos/seguimiento_tecnico/update_estadoRutina.php", {
                        idrutina: idrutina,
                        idgrupo: idgrupo,
                        idevento: idevento,
                        estado: estado
                    }, function(data, textStatus){
                        window.location.href = link_modulo;
                    }
                );*/
            }
        });
    });

</script>