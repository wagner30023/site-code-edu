
<?php

function rotas() {
    ini_set('display_errors', true);
    error_reporting(E_ALL | E_STRICT);

    $rota = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

    $path = explode("/", $rota['path']);

    $rotaValida = array("contato", "empresa", "produtos", "servicos");
    if (in_array($path, $rotaValida)) {
        return require_once(__DIR__ . '/src' . $path . '.php');
    } elseif ($path == "") {
        require_once(__DIR__ . 'src/home.php');
    } else {
        //require_once(__DIR__.'/404.php');
        return "Erro 404";
    }
}

rotas();
