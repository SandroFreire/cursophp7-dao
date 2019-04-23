<?php 

require_once("config.php");

//Carrega um usuário
//$usuarios  = new Usuario();
//$usuarios->loadbyId(4);
//echo $usuarios;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("user");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
$usuario  = new Usuario();
$usuario->login("user","12345");
echo $usuario;
//echo json_encode($search);

 ?>