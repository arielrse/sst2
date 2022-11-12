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
                            <input type="hidden" name="path" value="nuevo_estacion_r.php" />

                            <div class="col-md-6">
                                <label for="iddepartamento" class="form-label">Departamento</label>
                                <select name="iddepartamento" class="form-select" id="iddepartamento" disabled>
                                    <option value="0" selected> Seleccionar... </option>
                                    <?
                                    $resultado=mysqli_query($conexion, "SELECT iddepartamento, nombre, codigo FROM departamento");
                                    while($dato=mysqli_fetch_array($resultado)) {
                                        echo '<option value="' . $dato['iddepartamento'] . '" ';
                                        if($iddepartamento==$dato['iddepartamento']) echo 'selected';
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
                                        while($dato=mysqli_fetch_array($resultado))
                                            echo '<option value="'.$dato['idcentro'].'">'.$dato['nombre'].'</option>';
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
                                    while($dato2=mysqli_fetch_array($res2)){
                                        $idsitio  = $dato2['idsitio'];
                                        $descripcion = $dato2['nombre'].' ('.$dato2['codsitio'].')';
                                        echo '<option value="'.$idsitio.'" ';
                                        echo'>'. $descripcion .'</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label for="tecnologia" class="form-label">Tecnología</label>
                                <select id="tecnologia" name="tecnologia" class="form-select">
                                    <option value="">Seleccionar</option>
                                    <option value="RED 2G GSM">RED 2G GSM</option>
                                    <option value="RED 4G HSPA">RED 4G HSPA</option>
                                    <option value="RED LTE">RED LTE</option>
                                    <option value="OTRO">OTRO</option>
                                </select>
                            </div>

                            <div class="col-md-9">
                                <label for="nombreEstacion" class="form-label">Nombre de la Estación</label>
                                <input type="text" class="form-control" id="nombreEstacion" name="nombreEstacion">
                            </div>
                            <div class="col-md-3">
                                <label for="estacionId" class="form-label">Id Estación</label>
                                <input type="text" class="form-control" id="estacionId" name="estacionId">
                            </div>

                            <div class="col-md-4">
                                <label for="tipotransporte" class="form-label">Tipo de Transporte</label>
                                <select id="tipotransporte" name="tipotransporte" class="form-select">
                                    <option value="">Seleccionar</option>
                                    <option value="TERRESTRE">TERRESTRE</option>
                                    <option value="SATELITAL">SATELITAL</option>
                                    <option value="FIBRA OPTICA">FIBRA OPTICA</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="tiponodo" class="form-label">Tipo de Nodo</label>
                                <select id="tiponodo" name="tiponodo" class="form-select">
                                    <option value="">Seleccionar</option>
                                    <option value="NP">Nodo Principal</option>
                                    <option value="NS">Nodo Secundario</option>
                                    <option value="OTRO">Otro</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="tipo" class="form-label">Tipo Estacion</label>
                                <select id="tipo" name="tipo" class="form-select">
                                    <option value="">Seleccionar</option>
                                    <option value="MOV">MOVIL</option>
                                    <option value="DAT">DATOS</option>
                                    <option value="REP">REPETIDOR</option>
                                    <option value="OLT">OLT</option>
                                    <option value="OTRO">OTRO</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="provincia" class="form-label">Provincia</label>
                                <input type="text" class="form-control" id="provincia" name="provincia">
                            </div>
                            <div class="col-md-6">
                                <label for="municipio" class="form-label">Municipio</label>
                                <input type="text" class="form-control" id="municipio" name="municipio">
                            </div>

                            <div class="col-md-6">
                                <label for="localidad" class="form-label">Localidad</label>
                                <input type="text" class="form-control" id="localidad" name="localidad">
                            </div>
                            <div class="col-md-6">
                                <label for="area" class="form-label">Area</label>
                                <select id="area" name="area" class="form-select">
                                    <option value="">Seleccionar</option>
                                    <option value="RURAL">RURAL</option>
                                    <option value="URBANA">URBANA</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <input name="adicionar" type="submit" value="Registrar" class="btn btn-primary px-5" />
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
        checkField( document.amper.nombreEstacion, isName, false ) &&
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