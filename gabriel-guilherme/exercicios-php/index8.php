<!--
Data: 29/03/2026
Autor: Gabriel Salerno Ambrosio/ Guilherme Moreira Zanato 2D
Objetivo: Domínio da linguagem PHP

Exercício 8 - Soma de 0 até N com Função
Crie uma função soma(n) que receba um número inteiro e retorne a soma de 0 até esse número.
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Soma de 0 até N</h1>
    <form method="post">
        <label>Informe um número </label>
        <input type="number" name="n" step="any" required>
        <br><br>
        <?php
        function soma($n)
        {
            $i = 0;
            $s = 0;
            while ($i <= $n) {
                $s += $i;
                $i++;
            }
            return $s;
        }
        $n = $_POST["n"];
        $resultado = soma($n);
        echo "<h3>Soma: </h3> $resultado";
        ?>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>