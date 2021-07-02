<?php
	
$HOST = "localhost";
$USER = "root";
$PASS = "";
$DBNAME = "usuarios"; 
global $mysqli;
// CREANDO CONEXION CON LA DB
 $mysqli = new mysqli($HOST,$USER,$PASS,$DBNAME);
if($mysqli->connect_errno){
	die("Error ".$mysqli->connect_errno." - ".$mysqli->connect_error);
}

?>