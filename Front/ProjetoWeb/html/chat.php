<!DOCTYPE html>
<html lang="pt-br">

<head>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <!--controlar as ações do browser a respeito do formato de codificação de caracteres utilizado-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Define em qual versão do Internet Explorer a página deve ser renderizada, evitando falhas devido ao html5.-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--define o nível de zoom inicial.-->
  <meta name="description" content="Autonomos"> <!--descreve o conteúdo de uma página da web. Os mecanismos de pesquisa mostram isso nos resultados da pesquisa quando a meta descrição também inclui as palavras-chave pesquisadas. -->
  <meta name="keywords" content="ContaComigo"> <!--palavras-chave-->
  <meta name="author" content="Conta Comigo!"> <!--autor-->
  <link rel="manifest" href="manifest.json"> <!--indica que o recurso de destino é um manifesto de aplicativo Web-->
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" /> <!--icone da página-->
  <title>Chat!</title>
  <link rel="apple-touch-icon" href="assets/images/favicon.png"> <!--icone da página para app apple-->
  <meta name="theme-color" content="#ff4c3b" /> <!--tema de cor-->
  <meta name="apple-mobile-web-app-capable" content="yes"> <!-- -->
  <meta name="apple-mobile-web-app-status-bar-style" content="black"> <!-- -->
  <meta name="apple-mobile-web-app-title" content="Conta Comigo!"> <!-- -->
  <meta name="msapplication-TileImage" content="assets/images/favicon.png"> <!-- -->
  <meta name="msapplication-TileColor" content="#FFFFFF"> <!-- -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- -->
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- bootstrap css -->
    <link rel="stylesheet" id="rtl-link" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">

    <!-- iconly css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/iconly.css">

    <!-- Theme css -->
    <link rel="stylesheet" id="change-link" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- loader strat -->
    <div class="loader">
        <span></span>
        <span></span>
    </div>
    <!-- loader end -->


    <!-- header start -->
    <header>
        <div class="back-links">
            <a href="index.php">
                <i class="iconly-Arrow-Left icli"></i>
                <div class="content">
                    <h2>Chat</h2>
                </div>
            </a>
        </div>
    </header>
    <!-- header end -->
    <section class="panel-space">

    </section>
    <section class="panel-space">

    </section>
    <section class="panel-space">

    </section>
    <section class="panel-space">

    </section>
    <section class="panel-space">

    </section>
    <section class="panel-space">

    </section>
    
    <div class="search-panel w-back pt-3 px-15">
        <div class="search-bar">
            <input class="form-control form-theme" placeholder="">
        </div>
        <a href="#" class="btn btn-solid"><i class="iconly-Send icli Send-icon"></i></a>
    </div>

    <!-- panel space start -->
    <section class="panel-space"></section>
    <!-- panel space end -->

    <!-- importa o menu -->
    <?php include "menupages.php" ?>


    <!-- latest jquery-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Slick js-->
    <script src="assets/js/slick.js"></script>

    <!-- script js -->
    <script src="assets/js/script.js"></script>

</body>

</html>
