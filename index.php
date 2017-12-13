<?php
  require_once ("config.php");
  //carrega um usuario
  //$alessandro = new Usuario();
  //$alessandro->loadById(1);
  
  //carrega uma lista de usuario
  //$lista = Usuario::getList();
  //echo json_encode($lista);
  
  //CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
  //@$search = Usuario::search("ale");
  //echo json_encode($search);
  
  //carrega um usuario usando o login e a senha
  
  $usuario = new Usuario();
  $usuario->login("alessandro", "comol");
  echo $usuario;
   
/*  
 * retorna todos os cadastros
  $sql = new sql();
  $usuario = $sql->select("SELECT * FROM tb_usuario");
  echo json_encode($usuario); 
 */
?>

