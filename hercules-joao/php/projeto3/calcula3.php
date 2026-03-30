<!--
Data: 27/03/2026
Autor: Hércules e João
Objetivo:

Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.
-->

<?php
$num1 = $_POST['n1'] ?? 0;
$num2 = $_POST['n2'] ?? 0;
$oper = $_POST['op'] ?? '';

if ($oper == "+") {
    $res = $num1 + $num2;
} elseif ($oper == "-") {
    $res = $num1 - $num2;
} elseif ($oper == "*") {
    $res = $num1 * $num2;
} elseif ($oper == "/") {
    if ($num2 == 0) {
        $res = "Poxa, não dá para dividir por zero!";
    } else {
        $res = $num1 / $num2;
    }
} else {
    $res = "Ops! Parece que você não escolheu uma operação válida.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cálculo</title>
</head>
<body>
    <h2>Aqui está o seu resultado!</h2>
    
    <p>
        Você calculou: <strong><?php echo "$num1 $oper $num2"; ?></strong>
    </p>
    
    <p>
        O resultado é: <span style="font-size: 1.2em; color: blue;"><strong><?php echo $res; ?></strong></span>
    </p>
    
    <hr>
    <p>O que deseja fazer agora?</p>
    <a href="index3.php">
        <button type="button">Refazer Nova Conta</button>
    </a>
</body>
</html>