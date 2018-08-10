<?php 
include ('../../../../views/front/templates/head.php');

if(isset($_GET['error'])){

	include ('views/errors/errors.php');
}

?>
<img src="../../../../public/images/1.jpg" style="width: 100%">
<div class="row">
  <div class="column">
  		<div class="div1">
		<form>
    		<input type="name" class="input1" name="name" placeholder="Nombre Y Apellido">
    		<input type="E-mail"   class="input3"  name="correo" placeholder="E-mail">

    		<input type="text"  class="input2"  name="telefono" placeholder="Numero Telefonico">
    		<input type="text"  class="input2"   name="text" placeholder="Asunto">
    		<input type="text"  class="input1"  name="mensaje" placeholder="Mensaje">
    		<input type="submit"  class="input5"  value="Enviar">
  </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15905.320097697657!2d-74.12687803022459!3d4.712615850000003!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1533827005821" width="1600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
<?php include ('../../../../views/front/templates/foot.php'); ?>