<!--
Data: 27/03/2026
Autor: Hércules e João
Objetivo:

Exercício 10 - Ano Bissexto
Leia um ano e informe se ele é bissexto.

Um ano é bissexto se:

É múltiplo de 400
ou
É múltiplo de 4 e não é múltiplo de 100

-->

<?php

$ano = filter_input(INPUT_POST, 'ano', FILTER_VALIDATE_INT);

if ($ano) {
    $bissexto = false;

    if (($ano % 400 == 0) || ($ano % 4 == 0 && $ano % 100 != 0)) {
        $bissexto = true;
    }

    if ($bissexto) {
        echo "<h3>O ano $ano é bissexto! 📅</h3>";
        echo "Isso significa que fevereiro tem 29 dias.";
    } else {
        echo "<h3>O ano $ano não é bissexto.</h3>";
        echo "Fevereiro tem os 28 dias de costume.";
    }
} else {
    echo "<h3>Por favor, insira um ano válido.</h3>";
}

?>
<br><br>
<a href="index10.php">Verificar outro ano</a>