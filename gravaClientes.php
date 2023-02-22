<?php

require 'banco/conexao.php';
require 'lib/funcs.php';

//função trim limpa os espaços excessivos...

$cnpj = formataCNPJ($_POST['cnpj']);
$ie = formataCNPJ($_POST['ie']);
$razao_social = trim($_POST['razao_social']);
$fantasia = trim($_POST['fantasia']);
$cidade = trim($_POST['cidade']);
$telefone = formataCNPJ($_POST['telefone']);
$email = trim($_POST['email']);


//falta validar os campos nome fantasia, telefone e email
$erro = 0;
/*
if(strlen($cnpj) < 14 || !is_numeric($cnpj)) $erro++;
if(strlen($razao_social) < 3) $erro++;
if(strlen($qnt_pdv) == 0 || !is_numeric($qnt_pdv)) $erro++;
*/
if ($erro > 0) {
    header('Location: index.php?pagina=clientes&erro=1');
    exit;
}


$con = conecta();

$insert = "INSERT INTO clientes"
        . "(cnpj, ie, razao_social, fantasia, cidade, telefone, email)"
        . "VALUES ('$cnpj','$ie','$razao_social', '$fantasia', '$cidade','$telefone', '$email')";

$res = mysqli_query($con, $insert);

if ($res){
    header('Location: index.php?pagina=clientes&sucesso=1');
}