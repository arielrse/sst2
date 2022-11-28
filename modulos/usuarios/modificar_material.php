<?php
$idmaterial = $_GET['idmat'];
$resultado = mysqli_query($conexion, "SELECT * FROM material m WHERE m.idmaterial = " . $idmaterial);
$data = mysqli_fetch_array($resultado);

?>

<div class="page-wrapper">
    <div class="page-content">

        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bx-collection me-1 font-20 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Modificar Material</h5>
                        </div>
                        <hr>

                        <form class="row g-3" name="amper" method="post" action="<?=$link_modulo_r?>" onSubmit=" return VerifyOne ();">
                            <input type="hidden" name="path" value="modificar_material_r.php" />
                            <input type="hidden" id="idmaterial" name="idmaterial" value="<?=$idmaterial?>" />

                            <div class="col-md-2">
                                <label for="codigo" class="form-label">Código</label>
                                <input type="text" class="form-control" id="codigo" name="codigo" value="<?=$data['codigo']?>">
                            </div>

                            <div class="col-md-10">
                                <label for="nombre" class="form-label">Nombre del material</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?=$data['nombre']?>">
                            </div>

                            <div class="col-md-4">
                                <label for="unidad" class="form-label">Unidad</label>
                                <?php
                                $tipoArr = ['Barra', 'Bolsa', 'Cubo', 'Fibra', 'Global', 'Hora', 'Juego', 'Kilo', 'Litro', 'm3', 'Metro', 'Pieza', 'Unidad'];
                                $options = "<option value=''>Seleccionar...</option>";
                                foreach ($tipoArr as $element){
                                    $selected = ($data['unidad'] == $element) ? 'selected' : '';
                                    $options .= '<option value="'.$element.'" '.$selected.'>'.$element.'</option>';
                                }
                                ?>
                                <select id="unidad" name="unidad" class="form-select">
                                    <?php echo $options ?>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="precio" class="form-label">Precio</label>
                                <div class="input-group mb-3"> <span class="input-group-text">Bs.</span>
                                    <span class="input-group-text">0.00</span>
                                    <input type="text" id="precio" name="precio" class="form-control" value="<?=$data['precio']?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="idcategoria" class="form-label">Categoria</label>

                                <select name="idcategoria" id="idcategoria" class="form-select">
                                    <option value="0" selected> Seleccionar... </option>
                                    <?php
                                    $resultado=mysqli_query($conexion, "SELECT idcategoria, nombre FROM mat_categoria");
                                    while($dato=mysqli_fetch_array($resultado)) {
                                        $selected = ($data['idcategoria'] == $dato['idcategoria']) ? 'selected' : '';
                                        echo '<option value="' . $dato['idcategoria'] . '" '.$selected.'>' . $dato['nombre'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="idtipo" class="form-label">Tipo</label>
                                <select id="idtipo" name="idtipo" class="form-select">
                                    <option value="0" selected> Seleccionar... </option>
                                    <?php
                                    $resultado=mysqli_query($conexion, "SELECT idtipo, nombre FROM mat_tipo");
                                    while($dato=mysqli_fetch_array($resultado)) {
                                        $selected = ($data['idtipo'] == $dato['idtipo']) ? 'selected' : '';
                                        echo '<option value="' . $dato['idtipo'] . '" '.$selected.'>' . $dato['nombre'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?=$data['descripcion']?>">
                            </div>

                            <div class="col-12">
                                <input name="adicionar" type="submit" value="Guardar" class="btn btn-primary px-5" />
                                <input onClick="location.href='<?=$link_modulo?>?path=ver_materiales.php'" type="button" value="Cancelar" class="btn btn-secondary px-5">
                                <?php if (isAdmin() || isExpert()) { ?>
                                    <input type="button" class="btn btn-danger px-5 mt-2 mt-lg-0" id="btn-eliminar" name="btn-eliminar" value="Eliminar" />
                                <?php } ?>
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

    $('#btn-eliminar').click(function(){

        var idmaterial  = $('#idmaterial').val();

        if (confirm('Esta seguro que desea eliminar el Material? ')) {
            var frmData = new FormData;
            frmData.append("idmaterial", idmaterial);

            $.ajax({
                url: '../../modulos/usuarios/eliminar_material_r.php',
                type: 'POST',
                data: frmData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    info_notify(data, 'info');
                    setTimeout( function() { window.location.href = '<?=$link_modulo?>?path=ver_materiales.php'; }, 1500 );
                }
            })
        }
    });


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