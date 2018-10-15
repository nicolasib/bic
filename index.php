<!-- by Nicolas Ibraim -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/popper-js.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>

    <div id="mainBrand" class="container-fluid text-center"><h1><a id="linkIndex" href="index.php">LOJA</a></h1></div>

    <!-- *Menu -->
    <nav class="navbar justify-content-center sticky-top navbar-expand-sm bg-light navbar-light">  
        <ul class="navbar-nav"> 
            <!-- *Dropdown feminino -->
            <li class="nav-item dropdown">
                <a id="menuFem" class="nav-link dropdown-toggle font-weight-bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Feminino</a>
                <div class="dropdown-menu">
                    <a id="menuFemBlusa" class="dropdown-item" href="./pags/pecas_listadas.php">Blusas</a>
                    <a id="menuFemCalca" class="dropdown-item" href="./pags/pecas_listadas.php">Calças</a>
                    <a id="menuFemShort" class="dropdown-item" href="./pags/pecas_listadas.php">Shorts</a>
                    <a id="menuFemSaia" class="dropdown-item" href="./pags/pecas_listadas.php">Saias</a>
                    <a id="menuFemVest" class="dropdown-item" href="./pags/pecas_listadas.php">Vestidos</a>
                </div>
            </li>
            <!-- Dropdown feminino -->
            <!-- *Dropdown masculino -->
            <li class="nav-item dropdown">
                <a id="menuMasc" class="nav-link dropdown-toggle font-weight-bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Masculino</a>
                <div class="dropdown-menu">
                    <a id="menuMascBlusa" class="dropdown-item" href="./pags/pecas_listadas.php">Blusas</a>
                    <a id="menuMascCalca" class="dropdown-item" href="./pags/pecas_listadas.php">Calças</a>
                </div>
            </li>
            <!-- Dropdown masculino -->
            <!-- *Montar look -->
            <li class="nav-item">
                <a id="menuLook" class="nav-link font-weight-bold" href="./pags/montar_looks.php">Montar Look</a>
            </li>
            <!-- Montar look -->
        </ul>
    </nav>
    <!-- Menu -->

    <!-- *Main Carousel -->
    <div class="container w-75" style="margin-top: 1vh;">
        <div id="mainCarousel" class="carousel slide justify-content-center" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mainCarousel" data-slide-to="1"></li>
                <li data-target="#mainCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner rounded" style="overflow: hidden">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./img/mainCarousel/mainCarousel1.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/mainCarousel/mainCarousel2.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/mainCarousel/mainCarousel3.jpeg">
                </div>
            </div>
            <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Main Carousel -->


    <!-- *Main Cards -->

    <!-- *Texto Promoções -->
    <div class="container">
        <p id="titlePromo" class="display-4" align="center">Promoções</p>
    </div>
    <!-- Texto Promoções -->

    <div class="container w-75" style="margin-top: 2vh;">
        <div id="secCarousel" class="carousel slide justify-content-center" data-ride="carousel">
            <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" src="img/mainCards/mainCard1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                    <h5><sup><strike>R$ 79,90</strike></sup></h5>
                                    <h5 class="card-title">R$ 59,90</h5>
                                </div>
                            </div>

                            <div class="card">
                                <img class="card-img-top" src="img/mainCards/mainCard2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                    <h5><sup><strike>R$ 99,90</strike></sup></h5>
                                    <h5 class="card-title">R$ 79,90</h5>
                                </div>
                            </div>

                            <div class="card">
                                <img class="card-img-top" src="img/mainCards/mainCard3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                    <h5><sup><strike>R$ 69,90</strike></sup></h5>
                                    <h5 class="card-title">R$ 39,90</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" src="img/mainCards/mainCard4.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                    <h5><sup><strike>R$ 79,90</strike></sup></h5>
                                    <h5 class="card-title">R$ 59,90</h5>
                                </div>
                            </div>

                            <div class="card">
                                <img class="card-img-top" src="img/mainCards/mainCard5.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                    <h5><sup><strike>R$ 99,90</strike></sup></h5>
                                    <h5 class="card-title">R$ 79,90</h5>
                                </div>
                            </div>

                            <div class="card">
                                <img class="card-img-top" src="img/mainCards/mainCard6.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                    <h5><sup><strike>R$ 69,90</strike></sup></h5>
                                    <h5 class="card-title">R$ 39,90</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <a class="carousel-control-prev" href="#secCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#secCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

    <!-- Main Cards -->



    <div class="container-fluid w-100" style="height: 100%; margin-top: 2vh; background-color: #282828">
        <div class="container" style="padding-top: 2vh; padding-bottom: 2vh; color: floralwhite;">
            <h4 class="font-weight-bold">LOJA</h4>
            <span class="font-weight-bold">EMAIL:</span>
            <span class="font-weight-normal">loremipsum@gmail.com</span><br>
            <span class="font-weight-bold">ENDEREÇO:</span>
            <span class="font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lacinia est.</span>
        </div>
    </div>
</body>
</html>