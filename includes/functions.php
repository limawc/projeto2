<?php


function direcionaRota($param){


    $rotas = array("home", "empresa", "servicos", "produtos", "contato");

    if( in_array($param[1], $rotas)) {

        return require_once('includes/'.$param[1].'.php');

    } elseif ($param[1] == ""){

        return require_once('includes/home.php');

    } else {

        return "404";

    }
}