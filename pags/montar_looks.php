<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

    <div class="container h-50" style="margin-top: 2vh;">
        <div class="row">
            <div class="col-sm-4">
                <!-- Cima carousel -->
                <div id="lookEscolhaCima" class="container" style="width: 100%; height: auto;">
                    <!-- Engrenagem Cima -->
                    <button type="button" class="btn btn-secondary rounded position-absolute" data-toggle="modal" data-target="#filtroCima" id="filtroCarouselTop"><span class="h5">Filtrar</span></button>
                    <!-- Modal Cima -->
                    <div class="modal fade bd-example-modal-lg" id="filtroCima" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Filtrar peças superiores</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div style="overflow-y: scroll">
                                        <h4>Leves</h4>
                                        <div class="dropdown-divider"></div>
                                        <div class="d-flex" style="flex-flow: row wrap">
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

                                            //Imprimindo divs
                                            foreach ($listaCima as $itemCima){
                                                echo '<div class="cardsFiltro shadow rounded" style="height: 10rem; margin: 2%;"><img class="rounded" src="'. $itemCima .'"></div>';
                                            }
                                            ?>
                                        </div>
                                        <h4>Baby Look</h4>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="submitFiltroCima" class="btn btn-primary">Salvar dados</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel -->
                    <div id="lookCimaCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner rounded shadow" style="overflow: hidden">
                            <div class="carousel-item active">
                                <div class="position-absolute container" style="bottom: 0; left: 0; background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0.6)) ; height: 30vh; padding-left: 5vh">
                                </div>
                                <a href="../pags/peca_individual.php" style="color: white">
                                    <h2 class="position-absolute font-weight-bold" style="bottom: 4%; left: 10%;">
                                        <sub style="font-size: small" class="nomeCima">BLUSA LEVE ROXA</sub> <br>
                                        <sup style="font-size: small">R$</sup>
                                        <span class="precoCima">49,90</span>
                                    </h2>
                                </a>
                                <img class="d-block w-100" src="../img/cima/lookCimaCarousel1.jpg">
                            </div>
                            <div class="carousel-item">
                                <div class="position-absolute container" style="bottom: 0; left: 0; background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0.6)) ; height: 30vh; padding-left: 5vh">
                                </div>
                                <a href="../pags/peca_individual.php" style="color: white">
                                    <h2 class="position-absolute font-weight-bold" style="bottom: 4%; left: 10%;">
                                        <sub style="font-size: small" class="nomeCima">BLUSA LEVE VERMELHA</sub> <br>
                                        <sup style="font-size: small">R$</sup>
                                        <span class="precoCima">89,90</span>
                                    </h2>
                                </a>
                                <img class="d-block w-100" src="../img/cima/lookCimaCarousel2.jpg">
                            </div>
                            <div class="carousel-item">
                                <div class="position-absolute container" style="bottom: 0; left: 0; background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0.6)) ; height: 30vh; padding-left: 5vh">
                                </div>
                                <a href="../pags/peca_individual.php" style="color: white">
                                    <h2 class="position-absolute font-weight-bold" style="bottom: 4%; left: 10%;">
                                        <sub style="font-size: small" class="nomeCima">BLUSA AZUL</sub> <br>
                                        <sup style="font-size: small">R$</sup>
                                        <span class="precoCima">39,90</span>
                                    </h2>
                                </a>
                                <img class="d-block w-100" src="../img/cima/lookCimaCarousel3.jpg">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#lookCimaCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#lookCimaCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- Button add carrinho -->
                <div class="container-fluid" align="center" style="margin: 0.3vh">
                    <button id="buttonCarrinhoLook" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Adicionar ao carrinho!" type="button" class="btn btn-danger rounded position-absolute" style="right: 0; z-index: 2; bottom: 46%;">
                        <sup class="font-weight-bold" style="font-size: small">R$</sup><h4 id="totalLook" class="d-inline font-weight-bold"></h4>
                    </button>
                </div>
                <!-- Baixo carousel -->
                <div id="lookEscolhaBaixo" class="container" style="width: 100%; height: auto;">
                    <!-- Engrenagem Baixo -->
                    <button type="button" class="btn btn-secondary rounded position-absolute" data-toggle="modal" data-target="#filtroBaixo" id="filtroCarouselBottom"><span class="h5">Filtrar</span></button>
                    <!-- Modal Baixo -->
                    <div class="modal fade bd-example-modal-lg" id="filtroBaixo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Selecione as peças inferiores</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div style="overflow-y: scroll">
                                        <h4>Jeans</h4>
                                        <div class="dropdown-divider"></div>
                                        <div class="d-flex" style="flex-flow: row wrap">
                                            <?php
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
                                            //Imprimindo divs
                                            foreach ($listaBaixo as $itemBaixo){
                                                echo '<div class="cardsFiltro shadow rounded" style="height: 10rem; margin: 2%;"><img class="rounded" src="'. $itemBaixo .'"></div>';
                                            }
                                            ?>
                                        </div>
                                        <h4>Tactel</h4>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Selecionar</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel -->
                    <div id="lookBaixoCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner rounded shadow" style="overflow: hidden">
                            <div class="carousel-item active">
                                <div class="position-absolute container" style="bottom: 0; left: 0; background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0.6)) ; height: 30vh; padding-left: 5vh">
                                </div>
                                <a href="../pags/peca_individual.php" style="color: white">
                                    <h2 class="position-absolute font-weight-bold" style="bottom: 4%; left: 10%;">
                                        <sub style="font-size: small" class="nomeBaixo">CALÇA JEANS</sub> <br>
                                        <sup style="font-size: small">R$</sup>
                                        <span class="precoBaixo">89,90</span>
                                    </h2>
                                </a>
                                <img class="d-block w-100" src="../img/baixo/lookBaixoCarousel1.jpg">
                            </div>
                            <div class="carousel-item">
                                <div class="position-absolute container" style="bottom: 0; left: 0; background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0.6)) ; height: 30vh; padding-left: 5vh">
                                </div>
                                <a href="../pags/peca_individual.php" style="color: white">
                                    <h2 class="position-absolute font-weight-bold" style="bottom: 4%; left: 10%;">
                                        <sub style="font-size: small" class="nomeBaixo">CALÇA JEANS BRANCA</sub> <br>
                                        <sup style="font-size: small">R$</sup>
                                        <span class="precoBaixo">35,00</span>
                                    </h2>
                                </a>
                                <img class="d-block w-100" src="../img/baixo/lookBaixoCarousel2.jpg">
                            </div>
                            <div class="carousel-item">
                                <div class="position-absolute container" style="bottom: 0; left: 0; background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0.6)) ; height: 30vh; padding-left: 5vh">
                                </div>
                                <a href="../pags/peca_individual.php" style="color: white">
                                    <h2 class="position-absolute font-weight-bold" style="bottom: 4%; left: 10%;">
                                        <sub style="font-size: small" class="nomeBaixo">CALÇA BOCA DE SINO</sub> <br>
                                        <sup style="font-size: small">R$</sup>
                                        <span class="precoBaixo">74,90</span>
                                    </h2>
                                </a>
                                <img class="d-block w-100" src="../img/baixo/lookBaixoCarousel3.jpg">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#lookBaixoCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#lookBaixoCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Carrinho -->
            <div class="col-sm-8">
                <div class="container-fluid rounded shadow h-100" style="max-width: 100%;background-color: #f2f2f2; padding-left: 3vh; padding-top: 2vh;">
                    <img class="d-inline" src="../icon/1x/cart-simple.png" style="height: 4vh; margin-top: -2vh">
                    <h1 class="d-inline-block" style="color: #ff2d39; margin-left: 1vh; font-size: 4vh" >CARRINHO</h1>
                    <div class="container-fluid" style="overflow-y: scroll; height: 45vh;" id="carrinho"></div>
                    <div style="padding: 5%">
                        <div class="container d-inline" style="margin-top: 4%;"><h4 class="d-inline font-weight-bold" style="margin-right: 1%">Total:</h4><h4 id="carrinhoTotal" class="font-weight-bold d-inline"></h4></div>
                        <button class="btn btn-danger font-weight-bold d-inline rounded float-right">Finalizar compra</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JQuery, Popper-JS, Bootstrap JS -->
    <script src="../js/jquery.js"></script>
    <script src="../js/popper-js.js"></script>
    <script src="../js/bootstrap.js"></script>

    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        });

        $('.carousel').carousel({
            interval: false
        });

        $(document).click(function (){
            setTimeout(function () {
                let valor1 = parseFloat($("div.active > a > h2 > span.precoCima").text().replace(',','.'));
                let valor2 = parseFloat($("div.active > a > h2 > span.precoBaixo").text().replace(',','.'));
                let total = (valor1 + valor2).toFixed(2);


                $("#totalLook").text(" " + total.replace('.',','));
            }, 600)
        });

        $(document).ready(function () {
            let valor1 = parseFloat($("div.active > a > h2 > span.precoCima").text().replace(',','.'));
            let valor2 = parseFloat($("div.active > a > h2 > span.precoBaixo").text().replace(',','.'));
            let total = (valor1 + valor2).toFixed(2);


            $("#totalLook").text(" " + total.replace('.',','));
        });

        $(".cardsFiltro").click( function () {
           $(this).toggleClass("selecionada");
        });

        let arrayDivs = [];
        let contador = 0;
        let total = 0;

        $("#buttonCarrinhoLook").click(function () {
            arrayDivs = ['<div class="container-fluid" style="margin-top: 4%;">' +
                '                <div class="d-inline">' +
                '                    <span class="font-weight-bold">'+ $("div.active > a > h2 > sub.nomeCima").text() +'</span><br>' +
                '                    <span class="font-weight-bold">'+ $("div.active > a > h2 > sub.nomeBaixo").text() +'</span>' +
                '                </div>' +
                '                <div class="d-inline" style="float: right; margin-top: -2%">' +
                '                    <h4 class="conjunto h4 font-weight-bold d-inline" id="precoConjunto'+ contador +'">'+ $("#totalLook").text() +'</h4>' +
                '                    <button type="button" class="btn btn-light rounded remover" id="removeCar'+ contador +'" style="margin-top: -2%;"><img style="width: 50%;" src="../icon/1x/cart-remove.png"></button>' +
                '                </div>' +
                '            </div>'];



            $("#carrinho").append(arrayDivs);

            total += parseFloat($('#precoConjunto'+contador).text().replace(',','.'));

            $('#carrinhoTotal').html("R$ "+total.toFixed(2).replace('.',','));

            contador++;

        });

        $(document).ready(function () {
            $('#carrinhoTotal').html("R$ "+total.toFixed(2).replace('.',','));
        });

        $(document).on("click", ".remover" ,function () {


            let id = $(this).attr('id');
            let  pos = parseInt(id.substr(9));

            total -= parseFloat($('#precoConjunto'+pos).text().replace(',','.'));

            $('#carrinhoTotal').html("R$ "+total.toFixed(2).replace('.',','));
            $(this).parent().parent().remove();

        });




    </script>
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