<?php

$dados_url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$rota = explode('/', $dados_url['path']);

function rotas($param) {

    $rotasValidas = array("contato", "empresa", "produtos", "servicos");

    if (in_array($param[1], $rotasValidas)):
        return require_once('curso/'.$param[1].".php");
    elseif ($param[1] == ""):
        return require_once('curso/home.php');
    else:
        return "404";
    endif;
}

rotas($rota);