<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$email = $_POST['email'];
	$senha = MD5($_POST['senha']);
	$date = $_POST['date'];
	$nome_completo = $_POST['nome_completo'];
  $imagem = $_FILES["imagem"];

	$query_select = "SELECT username FROM usuarios WHERE username = '$username'";
	$select = mysqli_query($conexao, $query_select);
	$array = mysqli_fetch_array($select);
	$logarray = $array['username'];
	
	if($logarray == $username){

        echo"<script type='text/javascript'>
        alert('Esse usuario já está registrado');window.location
        .href='/Views/RegisterPage/Registro.php'</script>";

      }
      if($imagem == NULL){
        $query2 = "INSERT INTO usuarios(username,email,senha,data_nasc,nome_completo, is_admin, imagem) VALUES ('$username','$email','$senha','$date','$nome_completo', 'N', 'pessoaicon.png')";
        $insert = mysqli_query($conexao, $query2);
      }else{

        $query = "INSERT INTO usuarios(username,email,senha,data_nasc,nome_completo, is_admin, imagem) VALUES ('$username','$email','$senha','$date','$nome_completo', 'N', '$imagem')";
        $insert = mysqli_query($conexao, $query);

        }
        if($insert){
          header('Location: /Views/LoginPage/Login.php');
        }else{
          echo"<script type='text/javascript'>
          alert('Esse usuario já está registrado');window.location
          .href='/Views/RegisterPage/Registro.php'</script>";
        }
      }
?>