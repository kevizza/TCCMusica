<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$date = $_POST['date'];


	$result = mysqli_query($conexao, "INSERT INTO usuarios(username,email,senha,data_nasc, is_admin) 
	VALUES ('$username','$email','$senha','$date', 'N')");

	header('Location: /Views/LoginPage/Login.php');
}
?>

<html>

<head>
	<title>Frecy</title>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="Imgs/Logo_of.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bulma.min.css" />
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="./images/icons/Logo_of.png" />
	<link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="./vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="./vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="./vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="./vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="./vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="./css/util.css">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


</head>

<body>
	<!-- NavBar -->
	<header>
		<nav>
			<a class="logo" href="/index.html" style="text-decoration:none ;">
				FRECY
			</a>
			<div class="mobile-menu">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
			<ul class="nav-list">
				<li><a href="/Views/LoginPage/Login.php" style="text-decoration:none ;color:gray;"><h2>Entrar</h2></a></li>
				<li><a href="./Registro.php" style="text-decoration:none ;"><h2>Inscrever-se</h2></a></li>
				<li> </li>
				<li style="color:white ;"><h2>|</h2></li>
				<li> </li>
				<li><a href="#Entrar" style="text-decoration:none ;color:gray;" class="active"><h2>Suporte</h2></a></li>
				<li><a href="/Views/PremiumPage/Premium.php" style="text-decoration:none ;color:gray;"><h2>Premium</h2></a></li>
			</ul>
		</nav>
	</header>



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
							<i class="zmdi zmdi-eye-off"></i>
						</span>
						<input class="input100" type="password" name="senha" id="senha" placeholder="Senha">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Confirme a senha">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye-off"></i>
						</span>
						<input class="input100" type="password" name="senha" id="senhaconfirm" placeholder="Confirmar Senha">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Campo Obrigatorio">
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

						<a class="txt2" href="/Views/LoginPage/Login.php">
							Entrar
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Site footer -->

	<div class="copyright-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 text-center text-lg-left">
					<div class="copyright-text">
						<p>Copyright &copy; 2022, Todos os direitos reservados a <a href="./index.html">Frecy</a></p>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
					<div class="footer-menu">
						<ul>
							<li><a href="/index.html">Inicio</a></li>
							<li><a href="#">Termos de Serviço</a></li>
							<li><a href="#">Politicas de Privacidade</a></li>
							<li><a href="#">Contato</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	</footer>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="/Views/RegisterPage/js/main.js"></script>
	<script src="/mobile-navbar.js"></script>
	<script>

	</script>
</body>

</html>