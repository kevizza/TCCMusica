<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$sql = "SELECT id, imagem FROM usuarios";
 
$result = $conexao->query($sql);
  $img = mysqli_fetch_object($result);
  
 
  ?>
   <img src="<?= $img->imagem; ?>" height="42" width="42">