<!--
Data: 27/03/2026
Autor: Hércules e João
Objetivo:

Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Transformar Temperatura</title>
</head>
<body>

  <h1>Transforme Celsius e Fahrenheit</h1>

  <form action="calcula2.php" method="get">
    <label>Diga qual a temperatura:</label>
    <input type="number" name="tm" step="any" required>
    <br><br>

    <label>Informe o tipo (C ou F):</label>
    <input type="text" name="tt" maxlength="1" required>
    <br><br>

    <input type="submit" value="Converter">
  </form>

</body>
</html>