<?php
$table_e3_arr = json_decode($table_e3, true);
$dataT3 = [];
$dataT3Str = '';

?>
<button type="button" class="btn btn-sm btn-outline-info mb-1" id="btn_save_ETH"><i class="bx bx-save me-0"></i></button>
<table class="table table-bordered" id="tabla_ETH">
    <tr class='align-middle'>

        <td width="15%">
            <div class="text-center">
                Detalle de puertos ETH ópticos
            </div>
            <div class="text-center mt-1">
                <button type="button" class="btn btn-sm btn-outline-info mb-1" id="btn_add_equipos"><i class="bx bx-plus me-0"></i></button>
            </div>
        </td>
        <td>
            <table class="table table-bordered" id="tabla_equipos">
                <tr class='align-middle'>
                    <td></td>
                    <td></td>
                </tr>
                <?php
                $dataHtml = "";
                if ($table_e3_arr) {
                    foreach ($table_e3_arr as $objVal) {
                        $id_row_eq = $objVal['id_row_eq'];
                        $id_nom = uniqid();
                        $nomEq = $objVal['id_nom'];
                        $id_table_puertos = 'row_tab_prto_' . uniqid();

                        $dataHtml .=
                            "<tr class='align-middle' id='" . $id_row_eq . "'>" .
                            "    <td><a href='javascript:;' id='btnEliminarPrto' onclick='eliminarEquipoETH(`".$id_row_eq."`)'><i class='bx bx-x'></i></a>" .
                            "        <div><input type='text' class='form-control form-control-sm' id='" . $id_nom . "' value='" . $nomEq . "'></div>" .
                            "        <div class='text-center mt-1'>" .
                            "            <button type='button' class='btn btn-sm btn-outline-success mb-1' id='btn_add_puertos' " .
                            "                    onclick='agregarFilaPuertos(`" . $id_table_puertos . "`, `" . $id_row_eq . "`)'><i class='bx bx-plus me-0'></i></button>" .
                            "        </div>" .
                            "    </td>" .
                            "    <td>" .
                            "        <table class='table table-bordered' id='" . $id_table_puertos . "'>" .
                            "            <tr class='align-middle'>" .
                            "                <th width='12%'>Slot/Prto</th>" .
                            "                <th>Descripción</th>" .
                            "                <th width='20%'>Estado</th>" .
                            "                <th width='5%'></th>" .
                            "            </tr>";

                        $puertosArr = [];
                        foreach ($objVal['puertos'] as $objPrto) {

                            $row_prto = 'row_prto_' . uniqid();
                            $id_puerto = 'prto_' . uniqid();
                            $id_descri = 'desc_' . uniqid();
                            $id_estado = 'esta_' . uniqid();

                            $puerto = $objPrto['id_puerto'];
                            $descri = $objPrto['id_descri'];
                            $estado = $objPrto['id_estado'];

                            $puertosArr[] = array(
                                "row_prto"  => $row_prto,
                                "id_puerto" => $id_puerto,
                                "id_descri" => $id_descri,
                                "id_estado" => $id_estado
                            );

                            $dataHtml .=
                                "<tr class='align-middle' id='".$row_prto."'>" .
                                "   <td><input type='text' class='form-control form-control-sm' id='" . $id_puerto . "' value='" . $puerto . "'></td>" .
                                "   <td><input type='text' class='form-control form-control-sm' id='" . $id_descri . "' value='" . $descri . "'></td>" .
                                "   <td><input type='text' class='form-control form-control-sm' id='" . $id_estado . "' value='" . $estado . "'></td>" .
                                "   <td><a href='javascript:;' id='btnEliminarPrto' onclick='eliminarPrto(`$row_prto`, `$id_row_eq`)'><i class='bx bx-x'></i></a></td>" .
                                "</tr>";
                        }

                        //---------------------------------------------
                        /** Creando array de ids **/
                        $dataT3[] = array(
                            "id_row_eq" => $id_row_eq,
                            "id_nom" => $id_nom,
                            "puertos" => $puertosArr
                        );
                        //---------------------------------------------

                        $dataHtml .=
                            "        </table>" .
                            "    </td>" .
                            "</tr>";
                    }
                }
                $dataT3Str = json_encode($dataT3);
                echo $dataHtml;
                ?>

            </table>
        </td>
    </tr>
</table>


