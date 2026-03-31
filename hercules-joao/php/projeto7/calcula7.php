<!--
Data: 27/03/2026
Autor: Hércules e João
Objetivo:

Exercício 7 - Separar Positivos e Negativos
Leia 8 números inteiros e separe em dois vetores:

Um vetor com números positivos
Um vetor com números negativos

-->

<?php

$numeros = $_POST['numeros'] ?? [];
$positivos = [];
$negativos = [];

foreach ($numeros as $num) {
    if ($num >= 0) {
        $positivos[] = $num;
    } else {
        $negativos[] = $num;
    }
}

echo "<h3>Vetores Gerados:</h3>";

echo "<strong>Positivos:</strong> " . (count($positivos) > 0 ? implode(", ", $positivos) : "Nenhum") . "<br>";
echo "<strong>Negativos:</strong> " . (count($negativos) > 0 ? implode(", ", $negativos) : "Nenhum") . "<br>";

?>
<br>
<a href="index7.php">Voltar</a>