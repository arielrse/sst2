<?php

/**  d_relevamiento **/
$d_relevamiento = $obj->{'d_relevamiento'};

$d_01_01 = $d_relevamiento->d_01_01; $d_01_02 = $d_relevamiento->d_01_02;
$d_02_01 = $d_relevamiento->d_02_01; $d_02_02 = $d_relevamiento->d_02_02;
$d_03_01 = $d_relevamiento->d_03_01; $d_03_02 = $d_relevamiento->d_03_02;
$d_04_01 = $d_relevamiento->d_04_01; $d_04_02 = $d_relevamiento->d_04_02;

?>

<h6>D. Relevamiento</h6>

<div class="card">
    <div class="card-body">

        <div class="col mb-2">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-primary" id="botonF"><i class="bx bx-save me-0"></i></button>
                <button type="button" class="btn btn-outline-primary" onclick="history.back()"><i class="bx bx-arrow-back me-0"></i></button>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">

            <div class="col">

                <table class="table table-bordered mb-0">
                    <tbody>

                    <tr>
                        <td class="col-xl-4">Radio Bases</td>
                        <td class="col-xl-4">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="d_01_01" value="<?php echo $d_01_01 ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="col-xl-4">Tipo de Transporte</td>
                        <td class="col-xl-4">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="d_01_02" value="<?php echo $d_01_02 ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="col-xl-4">Salto Anterior</td>
                        <td class="col-xl-4">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="d_02_01" value="<?php echo $d_02_01 ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="col-xl-4">Energía principal</td>
                        <td class="col-xl-4">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="d_02_02" value="<?php echo $d_02_02 ?>">
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>

            </div>

            <div class="col">

                <table class="table table-bordered mb-0">
                    <tbody>

                    <tr>
                        <td class="col-xl-4">Vendor</td>
                        <td class="col-xl-4">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="d_03_01" value="<?php echo $d_03_01 ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="col-xl-4">Equipo de transmisión</td>
                        <td class="col-xl-4">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="d_03_02" value="<?php echo $d_03_02 ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="col-xl-4">Interface</td>
                        <td class="col-xl-4">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="d_04_01" value="<?php echo $d_04_01 ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="col-xl-4">Energía Respaldo</td>
                        <td class="col-xl-4">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="d_04_02" value="<?php echo $d_04_02 ?>">
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>
