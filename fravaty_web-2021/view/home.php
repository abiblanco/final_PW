<!DOCTYPE html>
<html lang="en">
<?php
require_once("header.php");

?>
<body>
<!-- <!–– carrousel ––> -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./public/imagenes/carrousel1.jpg" class="d-block w-100" alt="im1">
    </div>
    <div class="carousel-item">
      <img src="./public/imagenes/montaña2.jpg" class="d-block w-100" alt="im2">
    </div>
    <div class="carousel-item">
      <img src="./public/imagenes/montaña3.jpg" class="d-block w-100" alt="im3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- mini info-->
<div class="row info">
        <div class="col-md-6 col-lg-4">
            <h4>Minimo de compra</h4>
            <p  class="">12 prendas,Pueden ser surtidas o iguales.</p>
        </div>
        <div class="col-md-6 col-lg-4">
            <h4 >Medios de pago</h4>
            <p >Aceptamos todos los medios de pago.</p>
        </div>
        <div class="col-md-6 col-lg-4">
            <h4 ><i class="fas fa-shipping-fast">ENVIOS</i></h4>
            <p class=""> A cualquier transporte ó comicionista.
            </p>
        </div>
    </div>
<h1>Los más elegidos</h1>
¿
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
<footer>
<?php
require_once("footer.php");
?>
</footer>
</html>