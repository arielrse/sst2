<?php
$table_e5_arr = json_decode($tabla_5, true);
$dataT5 = [];
$dataT5Str = '';
?>
<div class="card">
    <div class="card-body">
        <?php if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() || isAdmin() && $estado=='REV') && (!isClient() && !isNationalClient()) ) { ?>
        <button type="button" class="btn btn-sm btn-outline-info mb-1" id="btn_save_ODF"><i class="bx bx-save me-0"></i></button>
        <?php } ?>

        <button type="button" class="btn btn-sm btn-outline-info mb-1" id="btn_add_equipos_ODF"><i class="bx bx-plus me-0"></i></button>&nbsp;&nbsp; <span class="text-dark">Puertos Equipos</span>
        <table class="table table-bordered" id="tabla_ODF">
            <tr class='align-middle'>
                <td>
                    <table class="table table-bordered" id="tabla_equipos_ODF">
                        <tr class='align-middle'>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php
                        $dataHtml = "";
                        if ($table_e5_arr) {
                            foreach ($table_e5_arr as $objVal) {
                                $id_row_eq = $objVal['id_row_eq'];
                                $id_table_puertos = 'row_tab_prto_' . uniqid();

                                $dataHtml .=
                                    "<tr class='align-middle' id='" . $id_row_eq . "'>" .
                                    "    <td>" .
                                    "        <div class='text-center mt-1'>" .
                                    "            <button type='button' class='btn btn-sm btn-outline-success mb-1' id='btn_add_puertos' " .
                                    "                    onclick='agregarFilaPuertosODF(`" . $id_table_puertos . "`, `" . $id_row_eq . "`)'><i class='bx bx-plus me-0'></i></button>" .
                                    "        </div>" .
                                    "        <div class='text-center mt-1'><a href='javascript:;' id='btnEliminarPrto' onclick='eliminarEquipoODF(`".$id_row_eq."`)'><i class='bx bx-x'></i></a></div>" .
                                    "    </td>" .
                                    "    <td>" .
                                    "        <table class='table table-bordered' id='" . $id_table_puertos . "'>" .
                                    "            <tr class='align-middle'>" .
                                    "                <th width='12%'>Id</th>" .
                                    "                <th width='12%'>Puerto</th>" .
                                    "                <th>Descripción</th>" .
                                    "                <th width='20%'>Posicion</th>" .
                                    "                <th width='20%'>Obs</th>" .
                                    "                <th width='5%'></th>" .
                                    "            </tr>";

                                $puertosArr = [];
                                foreach ($objVal['puertos'] as $objPrto) {

                                    $row_prto = 'row_prto_' . uniqid();
                                    $id_id = 'id_' . uniqid();
                                    $id_puerto = 'prto_' . uniqid();
                                    $id_descri = 'desc_' . uniqid();
                                    $id_posicion = 'pos_' . uniqid();
                                    $id_obs = 'obs_' . uniqid();

                                    $id = $objPrto['id_id'];
                                    $puerto = $objPrto['id_puerto'];
                                    $descri = $objPrto['id_descri'];
                                    $posicionPrt = $objPrto['id_posicion'];
                                    $observacion = $objPrto['id_obs'];

                                    $puertosArr[] = array(
                                        "row_prto"  => $row_prto,
                                        "id_id" => $id_id,
                                        "id_puerto" => $id_puerto,
                                        "id_descri" => $id_descri,
                                        "id_posicion" => $id_posicion,
                                        "id_obs" => $id_obs
                                    );

                                    $dataHtml .=
                                        "<tr class='align-middle' id='".$row_prto."'>" .
                                        "   <td><input type='text' class='form-control form-control-sm' id='" . $id_id . "' value='" . $id . "'></td>" .
                                        "   <td><input type='text' class='form-control form-control-sm' id='" . $id_puerto . "' value='" . $puerto . "'></td>" .
                                        "   <td><input type='text' class='form-control form-control-sm' id='" . $id_descri . "' value='" . $descri . "'></td>" .
                                        "   <td><input type='text' class='form-control form-control-sm' id='" . $id_posicion . "' value='" . $posicionPrt . "'></td>" .
                                        "   <td><input type='text' class='form-control form-control-sm' id='" . $id_obs . "' value='" . $observacion . "'></td>" .
                                        "   <td><a href='javascript:;' id='btneliminarPrtoODF' onclick='eliminarPrtoODF(`$row_prto`, `$id_row_eq`)'><i class='bx bx-x'></i></a></td>" .
                                        "</tr>";
                                }

                                //---------------------------------------------
                                /** Creando array de ids **/
                                $dataT5[] = array(
                                    "id_row_eq" => $id_row_eq,
                                    "puertos" => $puertosArr
                                );
                                //---------------------------------------------

                                $dataHtml .=
                                    "        </table>" .
                                    "    </td>" .
                                    "</tr>";
                            }
                        }
                        $dataT5Str = json_encode($dataT5);
                        echo $dataHtml;
                        ?>

                    </table>
                </td>
            </tr>
        </table>
    </div>
</div>


