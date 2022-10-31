<?php
    session_start();

	if(isset($_POST['submit']) && !empty($_POST['login'])  && !empty($_POST['pass'])) 
    {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

        $login = $_POST['login'];
        $senha = md5($_POST['pass']);

        $sql = "SELECT * from usuarios where username='$login' or email='$login' and senha= '$senha'";

        $result = $conexao->query($sql);

        $row = mysqli_num_rows($result);

        if(mysqli_num_rows($result) <= 0){
            unset($_SESSION['login']); 
            unset($_SESSION['senha']);
            echo "<script type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='/Views/LoginPage/Login.php';</script>";
        }else
        {
            $_SESSION['login'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: /Views/PaginaApp/AppPrincipal.php');
            setcookie("login", $login);
        }
	}
    
    ?>