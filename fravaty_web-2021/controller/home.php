<?php
class home {

function inicio(){

    /* Checkeo si campos completos 
    Checkeo si campos tienens sentido
    Checkeo si existe sesión*/

    /* Ejecuto lógica de modelo de negocio
    Llamar a funciones del archivo modelo/ejemplo.php
    Por ejemplo la funcion comprar() si existiese*/

    /* Lo anterior tiene dos salidas,
    o todo bien -> muestro pantalla X al usuario
    o algo salio mal -> muestro pantalla Y al usuario
    */

    require_once("view/home.php");

}
function registrar(){
    require_once("view/registro.php");
}
function ingresar(){
    require_once("view/login.php");
}
function subirProd(){
    require_once("view/subirproducto.php");
}


}
?>