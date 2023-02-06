<?php

require 'banco/conexao.php';
require 'lib/funcs.php';

//função trim limpa os espaços excessivos...
$descricao = trim($_POST['descricao']);
$quantidade = trim($_POST['quantidade']);
$preco_compra = trim($_POST['preco_compra']);
$preco_venda = trim($_POST['preco_venda']);
$margem = trim($_POST['margem']);
$total = trim($_POST['total']);


//falta validar os campos nome fantasia, telefone e email
$erro = 0;
if(strlen($descricao) == '') $erro++;
/*if(strlen($razao_social) < 3) $erro++;
if(strlen($qnt_pdv) == 0 || !is_numeric($qnt_pdv)) $erro++;
*/
if ($erro > 0) {
    header('Location: index.php?pagina=pedido&erro=1');
    exit;
}

$con = conecta();
var_dump($con);

$insert = "INSERT INTO pedido"
        . "(descricao, quantidade, preco_compra, preco_venda, margem, total)"
        . "VALUES ('$descricao','$quantidade','$preco_compra', '$preco_venda', '$margem', '$total')";

$res = mysqli_query($con, $insert);
var_dump($res);
if ($res){
    header('Location: index.php?pagina=pedido&sucesso=1');
} else {
    echo 'err';
}