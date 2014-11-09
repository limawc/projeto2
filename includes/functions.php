<?php


function direcionaRota(){

    $rotas = array( '/'=> 'index.php?home.php',
                    'home'=> 'index.php?home.php',
                    'empresa'=> 'index.php?empresa.php',
                    'produtos'=> 'index.php?produtos.php',
                    'servicos'=> 'index.php?servicos.php',
                    'contato'=> 'index.php?contato.php'
    );

    $url_digitada = $_SERVER['REQUEST_URI'];

    foreach($rotas as $k => $v){

        if ($url_digitada == $k){

            header("Location: $v");

        } else {

            header("Location: 404.php");
        }

    }

}