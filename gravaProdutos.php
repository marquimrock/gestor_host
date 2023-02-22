<?php

require 'banco/conexao.php';
require 'lib/funcs.php';

//função trim limpa os espaços excessivos...

$codigo = formataCNPJ($_POST['cnpj']);
$descricao = trim($_POST['descricao']);
$preco_compra = trim($_POST['preco_compra']);
$margem = trim($_POST['margem']);
$preco_venda = trim($_POST['preco_venda']);
$fornecedor = ($_POST['fornecedor']);


//falta validar os campos nome fantasia, telefone e email
$erro = 0;
if(strlen($descricao) == "" ) $erro++;
if(strlen($preco_compra) == "" ) $erro++;
if(strlen($preco_venda) == "" ) $erro++;
if(strlen($margem) == "" ) $erro++;
if(strlen($fornecedor) == "" ) $erro++;
/*
if(strlen($razao_social) < 3) $erro++;
if(strlen($qnt_pdv) == 0 || !is_numeric($qnt_pdv)) $erro++;
*/
if ($erro > 0) {
    header('Location: index.php?pagina=produtos&erro=1');
    exit;
}


$con = conecta();

$insert = "INSERT INTO produtos"
        . "(codigo, descricao, preco_compra, margem, preco_venda, fornecedor)"
        . "VALUES ('$codigo','$descricao','$preco_compra', '$margem', '$preco_venda','$fornecedor')";

$res = mysqli_query($con, $insert);

if ($res){
    header('Location: index.php?pagina=produtos&sucesso=1');
}