<!--
Data: 10/03/2026
Autor: Gabriel Salerno Ambrosio/ Guilherme Moreira Zanato
Objetivo: Domínio da linguagem PHP

Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conversão de Temperatura</h1>
    <form method="get">
        <label>Informe a temperatura: </label>
        <input type="number" name="t" step="any" required>
        <br><br>

        <label>Celsius(C) ou Fahrenheit(F): </label>
        <input type="text" name="n">
        <br><br>
        <?php 
        $t = $_GET["t"];
        $n = $_GET["n"];

        if($n == "C"){
            $r = $t*1.8+32;
            echo "$t Celsius em Fahrenheit é igual a : $r Fahrenheit";
        }else if($n == "F"){
            $r = 5/9*($t - 32);
            echo "$t Fahrenheit em Celsius é igual a : $r Celsius";
        }
        
        ?>
        <br><br>
        <input type="submit" value="Converter">
    </form>
</body>
</html>