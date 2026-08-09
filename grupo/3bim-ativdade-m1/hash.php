<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST["texto"];


    $passwordHash = password_hash($texto, PASSWORD_DEFAULT);
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

        <h1>Criptografia Password Hash</h1>

        <p>
            Esta página demonstra como funciona o método de criptografia Password Hash.
        </p>


<h2>Password Hash</h2>


<div class="metodo">

    <h3>Password Hash</h3>

    <p>
        O <strong>password_hash()</strong> é uma função do PHP criada
        especificamente para proteger senhas. Diferente de simplesmente
        utilizar MD5 ou SHA-256, ele utiliza algoritmos próprios para
        armazenamento seguro de senhas e adiciona automaticamente
        informações necessárias para aumentar a segurança.
    </p>

    <h4>Como funciona?</h4>

    <p>
        Quando uma senha é enviada para a função password_hash(),
        o PHP gera um hash utilizando um algoritmo apropriado para
        senhas e adiciona um valor aleatório chamado salt.
        Para verificar a senha posteriormente, utiliza-se a função
        password_verify().
    </p>

    <h4>Vantagens</h4>

    <ul>
        <li>Foi desenvolvido especificamente para proteger senhas.</li>
        <li>Adiciona automaticamente um salt.</li>
        <li>O PHP gerencia os parâmetros necessários do algoritmo.</li>
        <li>É uma opção recomendada para armazenamento de senhas.</li>
    </ul>

    <h4>Desvantagens</h4>

    <ul>
        <li>O resultado é maior do que um hash MD5 ou SHA-256.</li>
        <li>O processo é propositalmente mais lento para dificultar ataques de força bruta.</li>
        <li>Não permite recuperar a senha original.</li>
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


                    <h3>SHA-256</h3>

                    <p>
                        <?php echo $passwordHash; ?>
                    </p>
                </div>

            <?php endif; ?>

            <h3><a href="index.php">Voltar ao Início</a></h3>
</body>

</html>
