<!--
Data: 27/03/2026
Autor: Hércules e João
Objetivo:

Exercício 8 - Soma de 0 até N com Função
Crie uma função soma(n) que receba um número inteiro e retorne a soma de 0 até esse número.
-->

<?php

function soma($n) {
    $total = 0;
    for ($i = 0; $i <= $n; $i++) {
        $total += $i;
    }
    return $total;
}

$valorN = filter_input(INPUT_POST, 'n', FILTER_VALIDATE_INT);

if ($valorN !== false && $valorN >= 0) {
    $resultado = soma($valorN);
    echo "<h3>O somatório de 0 até $valorN é: $resultado</h3>";
} else {
    echo "<h3>Por favor, insira um número inteiro positivo.</h3>";
}

?>
<br>
<a href="index8.php">Voltar</a>