<div class="page-wrapper">
    <div class="page-content">

        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card border-top border-0 border-4 border-info">
                    <div class="card-body">

                        <form name="amper" method="post" action="<?=$link_modulo_r?>" onSubmit=" return VerifyOne ();">
                            <input type="hidden" name="path" value="nuevo_usuario_r.php" />

                            <h6 class="text-center">NUEVO USUARIO</h6>

                            <table align="center" class="table">
                            <tr>
                                <th width="31%">Registrado por:</th>
                                <td width="69%" class="resaltar" ><?=$nombrec?></td>
                            </tr>

                            <tr>
                                <th width="31%"><span class="title4">*</span>Nombre:</th>
                                <td width="69%"><input name="nombre" type="text" class="form-control form-control-sm" id="nombre" size="30" maxlength="30"></td>
                            </tr>
                            <tr>
                                <th width="31%"><span class="title4">*</span>Apellido Paterno:</th>
                                <td width="69%"><input name="ap_pat" type="text" class="form-control form-control-sm" id="ap_pat" size="15" maxlength="15"></td>
                            </tr>
                            <tr>
                                <th width="31%" >&nbsp;&nbsp;Apellido Materno:</th>
                                <td><input name="ap_mat" type="text" class="form-control form-control-sm" id="ap_mat" size="15" maxlength="15"></td>
                            </tr>
                            <tr>
                                <th width="31%" ><span class="title4">*</span>Cuenta: </th>
                                <td><input name="cuenta" type="text" class="form-control form-control-sm" id="cuenta" size="20" maxlength="20"></td>
                            </tr>
                            <tr>
                                <th width="31%" ><span class="title4">*</span>Contrase&ntilde;a Inicial:</th>
                                <td><input name="contrasena" type="text" class="form-control form-control-sm" id="contrasena" size="15" maxlength="15"></td>
                            </tr>
                            <tr>
                                <th width="31%" ><span class="title4">*</span>Cargo:</th>
                                <td><input name="cargo" type="text" class="form-control form-control-sm" id="cargo" size="50" maxlength="50"></td>
                            </tr>
                            <tr>
                                <th width="31%" ><span class="title4">*</span>Email:</th>
                                <td><input name="mail" type="text" class="form-control form-control-sm" id="mail" size="45" maxlength="50"></td>
                            </tr>

                            <tr>
                                <th width="31%" >Celular:</th>
                                <td><input name="cel" type="text" class="form-control form-control-sm" id="cel" value="" size="30" maxlength="50" /></td>
                            </tr>

                            <tr>
                                <th width="31%" ><span class="title4">*</span>Nivel de Usuario:</th>
                                <td>
                                    <select name="nivel" class="form-control form-control-sm" id="ingreso_por">
                                        <option value="0" selected class="title7"> Seleccionar... </option>
                                        <?php
                                        $resultado=mysqli_query($conexion, "SELECT sub_grupo,descripcion FROM parametrica WHERE grupo='nivel_usuario'");
                                        while($dato=mysqli_fetch_array($resultado))
                                            echo '<option value="'.$dato['sub_grupo'].'">'.$dato['descripcion'].'</option>';
                                        ?>
                                    </select>

                                </td>
                            </tr>

                            <tr>
                                <th width="31%" ><span class="title4">*</span>Departamento:</th>
                                <td>
                                    <select name="iddepartamento" class="form-control form-control-sm" id="iddepartamento">
                                        <option value="0" selected class="title7"> Seleccionar... </option>
                                        <?
                                        $resultado=mysqli_query($conexion, "SELECT iddepartamento, nombre, codigo FROM departamento");
                                        while($dato=mysqli_fetch_array($resultado))
                                            echo '<option value="'.$dato['iddepartamento'].'">'.$dato['nombre'].'</option>';
                                        ?>
                                    </select>
                                </td>
                            </tr>

                            <tr><td colspan="2" class="paginado"><span class="rojo">(*) Campos requeridos</span><BR /><center>
                            <input name="adicionar_cliente" type="submit" value="Adicionar" class="btn btn-primary px-5" />
                            <input onClick="location.href='<?=$link_modulo?>?path=ver_usuarios.php'" type="button" value="Cancelar" class="btn btn-secondary px-5">
                            </center></td></tr>

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
    if( checkField( document.amper.nombre, isName, false ) &&
		checkField( document.amper.ap_pat, isName, false ) &&
		checkField( document.amper.ap_mat, isName, true ) &&
		checkField( document.amper.cuenta, isName, false ) &&
		checkField( document.amper.contrasena, isName, false ) &&
		checkField( document.amper.cargo, isName, false ) &&
		checkField( document.amper.mail, isEmail, false ) &&
		validarSelect(document.amper.nivel,'Seleccione el Nivel de Usuario') &&	
		validarSelect(document.amper.iddepartamento,'Seleccione el departamento') &&
		checkField( document.amper.cel, isPhoneNumber, true )
		)
		{		
			if(confirm("Las datos Son validos!\n Continuar el Registro con estos Datos?"))
			{return true;}
			else {return false;}															
		}		  
else {	
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
alert("Fecha invalida");
oTxt.value = "";
oTxt.focus();
}
}
}
</SCRIPT>
<link href="../../paquetes/tooltip/tooltip.css" rel="stylesheet" type="text/css">
<script language=javascript type="text/javascript" src="../../paquetes/tooltip/tooltip.js"></script>