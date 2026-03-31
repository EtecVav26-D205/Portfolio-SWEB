<!--
Data: 27/03/2026
Autor: Hércules e João
Objetivo:

Exercício 6 - Série de Fibonacci
Leia um número n e mostre os n primeiros termos da sequência de Fibonacci.
-->

<?php

$n = filter_input(INPUT_POST, 'n', FILTER_VALIDATE_INT);

if ($n <= 0) {
    echo "Por favor, insira um número maior que zero.";
    exit;
}

$anterior = 0;
$atual = 1;
$resultado = [];

for ($i = 0; $i < $n; $i++) {
    $resultado[] = $anterior;
    $proximo = $anterior + $atual;
    $anterior = $atual;
    $atual = $proximo;
}

echo "<h3>Resultado para n = $n:</h3>";
echo implode(" ", $resultado);

?>
<br><br>
<a href="index6.php">Voltar e tentar outro número</a>