<?php
    session_start();

	if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['pass'])) 
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['pass'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

        $result = $conexao->query($sql);

        $row = mysqli_num_rows($result);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: Login.php');
        }else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: PaginaPrincipal.php');
        }
	} else
    {
        header('Location: Login.php');
    }
    
    ?>