<?php
session_start();

include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
// print_r($_SESSION);
if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body style="justify-content: center; align-items: center; display: flex; background-color: black;">
        <div style="position: relative; margin-top: 2rem; align-items: center; justify-content: center; height: 40rem; width: 100rem; display: flex; flex-direction: column; ">
        <img src="/Imgs/Logo_of.png" style="width: 7rem; height: 7rem;">
        <H1 style="color: white; font-size: 6rem; text-shadow: 0rem 0rem 1rem #000;">Você não está Logado!</H1>
        <p style="color: white; font-size: 2rem; margin-top: -4rem; text-shadow: 0rem 0rem 1rem #000;">é necessario logar para acessar o website</p>
            <Button><a href="/Views/LoginPage/Login.php" style="text-decoration: none;">Logar</a></Button>
            
        </div>
        <Style>
            body{
                background: url(/Imgs/fundo_semlogin.gif);
                /* background-size: 200rem; */
            }
            img{
                opacity: 0;
                animation-name: logo;
                animation-duration: 4s;
                animation-iteration-count: infinite;
                animation-direction: alternate;
            }
            a{
                color: white;
            }
            button{
                width: 12rem;
                height: 4rem;
                text-transform: uppercase;
                color: black;
                font-size: 1.5rem;
                border: none;
                border-radius: 2rem;
                background: #42275a; 
                background: -webkit-linear-gradient(to right, #734b6d, #42275a); 
                background: linear-gradient(to right, #734b6d, #42275a); 
                transition: .7s ease;
                opacity: 0.6;
                cursor: pointer;
            }
            button:hover{
                width: 10rem;
                height: 3rem;
                font-size: 1.3rem;
                opacity: 1;
            }
            @keyframes logo{
                from{
                    opacity: 0;
                }to{
                    opacity: 1;
                }
            }
        </Style>
    </body>
    </html>';
    die;
}

if (isset($_POST['submit'])) {

    $nome_playlist = $_POST['nome_playlist'];
    $descricao = $_POST['descricao'];
    $imagem_playlist = $_POST['imagem_playlist'];

    if (isset($_FILES['imagem_playlist'])) $imagem_playlist = addslashes(file_get_contents($_FILES["imagem_playlist"]["tmp_name"]));
    else $imagem_playlist = "/Imgs/playlistdeafult.jpg";

    $result = mysqli_query($conexao, "INSERT INTO playlists(nome_playlist,descricao,imagem_playlist) 
	VALUES ('$nome_playlist', '$descricao', '$imagem_playlist')");
}

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
<header id="menu-top2">
        <div class="menu-top">
            <nav id="nav1">
                <ul>
                    <li>
                        <div id="divBusca">
                            <i class="bi bi-search"></i>
                            <input type="text" id="txtBusca" placeholder="Buscar..." />
                        </div>
                    </li>
                    <li>
                        <div class="user" id="user">
                            <img src="/Imgs/pessoaicon.png" alt="">
                            <script>
                                var btn = document.querySelector("#user");
                                btn.addEventListener("click", function() {

                                    if (document.getElementById("menu-lado").style.left === "138.55vh") {
                                        document.getElementById("menu-lado").style.left = "200.55vh";
                                    } else {
                                        document.getElementById("menu-lado").style.left = "200.55vh";
                                        document.getElementById("menu-lado").style.left = "138.55vh";
                                    }

                                });
                            </script>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <nav id="nav2">
                <ul>
                <li>
                    
                    </li>
                    <li>
                    
                    </li>
                    <li>
                    <i class="bi bi-house-door-fill"></i>
                    </li>
                    <li>
                    <i class="bi bi-collection-fill"></i>
                    </li>
                    <li>
                    <img src="/Imgs/pessoaicon.png" alt="">
                    </li>
                </ul>
            </nav>

    <nav id="nav-side">
        <div class="menu-side">
            <a id="logoA" href="./AppPrincipal.php" style="text-decoration: none;">FRECY</a>
            <div class="playlist">
                <a href="#" style="text-decoration: none;" id="explorarlado">
                    <h4 class="active" id="explorarh4">
                        <span></span><i class="bi bi-house-door-fill"></i> Explorar
                    </h4>
                </a>
                <a href="#" style="text-decoration: none;" id="bibliotecalado" style="color:white;">
                    <h4 class="off" id="bibliotecah4">
                        <span></span><i class="bi bi-music-note-list"></i> Sua Biblioteca
                    </h4>
                </a>
            </div>
            <br>
            <hr style="height:1px;width:25vh;color:white;margin-left:6vh;">
            <br>


            <div class="playlists">
                <h1>Suas PlayLists:</h1>
                <li class="songItem">
                <img src="/Imgs/musicas/banner/1.jpg" alt="">
                <h5>Rockstar
                <i class="bi musicPlay bi-play-fill" id="1" style="font-size: 2rem; position: relative;"></i>
                        </h5>
                </li>
                <li class="songItem">
                    <img src="/Imgs/musicas/banner/2.jpg" alt="">
                    <h5>
                        Beliver
                    </h5>
                    <i class="bi musicPlay bi-play-fill" id="1"></i>
                </li>
                <li class="songItem">
                    <img src="/Imgs/musicas/banner/3.jpg" alt="">
                    <h5>
                        Save Yours Tears
                    </h5>
                </li>
                <li class="songItem">
                    <img src="/Imgs/musicas/banner/4.jpg" alt="">
                    <h5>
                        As It Was
                    </h5>
                </li>
                <li class="songItem">
                    <img src="/Imgs/musicas/banner/5.jpg" alt="">
                    <h5>
                        Paradise
                    </h5>
                </li>
                <li class="songItem">
                    <img src="/Imgs/musicas/banner/6.jpg" alt="">
                    <h5>
                        Stay
                    </h5>
                </li>
                <li class="songItem">
                    <img src="/Imgs/musicas/banner/7.jpg" alt="">
                    <h5>
                        idfc
                    </h5>
                </li>
                <li class="songItem">
                    <img src="/Imgs/musicas/banner/8.jpg" alt="">
                    <h5>
                        Ride
                    </h5>
                </li>
                <li class="songItem">
                    <img src="/Imgs/musicas/banner/9.jpg" alt="">
                    <h5>
                        Locked Out Of Heaven
                    </h5>
                </li>
                <li class="songItem">
                    <img src="/Imgs/musicas/banner/10.jpg" alt="">
                    <h5>
                    Faded
                    </h5>
                </li>
            </div>
        </div>
    </nav>

    <section id="section">
        <div id="home">
            <div id="content">
                <h1>Descubra novos Sons!</h1>
                <p>
                    Com um pouco de curiosidade você poderá encontrar diversas musicas!
                </p>
            </div>
            <div class="menu-songs">
                <div class="h4">
                    <h3>Lançamentos</h3>
                    <div class="btn-s">
                    </div>
                </div>
                <div class="pop-songs">
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/musicas/banner/1.jpg" alt="">
                            <i class="bi musicPlay bi-play-fill" id="1"></i>
                        </div>
                        <h5>Rockstar
                            <br>
                            <div class="subtitle">Post Malone</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/musicas/banner/2.jpg" alt="">
                            <i class="bi musicPlay bi-play-fill" id="2"></i>
                        </div>
                        <h5>Beliver
                            <br>
                            <div class="subtitle">Imagine Dragons</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/musicas/banner/3.jpg" alt="">
                            <i class="bi musicPlay bi-play-fill" id="3"></i>
                        </div>
                        <h5>Save Yours Tears
                            <br>
                            <div class="subtitle">The Weekend</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/musicas/banner/4.jpg" alt="">
                            <i class="bi musicPlay bi-play-fill" id="4"></i>
                        </div>
                        <h5>As It Was
                            <br>
                            <div class="subtitle">Harry Styles</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/musicas/banner/5.jpg" alt="">
                            <i class="bi musicPlay bi-play-fill" id="5"></i>
                        </div>
                        <h5>Paradise
                            <br>
                            <div class="subtitle">Cold Play</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/musicas/banner/6.jpg" alt="">
                            <i class="bi musicPlay bi-play-fill" id="6"></i>
                        </div>
                        <h5>Stay
                            <br>
                            <div class="subtitle">The Score</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/musicas/banner/7.jpg" alt="">
                            <i class="bi musicPlay bi-play-fill" id="7"></i>
                        </div>
                        <h5>idfc
                            <br>
                            <div class="subtitle">blackbear</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/musicas/banner/8.jpg" alt="">
                            <i class="bi musicPlay bi-play-fill" id="8"></i>
                        </div>
                        <h5>Ride
                            <br>
                            <div class="subtitle">Twenty One Pilots</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/musicas/banner/9.jpg" alt="">
                            <i class="bi musicPlay bi-play-fill" id="9"></i>
                        </div>
                        <h5>Locked Out Of Heaven
                            <br>
                            <div class="subtitle">Bruno Mars</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/musicas/banner/10.jpg" alt="">
                            <i class="bi musicPlay bi-play-fill" id="10"></i>
                        </div>
                        <h5>Faded
                            <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>

                </div>
            </div>
            <div class="menu-songs">
                <div class="h4">
                    <h3>Em alta</h3>
                    <div class="btn-s">
                    </div>
                </div>
                <div class="pop-songs">
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/musicas/banner/11.jpg" alt="">
                            <i class="bi musicPlay bi-play-fill" id="11"></i>
                        </div>
                        <h5>Montero
                            <br>
                            <div class="subtitle">Lin Nas X</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/musicas/banner/12.jpg" alt="">
                            <i class="bi musicPlay bi-play-fill" id="12"></i>
                        </div>
                        <h5>I Aint Worried
                            <br>
                            <div class="subtitle">One Republic</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/musicas/banner/13.jpg" alt="">
                            <i class="bi musicPlay bi-play-fill" id="13"></i>
                        </div>
                        <h5>Bones
                            <br>
                            <div class="subtitle">Imagine Dragons</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/musicas/banner/14.jpg" alt="">
                            <i class="bi musicPlay bi-play-fill" id="14"></i>
                        </div>
                        <h5>Sweet Child O' Mine
                            <br>
                            <div class="subtitle">Gun's N Roses</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/15.jpg" alt="">
                            <i class="bi musicPlay bi-play-fill" id="15"></i>
                        </div>
                        <h5>Faded
                            <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/capa_faded.png" alt="">
                            <i class="bi musicPlay bi-play-fill" id="16"></i>
                        </div>
                        <h5>Faded
                            <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/capa_faded.png" alt="">
                            <i class="bi musicPlay bi-play-fill" id="17"></i>
                        </div>
                        <h5>Faded
                            <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/capa_faded.png" alt="">
                            <i class="bi musicPlay bi-play-fill" id="18"></i>
                        </div>
                        <h5>Faded
                            <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/capa_faded.png" alt="">
                            <i class="bi musicPlay bi-play-fill" id="19"></i>
                        </div>
                        <h5>Faded
                            <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-song">
                            <img src="/Imgs/capa_faded.png" alt="">
                            <i class="bi musicPlay bi-play-fill" id="20"></i>
                        </div>
                        <h5>Faded
                            <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>

                </div>
            </div>

            <div class="menu-songs">
                <div class="h4">
                    <h3>Artistas Populares</h3>
                    <div class="btn-s">
                    </div>
                </div>
                <div class="pop-artistis">
                    <li class="artItems">
                        <div class="img-artist">
                            <h6>The Weekend</h6>
                            <img src="/Imgs/musicas/artistas/theweekend.jpg" alt="">
                        </div>
                    </li>
                    <li class="artItems">
                        <div class="img-artist">
                            <h6>Imagine Dragons</h6>
                            <img src="/Imgs/musicas/artistas/Imagine_dragons.jpg" alt="">
                        </div>
                    </li>
                    <li class="artItems">
                        <div class="img-artist">
                            <h6>Harry Styles</h6>
                            <img src="/Imgs/musicas/artistas/harrystyle.jpg" alt="">
                        </div>
                    </li>
                    <li class="artItems">
                        <div class="img-artist">
                            <h6>Cold Play</h6>
                            <img src="/Imgs/musicas/artistas/coldplay.jpg" alt="">
                        </div>
                    </li>
                    <li class="artItems">
                        <div class="img-artist">
                            <h6>Post Malone</h6>
                            <img src="/Imgs/musicas/artistas/postmalone.jpg" alt="">
                        </div>
                    </li>
                    <li class="artItems">
                        <div class="img-artist">
                            <h6>Olivia Rodrigo</h6>
                            <img src="/Imgs/musicas/artistas/Olivia rodrigo.jpg" alt="">
                        </div>
                    </li>
                    <li class="artItems">
                        <div class="img-artist">
                            <h6>Justin Bieber</h6>
                            <img src="/Imgs/musicas/artistas/justin.jpg" alt="">
                        </div>
                    </li>
                    <li class="artItems">
                        <div class="img-artist">
                            <h6>Billie Elish</h6>
                            <img src="/Imgs/musicas/artistas/BillieEilish.jpg" alt="">
                        </div>
                    </li>
                    <li class="artItems">
                        <div class="img-artist">
                            <h6>Lil Nas X</h6>
                            <img src="/Imgs/musicas/artistas/lilnas.jpg" alt="">
                        </div>
                    </li>
                    <li class="artItems">
                        <div class="img-artist">
                            <h6>Bruno Mars</h6>
                            <img src="/Imgs/musicas/artistas/Brunomars.jpg" alt="">
                        </div>
                    </li>

                </div>
            </div>
        </div>

        <div id="perfildiv">
            <div class="perfil">
                aaaaaaaaaaaaaaaaaaaaaaaaaa
            </div>
        </div>

        <div id="bibliotecadiv">
            <div class="biblioteca">
                aaaaaaaaaaaaaaaaaaaaaaaaaa
            </div>
        </div>
    </section>
    <div class="menu" id="menu-lado">
            <div class="conteudo-menu">
                <div class="area1">
                    <h3 id="config-text1">Configurações</h3>
                </div>

                <div class="area2">
                    <br>
                    <button id="menu-btn"><h3 id="config-text2"><a href="#" style="text-decoration: none;">Perfil</a></h3></button>
                    <script>
                        var btn = document.querySelector("#menu-btn");
                                btn.addEventListener("click", function() {

                                    if (document.getElementById("home").style.display === "none") {
                                        document.getElementById("perfildiv").style.display = "block";
                                        document.getElementById("menu-lado").style.display = "none";
                                    } else {
                                        document.getElementById("home").style.display = "block";
                                        document.getElementById("perfildiv").style.display = "none";
                                        document.getElementById("menu-lado").style.display = "none";
                                    }

                                });
                    </script>
                    <hr style="color: white;">
                </div>
                <div class="btn-menu">
                <a href="/index.html" style="text-decoration: none;"><button type="submit2" name="sair" id="sair">Sair</button></a>
                <button type="submit3" name="desconectar" id="desconectar" >Sair e Desconectar</button>
                </div>
            </div>
        </div>

    <footer>
        <div class="master-play">
            <img src="/Imgs/2754.png" id="poster_master_play">
            <h5 id="title"><br>
                <div class="subtitle"></div>
            </h5>
            <div class="icon">
                <i class="bi bi-skip-start-fill" id="skip1"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-skip-end-fill" id="skip2"></i>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" value="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:00</span>

            <div class="vol">
                <i class="bi vol_icon bi-volume-down-fill"></i>
                <input type="range" id="vol" min="0" value="30" max="100">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>
        </div>
    </footer>
                           


    <!-- Scripts -->
    <script src="sweetalert2/dist/sweetalert2.min.js">Swal.fire('Any fool can use a computer')</script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/Views/PaginaApp/app.js"></script>
    <script src="/Views/PaginaApp/app2.js"></script>
</body>
<script>
    var btn = document.querySelector("#bibliotecabtn");
    btn.addEventListener("click", function() {
        var div = document.querySelector("#home");
        document.getElementById("bibliotecadiv").style.display = "none";
        document.getElementById("span2").style.marginLeft = "0vh";
        document.getElementById("bibliotecabtn").style.color = "gray";
        document.getElementById("explorarbtn").style.color = "#fff";

        if (document.getElementById("bibliotecadiv").style.display == "block") {
            document.getElementById("bibliotecadiv").style.display = "none";
            document.getElementById("bibliotecabtn").style.color = "#fff";
            document.getElementById("span2").style.marginLeft = "0vh";
            document.getElementById("explorarbtn").style.color = "gray";
            document.getElementById('bibliotecah4').classList.remove('active');
            document.getElementById('bibliotecah4').classList.add('off');
            document.getElementById('explorarh4').classList.remove('off');
            document.getElementById('explorarh4').classList.add('active');
        }

        if (div.style.display === "none") {
            div.style.display = "block";
            document.getElementById("#home").style.display = "block";
            document.getElementById("span2").style.marginLeft = "0vh";
            document.getElementById("bibliotecadiv").style.display = "none";
        } else {
            div.style.display = "none";
            document.getElementById("bibliotecadiv").style.display = "block";
            document.getElementById("bibliotecabtn").style.color = "#fff";
            document.getElementById("span2").style.marginLeft = "20vh";
            document.getElementById("explorarbtn").style.color = "gray";
            document.getElementById('bibliotecah4').classList.remove('off');
            document.getElementById('bibliotecah4').classList.add('active');
            document.getElementById('explorarh4').classList.remove('active');
            document.getElementById('explorarh4').classList.add('off');
        }

    });
</script>

<script>
    var btn = document.querySelector("#explorarbtn");
    btn.addEventListener("click", function() {
        var div = document.querySelector("#home");
        document.getElementById("bibliotecabtn").style.color = "gray";
        document.getElementById("explorarbtn").style.color = "#fff";
        document.getElementById("span2").style.marginLeft = "0vh";
        if (div.style.display === "none") {
            div.style.display = "block";
            document.getElementById("#home").style.display = "block";
            document.getElementById("bibliotecadiv").style.display = "none";
            document.getElementById("criarplaylist").style.display = "none";
            document.getElementById("bibliotecabtn").style.color = "#fff";
            document.getElementById("explorarbtn").style.color = "gray";
            document.getElementById('bibliotecah4').classList.remove('active');
            document.getElementById('bibliotecah4').classList.add('off');
            document.getElementById('explorarh4').classList.remove('off');
            document.getElementById('explorarh4').classList.add('active');
        }
        if (div.style.display == "block") {
            div.style.display = "none";
            document.getElementById("bibliotecadiv").style.display = "block";
            document.getElementById("bibliotecabtn").style.color = "gray";
            document.getElementById("span2").style.marginLeft = "0vh"
            document.getElementById("explorarbtn").style.color = "#fff";
            document.getElementById('bibliotecah4').classList.remove('off');
            document.getElementById('bibliotecah4').classList.add('active');
            document.getElementById('explorarh4').classList.remove('active');
            document.getElementById('explorarh4').classList.add('off');
        }

    });
</script>

<script>
    var btn = document.querySelector("#bibliotecalado");
    btn.addEventListener("click", function() {
        var div = document.querySelector("#home");
        document.getElementById("bibliotecadiv").style.display = "none";
        document.getElementById("span2").style.marginLeft = "0vh";
        document.getElementById("bibliotecabtn").style.color = "gray";
        document.getElementById("explorarbtn").style.color = "#fff";
        document.getElementById("bibliotecalado").style.color = "gray";

        if (div.style.display === "none") {
            div.style.display = "block";
            document.getElementById("#home").style.display = "block";
            document.getElementById("bibliotecadiv").style.display = "none";
            document.getElementById('bibliotecah4').classList.remove('active');
            document.getElementById('bibliotecah4').classList.add('off');
            document.getElementById('explorarh4').classList.remove('off');
            document.getElementById('explorarh4').classList.add('active');
        } else {
            div.style.display = "none";
            document.getElementById("bibliotecadiv").style.display = "block";
            document.getElementById("bibliotecabtn").style.color = "#fff";
            document.getElementById("span2").style.marginLeft = "20vh";
            document.getElementById("explorarbtn").style.color = "gray";
            document.getElementById("explorarlado").style.color = "white";
            document.getElementById('bibliotecah4').classList.remove('off');
            document.getElementById('bibliotecah4').classList.add('active');
            document.getElementById('explorarh4').classList.remove('active');
            document.getElementById('explorarh4').classList.add('off');
        }

    });
</script>

<script>
    var btn = document.querySelector("#explorarlado");
    btn.addEventListener("click", function() {
        var div = document.querySelector("#home");
        document.getElementById("bibliotecabtn").style.color = "gray";
        document.getElementById("explorarbtn").style.color = "#fff";
        document.getElementById("span2").style.marginLeft = "0vh";

        if (div.style.display === "block") {
            div.style.display = "block";
            document.getElementById("bibliotecadiv").style.display = "none";
        }
        if (div.style.display === "none") {
            div.style.display = "block";
            document.getElementById("#home").style.display = "block";
            document.getElementById("bibliotecadiv").style.display = "none";
            document.getElementById("criarplaylist").style.display = "none";
            document.getElementById("bibliotecabtn").style.color = "gray";
            document.getElementById("span2").style.marginLeft = "0vh"
            document.getElementById("explorarbtn").style.color = "#fff";
            document.getElementById('bibliotecah4').classList.remove('active');
            document.getElementById('bibliotecah4').classList.add('off');
            document.getElementById('explorarh4').classList.remove('off');
            document.getElementById('explorarh4').classList.add('active');

        }
        if (div.style.display == "block") {
            div.style.display = "none";
            document.getElementById("bibliotecadiv").style.display = "block";
            document.getElementById("bibliotecabtn").style.color = "#fff";
            document.getElementById("explorarbtn").style.color = "gray";
            document.getElementById('bibliotecah4').classList.remove('off');
            document.getElementById('bibliotecah4').classList.add('active');
            document.getElementById('explorarh4').classList.remove('active');
            document.getElementById('explorarh4').classList.add('off');
        }

    });
</script>

</html>