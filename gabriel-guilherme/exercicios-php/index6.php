<!--
Data: 29/03/2026
Autor: Gabriel Salerno Ambrosio/ Guilherme Moreira Zanato 2D
Objetivo: Domínio da linguagem PHP

Exercício 6 - Série de Fibonacci
Leia um número n e mostre os n primeiros termos da sequência de Fibonacci.

Exemplo:
n = 12
Resultado:
0 1 1 2 3 5 8 13 21 34 55 89

-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Sequência de Fibonacci</h1>
    <form method="post">
        <label>Informe um Número: </label>
        <input type="number" name="n1" step="any" required>
        <br><br>
        <?php
        $n1 = $_POST["n1"];

        $a = 0;
        $b = 1;

        echo "<h3>Sequência: </h3>";

        if ($n1 == 1) {
            echo $a;
        } else {
            echo "$a, $b";

            for ($i = 2; $i < $n1; $i++) {
                $c = $a + $b;
                echo ", $c";
                $a = $b;
                $b = $c;
            }
        }
        ?>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>