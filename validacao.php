<?php
    session_start();

	if(isset($_POST['submit']) && !empty($_POST['login'])  && !empty($_POST['pass'])) 
    {
        include_once('config.php');
        $login = $_POST['login'];
        $senha = $_POST['pass'];

        $sql = "SELECT * from usuarios where username='$login' or email='$login' and senha= '$senha'";

        $result = $conexao->query($sql);

        $row = mysqli_num_rows($result);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['login']); 
            unset($_SESSION['senha']);
            header('Location: /Views/LoginPage/Login.php');
        }else
        {
            $_SESSION['login'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: /Views/PaginaApp/AppPrincipal.php');
        }
	} else
    {
        header('Location: /Views/LoginPage/Login.php');
    }
    
    ?>