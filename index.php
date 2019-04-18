<?php 

require_once("config.php");

$usuario  = new Usuario();

$usuario->loadbyId(4);

echo $usuario;

 ?>