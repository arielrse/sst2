<?php
/* Validos:
$idevento = $_GET['event'];
$idrutina = $_GET['rut'];
$cform = $_GET['cform'];
$idgrupo = $_GET['gp'];
*/


$f_verificacion = $obj->{'f_verificacion'};
$f01_1 = $f_verificacion[0]->f01_1 ? "checked" : "";
$f01_2 = $f_verificacion[0]->f01_2 ? "checked" : "";
$f01_3 = $f_verificacion[0]->f01_3;

$f02_1 = $f_verificacion[1]->f02_1 ? "checked" : "";
$f02_2 = $f_verificacion[1]->f02_2 ? "checked" : "";
$f02_3 = $f_verificacion[1]->f02_3;

$f03_1 = $f_verificacion[2]->f03_1 ? "checked" : "";
$f03_2 = $f_verificacion[2]->f03_2 ? "checked" : "";
$f03_3 = $f_verificacion[2]->f03_3;

$f04_1 = $f_verificacion[3]->f04_1 ? "checked" : "";
$f04_2 = $f_verificacion[3]->f04_2 ? "checked" : "";
$f04_3 = $f_verificacion[3]->f04_3;

$f05_1 = $f_verificacion[4]->f05_1 ? "checked" : "";
$f05_2 = $f_verificacion[4]->f05_2 ? "checked" : "";
$f05_3 = $f_verificacion[4]->f05_3;

$f06_1 = $f_verificacion[5]->f06_1 ? "checked" : "";
$f06_2 = $f_verificacion[5]->f06_2 ? "checked" : "";
$f06_3 = $f_verificacion[5]->f06_3;

$f07_1 = $f_verificacion[6]->f07_1 ? "checked" : "";
$f07_2 = $f_verificacion[6]->f07_2 ? "checked" : "";
$f07_3 = $f_verificacion[6]->f07_3;

$f08_1 = $f_verificacion[7]->f08_1 ? "checked" : "";
$f08_2 = $f_verificacion[7]->f08_2 ? "checked" : "";
$f08_3 = $f_verificacion[7]->f08_3;

$f09_1 = $f_verificacion[8]->f09_1 ? "checked" : "";
$f09_2 = $f_verificacion[8]->f09_2 ? "checked" : "";
$f09_3 = $f_verificacion[8]->f09_3;

?>

<h6>F. Verificación Visual - Estado del Activo</h6>

<div class="card">
    <div class="card-body">
        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-primary" id="botonF"><i class="bx bx-save me-0"></i></button>
                    <button type="button" class="btn btn-outline-primary" onclick="history.back()"><i class="bx bx-arrow-back me-0"></i></button>
                </div>
            </div>
        </div>
        <table class="table mb-0">
            <tbody>
            <tr>
                <td>F.1 Etiquetado de cada bateria:</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f01_1" <?php echo $f01_1 ?> value="option1">
                        <label class="form-check-label" for="f01_1">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f01_2" <?php echo $f01_2 ?> value="option2">
                        <label class="form-check-label" for="f01_2">No</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="f01_3" placeholder="Obs." value="<?php echo $f01_3 ?>">
                </td>
            </tr>

            <tr>
                <td>F.2	Etiquetado de gabinete:</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f02_1" <?php echo $f02_1 ?> value="option1">
                        <label class="form-check-label" for="f02_1">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f02_2" <?php echo $f02_2 ?> value="option2">
                        <label class="form-check-label" for="f02_2">No</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="f02_3" placeholder="Obs." value="<?php echo $f02_3 ?>">
                </td>
            </tr>

            <tr>
                <td>F.3	Fuga en batería (celda):</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f03_1" <?php echo $f03_1 ?> value="option1">
                        <label class="form-check-label" for="f03_1">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f03_2" <?php echo $f03_3 ?> value="option2">
                        <label class="form-check-label" for="f03_2">No</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="f03_3" placeholder="Obs." value="<?php echo $f03_3 ?>">
                </td>
            </tr>

            <tr>
                <td>F.4	Gabinete Vandalizado:</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f04_1" <?php echo $f04_1 ?> value="option1">
                        <label class="form-check-label" for="f04_1">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f04_2" <?php echo $f04_2 ?> value="option2">
                        <label class="form-check-label" for="f04_2">No</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="f04_3" placeholder="Obs." value="<?php echo $f04_3 ?>">
                </td>
            </tr>

            <tr>
                <td>F.5	Estado de gabinete:</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f05_1" <?php echo $f05_1 ?> value="option1">
                        <label class="form-check-label" for="f05_1">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f05_2" <?php echo $f05_2 ?> value="option2">
                        <label class="form-check-label" for="f05_2">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="f05_3" placeholder="Obs." value="<?php echo $f05_3 ?>">
                </td>
            </tr>

            <tr>
                <td>F.6	Aterramiento:</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f06_1" <?php echo $f06_1 ?> value="option1">
                        <label class="form-check-label" for="f06_1">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f06_2" <?php echo $f06_2 ?> value="option2">
                        <label class="form-check-label" for="f06_2">No</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="f06_3" placeholder="Obs." value="<?php echo $f06_3 ?>">
                </td>
            </tr>

            <tr>
                <td>F.7	Etiquetado  de cables:</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f07_1" <?php echo $f07_1 ?> value="option1">
                        <label class="form-check-label" for="f07_1">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f07_2" <?php echo $f07_2 ?> value="option2">
                        <label class="form-check-label" for="f07_2">No</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="f07_3" placeholder="Obs." value="<?php echo $f07_3 ?>">
                </td>
            </tr>

            <tr>
                <td>F.8	Anclaje Gabinete/Estructura:</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f08_1" <?php echo $f08_1 ?> value="option1">
                        <label class="form-check-label" for="f08_1">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f08_2" <?php echo $f08_2 ?> value="option2">
                        <label class="form-check-label" for="f08_2">No</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="f08_3" placeholder="Obs." value="<?php echo $f08_3 ?>">
                </td>
            </tr>

            <tr>
                <td>F.9	Alarmas pruebas de test / modulo controlador:</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f09_1" <?php echo $f09_1 ?> value="option1">
                        <label class="form-check-label" for="f09_1">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f09_2" <?php echo $f09_2 ?> value="option2">
                        <label class="form-check-label" for="f09_2">No</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="f09_3" placeholder="Obs." value="<?php echo $f09_3 ?>">
                </td>
            </tr>

            </tbody>
        </table>
    </div>
</div>