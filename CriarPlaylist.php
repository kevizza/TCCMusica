<?php
session_start();
// print_r($_SESSION);
    if((!isset($_SESSION['email'])== true) and (!isset ($_SESSION['senha']) == true))
    {
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./PaginaInicial/music.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="icon" type="image/png" href="./Paginas/LoginPage/images/icons/Logo_of.png"/>
    </head>

    <body>
        <header>
            <div class="menu-side">
                <a href="./PaginaPrincipal.php"><img src="./Imgs/Logo_pagina_BW - Copy.webp" alt="" width="120px"></a>
                <!-- <h1><a href="./PaginaPrincipal.php"><b>Frecy</b></a></h1> -->
                <div class="playlist">
                    <h4 class="active"><span></span><i class="bi bi-music-note-list"></i></i>Home</h4>
                    <h4><span></span><i class="bi bi-music-note-beamed"></i>Para Você</h4>
                    <h4><span></span><i class="bi bi-music-note-beamed"></i>Explorar</h4>
                </div>
                <div class="menu-song">
                    <div class="Mlist"><h6>Minhas Playlists</h6>
                    <a href="./CriarPlaylist.php"><i class="bi bi-plus-circle-dotted"></i></a></div>

                    <li class="songitem">
                        <span>01</span>
                        <img src="" alt="Alan">
                        <h5>
                            On My Way
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                            <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                    </li>
                    <li class="songitem">
                        <span>01</span>
                        <img src="" alt="Alan">
                        <h5>
                            On My Way
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                            <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                    </li>
                    <li class="songitem">
                        <span>01</span>
                        <img src="" alt="Alan">
                        <h5>
                            On My Way
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                            <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                    </li>
                    <li class="songitem">
                        <span>01</span>
                        <img src="" alt="Alan">
                        <h5>
                            On My Way
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                            <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                    </li>
                    <li class="songitem">
                        <span>01</span>
                        <img src="" alt="Alan">
                        <h5>
                            On My Way
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                            <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                    </li>
                    <li class="songitem">
                        <span>01</span>
                        <img src="" alt="Alan">
                        <h5>
                            On My Way
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                            <i class="bi playListPlay bi-play-circle-fill" id="1"></i>

                    </li>   

                </div>
            </div>
            <div class="song-side"></div>
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
            </div>
            </div>
        </header>
        <script scr="/PaginaInicial/app.js"></script>
    </body>
</html>