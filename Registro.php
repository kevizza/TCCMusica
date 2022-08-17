<?php

if (isset($_POST['submit'])) {

	include_once('config.php');

	$username = $_POST['username'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$date = $_POST['date'];


	$result = mysqli_query($conexao, "INSERT INTO usuarios(username,email,senha,data_nasc, is_admin) 
	VALUES ('$username','$email','$senha','$date', 'N')");

	header('Location: Login.php');
}

?>

<html>

<head>
	<title>Frecy</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="icon" type="image/png" href="Imgs/Logo_of.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bulma.min.css" />
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="./Paginas/RegisterPage/images/icons/Logo_of.png" />
	<link rel="stylesheet" type="text/css" href="./Paginas/RegisterPage/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./Paginas/RegisterPage/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./Paginas/RegisterPage/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="./Paginas/RegisterPage/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="./Paginas/RegisterPage/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="./Paginas/RegisterPage/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="./Paginas/RegisterPage/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="./Paginas/RegisterPage/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="./Paginas/RegisterPage/css/util.css">
	<link rel="stylesheet" type="text/css" href="./Paginas/RegisterPage/css/main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
	<!-- NavBar -->
  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(0, 0, 0);background: rgb(0, 0, 0);">
    <a class="navbar-brand" href="index.html"><img src="./Imgs/Logo_of.png" alt="" class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link"></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link"></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link"></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link"></a>
        </li>
        
        <li class="nav-item ">
          <a class="nav-link" href="./Login.php">Entrar <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="./Registro.php">Inscreva-se<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link"></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link"></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link"></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link">|</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link"></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link"></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link"></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link"></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link disabled">Ajuda</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link"></a>
        </li>

        <li class="nav-item ">
          <a class="nav-link" href="./Premium.php"><b>Premium</b></a>
        </li>
        </li>
      </ul>
    </div>
  </nav>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="Registro.php" method="POST">
					<span class="login100-form-title p-b-26">
						REGISTRO
					</span>
					<!-- <div class="notification is-sucess">
						<p>Seu cadastro foi efetuado</p>
						<p>Faça login informando o seu usuario e senha <a href="Login.html">AQUI</a></p>
					</div>
					<div class="notification is-info">
						<p>O Usuario escolhido já existe. Informe outro.</p>
					</div> -->

					<div class="wrap-input100 validate-input" data-validate="Campo Obrigatorio">
						<input class="input100" type="text" name="username" id="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Campo Obrigatorio">
						<input class="input100" type="text" name="email" id="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Insira a senha">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="senha" id="senha" placeholder="Senha">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Confirme a senha">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="senha" id="senha" placeholder="Confirmar Senha">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Campo Obrigatorio">
						<span class="btn-show-pass">
						</span>
						<input class="input100" type="date" name="date" id="date" placeholder="Data Nascimento">
						<span class="focus-input100"></span>
					</div>

					<div class="aaaa" data-validate="Campo Obrigatorio">
						<p hidden>é admin?</p>
						<input class="hidden" type="radio" name="is_admin" id="is_admin" hidden>
					</div>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="submit" id="submit">
								Registrar
							</button>
							<!-- <input type="submit" name="submit" id="submit"> -->
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Já possui uma conta?
						</span>

						<a class="txt2" href="./Login.php">
							Entrar
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Site footer -->
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h6>Sobre</h6>
					<p class="text-justify" style="color: gray;">Aplicativo de música desenvolvido para o Projeto de Trabalho de Conclusão de Curso, nesse
						projeto, utilizamos as mais diferentes formas de linguagens e esperamos ter trazido um TCC de qualidade.
					</p>
				</div>


				<div class="col-xs-6 col-md-3">
					<h5>Empresa</h5>
					<ul class="footer-links">
						<li><a href="http://scanfcode.com/category/c-language/">Sobre</a></li>
						<li><a href="http://scanfcode.com/category/front-end-development/">Participantes</a></li>
						<li><a href="http://scanfcode.com/category/back-end-development/">Projetos</a></li>
						<li><a href="http://scanfcode.com/category/java-programming-language/">Suporte</a></li>
						<li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
						<li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
					</ul>
				</div>
			</div>
			<hr>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-6 col-xs-12">
					<p class="copyright-text" style="color: gray;">Copyright &copy; 2017 All Rights Reserved by
						<a href="#">Frecy</a>.
					</p>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12">
					<ul class="social-icons">
						<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<div id="dropDownSelect1"></div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>

</html>