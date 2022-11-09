<?php
    session_start();
    $_SESSION['logged'] = $_SESSION['logged'] ?? False;
	if(isset($_POST['submit']) && !empty($_POST['login'])  && !empty($_POST['senha'])) 
    {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

        $login = $_POST['login'];
        $senha = md5($_POST['senha']);
        $sql = "SELECT * from usuarios where username='$login' or email='$login' and senha= '$senha'";

        $result = $conexao->query($sql);

        $row = mysqli_num_rows($result);

        if(mysqli_num_rows($result) >= 1){
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            $_SESSION['logged'] = True;
            header('Location: /Views/PaginaApp/AppPrincipal.php');
        }else
        {
            unset($_SESSION['login']); 
            unset($_SESSION['senha']);
            echo "<script type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='/Views/LoginPage/Login.php';</script>";
        }
	}
    
    ?>