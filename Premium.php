<html>

<head>
    <link rel="stylesheet" href="./PremiumPage/style.scss">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="Imgs/Logo_of.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
                        <a class="nav-link" href="./Registro.php">Registrar-se</a>
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
                    <li class="nav-item active">
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
    <div class="container-fluid-2">
        <h2>PRA QUE SERVE O PREMIUM?</h2>
        <p>Sem publicidade</p>
        <p>Baixar musicas para ouvir off-line</p>
        <p>Pule musicas a vontade</p>
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
                    <li class="first">2000 Subscribers</li>
                    <li>12,000 Emails/month</li>
                    <li>Multi-User Accounts</li>
                    <li>Email Support</li>
                </ul>
                <a href="#" class="button button1">Começar Agora</a>
            </div>
            <div class="packages">
                <h1>Família</h1>
                <h2 class="text1">R$25.99</h2>
                <h2 class="text2">R$280.99</h2>
                <ul class="list">
                    <li class="first">Basic +</li>
                    <li>Landing Pages</li>
                    <li>Pop-up Forms</li>
                    <li>Premium Support</li>
                </ul>
                <a href="#" class="button button2">Começar Agora</a>
            </div>
            <div class="packages">
                <h1>Universitario</h1>
                <h2 class="text1">R$15.99</h2>
                <h2 class="text2">R$150.99</h2>
                <ul class="list">
                    <li class="first">Professional +</li>
                    <li>Marketing Automation</li>
                    <li>Instagram Ads</li>
                    <li>Facebook Ads</li>
                </ul>
                <a href="#" class="button button3">Começar Agora</a>
            </div>
        </div>
    </div>

    <script src="./PremiumPage/app.js"></script>
</body>

</html>