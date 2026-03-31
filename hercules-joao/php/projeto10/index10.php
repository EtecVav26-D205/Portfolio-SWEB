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

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificador de Ano Bissexto</title>
</head>
<body>
    <h2>Exercício 10 - Ano Bissexto</h2>
    <form action="calcula10.php" method="post">
        <label>Informe o ano (ex: 2024):</label>
        <input type="number" name="ano" required>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>