<!--
Data: 27/03/2026
Autor: Hércules e João
Objetivo:

Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora do Hércules e João</title>
</head>
<body>
    <h1>Calculadora Aritmética</h1>
    <p>Insira os números e escolha a operação:</p>
    
    <form action="calcula3.php" method="POST">
        <input type="number" name="n1" step="any" placeholder="Primeiro número" required>
        
        <select name="op" required>
            <option value="" disabled selected>Operação</option>
            <option value="+">Soma (+)</option>
            <option value="-">Subtração (-)</option>
            <option value="*">Multiplicação (*)</option>
            <option value="/">Divisão (/)</option>
        </select>
        
        <input type="number" name="n2" step="any" placeholder="Segundo número" required>
        
        <br><br>
        <button type="submit">Calcular Agora</button>
        
        <button type="reset" style="background-color: #f0f0f0;">Limpar Campos</button>
    </form>
</body>
</html>s