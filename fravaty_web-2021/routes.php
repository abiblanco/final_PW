<?php

function call($controller,$action){

    require_once("controller/$controller.php");
  
    $controller=new $controller;
    $controller->{$action}();
  
  }
  
  // Aca se configuran los controlares y actions disponibles
  $controllers = array('home' => ['inicio',"registrar","ingresar","subirProd"],
                      "usuarios" => ["login", "registrar"],
                      "productos"=>["subir"] );
  
  if (array_key_exists($controller, $controllers)) {
      if (in_array($action, $controllers[$controller])) {
          call($controller, $action);
      } else {
          call('errorController', 'error');
      }
  } else {
      call('errorController', 'error');
  }
  
?>