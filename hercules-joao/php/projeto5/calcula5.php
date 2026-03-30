<!--
Data: 27/03/2026
Autor: Hércules e João
Objetivo:

Exercício 5 - Somatório de Fatoriais
Leia 5 números inteiros e mostre a soma dos fatoriais desses números.
-->

<?php
$numeros = [
    $_POST['n1'], 
    $_POST['n2'], 
    $_POST['n3'], 
    $_POST['n4'], 
    $_POST['n5']
];

$somaTotal = 0;

echo "<h3>Resultados:</h3>";

foreach ($numeros as $num) {
    $fatorial = 1;
    
    // Se o numero for negativo nao da pra fazer fatorial normal
    if ($num < 0) {
        echo "O numero $num é negativo, entao vamos pular ele.<br>";
        continue;
    }

    // Fazendo a conta do fatorial
    for ($i = $num; $i >= 1; $i--) {
        $fatorial = $fatorial * $i;
    }

    echo "Fatorial de $num é: $fatorial <br>";
    $somaTotal = $somaTotal + $fatorial;
}

echo "<br><strong>A soma de todos os fatoriais deu: $somaTotal</strong>";
echo "<br><br><hr>";
echo "<a href='index5.php'>Voltar e digitar outros</a>";
?>