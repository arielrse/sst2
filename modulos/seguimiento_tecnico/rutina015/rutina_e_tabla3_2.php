<?php
$table_e4_arr = json_decode($table_e4, true);
$dataT4 = [];
$dataT4Str = '';

?>
<?php if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() || isAdmin() && $estado=='REV') && (!isClient() && !isNationalClient()) ) { ?>
<button type="button" class="btn btn-sm btn-outline-info mb-1" id="btn_save_ODF"><i class="bx bx-save me-0"></i></button>
<?php } ?>
<table class="table table-bordered" id="tabla_ODF">
    <tr class='align-middle'>

        <td width="15%">
            <div class="text-center">
                Puertos opticos en bandeja ODF
            </div>
            <div class="text-center mt-1">
                <button type="button" class="btn btn-sm btn-outline-info mb-1" id="btn_add_equipos_ODF"><i class="bx bx-plus me-0"></i></button>
            </div>
        </td>
        <td>
            <table class="table table-bordered" id="tabla_equipos_ODF">
                <tr class='align-middle'>
                    <td></td>
                    <td></td>
                </tr>
                <?php
                $dataHtml = "";
                if ($table_e4_arr) {
                    foreach ($table_e4_arr as $objVal) {
                        $id_row_eq = $objVal['id_row_eq'];
                        $id_nom = uniqid();
                        $nomEq = $objVal['id_nom'];
                        $id_table_puertos = 'row_tab_prto_' . uniqid();

                        $dataHtml .=
                            "<tr class='align-middle' id='" . $id_row_eq . "'>" .
                            "    <td><a href='javascript:;' id='btnEliminarPrto' onclick='eliminarEquipoODF(`".$id_row_eq."`)'><i class='bx bx-x'></i></a>" .
                            "        <div><input type='text' class='form-control form-control-sm' id='" . $id_nom . "' value='" . $nomEq . "'></div>" .
                            "        <div class='text-center mt-1'>" .
                            "            <button type='button' class='btn btn-sm btn-outline-success mb-1' id='btn_add_puertos' " .
                            "                    onclick='agregarFilaPuertosODF(`" . $id_table_puertos . "`, `" . $id_row_eq . "`)'><i class='bx bx-plus me-0'></i></button>" .
                            "        </div>" .
                            "    </td>" .
                            "    <td>" .
                            "        <table class='table table-bordered' id='" . $id_table_puertos . "'>" .
                            "            <tr class='align-middle'>" .
                            "                <th width='12%'>Prto.</th>" .
                            "                <th>Descripción</th>" .
                            "                <th width='20%'>T. Conector</th>" .
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
                            $estadoPrt = $objPrto['id_estado'];

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
                                "   <td><input type='text' class='form-control form-control-sm' id='" . $id_estado . "' value='" . $estadoPrt . "'></td>" .
                                "   <td><a href='javascript:;' id='btneliminarPrtoODF' onclick='eliminarPrtoODF(`$row_prto`, `$id_row_eq`)'><i class='bx bx-x'></i></a></td>" .
                                "</tr>";
                        }

                        //---------------------------------------------
                        /** Creando array de ids **/
                        $dataT4[] = array(
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
                $dataT4Str = json_encode($dataT4);
                echo $dataHtml;
                ?>

            </table>
        </td>
    </tr>
</table>


<script type="text/javascript">

    var btn_add_equiposODF = document.getElementById('btn_add_equipos_ODF');
    var tabla_equiposODF   = document.getElementById('tabla_equipos_ODF');
    var btn_save_ODF       = document.getElementById('btn_save_ODF');

    if ( btn_add_equiposODF !== null) btn_add_equiposODF.addEventListener("click", agregarFilaEquiposT4);
    if ( btn_save_ODF !== null) btn_save_ODF.addEventListener("click", guardarTablaODF);

    var table_e4 = '<?php echo $table_e4; ?>';
    var dataT4 = <?php echo $dataT4Str; ?>;

    dataT4 = JSON.stringify(dataT4);
    dataT4 = JSON.parse(dataT4);

    //console.log('Arr dataT4: ' + dataT4);
    //console.log('Arr table_e3: ' + table_e3);

    /*function get_uuid() {
        let uuid =  self.crypto.randomUUID();
        console.log('uuid: ' + uuid);
        return uuid;
    }*/


    function agregarFilaPuertosODF(id_table_puertos, id_row_eq) {

        //console.log('==> ' + id_row_eq);

        var row_prto = 'row_prto_' + get_uuid();
        var id_puerto   = 'prto_' + get_uuid();
        var id_descri   = 'desc_' + get_uuid();
        var id_estado   = 'esta_' + get_uuid();

        for (obj of dataT4){

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
        "   <td><a href='javascript:;' id='btneliminarPrtoODF' onclick='eliminarPrtoODF(`"+row_prto+"`, `"+id_row_eq+"`)'><i class='bx bx-x'></i></a></td>" +
        "</tr>";

        $("#"+id_table_puertos).append(fila);
    }

    function agregarFilaEquiposT4() {

        var id_row_eq = 'row_' + get_uuid();
        var id_nom    = 'nom_' + get_uuid();
        var id_table_puertos = 'row_tab_prto_' + get_uuid();

        dataT4.push({
            "id_row_eq": id_row_eq,
            "id_nom": id_nom,
            "puertos": []
        });

        //console.log('---> ' + JSON.stringify(dataT4) );

        var fila =
            "<tr class='align-middle' id='"+id_row_eq+"'>" +
            "    <td><a href='javascript:;' id='btnEliminarPrto' onclick='eliminarEquipoODF(`" + id_row_eq +"`)'><i class='bx bx-x'></i></a>" +
            "        <div><input type='text' class='form-control form-control-sm' id='"+id_nom+"'></div>" +
            "        <div class='text-center mt-1'>" +
            "            <button type='button' class='btn btn-sm btn-outline-success mb-1' id='btn_add_puertos' " +
            "                    onclick='agregarFilaPuertosODF(`"+id_table_puertos+"`, `"+id_row_eq+"`)'><i class='bx bx-plus me-0'></i></button>" +
            "        </div>" +
            "    </td>" +
            "    <td>" +
            "        <table class='table table-bordered' id='"+id_table_puertos+"'>" +
            "            <tr class='align-middle'>" +
            "                <th width='12%'>Prto.</th>" +
            "                <th>Descripción</th>" +
            "                <th width='20%'>T. Conector</th>" +
            "                <th width='5%'></th>" +
            "            </tr>" +
            "        </table>" +
            "    </td>" +
            "</tr>";


        $("#tabla_equipos_ODF").append(fila);
    }

    function eliminarEquipoODF(id_row_eq) {
        //console.log('id_row_eq' + id_row_eq);
        $("#"+id_row_eq).remove();

        var pos = 0;
        var i = 0;
        for (obj of dataT4){
            if (obj.id_row_eq === id_row_eq){
                //console.log('Equipo eliminar: ' + obj.id_row_eq);
                pos = i;
                dataT4.splice(pos, 1);
                break;
            }
            i++;
        }

    }

    function eliminarPrtoODF(row_prto, id_row_eq) {
        //console.log(row_prto);
        $("#"+row_prto).remove();

        var pos = 0;
        for (obj of dataT4){
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
                    "id_puerto": $("#"+obj.id_puerto).val(),
                    "id_descri": $("#"+obj.id_descri).val(),
                    "id_estado": $("#"+obj.id_estado).val()
                }
            );
        }
        return result;
    }

    function guardarTablaODF() {
        alert("guardando...");

        //console.log('==> dataT4: ' + JSON.stringify(dataT4));

        var dataResult = [];

        for (obj of dataT4){
            dataResult.push(
                {
                    "id_row_eq": obj.id_row_eq,
                    "id_nom":    $("#"+obj.id_nom).val(),
                    "puertos": getPuertosODF(obj.puertos)
                }
            );

        }

        //console.log(JSON.stringify(dataResult));

        var idrutina  = $("#idrutina").val();
        var jsonStrT4 = JSON.stringify(dataResult);

        var frmDataT4 = new FormData;
        frmDataT4.append('idrutina', idrutina);
        frmDataT4.append('jsonStrT4', jsonStrT4);

        $.ajax({
            url: 'update_r15_tabla4.php',
            type: 'POST',
            data: frmDataT4,
            processData: false,
            contentType: false,
            cache: false,
            success: function (resp) {
                alert(resp);
            }
        });

    }

</script>