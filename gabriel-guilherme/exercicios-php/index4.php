<!--
Data: 23/03/2026
Autor: Gabriel Salerno Ambrosio/ Guilherme Moreira Zanato
Objetivo: Domínio da linguagem PHP

Exercício 4 - Triângulo Númerico
Leia um número n e imprima n linhas no seguinte formato (exemplo para n = 6):

1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
1 2 3 4 5 6



-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Triângulo Númerico</h1>
    <form method="post">
        <label>Informe um Número: </label>
        <input type="number" name="n1" step="any" required>
        <br><br>
        <?php 
        $n1 = $_POST["n1"];

        $i = 1;
        while ($i <= $n1) {
            $j = 1;
            while ($j <= $i) {
                echo $j . " ";
                $j++;
            }
            echo "<br>";
            $i++;
        }
        
        ?>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>