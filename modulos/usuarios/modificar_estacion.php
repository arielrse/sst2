<?php
$id = $_GET['idest'];
$resultado = mysqli_query($conexion,
    "SELECT * FROM estacionentel e WHERE e.idestacionentel = ".$id);
$data   = mysqli_fetch_array($resultado);

?>
<div class="page-wrapper">
    <div class="page-content">


        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bx-station me-1 font-20 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Nueva Estación</h5>
                        </div>
                        <hr>

                        <form class="row g-3" name="amper" method="post" action="<?=$link_modulo_r?>" onSubmit=" return VerifyOne ();">
                            <input type="hidden" name="path" value="modificar_estacion_r.php" />
                            <input type="hidden" name="idestacionentel" value="<?=$id?>" />

                            <div class="col-md-6">
                                <label for="iddepartamento" class="form-label">Departamento</label>
                                <select name="iddepartamento" class="form-select" id="iddepartamento" disabled>
                                    <option value="0" selected> Seleccionar... </option>
                                    <?php
                                    $resultado=mysqli_query($conexion, "SELECT iddepartamento, nombre, codigo FROM departamento");
                                    while($dato=mysqli_fetch_array($resultado)) {
                                        $selected = ($iddepartamento == $dato['iddepartamento']) ? 'selected' : '';
                                        echo '<option value="' . $dato['iddepartamento'] . '" '.$selected.'>'.$dato['nombre'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="idcentro" class="form-label">Centro de Mantenimiento</label>
                                <div class="col-sm-9">
                                    <select name="idcentro" id="idcentro" class="form-select">
                                        <option value="0" selected> Seleccionar... </option>
                                        <?php
                                        $resultado=mysqli_query($conexion, "SELECT idcentro, nombre, codigo FROM centro where iddepartamento = $iddepartamento");
                                        while( $dato=mysqli_fetch_array($resultado) ) {
                                            $selected = ($data['idcentro'] == $dato['idcentro']) ? 'selected' : '';
                                            echo '<option value="' . $dato['idcentro'] . '" '.$selected.'>' . $dato['nombre'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <label for="idsitio" class="form-label">Sitio</label>
                                <select name="idsitio" id="idsitio" class="single-select">
                                    <option value="0" selected class="title7"> Seleccionar... </option>
                                    <?php
                                    $res2=mysqli_query($conexion, "SELECT s.idsitio, s.codsitio, s.nombre FROM sitio s where s.iddepartamento = $iddepartamento");
                                    while($dato=mysqli_fetch_array($res2)){
                                        $selected = ($data['idsitio'] == $dato['idsitio']) ? 'selected' : '';
                                        echo '<option value="' . $dato['idsitio'] . '" '.$selected.'>' . $dato['nombre']. ' (' . $dato['codsitio'] . ')</option>';

                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label for="tecnologia" class="form-label">Tecnología</label>
                                <?php
                                $tipoArr = ['RED 2G GSM', 'RED 4G HSPA', 'RED LTE', 'OTRO'];
                                $options = "<option value=''>Seleccionar...</option>";
                                foreach ($tipoArr as $element){
                                    $selected = ($data['tecnologia'] == $element) ? 'selected' : '';
                                    $options .= '<option value="'.$element.'" '.$selected.'>'.$element.'</option>';
                                }
                                ?>
                                <select id="tecnologia" name="tecnologia" class="form-select">
                                    <?php echo $options ?>
                                </select>
                            </div>

                            <div class="col-md-9">
                                <label for="nombreestacion" class="form-label">Nombre de la Estación</label>
                                <input type="text" class="form-control" id="nombreestacion" name="nombreestacion" value="<?=$data['nombreestacion']?>">
                            </div>
                            <div class="col-md-3">
                                <label for="estacionId" class="form-label">Id Estación</label>
                                <input type="text" class="form-control" id="estacionId" name="estacionId" value="<?=$data['id']?>">
                            </div>

                            <div class="col-md-4">
                                <label for="tipotransporte" class="form-label">Tipo de Transporte</label>
                                <?php
                                $tipoArr = ['TERRESTRE','SATELITAL','FIBRA OPTICA'];
                                $options = "<option value=''>Seleccionar...</option>";
                                foreach ($tipoArr as $element){
                                    $selected = ($data['tipotransporte'] == $element) ? 'selected' : '';
                                    $options .= '<option value="'.$element.'" '.$selected.'>'.$element.'</option>';
                                }
                                ?>
                                <select id="tipotransporte" name="tipotransporte" class="form-select">
                                    <?php echo $options ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="tiponodo" class="form-label">Tipo de Nodo</label>
                                <?php
                                $tipoArr = ['NP'=>'Nodo Principal','NS'=>'Nodo Secundario','OTRO'=>'Otro'];
                                $options = "<option value=''>Seleccionar...</option>";
                                foreach ($tipoArr as $clave => $element){
                                    $selected = ($data['tiponodo'] == $clave) ? 'selected' : '';
                                    $options .= '<option value="'.$clave.'" '.$selected.'>'.$element.'</option>';
                                }
                                ?>
                                <select id="tiponodo" name="tiponodo" class="form-select">
                                    <?php echo $options ?>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="tipo" class="form-label">Tipo Estacion</label>
                                <?php
                                $tipoArr = ['MOV'=>'MOVIL','DAT'=>'DATOS','REP'=>'REPETIDOR','OLT'=>'OLT','OTRO'=>'OTRO'];
                                $options = "<option value=''>Seleccionar...</option>";
                                foreach ($tipoArr as $clave => $element){
                                    $selected = ($data['tipo'] == $clave) ? 'selected' : '';
                                    $options .= '<option value="'.$clave.'" '.$selected.'>'.$element.'</option>';
                                }
                                ?>
                                <select id="tipo" name="tipo" class="form-select">
                                    <?php echo $options ?>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="provincia" class="form-label">Provincia</label>
                                <input type="text" class="form-control" id="provincia" name="provincia" value="<?=$data['provincia']?>">
                            </div>
                            <div class="col-md-6">
                                <label for="municipio" class="form-label">Municipio</label>
                                <input type="text" class="form-control" id="municipio" name="municipio" value="<?=$data['municipio']?>">
                            </div>

                            <div class="col-md-6">
                                <label for="localidad" class="form-label">Localidad</label>
                                <input type="text" class="form-control" id="localidad" name="localidad" value="<?=$data['localidad']?>">
                            </div>
                            <div class="col-md-6">
                                <label for="area" class="form-label">Area</label>
                                <?php
                                $tipoArr = ['RURAL','URBANA'];
                                $options = "<option value=''>Seleccionar...</option>";
                                foreach ($tipoArr as $element){
                                    $selected = ($data['area'] == $element) ? 'selected' : '';
                                    $options .= '<option value="'.$element.'" '.$selected.'>'.$element.'</option>';
                                }
                                ?>
                                <select id="area" name="area" class="form-select">
                                    <?php echo $options ?>
                                </select>
                            </div>

                            <div class="col-12">
                                <?php if (isAdmin() || isExpert()) { ?>
                                <input name="adicionar" type="submit" value="Guardar" class="btn btn-primary px-5" />
                                <?php } ?>
                                <input onClick="location.href='<?=$link_modulo?>?path=ver_estaciones.php'" type="button" value="Cancelar" class="btn btn-secondary px-5">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="../../js/validador.js" type=text/javascript></script>
<script type=text/javascript>
function VerifyOne () {
    if( validarSelect(document.amper.iddepartamento,'Seleccione el departamento') &&
        validarSelect(document.amper.idcentro,'Seleccione el centro de mtto.') &&
        validarSelect(document.amper.idsitio,'Seleccione el sitio de mtto.') &&
        validarSelect(document.amper.tecnologia,'Seleccione Tecnologia.') &&
        checkField( document.amper.nombreestacion, isName, false ) &&
		checkField( document.amper.estacionId, isName, false ) &&
        validarSelect(document.amper.tipotransporte,'Seleccione el tipo de Transporte') &&
        validarSelect(document.amper.tiponodo,'Seleccione el tipo de Nodo') &&
        validarSelect(document.amper.tipo,'Seleccione el tipo de Estacion') &&

		checkField( document.amper.provincia, isName, false ) &&
		checkField( document.amper.municipio, isName, false ) &&
		checkField( document.amper.localidad, isName, false ) &&
        validarSelect(document.amper.area,'Seleccione el area') ){

		if(confirm("Las datos Son validos!\n Continuar el Registro con estos Datos?")) {
		    return true;
        } else {
		    return false;
        }
    } else {
        return false;
    }
}

</script>