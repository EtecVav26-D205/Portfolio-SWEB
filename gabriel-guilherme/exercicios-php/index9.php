<!--
Data: 29/03/2026
Autor: Gabriel Salerno Ambrosio/ Guilherme Moreira Zanato 2D
Objetivo: Domínio da linguagem PHP

Exercício 9 - Média Aritmética com Função
Crie uma função:

function media($v)

Que receba uma lista de números reais e retorne a média aritmética.
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Média Aritmética</h1>
    <form method="post">
        <label>Digite o 1º número:</label>
        <input type="number" name="n1" step="any" required><br><br>

        <label>Digite o 2º número:</label>
        <input type="number" name="n2" step="any" required><br><br>

        <label>Digite o 3º número:</label>
        <input type="number" name="n3" step="any" required><br><br>

        <label>Digite o 4º número:</label>
        <input type="number" name="n4" step="any" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    function media($v)
    {
        $soma = 0;

        foreach ($v as $num) {
            $soma += $num;
        }

        return $soma / count($v);
    }


    $valores = [
        $_POST["n1"],
        $_POST["n2"],
        $_POST["n3"],
        $_POST["n4"]
    ];

    $resultado = media($valores);

    echo "<h3>Média: $resultado</h3>";

    ?>
    <br><br>
    </form>
</body>

</html>