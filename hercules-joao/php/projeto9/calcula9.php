<!--
Data: 27/03/2026
Autor: Hércules e João
Objetivo:

Exercício 9 - Média Aritmética com Função
Crie uma função:

function media($v)

Que receba uma lista de números reais e retorne a média aritmética.


-->

<?php

function media($v) {
    if (count($v) === 0) {
        return 0;
    }
    
    $soma = array_sum($v);
    $quantidade = count($v);
    
    return $soma / $quantidade;
}

$input = $_POST['lista'] ?? '';

$numerosString = explode(',', $input);
$vetorNumeros = [];

foreach ($numerosString as $valor) {
    $limpo = trim($valor);
    if (is_numeric($limpo)) {
        $vetorNumeros[] = (float)$limpo;
    }
}

if (count($vetorNumeros) > 0) {
    $resultado = media($vetorNumeros);
    echo "<h3>Números processados: " . implode(", ", $vetorNumeros) . "</h3>";
    echo "<h3>A média aritmética é: " . number_format($resultado, 2, ',', '.') . "</h3>";
} else {
    echo "<h3>Nenhum número válido foi encontrado.</h3>";
}

?>
<br>
<a href="index9.php">Voltar</a>