<!--
Data: 26/03/2026
Autor: Gabriel Salerno Ambrosio/ Guilherme Moreira Zanato 2D
Objetivo: Domínio da linguagem PHP

Exercício 5 - Somatório de Fatoriais
Leia 5 números inteiros e mostre a soma dos fatoriais desses números.



-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Soma de fatoriais</h1>
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
        <?php
        function fatorial($n)
        {
            $fat = 1;
            for ($i = 1; $i <= $n; $i++) {
                $fat *= $i;
            }
            return $fat;
        }


        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];
        $n4 = $_POST["n4"];
        $n5 = $_POST["n5"];

        $soma = fatorial($n1) + fatorial($n2) + fatorial($n3) + fatorial($n4) + fatorial($n5);

        echo "<h3>Resultado: $soma</h3>";
        ?>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>