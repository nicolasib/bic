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

    <div class="container" style="margin-top: 5%">
        <div class="row">
            <div class="col-sm-2">
                <h4>Filtros</h4>
                <div class="dropdown-divider"></div>
                <div>
                    <h5>Tamanhos</h5>
                    <div style="margin-top: 5%">
                        <div class="form-check">
                            <label class="form-check-label" for="defaultCheck1">
                                <input class="form-check-input" type="checkbox" value="">
                                Tamanho 1
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="defaultCheck1">
                                <input class="form-check-input" type="checkbox" value="">
                                Tamanho 2
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="defaultCheck1">
                                <input class="form-check-input" type="checkbox" value="">
                                Tamanho 3
                            </label>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div style="margin-top: 10%">
                    <h5>Marcas</h5>
                    <div style="margin-top: 5%">
                        <div class="form-check">
                            <label class="form-check-label" for="defaultCheck1">
                                <input class="form-check-input" type="checkbox" value="">
                                Marca 1
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="defaultCheck1">
                                <input class="form-check-input" type="checkbox" value="">
                                Marca 2
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="defaultCheck1">
                                <input class="form-check-input" type="checkbox" value="">
                                Marca 3
                            </label>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div style="margin-top: 10%">
                    <h5>Cores</h5>
                    <div style="margin-top: 5%">
                        <div class="form-check">
                            <label class="form-check-label" for="defaultCheck1">
                                <input class="form-check-input" type="checkbox" value="">
                                Cor 1
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="defaultCheck1">
                                <input class="form-check-input" type="checkbox" value="">
                                Cor 2
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="defaultCheck1">
                                <input class="form-check-input" type="checkbox" value="">
                                Cor 3
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="d-flex" style="flex-wrap: wrap;" >
                    <?php
                    //Listando arquivos cima
                    $pathCima = "../img/cima/";
                    $diretorioCima = dir($pathCima);
                    $listaCima = array();
                    $contador = 0;

                    while($arquivo = $diretorioCima -> read()){
                        if($contador !== 0 and $contador !== 1)
                            array_push($listaCima, $pathCima.$arquivo);
                        $contador++;
                    }

                    //Listando arquivos baixo
                    $pathBaixo = "../img/baixo/";
                    $diretorioBaixo = dir($pathBaixo);
                    $listaBaixo = array();
                    $contador = 0;

                    while($arquivo = $diretorioBaixo -> read()){
                        if($contador !== 0 and $contador !== 1)
                            array_push($listaBaixo, $pathBaixo.$arquivo);
                        $contador++;
                    }
                    //Imprimindo divs cima
                    foreach ($listaCima as $itemCima){
                        echo '<div class="cardsProdutosCima shadow rounded" style="height: 10rem; margin: 2%;"><a href="../pags/peca_individual.php" style="color: #1b1e21"><img class="rounded" src="'. $itemCima .'"><span class="d-block font-weight-bold" style="margin-left: 5%; margin-top: 5%">Nome</span></a></div>';
                    }
                    //Imprimindo divs baixo
                    foreach ($listaBaixo as $itemBaixo){
                        echo '<div class="cardsProdutosBaixo shadow rounded" style="height: 10rem; margin: 2%;"><a href="../pags/peca_individual.php" style="color: #1b1e21"><img class="rounded" src="'. $itemBaixo .'"><span class="d-block font-weight-bold" style="margin-left: 5%; margin-top: 5%">Nome</span></a></div>';
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>