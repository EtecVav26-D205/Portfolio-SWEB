<!--
Data: 27/03/2026
Autor: Hércules e João
Objetivo:

Exercício 7 - Separar Positivos e Negativos
Leia 8 números inteiros e separe em dois vetores:

Um vetor com números positivos
Um vetor com números negativos

-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Separador de Números</title>
</head>
<body>
    <h2>Exercício 7 - Positivos e Negativos</h2>
    <form action="calcula7.php" method="post">
        <?php for($i = 1; $i <= 8; $i++): ?>
            <label>Número <?php echo $i; ?>:</label>
            <input type="number" name="numeros[]" required><br><br>
        <?php endfor; ?>
        <button type="submit">Separar Vetores</button>
    </form>
</body>
</html>