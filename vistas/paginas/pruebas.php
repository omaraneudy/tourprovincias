<?php
$tipousuario = ControladorPaginas::ctrSeleccionarTipoUsuario("pk_id_tipo", "1");

//print_r($tipousuario["pk_id_tipo"]);

?>
<select>
<option value ="<?php echo $tipousuario["pk_id_tipo"];?>"><?php echo $tipousuario["pk_id_tipo"]; ?></option>
</select>
fecha
<form method="post">
<input type="date" name="fecha">
<input type="submit">
</form>
<?php //$d = strtotime($_POST["fecha"]); ?>
<?php echo "LA fecha es ".date("Y-m-d",strtotime($_POST["fecha"]));?>

