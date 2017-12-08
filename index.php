<?php
  require_once ("config.php");
  
  $alessandro = new Usuario();
  $alessandro->loadById(1);
  
  echo $alessandro;
  
  
/*  
 * retorna todos os cadastros
  $sql = new sql();
  $usuario = $sql->select("SELECT * FROM tb_usuario");
  echo json_encode($usuario); 
 */
?>

