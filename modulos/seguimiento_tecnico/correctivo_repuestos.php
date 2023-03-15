<?php
$repuestosDatos = $repuestos;
$tabla_repuestos = json_decode($repuestosDatos, true);
?>

<div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">
    <div class="col mb-2">
        <div class="input-group">
            <?php /*if ( !isClient() && !isNationalClient() ) { */?>
            <?php if ( $permissions ) { ?>
                <button class="btn btn-sm btn-outline-primary" type="button" id="add-repuesto"><i class='bx bx-plus'></i></button>
            <?php } ?>

        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">
    <table id="tabla_repuesto" class="table mb-0 table-hover">
        <tr>
            <td width="32%">DESCRIPCIÓN DE REPUESTOS</td>
            <td width="32%">PROVISTOS POR ENTEL (N. Serie)</td>
            <td width="32%">REPUESTOS DAÑADOS (N. Serie)</td>
            <td width="4%"></td>
        </tr>
        <?php
        $fila_repuesto = '';
        if ($tabla_repuestos)
            foreach ($tabla_repuestos as $objVal) {
                $rowid = $objVal['rowid'];

                $btn_eliminar = $permissions ? '<a href="javascript:;" id="btnEliminarRep" onclick="eliminarRepuesto(`'.$rowid.'`)"><i class="bx bx-x"></i></a>' : '';

                $fila_repuesto .= '
                <tr id="'.$rowid.'">
                    <td><input type="text" class="form-control form-control-sm" id="repuesto'.$rowid.'" value="'.$objVal['repuesto'].'"></td>
                    <td><input type="text" class="form-control form-control-sm" id="provisto'.$rowid.'" value="'.$objVal['provisto'].'"></td>
                    <td><input type="text" class="form-control form-control-sm" id="danado'.$rowid.'" value="'.$objVal['danado'].'"></td>
                    <td>'.$btn_eliminar.'</td>
                </tr>';
            }
        echo $fila_repuesto;
        ?>

    </table>
</div>

<script type="text/javascript">
    // ---------------------- Repuestos ----------------------------------------

    var dataRepuestos = [];
    var tabla_datosR = '<?php echo $repuestosDatos ?>';
    //console.log('Tabla Insumos: ' + tabla_datosR);

    if ( tabla_datosR ){
        dataRepuestos = JSON.parse(tabla_datosR);
    }

    $('#add-repuesto').click(function(){
        var rowid = get_uuid();
        var fila =
            '<tr id="' + rowid + '">' +
            '<td><input type="text" class="form-control form-control-sm" id="repuesto' + rowid + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="provisto' + rowid + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="danado' + rowid + '"></td>' +
            '<td><a href="javascript:;" id="btnEliminarRep" onclick="eliminarRepuesto(`' + rowid + '`)"><i class="bx bx-x"></i></a></td>' +
            '</tr>';

        dataRepuestos.push({
            "rowid": rowid,
            "repuesto": "",
            "provisto": "",
            "danado": ""
        });

        $("#tabla_repuesto").append(fila);

    });

    function guardarRepuesto() {

        for (obj of dataRepuestos){
            obj.repuesto = $("#repuesto" + obj.rowid).val();
            obj.provisto = $("#provisto" + obj.rowid).val();
            obj.danado = $("#danado" + obj.rowid).val();
        }

        var idcorrectivo = $("#idc").val();
        var dataJsonStr = JSON.stringify(dataRepuestos);

        var frmData = new FormData;
        frmData.append('idcorrectivo', idcorrectivo);
        frmData.append('dataJsonStr', dataJsonStr);

        $.ajax({
            url: 'update_correctivo_repuestos.php',
            type: 'POST',
            data: frmData,
            processData: false,
            contentType: false,
            cache: false,
            success: function (resp) {
                alert(resp);
            }
        });

    }

    function eliminarRepuesto(rowid) {
        //console.log('id: ' + rowid);
        $("#"+rowid).remove();

        const index = dataRepuestos.findIndex(object => {
            return object.rowid === rowid;
        });
        dataRepuestos.splice(index, 1);
        //console.log(JSON.stringify(dataEquipos));
    }

    // ---------------------- End Repuestos ----------------------------------------

    function get_uuid() {
        var dt = new Date().getTime();
        var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = (dt + Math.random()*16)%16 | 0;
            dt = Math.floor(dt/16);
            return (c=='x' ? r :(r&0x3|0x8)).toString(16);
        });
        //console.log('uuid: ' + uuid);
        return uuid;
    }

</script>