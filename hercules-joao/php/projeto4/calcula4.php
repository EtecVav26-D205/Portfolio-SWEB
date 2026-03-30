<!--
Data: 27/03/2026
Autor: Hércules e João
Objetivo:

Exercício 4 - Triângulo Numérico
Leia um número n e imprima n linhas no seguinte formato (exemplo para n = 6):
-->

<?php
$n = $_POST['numero_n'];

if ($n <= 0) {
    echo "Coloca um numero maior que zero ai!";
} else {
    echo "<h3>Aqui esta o seu triangulo:</h3>";
    
    // Usando o for pra fazer as linhas
    for ($i = 1; $i <= $n; $i++) {
        
        // E outro for pra colocar os numeros na linha
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        
        // Pula a linha no navegador
        echo "<br>";
    }
}

echo "<br><hr>";
echo "<a href='index4.php'>Tentar outro numero</a>";
?>