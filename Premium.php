<html>

<head>
    <link rel="stylesheet" href="./PremiumPage/style.scss">
    <meta charset="UTF-8">
	  <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="icon" type="image/png" href="Imgs/Logo_of.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html"><img src="./Imgs/Logo_of.png" alt="" class="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <body>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="./Login.php">Entrar <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./Registro.php">Inscreva-se</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link"></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link">|</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link"></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ajuda</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./Premium.php"><b>Premium</b></a>
                    </li>
                    </li>
                </ul>
            </div>
    </nav>
    <div class="container-fluid">
        <h1>SEJA PREMIUM, E CURTA SUAS MÚSICAS OFF-LINE!</h1>
        <p>Depois, pague somente R$ 19,90/mês. Cancele quando quiser.</p>
    </div>
    <div class="container-fluid" id="container-fluid">
        <h2>PRA QUE SERVE O PREMIUM?</h2>
        <div class="row">
        <p><i class="bi bi-badge-ad-fill"></i>Sem publicidade</p>
        <p><i class="bi bi-vinyl-fill"></i>Baixar musicas para ouvir off-line</p>
        <p><i class="bi bi-skip-forward-circle-fill"></i>Pule musicas a vontade</p>
        <p id="p-foot">E muito mais, para você aproveitar cada momento</p>
        </div>
    </div>
    <div class="container">
        <div class="top">
            <h1>ESCOLHA SEU PLANO PREMIUM</h1>
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
                <h2 class="text1">R$20.99</h2>
                <h2 class="text2">R$230.99</h2>
                <ul class="list">
                    <li class="first"><i class="bi bi-check-lg"></i>Ouça músicas sem anúncios</li>
                    <li><i class="bi bi-check-lg"></i>Baixar músicas</li>
                    <li><i class="bi bi-check-lg"></i>Escolha a música que quer ouvir</li>
                    <li><i class="bi bi-check-lg"></i>Faça um plano pré-pago ou uma assinatura</li>
                </ul>
                <a href="#" class="button button1" style="text-decoration: none;">Começar Agora</a>
                <p>Sujeito a Termos e Condições. O mês grátis não está disponível para usuários que já experimentaram o Premium.</p>
            </div>
            <div class="packages">
                <h1>Duo</h1>
                <h2 class="text1">R$25.99</h2>
                <h2 class="text2">R$280.99</h2>
                <ul class="list">
                    <li class="first"><i class="bi bi-check-lg"></i>2 contas Premium para um casal que mora junto</li>
                    <li><i class="bi bi-check-lg"></i>Ouça sem anúncios, no modo offline e sob demanda</li>
                    <li><i class="bi bi-check-lg"></i>Faça um plano pré-pago ou uma assinatura</li>
                    <li><i class="bi bi-check-lg"></i>Premium Support</li>
                </ul>
                <a href="#" class="button button2" style="text-decoration: none;">Começar Agora</a>
                <p>Sujeito a Termos e Condições. O mês grátis não está disponível para usuários que já experimentaram o Premium.</p>
            </div>
            
            <div class="packages">
                <h1>Universitario</h1>
                <h2 class="text1">R$15.99</h2>
                <h2 class="text2">R$150.99</h2>
                <ul class="list">
                    <li class="first"><i class="bi bi-check-lg"></i>Desconto especial para estudantes universitários que tenham direito à oferta</li>
                    <li><i class="bi bi-check-lg"></i>Ouça músicas sem anúncios</li>
                    <li><i class="bi bi-check-lg"></i>Ouça em qualquer lugar — até no modo offline</li>
                    <li><i class="bi bi-check-lg"></i>Escolha a música que quer ouvir</li>
                </ul>
                <a href="#" class="button button3" style="text-decoration: none;">Começar Agora</a>
                <p>Oferta disponível somente para estudantes de instituições de ensino superior credenciadas. O mês grátis não está disponível para usuários que já experimentaram o Premium. Sujeito aos Termos e Condições da oferta do Spotify de desconto para universitários.</p>
            </div>
        </div>
    </div>

    <!-- Site footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>Sobre</h6>
          <p class="text-justify">Aplicativo de música desenvolvido para o Projeto de Trabalho de Conclusão de Curso, nesse
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
          <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
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
    <script src="./PremiumPage/app.js"></script>
</body>

</html>