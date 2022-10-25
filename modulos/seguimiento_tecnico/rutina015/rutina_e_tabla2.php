<?php
$table_e2_arr = json_decode($table_e2, true);
?>
<input type="hidden" name="idrutina" id="idrutina" value="<?=$idrutina?>" />

<div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-sm btn-outline-info mb-1" id="btn_add_t2"><i class="bx bx-plus me-0"></i></button>
                <button type="button" class="btn btn-sm btn-outline-info mb-1" id="btn_save_t2"><i class="bx bx-save me-0"></i></button>
                <div id="fibra-t2">
                    <table class="table table-bordered mb-3" id="lista_fibra_t2">
                        <tr class='align-middle'>
                            <td>N.</td>
                            <td>Modelo equipo FO</td>
                            <td>Estado del equipo de Tx</td>
                            <td>Cant. de puertos RBS</td>
                            <td colspan="2">Descripción etiquetado de puerto en RBS (UP LINK)</td>
                            <td>Descripción del Servicio</td>
                            <td></td>
                        </tr>
                        <?php
                        $rowHtml = '';
                        if ($table_e2_arr)
                            foreach ($table_e2_arr as $objVal) {
                                $idrow = $objVal['id'];
                                $rowHtml .= "
                                <tr id='row$idrow' class='align-middle'>
                                    <td width='6%'><input type='text' class='form-control form-control-sm' id='nro$idrow' value='".$objVal['nro']."'></td>
                                    <td><input type='text' class='form-control form-control-sm' id='modelo$idrow' value='".$objVal['modelo']."'></td>
                                    <td width='12%'><input type='text' class='form-control form-control-sm' id='estadoTx$idrow' value='".$objVal['estadoTx']."'></td>
                                    <td width='10%'><input type='text' class='form-control form-control-sm' id='cantPtos$idrow' value='".$objVal['cantPtos']."'></td>
                                    <td width='10%'>
                                        <div><small>H. Tx From:</small></div>
                                        <div><small>H. Rx To:</small></div>
                                    </td>
                                    <td>
                                        <input type='text' class='form-control form-control-sm' id='txFrom$idrow' value='".$objVal['txFrom']."'>
                                        <input type='text' class='form-control form-control-sm' id='rxTo$idrow' value='".$objVal['rxTo']."'>
                                    </td>
                                    <td><input type='text' class='form-control form-control-sm' id='descripcion$idrow' value='".$objVal['descripcion']."'></td>
                                    <td><a href='javascript:;' id='btnEliminar' onclick='eliminarFilaT2($idrow)'><i class='bx bx-x'></i></a></td>
                                </tr>
                                ";
                            }
                        echo $rowHtml;
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    var btn_add_t2      = document.getElementById('btn_add_t2');
    var btn_save_t2     = document.getElementById('btn_save_t2');
    var lista_fibra_t2  = document.getElementById('lista_fibra_t2');

    btn_add_t2.addEventListener("click", agregarFilaT2);
    btn_save_t2.addEventListener("click", guardarFilasT2);

    var table_e2 = '<?php echo $table_e2; ?>';

    //console.log('stringify: ' + JSON.stringify(table_e2));
    //console.log('parse:' + JSON.parse(table_e2));

    var dataT2 = [];
    var cantT2 = 1;

    if ( table_e2 ){
        dataT2 = JSON.parse(table_e2);
        cantT2 = dataT2.length+1;
    }

    function agregarFilaT2() {

        var id = new Date().getTime();
        dataT2.push({
           "id": id,
           "nro": "",
           "modelo": "",
           "estadoTx": "",
           "cantPtos": "",
           "txFrom": "",
           "rxTo": "",
           "descripcion": ""
        });

        var id_row = 'row'+id;
        var fila =
            "<tr id='"+id_row+"' class='align-middle'>" +
                "<td width='6%'><input type='text' class='form-control form-control-sm' id='nro"+id+"' value='"+cantT2+"'></td>" +
                "<td><input type='text' class='form-control form-control-sm' id='modelo"+id+"' value=''></td>" +
                "<td width='12%'><input type='text' class='form-control form-control-sm' id='estadoTx"+id+"' value=''></td>" +
                "<td width='10%'><input type='text' class='form-control form-control-sm' id='cantPtos"+id+"' value=''></td>" +
                "<td width='10%'>" +
                    "<div><small>H. Tx From:</small></div>" +
                    "<div><small>H. Rx To:</small></div>" +
                "</td>" +
                "<td>" +
                "<input type='text' class='form-control form-control-sm' id='txFrom"+id+"' value=''>" +
                "<input type='text' class='form-control form-control-sm' id='rxTo"+id+"' value=''>" +
                "</td>" +
                "<td><input type='text' class='form-control form-control-sm' id='descripcion"+id+"' value=''></td>" +
                "<td><a href='javascript:;' id='btnEliminar' onclick='eliminarFilaT2("+id+")'><i class='bx bx-x'></i></a></td>" +
            "</tr>";


        $("#lista_fibra_t2").append(fila);
        cantT2++;
    }

    function eliminarFilaT2(row) {
        $("#row"+row).remove();
        var i=0;
        var pos=0;
        for (obj of dataT2){
            if (obj.id === row){
                pos = i;
            }
            i++;
        }
        dataT2.splice(pos, 1);
    }

    function guardarFilasT2() {
        alert("guardando...");

        for (obj of dataT2){
            obj.nro         = $("#nro"+obj.id).val();
            obj.modelo      = $("#modelo"+obj.id).val();
            obj.estadoTx    = $("#estadoTx"+obj.id).val();
            obj.cantPtos    = $("#cantPtos"+obj.id).val();
            obj.txFrom      = $("#txFrom"+obj.id).val();
            obj.rxTo        = $("#rxTo"+obj.id).val();
            obj.descripcion = $("#descripcion"+obj.id).val();
        }

        console.log('...mostrando...')
        /*for (obj of dataT2){
            console.log('Origen: ' + obj.origen + ' - ' + 'Destino: ' + obj.destino)
        }*/

        var idrutina = $("#idrutina").val();
        var jsonStrT2 = JSON.stringify(dataT2);

        var frmDataT2 = new FormData;
        frmDataT2.append('idrutina', idrutina);
        frmDataT2.append('jsonStrT2', jsonStrT2);

        $.ajax({
            url: 'update_r15_tabla2.php',
            type: 'POST',
            data: frmDataT2,
            processData: false,
            contentType: false,
            cache: false,
            success: function (resp) {
                alert(resp);
            }
        });

    }

</script>