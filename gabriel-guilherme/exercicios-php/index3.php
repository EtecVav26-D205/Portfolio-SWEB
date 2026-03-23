<!--
Data: 23/03/2026
Autor: Gabriel Salerno Ambrosio/ Guilherme Moreira Zanato
Objetivo: Domínio da linguagem PHP

Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.

-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora Aritmética</h1>
    <form method="post">
        <label>Primeiro Número: </label>
        <input type="number" name="n1" step="any" required>
        <br><br>
        <label>Segundo Número: </label>
        <input type="number" name="n2" step="any" required>
        <br><br>

        <label>Informe o Calculo(+ - / *): </label>
        <input type="text" name="s">
        <br><br>
        <?php 
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $s = $_POST["s"];

        if($s == "+"){
            $r = $n1 + $n2; 
            echo "$n1 + $n2 = $r";
        }else if($s == "-"){
            $r = $n1 - $n2;
            echo "$n1 - $n2 = $r";
        }else if($s == "*"){
            $r = $n1 * $n2;
            echo "$n1 * $n2 = $r";
        }else if($s == "/"){
            $r = $n1 / $n2; 
            echo "$n1 / $n2 = $r";
        }
        
        ?>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>