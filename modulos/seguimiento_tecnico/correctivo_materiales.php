<?php
$insumosDatos = $insumos;
$tabla_insumos = json_decode($insumosDatos, true);
?>

<div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">
    <div class="col mb-2">
        <div class="input-group">
            <select class="single-select form-select" id="select_material">
                <option value="0" selected> Seleccionar material</option>
                <?php
                $resultado = mysqli_query($conexion, "SELECT idmaterial, codigo, nombre, unidad, precio FROM material");
                while($dato=mysqli_fetch_array($resultado)) {
                    $value = $dato['idmaterial'] . '|' . $dato['codigo'] . '|' . $dato['nombre'] . '|' . $dato['unidad'] . '|' . $dato['precio'];
                    echo '<option value="' . $value . '">' . $dato['codigo'] . ' - ' . $dato['nombre'] . ' (' . $dato['precio'] . ')</option>';
                }
                ?>
            </select>

            <?php /*if ( !isClient() && !isNationalClient() ) { */?>
            <?php if ( $permissions ) { ?>
                <button class="btn btn-outline-primary" type="button" id="add-material"><i class='bx bx-plus'></i></button>
            <?php } ?>

        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">
    <table id="tabla_material" class="table mb-0 table-hover">
        <thead>
        <tr>
            <th width="7%">Cod</th>
            <th width="30%">Material</th>
            <th width="8%">Unidad</th>
            <th width="10%">Precio</th>
            <th width="10%">Cantidad</th>
            <th width="13%">Total</th>
            <th width="20%">Observaciones</th>
            <th width="2%"></th>
        </tr>
        </thead>
        <?php
        /*<td><input type="text" class="form-control form-control-sm" id="total'.$rowid.'" value="'.number_format($objVal['total'], 2, '.', ',').'"></td>*/
        $fila_material = '';
        $totalMonto = 0;
        if ($tabla_insumos)
            foreach ($tabla_insumos as $objVal) {
                $rowid = $objVal['rowid'];
                $totalMonto += $objVal['total'];
                $fila_material .= '
        <tr id="'.$rowid.'">
            <td>'.$objVal['codigo'].'</td>
            <td>'.$objVal['nombre'].'</td>
            <td>'.$objVal['unidad'].'</td>
            <td><input type="text" class="form-control form-control-sm" id="precio'.$rowid.'" value="'.$objVal['precio'].'" disabled></td>
            <td><input type="text" class="form-control form-control-sm" id="cantidad'.$rowid.'" value="'.$objVal['cantidad'].'" onblur="calcularTotal(`'.$rowid.'`)"></td>
            <td><input type="text" class="form-control form-control-sm" id="total'.$rowid.'" value="'.number_format($objVal['total'], 2, '.', ',').'" disabled></td>
            <td><input type="text" class="form-control form-control-sm" id="observacion'.$rowid.'" value="'.$objVal['observacion'].'"></td>
            <td><a href="javascript:;" id="btnEliminar" onclick="eliminarMaterial(`'.$rowid.'`)"><i class="bx bx-x"></i></a></td>
        </tr>';

            }
        /*$dataJsonMaterial = json_encode($dataArr);*/
        echo $fila_material;
        ?>
        <tfoot>
        <tr>
            <th colspan="4"></th>
            <th>TOTAL:</th>
            <th><input type="text" class="form-control form-control-sm" id="totalMonto" value="<?php echo number_format($totalMonto, 2, '.', ',') ?>" disabled></th>
            <th colspan="2"></th>
        </tr>
        </tfoot>
    </table>
</div>

<script type="text/javascript">

    function quita_comas(numero){
        var cadenas = numero.split(",");
        cadena_sin_comas = "";
        for(i = 0; i < cadenas.length;i++){
            cadena_sin_comas = cadena_sin_comas+cadenas[i];
        }
        return cadena_sin_comas;
    }

    // ---------------------- Materiales ----------------------------------------

    //console.log('json: ' + JSON.stringify(jsonMaterial));
    var dataMateriales = [];
    var tabla_datos = '<?php echo $insumosDatos ?>';
    var totalMonto = '<?php echo $totalMonto ?>';
    //console.log('Tabla Insumos: ' + tabla_datos);
    //console.log('totalMonto: ' + totalMonto);

    if ( tabla_datos ){
        dataMateriales = JSON.parse(tabla_datos);
    }

    $('#add-material').click(function(){
        var select = $('#select_material').val();
        var datosArr    = select.split("|");

        var codigo = datosArr[1];
        var nombre = datosArr[2];
        var unidad = datosArr[3];
        var precio = datosArr[4];

        var rowid = get_uuid();
        var fila =
            '<tr id="' + rowid + '">' +
            '<td>'+codigo+'</td>' +
            '<td>'+nombre+'</td>' +
            '<td>'+unidad+'</td>' +
            '<td><input type="text" class="form-control form-control-sm" id="precio' + rowid + '" value="'+precio+'" disabled></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="cantidad' + rowid + '" onblur="calcularTotal(`'+rowid+'`)"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="total' + rowid + '" disabled></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="observacion' + rowid + '"></td>' +
            '<td><a href="javascript:;" id="btnEliminar" onclick="eliminarMaterial(`' + rowid + '`)"><i class="bx bx-x"></i></a></td>' +
            '</tr>';

        dataMateriales.push({
            "rowid": rowid,
            "codigo": codigo,
            "nombre": nombre,
            "unidad": unidad,
            "precio": precio,
            "cantidad": "",
            "total": "",
            "observacion": ""
        });

        $("#tabla_material").append(fila);

    });

    function guardarMaterial() {

        for (obj of dataMateriales){
            var total = quita_comas($("#total" + obj.rowid).val());
            obj.cantidad    = $("#cantidad" + obj.rowid).val();
            obj.total       = total;
            obj.observacion = $("#observacion" + obj.rowid).val();
        }
        //console.log("Save: " + JSON.stringify(dataMateriales));
        var idcorrectivo = $("#idc").val();
        var dataJsonStr = JSON.stringify(dataMateriales);

        var frmData = new FormData;
        frmData.append('idcorrectivo', idcorrectivo);
        frmData.append('dataJsonStr', dataJsonStr);

        $.ajax({
            url: 'update_correctivo_insumos.php',
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

    function calcularTotalMonto() {
        var totalM = 0;
        for (obj of dataMateriales){
            var total = quita_comas($("#total" + obj.rowid).val());
            totalM = totalM + (total*1);
        }
        //console.log('MontoTotal: ' + totalM);
        document.getElementById('totalMonto').value = new Intl.NumberFormat('es-MX').format(Math.round(totalM * 100)/100);
    }

    function calcularTotal(rowid) {
        var precio = $('#precio'+rowid).val();
        var cantidad = $('#cantidad'+rowid).val();
        //var total = $('#total'+rowid).val();

        document.getElementById('total'+rowid).value = new Intl.NumberFormat('es-MX').format(Math.round(precio * cantidad * 100)/100);
        calcularTotalMonto();
    }

    function eliminarMaterial(rowid) {
        $("#"+rowid).remove();

        const index = dataMateriales.findIndex(object => {
            return object.rowid === rowid;
        });
        dataMateriales.splice(index, 1);
        calcularTotalMonto();
        //console.log(JSON.stringify(dataEquipos));
    }

    // ---------------------- End Materiales ----------------------------------------

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