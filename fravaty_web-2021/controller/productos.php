<?php
  require_once("model/productos.php");
  class productos{

    function subir(){

    if(isset($_POST["nombre"]) && isset($_POST["desc"]) && isset($_POST["stock"]) && isset($_POST["categoria"])&& isset($_POST["precio"]) && isset($_POST["imagenes"])){

        if(!empty($_POST["nombre"]) && !empty($_POST["desc"])&&!empty($_POST["stock"]) && !empty($_POST["categoria"])&&!empty($_POST["precio"]) && !empty($_POST["imagenes"])){

    
            if(!productosDAO::productoOcupado($_POST["nombre"])){
                
                productosDAO::crearProducto($_POST["nombre"],$_POST["desc"],$_POST["stock"],$_POST["categoria"],$_POST["precio"],$_POST["imagenes"]);
                $_SESSION["nombre"] = $_POST["nombre"];
                $_SESSION["msg"] = "El producto se ha subido correctamente";
                require_once("view/home.php");

            } else {

                $_SESSION["msg"] = "El producto ya existe";
                require_once("view/subirproducto.php");

            }
          

        } else {

            $_SESSION["msg"] = "Campos incompletos";
            require_once("view/subirproducto.php");

        }

    }else {

        $_SESSION["msg"] = "Campos incompletos 1";
        require_once("view/subirproducto.php");

    }

    }
}

?>