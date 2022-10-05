<?php
$idsitio = $_GET['ids'];
$resultado = mysqli_query($conexion,
"SELECT codsitio, nombre, transporte, idcentro, tiponodo, iddepartamento, provincia, localidad, municipio, area, latitud, longitud
       FROM sitio WHERE idsitio = ".$idsitio);
$datoR   = mysqli_fetch_array($resultado);

?>
<div class="page-wrapper">
    <div class="page-content">


        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-building-house me-1 font-20 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Modificar Sitio</h5>
                        </div>
                        <hr>

                        <form class="row g-3" name="amper" method="post" action="<?=$link_modulo_r?>" onSubmit=" return VerifyOne ();">
                            <input type="hidden" name="path" value="modificar_sitio_r.php" />
                            <input type="hidden" name="idsitio" value="<?=$idsitio?>" />

                            <div class="col-md-6">
                                <label for="iddepartamento" class="form-label">Departamento</label>
                                <select name="iddepartamento" class="form-select" id="iddepartamento">
                                    <option value="0" selected> Seleccionar... </option>
                                    <?php
                                    $resultado=mysqli_query($conexion, "SELECT iddepartamento, nombre, codigo FROM departamento");
                                    while($dato=mysqli_fetch_array($resultado)) {
                                        echo '<option value="' . $dato['iddepartamento'] . '" ';
                                        if($datoR['iddepartamento']==$dato['iddepartamento']) echo 'selected';
                                        echo'>'.$dato['nombre'].'</option>';
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
                                        while($dato=mysqli_fetch_array($resultado)) {
                                            echo '<option value="' . $dato['idcentro'] . '" ';
                                            if ($datoR['idcentro'] == $dato['idcentro']) echo 'selected';
                                            echo '>' . $dato['nombre'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <label for="nombre" class="form-label">Nombre del Sitio</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?=$datoR['nombre']?>">
                            </div>
                            <div class="col-md-3">
                                <label for="codsitio" class="form-label">Id Sitio</label>
                                <input type="text" class="form-control" id="codsitio" name="codsitio" value="<?=$datoR['codsitio']?>">
                            </div>

                            <div class="col-md-6">
                                <label for="provincia" class="form-label">Provincia</label>
                                <input type="text" class="form-control" id="provincia" name="provincia" value="<?=$datoR['provincia']?>">
                            </div>
                            <div class="col-md-6">
                                <label for="municipio" class="form-label">Municipio</label>
                                <input type="text" class="form-control" id="municipio" name="municipio" value="<?=$datoR['municipio']?>">
                            </div>

                            <div class="col-md-6">
                                <label for="localidad" class="form-label">Localidad</label>
                                <input type="text" class="form-control" id="localidad" name="localidad" value="<?=$datoR['localidad']?>">
                            </div>
                            <div class="col-md-6">
                                <label for="area" class="form-label">Area</label>
                                <select id="area" name="area" class="form-select">
                                    <?php
                                    $areaArr = ['RURAL', 'URBANA'];
                                    $options = '<option value="">Seleccionar</option>';
                                    foreach ($areaArr as $element){
                                        $selected = $datoR['area']==$element ? 'selected' : '';
                                        $options .= "<option value='$element' $selected>".$element."</option>";
                                    }
                                    echo $options;
                                    ?>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="transporte" class="form-label">Tipo de Transporte</label>
                                <select id="transporte" name="transporte" class="form-select">
                                    <?php
                                    $transporteArr = ['SATELITAL', 'TERRESTRE'];
                                    $options = '<option value="">Seleccionar</option>';
                                    foreach ($transporteArr as $element){
                                        $selected = $datoR['transporte']==$element ? 'selected' : '';
                                        $options .= "<option value='$element' $selected>".$element."</option>";
                                    }
                                    echo $options;
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="tiponodo" class="form-label">Tipo de Nodo</label>
                                <select id="tiponodo" name="tiponodo" class="form-select">
                                    <?php
                                    $tiponodoArr = ['NP', 'NS'];
                                    $options = '<option value="">Seleccionar</option>';
                                    foreach ($tiponodoArr as $element){
                                        $selected = $datoR['tiponodo']==$element ? 'selected' : '';
                                        $options .= "<option value='$element' $selected>".$element."</option>";
                                    }
                                    echo $options;
                                    ?>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="latitud" class="form-label">Latitud</label>
                                <input type="text" class="form-control" id="latitud" name="latitud" value="<?=$datoR['latitud']?>">
                            </div>
                            <div class="col-md-6">
                                <label for="longitud" class="form-label">Longitud</label>
                                <input type="text" class="form-control" id="longitud" name="longitud" value="<?=$datoR['longitud']?>">
                            </div>

                            <div class="col-12">
                                <?php if (isAdmin() || isExpert()) { ?>
                                <input name="adicionar" type="submit" value="Guardar" class="btn btn-primary px-5" />
                                <?php } ?>
                                <input onClick="location.href='<?=$link_modulo?>?path=ver_sitios.php'" type="button" value="Cancelar" class="btn btn-secondary px-5">
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
        checkField( document.amper.nombre, isName, false ) &&
		checkField( document.amper.codsitio, isName, false ) &&
		checkField( document.amper.provincia, isName, false ) &&
		checkField( document.amper.municipio, isName, false ) &&
		checkField( document.amper.localidad, isName, false ) &&
        validarSelect(document.amper.area,'Seleccione el area') &&
        validarSelect(document.amper.transporte,'Seleccione el tipo de transporte') &&
        validarSelect(document.amper.tiponodo,'Seleccione el tipo de nodo') &&
        checkField( document.amper.latitud, isName, false ) &&
        checkField( document.amper.longitud, isName, false ) ){

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