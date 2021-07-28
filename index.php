<?php

  require_once("config.php"); 
  
  /*$sql = new SQL();

  $usuarios = $sql->select("SELECT * FROM tb_usuarios");

  echo json_encode($usuarios);*/

  /*carrega um usuario
  $root = new Usuario();

  $root->loadById(3);

  echo $root;*/

  /*Carrega uma lista de usuarios

  $lista =Usuario::getList();

  echo json_encode($lista);*/

  /*Carrega uma lista de usuarios pelo login
  $search = Usuario::search("na");

  echo json_encode($search);*/

  //carrega um usuario usando login e a senha

  /*$usuario = new Usuario();

  $usuario->login("root", "!@#$");

  echo $usuario;*/

  $aluno = new Usuario("aluno", "@lun0");

  

  $aluno->insert();

  echo $aluno
  


?>