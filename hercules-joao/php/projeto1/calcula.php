<!--
Data: 27/03/2026
Autor: Hércules e João
Objetivo:

Exercício 1 - Intervalo entre 100 e 200
Faça um programa que receba um número e diga se este número está no intervalo entre 100 e 200.
-->

<?php

$nv = $_GET["nv"];

if($nv >= 100 && $nv <= 200){
    echo"O numero esta entre esses valores";
}else{
    echo"O numero nao esta entre esses valores";
}

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
<title> Verificado</title>

</head>

<body>

<a href="index.php">Voltar</a>

</body>

</html>
