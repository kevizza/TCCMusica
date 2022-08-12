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
<title>Frecy</title>

<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./PaginaInicial/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" href="./Paginas/LoginPage/images/icons/Logo_of.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
<section>
<div class="song-side">
                <nav>
                    <ul>
                        <li><a href="./PaginaPrincipal.php" style="text-decoration:none">EXPLORAR <span></span></a></li>
                        <li><a href="./Biblioteca.php" style="text-decoration:none">MINHA BIBLIOTECA</a></li>
                        <li><div id="divBusca">
                                <i class="bi bi-search"></i>
                                <input type="text" id="txtBusca" placeholder="Buscar..."/>
                                <button id="btnBusca">Buscar</button>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
</section>

<aside>
<div class="menu-side">
                <a href="./PaginaPrincipal.php"><img src="./Imgs/Logo_pagina_BW - Copy.webp" alt="" width="120px"></a>

                
                <div class="playlist">


                    <h4 class="active-ac"><span></span><i class="bi bi-house-door-fill"></i>Home</h4>
                    <h4 class="active"><span></span><i class="bi bi-heart-fill"></i>Para Você</h4>
                    <h4 class="active"><span></span><i class="bi bi-search"></i>Explorar</h4>
                </div>

                <hr style="height:1px;text-align:right;width:130px;border-width:0;color:gray;background-color:white;margin-left:30px;margin-top:20px;margin-bottom:20px; ">

                <div class="Mlist"><h6>Minhas Playlists</h6>
                    <a href="./CriarPlaylist.php"><i class="bi bi-plus-circle-dotted"></i></a></div>


                <div class="menu-song">


                    <li class="songitem">
                        <h5>
                            On My Way
                        </h5>
                    </li>

                </div>
            </div>
</aside>

<footer>
<div class="master-play">
                <div class="wave">
                    <div class="wave1"></div>
                    <div class="wave1"></div>
                    <div class="wave1"></div>
                </div>
                <img src="./Imgs/Logo_of.png" alt="">
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
    <!-- SCRIPTS -->
    <script scr="/PaginaInicial/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>