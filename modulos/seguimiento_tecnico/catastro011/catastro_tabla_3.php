<?php
?>

<div class="card">
    <div class="card-body">

        <?php if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() && $estado=='REV') && (!isClient() && !isNationalClient()) ) { ?>
        <div class="col mb-2">
            <button id="btn-save-redes" type="button" class="btn btn-outline-info"><i class="bx bx-save me-0"></i></button>
            <button id="btn-add-rowR" type="button" class="btn btn-outline-info"><i class="bx bx-plus me-0"></i></button>
        </div>
        <?php } ?>

        <table id="tabla_redes" class="table table-sm table-bordered mb-3">
            <tr>
                <td width="18%" align="center">nombre</td>
                <td width="18%" align="center">capa</td>
                <td width="18%" align="center">topologia</td>
                <td width="18%" align="center">equipoa</td>
                <td width="18%" align="center">equipob</td>
                <td width="7%" align="center">proteccion</td>
                <td width="3%" align="center"></td>
            </tr>

            <?php
            $rowHtml = '';
            if ($tabla_3_arr)
                foreach ($tabla_3_arr as $objVal) {
                    $rowid = $objVal['rowid'];

                    $btn_eliminar = "";
                    if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() && $estado=='REV') && (!isClient() && !isNationalClient()) )
                        $btn_eliminar = "<a href='javascript:;' id='btnEliminar' onclick='eliminarRed(`$rowid`)'><i class='bx bx-x'></i></a>";

                    $rowHtml .=
                        "<tr id='$rowid'>" .
                        "<td><input type='text' class='form-control form-control-sm' id='nombre$rowid' value='".$objVal['equipo']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='capa$rowid' value='".$objVal['modelo']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='topologia$rowid' value='".$objVal['marca']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='equipoa$rowid' value='".$objVal['estado']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='equipob$rowid' value='".$objVal['puertos']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='proteccion$rowid' value='".$objVal['patch']."'></td>" .
                        "<td>".$btn_eliminar."</td>" .
                        "</tr>";
                }
            echo $rowHtml;
            ?>

        </table>

        <div class="row mt-3">
            <div class="col-12">
                <label for="inputAddress" class="form-label"><h6>Observaciones:</h6></label>
                <textarea class="form-control" id="observaciones3" name="observaciones3" rows="2"><?php echo $observaciones3 ?></textarea>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">

    var btn_add_rowR = document.getElementById('btn-add-rowR');
    var btn_save_redes = document.getElementById('btn-save-redes');

    btn_add_rowR.addEventListener("click", agregarRed);
    btn_save_redes.addEventListener("click", guardarRedes);

    var dataRedes = [];
    var tabla_3 = '<?php echo $tabla_3; ?>';

    console.log('Tabla 3: ' + tabla_3);

    if ( tabla_3 ){
        dataRedes = JSON.parse(tabla_3);
    }

    function agregarRed() {

        var id = get_uuid();
        var rowid = id;
        var fila =
            '<tr id="' + id + '">' +
            '<td><input type="text" class="form-control form-control-sm" id="nombre' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="capa' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="topologia' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="equipoa' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="equipob' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="proteccion' + id + '"></td>' +
            '<td><a href="javascript:;" id="btnEliminar" onclick="eliminarRed(`' + rowid + '`)"><i class="bx bx-x"></i></a></td>' +
            '</tr>';

        dataRedes.push({
            "rowid": rowid,
            "nombre": "",
            "capa": "",
            "topologia": "",
            "equipoa": "",
            "equipob": "",
            "proteccion": ""
        });

        $("#tabla_redes").append(fila);
        console.log(JSON.stringify(dataRedes));

    }

    function guardarRedes() {

        console.log("Save: " + JSON.stringify(dataRedes));

        for (obj of dataRedes){
            obj.equipo = $("#nombre" + obj.rowid).val();
            obj.modelo = $("#capa" + obj.rowid).val();
            obj.marca = $("#topologia" + obj.rowid).val();
            obj.estado = $("#equipoa" + obj.rowid).val();
            obj.puertos = $("#equipob" + obj.rowid).val();
            obj.patch = $("#proteccion" + obj.rowid).val();
        }
        var idcatastro = $("#idcatastro").val();
        var dataJsonStr = JSON.stringify(dataRedes);

        console.log("idcatastro: " + idcatastro);
        console.log("dataJsonStr: " + dataJsonStr);

        var frmData = new FormData;
        frmData.append('idcatastro', idcatastro);
        frmData.append('dataJsonStr', dataJsonStr);
        frmData.append('nombreTabla', 'tabla_3');

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

    function eliminarRed(rowid) {
        console.log('id: ' + rowid);

        $("#"+rowid).remove();

        const index = dataRedes.findIndex(object => {
            return object.rowid === rowid;
        });
        console.log('index: ' + index);
        dataRedes.splice(index, 1);
        console.log(JSON.stringify(dataRedes));
    }

</script>