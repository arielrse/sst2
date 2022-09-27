<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

            <div class="breadcrumb-title pe-3">SST</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Mantenimiento</li>
                    </ol>
                </nav>
            </div>
        </div>

        <hr/>

        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card border-top border-0 border-4 border-primary">

                    <div class="card-body">

                        <h6 class="mb-0 text-uppercase">Nuevo Mantenimiento</h6>
                        <hr/>

                        <form name="amper" method="post" action="<?=$link_modulo_r?>" onSubmit=" return VerifyOne ();">
                            <input type="hidden" name="path" value="nuevo_evento_r.php" />

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Centro de Mantenimiento:</label>
                                <div class="col-sm-9">
                                    <select name="idcentro" id="ingreso_por" class="single-select">
                                        <option value="0" selected class="title7"> Seleccionar... </option>
                                        <?php
                                        $resultado=mysqli_query($conexion, "SELECT idcentro, nombre, codigo FROM centro where iddepartamento = $iddepartamento");
                                        while($dato=mysqli_fetch_array($resultado))
                                            echo '<option value="'.$dato['idcentro'].'">'.$dato['nombre'].'</option>';
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

                                            //if( $idsitio == (!isset($dato) ? $dato['idsitio'] : '') ) echo 'selected';
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
                                        while($dato=mysqli_fetch_array($resultado))
                                            echo '<option value="'.$dato['idgrupo'].'">'.$dato['nombre'].' ('.$dato['nombreCentro'].')</option>';
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Fecha Inicial:</label>
                                <div class="col-sm-9">
                                    <!--<input name="fechainicio" type="text" id="fechainicio" class="result form-control">-->
                                    <input type="date" name="fechainicio" id="c_fechaRealizacion" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Fecha Final:</label>
                                <div class="col-sm-9">
                                    <input type="date" name="fechafin" id="fechafin" class="form-control">
                                </div>
                            </div>


                            <div class="row row-cols-auto g-3">
                                <!--<div class="ms-auto">
                                    <a href="javascript:;" class="btn btn-primary radius-30 mt-2 mt-lg-0">
                                        <i class="bx bxs-plus-square"></i>Add New Order</a>
                                </div>-->
                                <!--<div class="col">-->
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
</script>