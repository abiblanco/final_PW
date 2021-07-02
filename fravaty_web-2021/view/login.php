<!DOCTYPE html>
<html lang="en">
<?php
require_once("header.php");
?>
<body>
<?php

			if(isset($_SESSION["msg"])) : 

			

		?>

		<div class="alert alert-danger" role="alert">
		<?php echo $_SESSION["msg"] ?>
		</div>

		<?php

				unset($_SESSION["msg"]);
			
			endif;

		?>
<form method="POST" action="index.php?controller=usuarios&action=login" class="login-form">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Ingresar</button>
  
</form>
<p class="message">¿No tienes una cuenta? <a href="index.php?controller=home&action=registrar"> Registrate aqui</a></p>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
				<script id="rendered-js" >
			$('.message a').click(function () {
			$('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
			});
    	</script>
</html>