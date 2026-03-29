<!--
Data: 29/03/2026
Autor: Gabriel Salerno Ambrosio/ Guilherme Moreira Zanato 2D
Objetivo: Domínio da linguagem PHP

Exercício 7 - Separar Positivos e Negativos
Leia 8 números inteiros e separe em dois vetores:

Um vetor com números positivos
Um vetor com números negativos

-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Separar positivos e negativos</h1>
    <form method="post">
        <label>Informe o 1 Número: </label>
        <input type="number" name="n1" step="any" required>
        <br><br>
        <label>Informe o 2 Número: </label>
        <input type="number" name="n2" step="any" required>
        <br><br>
        <label>Informe o 3 Número: </label>
        <input type="number" name="n3" step="any" required>
        <br><br>
        <label>Informe o 4 Número: </label>
        <input type="number" name="n4" step="any" required>
        <br><br>
        <label>Informe o 5 Número: </label>
        <input type="number" name="n5" step="any" required>
        <br><br>
        <label>Informe o 6 Número: </label>
        <input type="number" name="n6" step="any" required>
        <br><br>
        <label>Informe o 7 Número: </label>
        <input type="number" name="n7" step="any" required>
        <br><br>
        <label>Informe o 8 Número: </label>
        <input type="number" name="n8" step="any" required>
        <br><br>

        <br><br>
        <input type="submit" value="Calcular">
        <?php
        $numeros = [
            $_POST["n1"],
            $_POST["n2"],
            $_POST["n3"],
            $_POST["n4"],
            $_POST["n5"],
            $_POST["n6"],
            $_POST["n7"],
            $_POST["n8"]
        ];

        $positivos = [];
        $negativos = [];

        foreach ($numeros as $num) {
            if ($num >= 0) {
                $positivos[] = $num;
            } else {
                $negativos[] = $num;
            }
        }

        echo " <h3>Positivos</h3><br>";
        foreach ($positivos as $num) {
            echo $num . " ";
        }
        echo " <h3>Negativos</h3><br>";
        foreach ($negativos as $num) {
            echo $num . " ";
        }
        ?>
    </form>
</body>

</html>