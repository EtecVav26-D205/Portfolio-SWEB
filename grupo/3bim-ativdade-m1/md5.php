<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $texto = $_POST["texto"];

    $md5 = md5($texto);
}
    ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Criptografia no PHP</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            margin-top: 15px;
            padding: 12px 25px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        .resultado {
            margin-top: 25px;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 8px;
        }

        .resultado h2 {
            margin-top: 0;
        }

        .resultado p {
            word-break: break-all;
        }

        .explicacao {
            margin-top: 30px;
        }

        .metodo {
            margin-top: 20px;
            padding: 15px;
            border-left: 5px solid #333;
            background-color: #fafafa;
        }
        a {
            color: inherit; 
            text-decoration: none; 
        }

    </style>

</head>

<body>

<div class="container">

    <h1>Criptografia MD5</h1>

    <p>
        Esta página demonstra como funciona o método de criptografia MD5.
    </p>




    <div class="explicacao">

        <h2>MD5</h2>




            
<div class="metodo">

    <h3>MD5</h3>

    <p>
        O MD5 (Message-Digest Algorithm 5) é uma função de hash
        que transforma um texto de qualquer tamanho em uma sequência
        fixa de 32 caracteres. O processo é de mão única, portanto,
        o resultado não deve ser utilizado para recuperar o texto original.
    </p>

    <h4>Como funciona?</h4>

    <p>
        O texto informado passa por diversas operações matemáticas
        e é transformado em um valor hexadecimal de 128 bits.
        Mesmo uma pequena alteração no texto gera um resultado diferente.
    </p>

    <h4>Vantagens</h4>

    <ul>
        <li>É rápido para calcular.</li>
        <li>É simples de implementar no PHP.</li>
        <li>Produz um resultado de tamanho fixo.</li>
    </ul>

    <h4>Desvantagens</h4>

    <ul>
        <li>É considerado inseguro para aplicações modernas.</li>
        <li>Possui vulnerabilidades conhecidas.</li>
        <li>Não deve ser utilizado para armazenar senhas.</li>
    </ul>

</div>


    <form method="POST">

        <label>
            <h2>Digite um texto:</h2>
        </label>

        <br><br>

        <textarea name="texto" required><?php
            if (isset($texto)) {
                echo htmlspecialchars($texto);
            }
        ?></textarea>

        <br>

        <button type="submit">
            Processar texto
        </button>

    </form>
 <?php if (isset($texto)): ?>

        <div class="resultado">

            <h2>Resultados</h2>
            <h3>Texto original</h3>

            <p>
                <?php echo htmlspecialchars($texto); ?>
            </p>


            <h3>MD5</h3>

            <p>
                <?php echo $md5; ?>
            </p>
                    </div>

    <?php endif; ?>

    <h3><a href="index.php">Voltar ao Início</a></h3>
</body>

</html>

