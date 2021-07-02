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
   <h1>AGREGAR NUEVO PRODUCTO</h1>
   <form class="" method="POST" action="index.php?controller=productos&action=subir">
  <div class="col-12">
    <label for="inputNombre" class="form-label">Nombre del producto</label>
    <input type="text" name="nombre" class="form-control" id="inputNombre">
  </div>
  <div class="col-12">
        <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
        <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="ingrese aqui todos los detalles del producto."></textarea>
  </div>
  <!--<div 'talles' class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        1
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
        Checked checkbox
        </label>
        </div>-->
  <div class="col-md-4">
    <label for="inputStock" class="form-label">Stock</label>
    <input name="stock" type="number" class="form-control" id="inputStock">
  </div>
  <div class="col-md-4">
    <label for="inputCat" class="form-label">Categoria</label>
    <select name="categoria" id="inputCat" class="form-select">
      <option selected>Camperas</option>
      <option>Pantalones</option>
      <option>Buzos</option>
      <option>Shores</option>
      <option>Remeras</option>
      <option>Bermudas</option>
    </select>
  </div>
  <div class="col-md-4">
  <label for="inputPrecio" class="form-label">Precio</label>
  <div class="input-group">
  <span class="input-group-text">$</span>
  <input name="precio" type="text" class="form-control" id="inputPrecio" aria-label="Amount (to the nearest dollar)">
  <span class="input-group-text">.00</span>
  </div>
  </div>
  <div class="mb-3">
  <label for="formFileMultiple" class="form-label">Seleccionar fotos</label>
  <input name="imagenes" class="form-control" type="file" id="formFileMultiple" multiple>
 </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Subir producto</button>
  </div>
</form>
</body>
</html>