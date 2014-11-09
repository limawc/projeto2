<!DOCTYPE html>

<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>1º projeto do Curso Trilhando Caminho PHP</title>

        <link href="css/estilo.css" rel="stylesheet" type="text/css" />

        <!--bootstrap css-->

        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

        <!--HTML5 compatível IE8-->

        <!--[if anterior ao IE9]-->
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <!--[endif]-->

        <style type="text/css">
            .container{
                max-width: 100%;
            }

            .row{
                margin-bottom: 20px;

            }

        </style>

    </head>

    <body>

    <?php

    $rotas = array(

                "/" => "home.php",
                "/index" => "home.php",
                "/index.php" => "home.php",
                "/home" => "home.php",
                "/home.php" => "home.php",
                "/empresa" => "empresa.php",
                "/empresa.php" => "empresa.php",
                "/produtos" => "produtos.php",
                "/produtos.php" => "produtos.php",
                "/servicos" => "servicos.php",
                "/servicos.php" => "servicos.php",
                "/contato" => "contato.php",
                "/contato.php" => "contato.php"

    );

    $url_origem = $_SERVER['REQUEST_URI'];

    foreach($rotas as $key => $value) {

        if($url_origem == $key) {

            $v = $value;

        }

    }

    if(isset($v)) {

        header("Location: index.php?arquivo=$v");

    } else {

        require_once("error404.php");

    }

    ?>

