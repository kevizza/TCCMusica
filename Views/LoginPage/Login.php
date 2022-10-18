<!DOCTYPE html>
<html lang="en">

<head>
  <title>Frecy</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="/icons/Logo_of.png" />
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
    <div class="logodiv">
			<a class="logo" href="/index.html" style="text-decoration:none;">
			<h1>FRECY</h1>
			</a>
    </div>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
        <li><a href="./Login.php" class="active" style="text-decoration:none;"><h2>Entrar<h2></a></li>
        <li><a href="/Views/RegisterPage/Registro.php" style="text-decoration:none ;color:#bfbfbf;"><h2>Inscrever-se</h2></a></li>
        <li> </li>
        <li style="color:white ;"><h2>|</h2></li>
        <li> </li>
        <li><a href="#" style="text-decoration:none ;color: #bfbfbf;"><h2>Suporte</h2></a></li>
        <li><a href="/Views/PremiumPage/Premium.php" style="text-decoration:none ;color: #bfbfbf;"><h2>Premium</h2></a></li>
      </ul>
    </nav>
  </header>


  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" action="/validacao.php" method="POST">
          <span class="login100-form-title p-b-26">
            LOGIN
          </span>
          <br>
          <div class="wrap-input100 validate-input" data-validate="email Invalido">
            <input class="input100" type="text" name="login" id="login" placeholder="Email ou Usuário" required>
            <!-- <span class="focus-input100" data-placeholder="Email"></span> -->
          </div>

          <div class="wrap-input100 validate-input" data-validate="Insira a Senha">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input class="input100" type="password" name="pass" id="pass" placeholder="Senha" required>
            <!-- <span class="focus-input100" data-placeholder="Senha"></span> -->
          </div>
          <input name="lem_senha" type="checkbox" value="lem_senha"/> 
          <a style="color: white;font-size: 1.8vh;margin-left:1vh;"> Lembrar de mim </a>
          <div class="login_google" style="margin-top: 2vh;">
            <script src="https://accounts.google.com/gsi/client" async defer></script>
            <div class="logingoogle" id="g_id_onload" data-client_id="534870765324-hhopjp4hk2i4thcn9v6fog8dgm0ceuke.apps.googleusercontent.com" data-login_uri="http://localhost:8000/Views/PaginaApp/AppPrincipal.php" data-auto_prompt="false">
            </div>
            <div class="g_id_signin" data-type="standard" data-size="large" data-theme="dark" data-text="sign_in_with" data-shape="rectangular"data-logo_alignment="left">
            </div>
          </div>
          <br>
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

            <a class="txt2" href="/Views/RegisterPage/Registro.php">
              Registrar-se
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
  <script src="js/main.js"></script>
  <script src="/mobile-navbar.js"></script>
</body>

</html>