<script type="text/javascript">

    var btn_add_equipos = document.getElementById('btn_add_equipos');
    var tabla_equipos   = document.getElementById('tabla_equipos');
    var btn_save_ETH    = document.getElementById('btn_save_ETH');

    btn_add_equipos.addEventListener("click", agregarFilaEquiposT3);
    btn_save_ETH.addEventListener("click", guardarTablaETH);

    var table_e3 = '<?php echo $table_e3; ?>';
    var dataT3 = <?php echo $dataT3Str; ?>;

    dataT3 = JSON.stringify(dataT3);
    dataT3 = JSON.parse(dataT3);

    //console.log('Arr dataT3: ' + dataT3);
    //console.log('Arr table_e3: ' + table_e3);

    /*function get_uuid() {
                return ([1e7]+-1e3+-4e3+-8e3+-1e11).replace(/[018]/g, c =>
            (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
        );

    }*/


    function agregarFilaPuertos(id_table_puertos, id_row_eq) {

        //console.log('==> ' + id_row_eq);

        var row_prto = 'row_prto_' + get_uuid();
        var id_puerto   = 'prto_' + get_uuid();
        var id_descri   = 'desc_' + get_uuid();
        var id_estado   = 'esta_' + get_uuid();

        for (obj of dataT3){

            if (obj.id_row_eq === id_row_eq){
                obj.puertos.push({
                    "row_prto": row_prto,
                    "id_puerto": id_puerto,
                    "id_descri": id_descri,
                    "id_estado": id_estado
                })
            }

            //console.log('>> ' + JSON.stringify(obj));

        }

        var fila =
        "<tr class='align-middle' id='"+row_prto+"'>" +
        "   <td><input type='text' class='form-control form-control-sm' id='"+id_puerto+"'></td>" +
        "   <td><input type='text' class='form-control form-control-sm' id='"+id_descri+"'></td>" +
        "   <td><input type='text' class='form-control form-control-sm' id='"+id_estado+"'></td>" +
        "   <td><a href='javascript:;' id='btnEliminarPrto' onclick='eliminarPrto(`"+row_prto+"`, `"+id_row_eq+"`)'><i class='bx bx-x'></i></a></td>" +
        "</tr>";

        $("#"+id_table_puertos).append(fila);
    }

    function agregarFilaEquiposT3() {

        var id_row_eq = 'row_' + get_uuid();
        var id_nom    = 'nom_' + get_uuid();
        var id_table_puertos = 'row_tab_prto_' + get_uuid();

        dataT3.push({
            "id_row_eq": id_row_eq,
            "id_nom": id_nom,
            "puertos": []
        });

        //console.log('---> ' + JSON.stringify(dataT3) );

        var fila =
            "<tr class='align-middle' id='"+id_row_eq+"'>" +
            "    <td><a href='javascript:;' id='btnEliminarPrto' onclick='eliminarEquipoETH(`" + id_row_eq +"`)'><i class='bx bx-x'></i></a>" +
            "        <div><input type='text' class='form-control form-control-sm' id='"+id_nom+"'></div>" +
            "        <div class='text-center mt-1'>" +
            "            <button type='button' class='btn btn-sm btn-outline-success mb-1' id='btn_add_puertos' " +
            "                    onclick='agregarFilaPuertos(`"+id_table_puertos+"`, `"+id_row_eq+"`)'><i class='bx bx-plus me-0'></i></button>" +
            "        </div>" +
            "    </td>" +
            "    <td>" +
            "        <table class='table table-bordered' id='"+id_table_puertos+"'>" +
            "            <tr class='align-middle'>" +
            "                <th width='12%'>Slot/Prto</th>" +
            "                <th>Descripción</th>" +
            "                <th width='20%'>Estado</th>" +
            "                <th width='5%'></th>" +
            "            </tr>" +
            "        </table>" +
            "    </td>" +
            "</tr>";


        $("#tabla_equipos").append(fila);
    }

    function eliminarEquipoETH(id_row_eq) {
        //console.log('id_row_eq' + id_row_eq);
        $("#"+id_row_eq).remove();

        var pos = 0;
        var i = 0;
        for (obj of dataT3){
            if (obj.id_row_eq === id_row_eq){
                //console.log('Equipo eliminar: ' + obj.id_row_eq);
                pos = i;
                dataT3.splice(pos, 1);
                break;
            }
        }

    }

    function eliminarPrto(row_prto, id_row_eq) {
        //console.log(row_prto);
        $("#"+row_prto).remove();

        var pos = 0;
        for (obj of dataT3){
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
                obj
            }
        }
    }

    function getPuertos(puertos) {
        var result = [];

        for (obj of puertos){
            result.push(
                {
                    "row_prto":  obj.row_prto,
                    "id_puerto": $("#"+obj.id_puerto).val(),
                    "id_descri": $("#"+obj.id_descri).val(),
                    "id_estado": $("#"+obj.id_estado).val()
                }
            );
        }
        return result;
    }

    function guardarTablaETH() {
        alert("guardando...");

        //console.log('==> dataT3: ' + JSON.stringify(dataT3));

        var dataResult = [];

        for (obj of dataT3){
            dataResult.push(
                {
                    "id_row_eq": obj.id_row_eq,
                    "id_nom":    $("#"+obj.id_nom).val(),
                    "puertos": getPuertos(obj.puertos)
                }
            );

        }

        //console.log(JSON.stringify(dataResult));

        var idrutina  = $("#idrutina").val();
        var jsonStrT3 = JSON.stringify(dataResult);

        var frmDataT3 = new FormData;
        frmDataT3.append('idrutina', idrutina);
        frmDataT3.append('jsonStrT3', jsonStrT3);

        $.ajax({
            url: 'update_r15_tabla3.php',
            type: 'POST',
            data: frmDataT3,
            processData: false,
            contentType: false,
            cache: false,
            success: function (resp) {
                alert(resp);
            }
        });

    }

</script>