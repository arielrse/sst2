<?php
?>

<div class="card">
    <div class="card-body">

        <?php if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() && $estado=='REV') && (!isClient() && !isNationalClient()) ) { ?>
        <div class="col mb-2">
            <button id="btn-save-fuentes" type="button" class="btn btn-outline-info"><i class="bx bx-save me-0"></i></button>
            <button id="btn-add-rowF" type="button" class="btn btn-outline-info"><i class="bx bx-plus me-0"></i></button>
        </div>
        <?php } ?>

        <table id="tabla_fuentes" class="table table-sm table-bordered mb-3">
            <tr>
                <td width="5%" align="center">Cant Fuentes</td>
                <td width="7%" align="center">Enegia ac/dc</td>
                <td width="8%" align="center">Voltaje</td>
                <td width="8%" align="center">Estado</td>
                <td width="27%" align="center" colspan="2">Origen Fuente A</td>
                <td width="27%" align="center" colspan="2">Origen Fuente B</td>
                <td width="8%" align="center"><small>Voltaje Fuente A</small></td>
                <td width="8%" align="center"><small>Voltaje Fuente B</small></td>
                <td width="2%" align="center"></td>
            </tr>

            <?php
            $rowHtml = '';
            if ($tabla_2_arr)
                foreach ($tabla_2_arr as $objVal) {
                    $rowid = $objVal['rowid'];

                    $btn_eliminar = "";
                    if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() && $estado=='REV') && (!isClient() && !isNationalClient()) )
                        $btn_eliminar = "<a href='javascript:;' id='btnEliminar' onclick='eliminarFuente(`$rowid`)'><i class='bx bx-x'></i></a>";

                    $rowHtml .=
                        "<tr id='$rowid'>" .
                        "<td><input type='text' class='form-control form-control-sm' id='cant$rowid' value='".$objVal['cant']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='energia$rowid' value='".$objVal['energia']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='voltaje$rowid' value='".$objVal['voltaje']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='estado$rowid' value='".$objVal['estado']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='origena1$rowid' value='".$objVal['origena1']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='origena2$rowid' value='".$objVal['origena2']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='origenb1$rowid' value='".$objVal['origenb1']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='origenb2$rowid' value='".$objVal['origenb2']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='fuentea$rowid' value='".$objVal['fuentea']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='fuenteb$rowid' value='".$objVal['fuenteb']."'></td>" .
                        "<td>".$btn_eliminar."</td>" .
                        "</tr>";
                }
            echo $rowHtml;
            ?>

        </table>

        <div class="row mt-3 mb-3">
            <div class="col-12">
                <label for="inputAddress" class="form-label"><h6>Observaciones:</h6></label>
                <textarea class="form-control" id="observaciones2" name="observaciones2" rows="2"><?php echo $observaciones2 ?></textarea>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">

    var btn_add_rowF = document.getElementById('btn-add-rowF');
    var btn_save_fuentes = document.getElementById('btn-save-fuentes');

    btn_add_rowF.addEventListener("click", agregarFuente);
    btn_save_fuentes.addEventListener("click", guardarFuentes);

    var dataFuentes = [];
    var tabla_2 = '<?php echo $tabla_2; ?>';

    console.log('Tabla 2: ' + tabla_2);

    if ( tabla_2 ){
        dataFuentes = JSON.parse(tabla_2);
    }

    function agregarFuente() {

        var id = get_uuid();
        var rowid = id;
        var fila =
            '<tr id="' + id + '">' +
            '<td><input type="text" class="form-control form-control-sm" id="cant' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="energia' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="voltaje' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="estado' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="origena1' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="origena2' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="origenb1' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="origenb2' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="fuentea' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="fuenteb' + id + '"></td>' +
            '<td><a href="javascript:;" id="btnEliminar" onclick="eliminarFuente(`' + rowid + '`)"><i class="bx bx-x"></i></a></td>' +
            '</tr>';

        dataFuentes.push({
            "rowid": rowid,
            "cant": "",
            "energia": "",
            "voltaje": "",
            "estado": "",
            "origena1": "",
            "origena2": "",
            "origenb1": "",
            "origenb2": "",
            "fuentea": "",
            "fuenteb": ""
        });

        $("#tabla_fuentes").append(fila);
        console.log(JSON.stringify(dataFuentes));

    }

    function guardarFuentes() {

        console.log("Save: " + JSON.stringify(dataFuentes));

        for (obj of dataFuentes){
            obj.cant = $("#cant" + obj.rowid).val();
            obj.energia = $("#energia" + obj.rowid).val();
            obj.voltaje = $("#voltaje" + obj.rowid).val();
            obj.estado = $("#estado" + obj.rowid).val();
            obj.origena1 = $("#origena1" + obj.rowid).val();
            obj.origena2 = $("#origena2" + obj.rowid).val();
            obj.origenb1 = $("#origenb1" + obj.rowid).val();
            obj.origenb2 = $("#origenb2" + obj.rowid).val();
            obj.fuentea = $("#fuentea" + obj.rowid).val();
            obj.fuenteb = $("#fuenteb" + obj.rowid).val();
        }
        var idcatastro = $("#idcatastro").val();
        var dataJsonStr = JSON.stringify(dataFuentes);

        console.log("idcatastro: " + idcatastro);
        console.log("dataJsonStr: " + dataJsonStr);

        var frmData = new FormData;
        frmData.append('idcatastro', idcatastro);
        frmData.append('dataJsonStr', dataJsonStr);
        frmData.append('nombreTabla', 'tabla_2');

        $.ajax({
            url: 'update_c11_tablas.php',
            type: 'POST',
            data: frmData,
            processData: false,
            contentType: false,
            cache: false,
            success: function (resp) {
                alert(resp);
            }
        });

        const botonF = document.getElementById('botonF');
        botonF.click();
    }

    function eliminarFuente(rowid) {
        console.log('id: ' + rowid);

        $("#"+rowid).remove();

        const index = dataFuentes.findIndex(object => {
            return object.rowid === rowid;
        });
        console.log('index: ' + index);
        dataFuentes.splice(index, 1);
        console.log(JSON.stringify(dataFuentes));
    }

    /*function get_uuid() {
        var dt = new Date().getTime();
        var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = (dt + Math.random()*16)%16 | 0;
            dt = Math.floor(dt/16);
            return (c=='x' ? r :(r&0x3|0x8)).toString(16);
        });
        //console.log('uuid: ' + uuid);
        return uuid;
    }*/
</script>