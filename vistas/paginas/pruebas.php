<?php
$tipousuario = ControladorPaginas::ctrSeleccionarTipoUsuario("pk_id_tipo", "1");

//print_r($tipousuario["pk_id_tipo"]);


?>
<select>
<option value ="<?php echo $tipousuario["pk_id_tipo"];?>"><?php echo $tipousuario["pk_id_tipo"]; ?></option>
</select>