<script type="text/javascript">

    var btn_add_equiposODF = document.getElementById('btn_add_equipos_ODF');
    var tabla_equiposODF   = document.getElementById('tabla_equipos_ODF');
    var btn_save_ODF       = document.getElementById('btn_save_ODF');

    if ( btn_add_equiposODF !== null) btn_add_equiposODF.addEventListener("click", agregarFilaEquiposT4);
    if ( btn_save_ODF !== null) btn_save_ODF.addEventListener("click", guardarTablaODF);

    var table_e5 = '<?php echo $tabla_5; ?>';
    var dataT5 = <?php echo $dataT5Str; ?>;

    dataT5 = JSON.stringify(dataT5);
    dataT5 = JSON.parse(dataT5);

    function agregarFilaPuertosODF(id_table_puertos, id_row_eq) {

        //console.log('==> ' + id_row_eq);

        var row_prto = 'row_prto_' + get_uuid();
        var id_id   = 'id_' + get_uuid();
        var id_puerto   = 'prto_' + get_uuid();
        var id_descri   = 'desc_' + get_uuid();
        var id_posicion   = 'pos_' + get_uuid();
        var id_obs   = 'obs_' + get_uuid();

        for (obj of dataT5){

            if (obj.id_row_eq === id_row_eq){
                obj.puertos.push({
                    "row_prto": row_prto,
                    "id_id": id_id,
                    "id_puerto": id_puerto,
                    "id_descri": id_descri,
                    "id_posicion": id_posicion,
                    "id_obs": id_obs
                })
            }

            //console.log('>> ' + JSON.stringify(obj));

        }

        var fila =
        "<tr class='align-middle' id='"+row_prto+"'>" +
        "   <td><input type='text' class='form-control form-control-sm' id='"+id_id+"'></td>" +
        "   <td><input type='text' class='form-control form-control-sm' id='"+id_puerto+"'></td>" +
        "   <td><input type='text' class='form-control form-control-sm' id='"+id_descri+"'></td>" +
        "   <td><input type='text' class='form-control form-control-sm' id='"+id_posicion+"'></td>" +
        "   <td><input type='text' class='form-control form-control-sm' id='"+id_obs+"'></td>" +
        "   <td><a href='javascript:;' id='btneliminarPrtoODF' onclick='eliminarPrtoODF(`"+row_prto+"`, `"+id_row_eq+"`)'><i class='bx bx-x'></i></a></td>" +
        "</tr>";

        $("#"+id_table_puertos).append(fila);
    }

    function agregarFilaEquiposT4() {

        var id_row_eq = 'row_' + get_uuid();
        var id_table_puertos = 'row_tab_prto_' + get_uuid();

        dataT5.push({
            "id_row_eq": id_row_eq,
            "puertos": []
        });

        var fila =
            "<tr class='align-middle' id='"+id_row_eq+"'>" +
            "    <td width='5%'>" +
            "        <div class='text-center mt-1'>" +
            "            <button type='button' class='btn btn-sm btn-outline-success mb-1' id='btn_add_puertos' " +
            "                    onclick='agregarFilaPuertosODF(`"+id_table_puertos+"`, `"+id_row_eq+"`)'><i class='bx bx-plus me-0'></i></button>" +
            "        </div>" +
            "       <div class='text-center mt-1'><a href='javascript:;' id='btnEliminarPrto' onclick='eliminarEquipoODF(`" + id_row_eq +"`)'><i class='bx bx-x'></i></a></div>" +
            "    </td>" +
            "    <td width='95%'>" +
            "        <table class='table table-bordered' id='"+id_table_puertos+"'>" +
            "            <tr class='align-middle'>" +
            "                <th width='8%'>Id</th>" +
            "                <th width='15%'>Puerto</th>" +
            "                <th width='25%'>Descripción</th>" +
            "                <th width='25%'>Posicion</th>" +
            "                <th width='25%'>Obs</th>" +
            "                <th width='2%'></th>" +
            "            </tr>" +
            "        </table>" +
            "    </td>" +
            "</tr>";


        $("#tabla_equipos_ODF").append(fila);
    }

    function eliminarEquipoODF(id_row_eq) {

        $("#"+id_row_eq).remove();
        var pos = 0;
        var i = 0;
        for (obj of dataT5){
            if (obj.id_row_eq === id_row_eq){
                pos = i;
                dataT5.splice(pos, 1);
                break;
            }
            i++;
        }

    }

    function eliminarPrtoODF(row_prto, id_row_eq) {
        //console.log(row_prto);
        $("#"+row_prto).remove();

        var pos = 0;
        for (obj of dataT5){
            if (obj.id_row_eq === id_row_eq){
                var i = 0;
                for (objPrto of obj.puertos){
                    if (objPrto.row_prto === row_prto){
                        //console.log('Puerto eliminar: ' + objPrto.id_puerto);
                        pos = i;
                        obj.puertos.splice(pos, 1);
                        break;
                    }
                    i++;
                }
                //obj
            }
        }
    }

    function getPuertosODF(puertos) {
        var result = [];

        for (obj of puertos){
            result.push(
                {
                    "row_prto":  obj.row_prto,
                    "id_id": $("#"+obj.id_id).val(),
                    "id_puerto": $("#"+obj.id_puerto).val(),
                    "id_descri": $("#"+obj.id_descri).val(),
                    "id_posicion": $("#"+obj.id_posicion).val(),
                    "id_obs": $("#"+obj.id_obs).val()
                }
            );
        }
        return result;
    }

    function guardarTablaODF() {
        alert("guardando...");

        //console.log('==> dataT5: ' + JSON.stringify(dataT5));

        var dataResult = [];

        //"id_nom":    $("#"+obj.id_nom).val(),
        for (obj of dataT5){
            dataResult.push(
                {
                    "id_row_eq": obj.id_row_eq,
                    "puertos": getPuertosODF(obj.puertos)
                }
            );

        }

        //console.log(JSON.stringify(dataResult));

        var idrutina  = $("#idrutina").val();
        var jsonStr = JSON.stringify(dataResult);

        var frmData5 = new FormData;
        frmData5.append('idrutina', idrutina);
        frmData5.append('dataJsonStr', jsonStr);
        frmData5.append('nombreTabla', 'tabla_5');

        $.ajax({
            url: 'update_r16_tablas.php',
            type: 'POST',
            data: frmData5,
            processData: false,
            contentType: false,
            cache: false,
            success: function (resp) {
                alert(resp);
            }
        });

    }

</script>