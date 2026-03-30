<!--
Data: 27/03/2026
Autor: Hércules e João
Objetivo:

Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.
-->

<?php
$tm = $_GET["tm"];
$tt = strtoupper($_GET["tt"]);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Transformação</title>
</head>
<body>

    <h1>Resultado da conversão</h1>

    <?php
    if ($tt == "C") {
        $rsC = ($tm * 1.8) + 32;
        echo "A conversão de $tm °C para Fahrenheit é " . number_format($rsC, 2) . "°F";

    } else if ($tt == "F") {
        $rsF = ($tm - 32) / 1.8;
        echo "A conversão de $tm °F para Celsius é " . number_format($rsF, 2) . "°C";
        
    } else {
        echo "Tipo de temperatura inválido. Use C ou F.";
    }
    ?>

    <br><br>
    <a href="index2.php">Voltar</a>

</body>
</html>