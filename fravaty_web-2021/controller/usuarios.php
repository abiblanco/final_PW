<?php
      include("model/usuarios.php");
    /*require_once("model/usuarios.php");*/

        class usuarios {

        function login(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
            
                $mail = $_POST["mail"];
                $password = $_POST["password"];

            if(isset($_POST["mail"]) && isset($_POST["password"])){

                if(!empty($_POST["mail"]) && !empty($_POST["password"])){

                    if(UsuariosDAO::existeUsuario($mail, $password)){

                        $_SESSION["mail"] = $_POST["mail"];
                        require_once("view/home.php");

                    } else {

                        $_SESSION["msg"] = "El usuario no existe";
                        require_once("view/login.php");

                    }
                
                } else {

                    $_SESSION["msg"] = "Campos incompletos1";
                    require_once("view/login.php");
    
                }
            
            } else {

                $_SESSION["msg"] = "Campos incompletos0";
                require_once("view/login.php");

            }
        }
        }
        

        function registrar(){
            /*
            if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["mail"]) && isset($_POST["password"])){

                if(!empty($_POST["nombre"]) && !empty($_POST["apellido"])&&!empty($_POST["mail"]) && !empty($_POST["password"])){

                    if(!UsuariosDAO::usuarioOcupado($_POST["mail"])){

                        UsuariosDAO::crearUsuario($_POST["nombre"],$_POST["apellido"],$_POST["mail"],$_POST["password"]);
                        $_SESSION["mail"] = $_POST["mail"];
                        require_once("view/home.php");
    
                    } else {
    
                        $_SESSION["msg"] = "El usuario ya existe";
                        require_once("view/registro.php");
    
                    }

                } else {

                    $_SESSION["msg"] = "Campos incompletos";
                    require_once("view/registro.php");

                }

             } else {

                $_SESSION["msg"] = "Campos incompletos";
                require_once("view/registro.php");

            }*/
            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $nombre = $_POST["nombre"];
                $apellido = $_POST["apellido"];
                $mail = $_POST["mail"];
                $password = $_POST["password"];
        
                // Lógica de campos completos, con sentido, etc etc...
                if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["mail"]) && isset($_POST["password"])){
        
                    if(!empty($_POST["nombre"]) && !empty($_POST["apellido"])&&!empty($_POST["mail"]) && !empty($_POST["password"])){
        
                        if(!UsuariosDAO::usuarioOcupado($mail)){
        
                            UsuariosDAO::crearUsuario($nombre,$apellido,$mail, $password);
                            $_SESSION["mail"] = $_POST["mail"];
                            require_once("view/home.php");
        
                        } else {
        
                            $_SESSION["msg"] = "El usuario ya existe";
                            require_once("view/registro.php");
        
                        }
        
                    } else {
        
                        $_SESSION["msg"] = "Campos incompletos";
                        require_once("view/registro.php");
        
                    }
        
                } else {
        
                    $_SESSION["msg"] = "Campos incompletos";
                    require_once("view/registro.php");
        
                }
        
            } 
        
        }
    }

  /*---------------------------------------------------------------------


	if($_SERVER['REQUEST_METHOD'] == "GET"){

		$usuarios = UsuariosDAO::listar();

	} else if($_SERVER["REQUEST_METHOD"] == "POST"){

		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$mail = $_POST["mail"];
        $password = $_POST["password"];

		// Lógica de campos completos, con sentido, etc etc...
        if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["mail"]) && isset($_POST["password"])){

            if(!empty($_POST["nombre"]) && !empty($_POST["apellido"])&&!empty($_POST["mail"]) && !empty($_POST["password"])){

                if(!UsuariosDAO::usuarioOcupado($mail)){

                    UsuariosDAO::crearUsuario($nombre,$apellido,$mail, $password);
                    $_SESSION["mail"] = $_POST["mail"];
                    require_once("view/home.php");

                } else {

                    $_SESSION["msg"] = "El usuario ya existe";
                    require_once("view/registro.php");

                }

            } else {

                $_SESSION["msg"] = "Campos incompletos";
                require_once("view/registro.php");

            }

        } else {

            $_SESSION["msg"] = "Campos incompletos";
            require_once("view/registro.php");

        }

    

		/*UsuariosDAO::crear($nombre,$edad,$email);
		
		$usuarios = UsuariosDAO::listar();

	} else if($_SERVER["REQUEST_METHOD"] == "DELETE"){

		echo "Borrar usuario";
	
	}

	require_once("../vista/viewUsuarios.php");*/
?>