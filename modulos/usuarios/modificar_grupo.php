<?php
$idgrupo = $_GET['idg'];

$resultado=mysqli_query($conexion, "SELECT idgrupo, nombre, user1, user2, idcentro FROM grupo WHERE idgrupo='".$idgrupo."'");
$datod=mysqli_fetch_array($resultado);
?>

<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card border-top border-0 border-4 border-info">
                    <div class="card-body">

                        <form name="amper" method="post" action="<?=$link_modulo_r?>" onSubmit=" return VerifyOne ();">
                            <input type="hidden" name="path" value="modificar_grupo_r.php" />
                            <input type="hidden" name="idgrupo" value="<?=$idgrupo?>" />
                            <h6 class="text-center">MODIFICAR DATOS DE GRUPO</h6>
                            <table width="500" align="center" class="table">

                                <tr>
                                    <th width="31%" ><span class="title4">*</span>CM/SCM:</th>
                                    <td>
                                        <select name="idcentro" class="single-select" id="idcentro">
                                            <option value="0" selected class="title7"> Seleccionar... </option>
                                            <?php
                                            $resultado=mysqli_query($conexion, "SELECT idcentro, nombre FROM centro where iddepartamento = '$iddepartamento'");
                                            while($dato=mysqli_fetch_array($resultado)) {
                                                echo '<option value="' . $dato['idcentro'] . '" ';
                                                if ($datod['idcentro'] == $dato['idcentro']) echo 'selected';
                                                echo '>' . $dato['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <th width="31%" ><span class="title4">*</span>Persona 1:</th>
                                    <td>
                                        <select id="iduser1" name="iduser1" class="single-select">
                                            <option value="0" selected class="title7"> Seleccionar... </option>
                                            <?php
                                            $resultado = mysqli_query($conexion, "SELECT id, concat(nombre, ' ', ap_pat, ' ', ap_mat) AS nombre  
                                                                                        FROM usuarios where iddepartamento = '$iddepartamento'");
                                            while($dato=mysqli_fetch_array($resultado)) {
                                                echo '<option value="' . $dato['id'] . '" ';
                                                if ($datod['user1'] == $dato['id']) echo 'selected';
                                                echo '>' . $dato['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <th width="31%" ><span class="title4">*</span>Persona 2:</th>
                                    <td>
                                        <select id="iduser2" name="iduser2" class="single-select">
                                            <option value="0" selected class="title7"> Seleccionar... </option>
                                            <?php
                                            $resultado = mysqli_query($conexion, "SELECT id, concat(nombre, ' ', ap_pat, ' ', ap_mat) AS nombre  
                                                                                        FROM usuarios where iddepartamento = '$iddepartamento'");
                                            while($dato=mysqli_fetch_array($resultado)) {
                                                echo '<option value="' . $dato['id'] . '" ';
                                                if ($datod['user2'] == $dato['id']) echo 'selected';
                                                echo '>' . $dato['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <th width="31%"><span class="title4">*</span>Nombre de Grupo:</th>
                                    <td width="69%"><input name="nombreGrupo" type="text" class="form-control form-control-sm" id="nombreGrupo" value="<?=$datod['nombre']?>" ></td>
                                </tr>

                                <tr>
                                    <td colspan="2" class="paginado"><span class="title4">(*) Campos requeridos</span>
                                        <br />
                                        <center>
                                        <input name="adicionar_cliente" type="submit" value="Modificar" class="btn btn-primary px-5" />
                                            <input onClick="location.href='<?=$link_modulo?>?path=ver_grupos.php'" type="button" value="Cancelar" class="btn btn-secondary px-5">
                                        </center>
                                    </td>
                                </tr>
                            </table>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<SCRIPT src="../../js/validador.js" type=text/javascript></SCRIPT>
<SCRIPT type=text/javascript>
    function VerifyOne () {
        if(
            validarSelect(document.amper.idcentro,'Seleccione el centro') &&
            validarSelect(document.amper.iduser1,'Seleccione persona 1') &&
            validarSelect(document.amper.iduser2,'Seleccione persona 2') &&
            checkField( document.amper.nombreGrupo, isName, false ) ) {
            if(confirm("Las datos Son validos!\n Continuar el Registro con estos Datos?")){ return true; }
            else { return false; }
        } else {
            return false;
        }
    }

function valDia(oTxt){
var bOk = false;
var nDia = parseInt(oTxt.value.substr(0, 2), 10);
bOk = bOk || ((nDia >= 1) && (nDia <= finMes(oTxt)));
return bOk;
}
function valMes(oTxt){
var bOk = false;
var nMes = parseInt(oTxt.value.substr(3, 2), 10);
bOk = bOk || ((nMes >= 1) && (nMes <= 12));
return bOk;
}
function valAno(oTxt){
var bOk = true;
var nAno = oTxt.value.substr(6);
bOk = bOk && ((nAno.length == 4));
if (bOk){
for (var i = 0; i < nAno.length; i++){
bOk = bOk && esDigito(nAno.charAt(i));
}
}
return bOk;
}

function valFecha(oTxt){
var bOk = true;
if (oTxt.value != ""){
bOk = bOk && (valAno(oTxt));
bOk = bOk && (valMes(oTxt));
bOk = bOk && (valDia(oTxt));
bOk = bOk && (valSep(oTxt));
if (!bOk){
alert("Fecha inv�lida");
oTxt.value = "";
oTxt.focus();
}
}
}
</SCRIPT>
