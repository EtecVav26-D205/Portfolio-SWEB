<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST["texto"];


    $chave = "minha_chave_secreta";

    $textoCriptografado = openssl_encrypt(
        $texto,
        "AES-256-CBC",
        $chave,
        0,
        substr(hash("sha256", $chave), 0, 16)
    );

    $textoDescriptografado = openssl_decrypt(
        $textoCriptografado,
        "AES-256-CBC",
        $chave,
        0,
        substr(hash("sha256", $chave), 0, 16)
    );
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

        <h1>Criptografia OpenSSL</h1>

        <p>
            Esta página demonstra como funciona o método de criptografia OpenSSL.
        </p>


        <h2>OpenSSL</h2>


        <div class="metodo">

            <h3>OpenSSL</h3>

            <p>
                O OpenSSL é uma biblioteca que permite utilizar diversos
                algoritmos de criptografia no PHP. Diferentemente das funções
                de hash, como MD5 e SHA-256, a criptografia realizada com
                OpenSSL pode ser revertida quando se possui a chave correta.
            </p>

            <h4>Como funciona?</h4>

            <p>
                O texto original é combinado com uma chave secreta e processado
                por um algoritmo de criptografia, como o AES. O resultado é um
                texto criptografado. Para recuperar o conteúdo original, é
                necessário utilizar a chave correta através da descriptografia.
            </p>

            <h4>Vantagens</h4>

            <ul>
                <li>Permite criptografar e descriptografar dados.</li>
                <li>Suporta algoritmos modernos de criptografia.</li>
                <li>Pode ser utilizado para proteger informações confidenciais.</li>
                <li>É integrado ao PHP através da extensão OpenSSL.</li>
            </ul>

            <h4>Desvantagens</h4>

            <ul>
                <li>A segurança depende da proteção da chave.</li>
                <li>Uma chave exposta pode comprometer os dados.</li>
                <li>É necessário configurar corretamente o algoritmo e seus parâmetros.</li>
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


                <h3>OpenSSL - Texto criptografado</h3>

                <p>
                    <?php echo $textoCriptografado; ?>
                </p>


                <h3>OpenSSL - Texto descriptografado</h3>

                <p>
                    <?php echo $textoDescriptografado; ?>
                </p>
            </div>

        <?php endif; ?>

        <h3><a href="index.php">Voltar ao Início</a></h3>
</body>

</html>

