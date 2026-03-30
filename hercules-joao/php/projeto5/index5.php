<!--
Data: 27/03/2026
Autor: Hércules e João
Objetivo:

Exercício 5 - Somatório de Fatoriais
Leia 5 números inteiros e mostre a soma dos fatoriais desses números.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma de Fatoriais</title>
</head>
<body>
    <h2>Somatorio de Fatoriais do Hercules e Joao</h2>
    <p>Digite 5 numeros inteiros:</p>
    <form action="calcula5.php" method="POST">
        1º Número: <input type="number" name="n1" required><br><br>
        2º Número: <input type="number" name="n2" required><br><br>
        3º Número: <input type="number" name="n3" required><br><br>
        4º Número: <input type="number" name="n4" required><br><br>
        5º Número: <input type="number" name="n5" required><br><br>
        
        <button type="submit">Calcular Soma dos Fatoriais</button>
    </form>
</body>
</html>