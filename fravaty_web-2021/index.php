<?php
session_start();

if(isset($_GET["controller"])&&isset($_GET["action"])){
    $controller=$_GET["controller"];
    $action=$_GET["action"];
} else {
    // Aca se configura el controller y action por default del sitio
    $controller="home";
    $action="inicio";
}

require_once("routes.php");

?>