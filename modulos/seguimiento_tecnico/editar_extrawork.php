<?php
$id = $_GET['id'];
$resultado  = mysqli_query($conexion, "select * from rutina_extrawork where id = ".$id);
$data = mysqli_fetch_array($resultado);

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
                        <li class="breadcrumb-item active" aria-current="page">Extrawork</li>
                    </ol>
                </nav>
            </div>
        </div>

        <hr/>

        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card border-top border-0 border-4 border-primary">

                    <div class="card-body">

                        <h6 class="mb-0 text-uppercase">Modificación Extrawork</h6>
                        <hr/>

                        <form name="amper" method="post" action="<?=$link_modulo_r?>" enctype="multipart/form-data">
                            <input type="hidden" name="path" value="editar_extrawork_r.php" />
                            <input type="hidden" name="idextrawork" id="idextrawork" value="<?php echo $id ?>" />

                            <div class="row mb-3">
                                <label for="idcentro" class="col-sm-3 col-form-label">Centro de Mantenimiento:</label>
                                <div class="col-sm-9">
                                    <select name="idcentro" id="idcentro" class="single-select">
                                        <option value="0" selected class="title7"> Seleccionar... </option>
                                        <?php
                                        $resultado=mysqli_query($conexion, "SELECT idcentro, nombre, codigo FROM centro where iddepartamento = $iddepartamento");
                                        while($dato=mysqli_fetch_array($resultado)) {
                                            $selected = $data['idcentro'] = $dato['idcentro'] ? 'selected' : '';
                                            echo '<option value="' . $dato['idcentro'] . ' " '.$selected.'>' . $dato['nombre'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Sitio:</label>
                                <div class="col-sm-9">
                                    <select name="idsitio" id="idsitio" class="single-select">
                                        <option value="0" selected class="title7"> Seleccionar... </option>
                                        <?php
                                        $res=mysqli_query($conexion, "SELECT s.idsitio, s.codsitio, s.nombre FROM sitio s where s.iddepartamento = $iddepartamento");
                                        while($dato=mysqli_fetch_array($res)){
                                            $idsitio     = $dato['idsitio'];
                                            $descripcion = $dato['nombre'].' ('.$dato['codsitio'].')';
                                            $selected = $data['idsitio'] = $dato['idsitio'] ? 'selected' : '';
                                            echo '<option value="'.$idsitio.'" '.$selected.'>'. $descripcion .'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="fecha" class="col-sm-3 col-form-label">Fecha:</label>
                                <div class="col-sm-9">
                                    <input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo $data['fecha'] ?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="titulo" class="col-sm-3 col-form-label">Titulo:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo $data['titulo'] ?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <input type="hidden" id="informe_ant" name="informe_ant" value="<?php echo $data['informe'] ?>" />
                                <label for="informe" class="col-sm-3 col-form-label">Informe:</label>
                                <div class="col-sm-9">
                                    <input class="form-control form-control-sm" type="file" id="informe" name="informe">
                                </div>
                            </div>

                            <div class="row row-cols-auto g-3">
                                <div class="ms-auto">
                                    <?php if (isAdmin() || isExpert()) { ?>
                                    <input type="submit" class="btn btn-primary px-5 mt-2 mt-lg-0" name="nuevo" value="Guardar" />
                                    <?php } ?>
                                    <input type="button" onClick="location.href='<?=$mst?>extraworks.php'" value="Cancelar" class="btn btn-secondary px-5 mt-2 mt-lg-0">
                                    <?php if (isAdmin() || isExpert()) { ?>
                                    <input type="button" class="btn btn-danger px-5 mt-2 mt-lg-0" id="btn-eliminar" name="btn-eliminar" value="Eliminar" />
                                    <?php } ?>
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

    $('#btn-eliminar').click(function(){

        var idextrawork  = $('#idextrawork').val()
        var informe_ant  = $('#informe_ant').val()

        if (confirm('Esta seguro que desea eliminar el Extrawork?')) {
            var frmData = new FormData;
            frmData.append("idextrawork", idextrawork);
            frmData.append("informe_ant", informe_ant);

            $.ajax({
                url: '../../modulos/seguimiento_tecnico/eliminar_extrawork_r.php',
                type: 'POST',
                data: frmData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    info_notify(data, 'info');
                    setTimeout( function() { window.location.href = '<?=$link_modulo?>?path=extraworks.php'; }, 1500 );
                }
            })
        }
    });
</script>