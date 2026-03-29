<!--
Data: 29/03/2026
Autor: Gabriel Salerno Ambrosio/ Guilherme Moreira Zanato 2D
Objetivo: Domínio da linguagem PHP

Exercício 10 - Ano Bissexto
Leia um ano e informe se ele é bissexto.

Um ano é bissexto se:

É múltiplo de 400
ou
É múltiplo de 4 e não é múltiplo de 100
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ano Bissexto</h1>
    <form method="post">
        <label>Informe um ano: </label>
        <input type="number" name="n1" step="any" required>
        <br><br>
        <?php
        $n1 = $_POST["n1"];

        if( $n1 % 400 == 0 || $n1 % 4 == 0 && $n1 % 100 != 0){
            echo "$n1 é um ano Bissexto";
        }else{
            echo "$n1 não é um ano Bissexto";
        }
        ?>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>