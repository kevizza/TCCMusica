<!DOCTYPE html>
<html lang="en">

<head>
  <title>Frecy</title>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
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
      <div class="line4"></div>
    </div>
    <ul class="nav-list">
      <li><a href="./Login.php" style="text-decoration:none ;">Entrar</a></li>
      <li><a href="/Views/RegisterPage/Registro.php" style="text-decoration:none ;color: #bfbfbf;">Inscrever-se</a></li>
      <li>    </li>
				<li style="color:white ;">|</li>
				<li>    </li>
      <li><a href="#" style="text-decoration:none ;color: #bfbfbf;" >Suporte</a></li>
      <li><a href="/Views/PremiumPage/Premium.php" style="text-decoration:none ;color: #bfbfbf;">Premium</a></li>
    </ul>
  </nav>
</header>


  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" action="/Banco_Dados/validacao.php" method="POST">
          <span class="login100-form-title p-b-26">
            LOGIN
          </span>

          <div class="wrap-input100 validate-input" data-validate="Username Invalido">
            <input class="input100" type="text" name="email" id="email" placeholder="Email" required>
            <!-- <span class="focus-input100" data-placeholder="Email"></span> -->
          </div>

          <div class="wrap-input100 validate-input" data-validate="Insira a Senha">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input class="input100" type="password" name="pass" id="pass" placeholder="Senha" required>
            <!-- <span class="focus-input100" data-placeholder="Senha"></span> -->
          </div>
            <input name="lem_senha" type="checkbox" value="lem_senha" <?php if(isset($_COOKIE['senha'])){ echo 'checked="checked"'; }; ?> />
            <td > Salvar senha </td>

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn" type="submit" name="submit" id="submit">
                Entrar
              </button>
            </div>
          </div>

          <div class="text-center p-t-115">
            <span class="txt1">
              Não tem uma conta?
            </span>

            <a class="txt2" href="./Registro.php">
              Registrar-se
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Site footer -->
  <footer class="footer-section">
		<div class="container">
			<div class="footer-cta pt-5 pb-5">
				<div class="row">
					<div class="col-xl-4 col-md-4 mb-30">
					</div>
					<div class="col-xl-4 col-md-4 mb-30">
					</div>
					<div class="col-xl-4 col-md-4 mb-30">

					</div>
				</div>
			</div>
			<div class="footer-content pt-5 pb-5">
				<div class="row">
					<div class="col-xl-4 col-lg-4 mb-50">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="index.html"><img src="./Imgs/Logo_pagina_BW.png" class="img-fluid"
										alt="logo"></a>
							</div>
							<div class="footer-text">
								<p>Aplicativo de música desenvolvido para o Projeto de
									Trabalho de Conclusão de Curso, nesse
									projeto, utilizamos as mais diferentes formas de linguagens e esperamos ter trazido um TCC de
									qualidade.</p>
							</div>
							<div class="footer-social-icon">
								<span>Siga nas Redes Sociais:</span>
								<a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
								<a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
								<a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 mb-30">
						<div class="footer-widget">
							<div class="footer-widget-heading">
								<h3>Empresa</h3>
							</div>
							<ul>
								<li><a href="#">Sobre</a></li>
								<li><a href="#">Serviços</a></li>
								<li><a href="#">Portifolio</a></li>
								<li><a href="#">Contato</a></li>
								<li><a href="#">Participantes</a></li>
								<li><a href="#">Ultimas Noticias</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-area">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6 text-center text-lg-left">
						<div class="copyright-text">
							<p>Copyright &copy; 2022, Todos os direitos reservados a <a
									href="./index.html">Frecy</a></p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
						<div class="footer-menu">
							<ul>
								<li><a href="#">Inicio</a></li>
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
</body>

</html>