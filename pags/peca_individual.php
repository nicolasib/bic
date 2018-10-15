<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap JS -->
    <script src="../js/jquery.js"></script>
    <script src="../js/popper-js.js"></script>
    <script src="../js/bootstrap.js"></script>
</head>
<body>

    <div id="mainBrand" class="container-fluid text-center"><h1><a id="linkIndex" href="../index.php">LOJA</a></h1></div>

    <!-- *Menu -->
    <nav class="navbar justify-content-center sticky-top navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
            <!-- *Dropdown feminino -->
            <li class="nav-item dropdown">
                <a id="menuFem" class="nav-link dropdown-toggle font-weight-bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Feminino</a>
                <div class="dropdown-menu">
                    <a id="menuFemBlusa" class="dropdown-item" href="../pags/pecas_listadas.php">Blusas</a>
                    <a id="menuFemCalca" class="dropdown-item" href="../pags/pecas_listadas.php">Calças</a>
                    <a id="menuFemShort" class="dropdown-item" href="../pags/pecas_listadas.php">Shorts</a>
                    <a id="menuFemSaia" class="dropdown-item" href="../pags/pecas_listadas.php">Saias</a>
                    <a id="menuFemVest" class="dropdown-item" href="../pags/pecas_listadas.php">Vestidos</a>
                </div>
            </li>
            <!-- Dropdown feminino -->
            <!-- *Dropdown masculino -->
            <li class="nav-item dropdown">
                <a id="menuMasc" class="nav-link dropdown-toggle font-weight-bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Masculino</a>
                <div class="dropdown-menu">
                    <a id="menuMascBlusa" class="dropdown-item" href="../pags/pecas_listadas.php">Blusas</a>
                    <a id="menuMascCalca" class="dropdown-item" href="../pags/pecas_listadas.php">Calças</a>
                </div>
            </li>
            <!-- Dropdown masculino -->
            <!-- *Montar look -->
            <li class="nav-item">
                <a id="menuLook" class="nav-link font-weight-bold" href="../pags/montar_looks.php">Montar Look</a>
            </li>
            <!-- Montar look -->
        </ul>
    </nav>
    <!-- Menu -->

    <div class="container" style="margin-top: 2%">
        <div class="row">
            <!-- Imagem produto -->
            <div class="col-8">
                <div class="container" style="width: 80%">
                    <img class="rounded" src="../img/cima/lookCimaCarousel1.jpg">
                </div>
            </div>
            <div class="col-4">
                <h3>Nome do produto</h3>
                <span>Descrição do produto</span>
                <div style="margin-bottom: 10%; margin-top: 10%" class="dropdown-divider"></div>
                <h4 >R$ 90,00</h4>
                <span><b>12x</b> de <b>R$ 7,50</b> sem juros no cartão.</span>
                <div style="margin-bottom: 10%; margin-top: 10%" class="dropdown-divider"></div>
                <h5>Tamanho:</h5>
                <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Escolha o tamanho...</option>
                        <option>PP</option>
                        <option>P</option>
                        <option>M</option>
                        <option>G</option>
                        <option>GG</option>
                    </select>
                </div>
                <div class="dropdown-divider" style="margin-top: 5%; margin-bottom: 5%"></div>
                <button class="btn btn-danger w-100">Comprar</button>

            </div>
        </div>
    </div>

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