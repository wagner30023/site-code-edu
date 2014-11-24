<?php

$dadosRota = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
$rota = explode("/", $dadosRota['path']);


function RedrectIndex($param) {

    $rotas_validas = array("home", "contato", "produtos", "empresa", "servicos");

    if (in_array($param, $rotas_validas)):
        return require_once('curso/'.$param."php");
    elseif ($param == "" || (!($param))):
        return require_once('curso/index.php');
    else:
         return "Erro 404";
    endif;
}

RedrectIndex($rota);

