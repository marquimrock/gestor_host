<?php

function rotas($pagina) {
    switch ($pagina) {
        case 'login':
            require 'paginas/login.php';
            break;
        case 'clientes':
            require 'paginas/clientes.php';
            break;
        case 'produtos':
            require 'paginas/produtos.php';
            break;
        case 'pedido':
            require 'paginas/pedido.php';
            break;
        case 'licencas':
            require 'paginas/licencas.php';
            break;
        case 'relatorio':
            require 'paginas/relatorio.php';
            break;
        case 'teste':
            require 'paginas/teste.php';
            break;
        default:
            require 'paginas/home.php';
    }
}

function active($pagina, $link = '') {
    if ($pagina == $link) {
        return 'class="active"';
    }
    return '';
}

function conecta() {
    return mysqli_connect(HOST, USER, PASS, BANCO);
}

function formata_reais($valor) {
    return 'R$ ' . number_format($valor, 2, ',', '.');
}

function formataCNPJ($valor) {
    $valor = trim($valor);
    $valor = str_replace(".", "", $valor);
    $valor = str_replace(",", "", $valor);
    $valor = str_replace("-", "", $valor);
    $valor = str_replace("/", "", $valor);
    $valor = str_replace("(", "", $valor);
    $valor = str_replace(")", "", $valor);
    return $valor;
}
