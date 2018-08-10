<?php 
//Encabezado de la pagina
include ('../../views/front/templates/head.php');

//validar errores
if(isset($_GET['error'])){

	include ('views/errors/errors.php');
}

?>
	<h1>INGRESO</h1>
	<div class="div1">
		<form>
    		<input type="E-mail"  name="E-mail" placeholder="E-mail">
    		<input type="Password"   name="Password" placeholder="Password">
       			<select id="country" name="country">
       				<option value="Aprendiz">Aprendiz</option>
      				<option value="Instructor">Instructor</option>
      				<option value="Usuario">Usuario</option>
    			</select>
    			<input type="radio" name="Recordar Contraseña" >
    			<label>Recordar Contraseña</label>
    			<input type="radio" name="No Recordar Contraseña">
    			<label>No Recordar Contraseña</label>
    		<input type="submit" class="input1" value="ENTRAR">
		</form>
	</div>

<?php include ('../../views/front/templates/foot.php'); ?>
		