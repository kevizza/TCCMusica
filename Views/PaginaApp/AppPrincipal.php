<?php
session_start();
// print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: Login.php');
}
$logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="/icons/Logo_of.png" />
    <title>Frecy</title>
</head>

<body>
    <header>
        <div class="menu-top">
            <nav id="nav1">
                <ul>
                    <li class="active">
                        <a href="./PaginaPrincipal.php" style="text-decoration:none">EXPLORAR <span></span> </a>
                    </li>
                    <li class="off">
                        <a href="./Biblioteca.php" style="text-decoration:none">MINHA BIBLIOTECA</a>
                    </li>
                    <li class="off">
                        <a href="./Biblioteca.php" style="text-decoration:none">RADIO</a>
                    </li>
                    <li>
                        <div id="divBusca">
                            <i class="bi bi-search"></i>
                            <input type="text" id="txtBusca" placeholder="Buscar..." />
                        </div>
                    </li>
                </ul>
                <div class="user">
                    <img src="/Imgs/Logo_of.png" alt="" title="a">
                </div>
            </nav>
        </div>
    </header>

    <nav id="nav-side">
        <div class="menu-side">
            <a id="logoA" href="./AppPrincipal.php" style="text-decoration: none;">FRECY</a>
            <div class="playlist">
                <a href="./ PaginaPrincipal.php" style="text-decoration: none;">
                    <h4 class="active">
                        <span></span><i class="bi bi-house-door-fill"></i> Home
                    </h4>
                </a>
                <a href="./PaginaPrincipal.php" style="text-decoration: none;">
                    <h4 class="off">
                        <span></span><i class="large material-icons">library_music</i> Sua Biblioteca
                    </h4>
                </a>
                <a href="./PaginaPrincipal.php" style="text-decoration: none;">
                    <h4 class="off">
                        <span></span><i class="bi bi-search"></i> Explorar
                    </h4>
            </div>
            <br>
            <hr style="height:1px;width:25vh;color:white;margin-left:6vh;">
            <br>
            <div class="Mlist">
                <a href="./CriarPlaylist.php" style="text-decoration:none">
                    <i class="large material-icons">add_box</i>Criar Playlist
                </a>

                <h1></h1>
            </div>
            <br>
            <hr style="height:1px;width:25vh;color:white;margin-left:6vh;">
            <br>


            <div class="menu-song">

            </div>
        </div>
    </nav>

    <section>

    </section>
    <footer>
        <div class="master-play">
            <img src="/Imgs/Logo_of.png" alt="">
            <h5>On My Way <br>
                <div class="subtitle">Alan Walker</div>
            </h5>
            <div class="icon">
                <i class="bi bi-skip-start-fill"></i>
                <i class="bi bi-play-fill"></i>
                <i class="bi bi-skip-end-fill"></i>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" value="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:00</span>

            <div class="vol">
                <i class="bi bi-volume-down-fill"></i>
                <input type="range" id="vol" min="0" value="30" max="100">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>
        </div>
    </footer>



    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>