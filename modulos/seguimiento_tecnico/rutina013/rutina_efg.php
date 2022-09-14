<?php

/* e_contacto */
$e_contacto = $obj->{'e_contacto'};
$e_01_01 = $e_contacto->e_01_01; $e_01_02 = $e_contacto->e_01_02;
$e_02_01 = $e_contacto->e_02_01; $e_02_02 = $e_contacto->e_02_02;
$e_03_01 = $e_contacto->e_03_01; $e_03_02 = $e_contacto->e_03_02;
$e_04_01 = $e_contacto->e_04_01; $e_04_02 = $e_contacto->e_04_02;

/* f_predio */
$f_predio = $obj->{'f_predio'};
$f_01_01 = $f_predio->f_01_01; $f_01_02 = $f_predio->f_01_02; $f_01_03 = $f_predio->f_01_03;
$f_02_01 = $f_predio->f_02_01; $f_02_02 = $f_predio->f_02_02;
$f_03_01 = $f_predio->f_03_01; $f_03_02 = $f_predio->f_03_02;

/* g_estructura */
$g_estructura = $obj->{'g_estructura'};
$g_01_01 = $g_estructura->g_01_01; $g_01_02 = $g_estructura->g_01_02; $g_01_03 = $g_estructura->g_01_03;
$g_02_01 = $g_estructura->g_02_01; $g_02_02 = $g_estructura->g_02_02; $g_02_03 = $g_estructura->g_02_03;


?>

<h6 class="mb-0">E: Datos de contacto en sitio</h6>
<div class="card">
    <div class="card-body">

        <div class="col">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-primary" id="botonF"><i class="bx bx-save me-0"></i></button>
                <button type="button" class="btn btn-outline-primary" onclick="history.back()"><i class="bx bx-arrow-back me-0"></i></button>
            </div>
        </div>

        <table class="table mb-0">
            <tbody>
            <tr>
                <td>Nombres y apellidos</td>
                <td>
                    <div class="input-group input-group-sm mb-2">
                        <input type="text" class="form-control" id="e_01_01" value="<?php echo $e_01_01 ?>">
                    </div>
                </td>
                <td>Tipo Contacto</td>
                <td>
                    <div class="input-group input-group-sm mb-2">
                        <input type="text" class="form-control" id="e_01_02" value="<?php echo $e_01_02 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>Telefono celular</td>
                <td>
                    <div class="input-group input-group-sm mb-2">
                        <input type="text" class="form-control" id="e_02_01" value="<?php echo $e_02_01 ?>">
                    </div>
                </td>
                <td>Telefono fijo</td>
                <td>
                    <div class="input-group input-group-sm mb-2">
                        <input type="text" class="form-control" id="e_02_02" value="<?php echo $e_02_02 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>Nombres y apellidos</td>
                <td>
                    <div class="input-group input-group-sm mb-2">
                        <input type="text" class="form-control" id="e_03_01" value="<?php echo $e_03_01 ?>">
                    </div>
                </td>
                <td>Tipo Contacto</td>
                <td>
                    <div class="input-group input-group-sm mb-2">
                        <input type="text" class="form-control" id="e_03_02" value="<?php echo $e_03_02 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>Telefono celular</td>
                <td>
                    <div class="input-group input-group-sm mb-2">
                        <input type="text" class="form-control" id="e_04_01" value="<?php echo $e_04_01 ?>">
                    </div>
                </td>
                <td>Telefono fijo</td>
                <td>
                    <div class="input-group input-group-sm mb-2">
                        <input type="text" class="form-control" id="e_04_02" value="<?php echo $e_04_02 ?>">
                    </div>
                </td>
            </tr>

            </tbody>
        </table>

    </div>
</div>

<h6 class="mb-0">F: Datos del predio</h6>
<div class="card">
    <div class="card-body">
        <div class="col mb-2">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-primary" id="botonF"><i class="bx bx-save me-0"></i></button>
                <button type="button" class="btn btn-outline-primary" onclick="history.back()"><i class="bx bx-arrow-back me-0"></i></button>
            </div>
        </div>

        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">Tipo de  sitio</span>
            <input type="text" class="form-control" id="f_01_01" value="<?php echo $f_01_01 ?>">
            <span class="input-group-text">Predio</span>
            <input type="text" class="form-control" id="f_01_02" value="<?php echo $f_01_02 ?>">
            <span class="input-group-text">Cerramiento perimetral</span>
            <input type="text" class="form-control" id="f_01_03" value="<?php echo $f_01_03 ?>">
        </div>

        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">Dimension predio</span>
            <input type="text" class="form-control" id="f_02_01" value="<?php echo $f_02_01 ?>">
            <span class="input-group-text">Loza de equipos</span>
            <input type="text" class="form-control" id="f_02_02" value="<?php echo $f_02_02 ?>">
        </div>

        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">Loza o caseta grupo</span>
            <input type="text" class="form-control" id="f_03_01" value="<?php echo $f_03_01 ?>">
            <span class="input-group-text">Espacio en Loza equipos</span>
            <input type="text" class="form-control" id="f_03_02" value="<?php echo $f_03_02 ?>">
        </div>

    </div>
</div>

<h6 class="mb-0">G. Tipo de estructura radiante</h6>
<div class="card">
    <div class="card-body">

        <div class="col mb-2">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-primary" id="botonF"><i class="bx bx-save me-0"></i></button>
                <button type="button" class="btn btn-outline-primary" onclick="history.back()"><i class="bx bx-arrow-back me-0"></i></button>
            </div>
        </div>

        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">Tipo estructura 1</span>
            <input type="text" class="form-control" id="g_01_01" value="<?php echo $g_01_01 ?>">
            <span class="input-group-text">Altura (m)</span>
            <input type="text" class="form-control" id="g_01_02" value="<?php echo $g_01_02 ?>">
            <span class="input-group-text">Estado</span>
            <input type="text" class="form-control" id="g_01_03" value="<?php echo $g_01_03 ?>">
        </div>

        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">Tipo estructura 2</span>
            <input type="text" class="form-control" id="g_02_01" value="<?php echo $g_02_01 ?>">
            <span class="input-group-text">Altura (m)</span>
            <input type="text" class="form-control" id="g_02_02" value="<?php echo $g_02_02 ?>">
            <span class="input-group-text">Estado</span>
            <input type="text" class="form-control" id="g_02_03" value="<?php echo $g_02_03 ?>">
        </div>

    </div>
</div>
