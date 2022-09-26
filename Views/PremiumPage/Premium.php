<html>

<head>
  <link rel="stylesheet" href="./style.css">
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="/Imgs/Logo_of.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bulma.min.css" />
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
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
      <li><a href="/Views/LoginPage/Login.php" style="text-decoration:none ;color: #bfbfbf;">Entrar</a></li>
      <li><a href="/Views/RegisterPage/Registro.php" style="text-decoration:none ;color: #bfbfbf;">Inscrever-se</a></li>
      <li>    </li>
				<li style="color:white ;">|</li>
				<li>    </li>
      <li><a href="#" style="text-decoration:none ;color: #bfbfbf;">Suporte</a></li>
      <li><a href="./Premium.php" style="text-decoration:none ;">Premium</a></li>
    </ul>
  </nav>

  <div class="container" id="container-1">
    <h1>SEJA PREMIUM, E CURTA SUAS MÚSICAS OFF-LINE!</h1>
    <p>Depois, pague somente R$ 20,99/mês. Cancele quando quiser.</p>
  </div>

  <div class="container" id="container-2">
    <div class="row">
      <div class="col-12">
        <h2>PRA QUE SERVE O PREMIUM?</h2>
      </div>
    </div>
    <br>
    <div class="row" id="row2">
      <div class="col">
        <p><i class="bi bi-badge-ad-fill"></i>Sem publicidade</p>
      </div>
      <div class="col">
        <p><i class="bi bi-vinyl-fill"></i>Baixar musicas para ouvir off-line</p>
      </div>
      <div class="col">
        <p><i class="bi bi-skip-forward-circle-fill"></i>Pule musicas a vontade</p>
      </div>
    </div>
    <div class="row"></div>
    <p id="p-foot"><b>E muito mais, para você aproveitar cada momento</b></p>
  </div>
  </div>
  </div>
  <div class="container">
    <div class="top">
      <h1 class="h1_plano">ESCOLHA SEU PLANO PREMIUM</h1>
      <div class="toggle-btn">
        <span style="margin: 0.8em;">Anual</span>
        <label class="switch">
          <input type="checkbox" id="checbox" onclick="check()" ; />
          <span class="slider round"></span>
        </label>
        <span style="margin: 0.8em;">Mensal</span>
      </div>
    </div>

    <div class="package-container">
      <div class="packages">
        <h1>Individual</h1>
        <h2 class="text1">R$20,99</h2>
        <h2 class="text2">R$230,99</h2>
        <ul class="list">
          <li class="first"><i class="bi bi-check-lg"></i>Ouça músicas sem anúncios</li>
          <li><i class="bi bi-check-lg"></i>Baixar músicas</li>
          <li><i class="bi bi-check-lg"></i>Escolha a música que quer ouvir</li>
          <li><i class="bi bi-check-lg"></i>Faça um plano pré-pago ou uma assinatura</li>
        </ul>
        <a href="./cartao.php" class="button button1" style="text-decoration: none;">Começar Agora</a>

      </div>
      <div class="packages">
        <h1>Duo</h1>
        <h2 class="text1">R$25,99</h2>
        <h2 class="text2">R$280,99</h2>
        <ul class="list">
          <li class="first"><i class="bi bi-check-lg"></i>2 contas Premium para um casal que mora junto</li>
          <li><i class="bi bi-check-lg"></i>Ouça sem anúncios, no modo offline e sob demanda</li>
          <li><i class="bi bi-check-lg"></i>Faça um plano pré-pago ou uma assinatura</li>
          <li><i class="bi bi-check-lg"></i>Premium Support</li>
        </ul>
        <a href="./cartao.php" class="button button2" style="text-decoration: none;">Começar Agora</a>
      </div>

      <div class="packages">
        <h1>Universitario</h1>
        <h2 class="text1">R$15,99</h2>
        <h2 class="text2">R$150,99</h2>
        <ul class="list">
          <li class="first"><i class="bi bi-check-lg"></i>Desconto especial para estudantes universitários que tenham direito à oferta</li>
          <li><i class="bi bi-check-lg"></i>Ouça músicas sem anúncios</li>
          <li><i class="bi bi-check-lg"></i>Ouça em qualquer lugar — até no modo offline</li>
          <li><i class="bi bi-check-lg"></i>Escolha a música que quer ouvir</li>
        </ul>
        <a href="./cartao.php" class="button button3" style="text-decoration: none;">Começar Agora</a>

      </div>
    </div>
  </div>

<!-- Site footer -->

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
  <script src="./app.js"></script>
</body>

</html>