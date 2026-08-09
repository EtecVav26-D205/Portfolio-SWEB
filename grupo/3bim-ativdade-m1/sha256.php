<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST["texto"];


    $sha256 = hash("sha256", $texto);
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

        <h1>Criptografia SHA-256</h1>

        <p>
            Esta página demonstra como funciona o método de criptografia SHA-256.
        </p>




        <div class="explicacao">

            <h2>SHA-256</h2>






            <div class="metodo">

                <h3>SHA-256</h3>

                <p>
                    O SHA-256 (Secure Hash Algorithm 256-bit) é uma função de hash
                    que transforma dados em um valor de 256 bits, normalmente
                    representado por 64 caracteres hexadecimais. Assim como o MD5,
                    o SHA-256 não foi desenvolvido para permitir a recuperação
                    do texto original.
                </p>

                <h4>Como funciona?</h4>

                <p>
                    O texto é processado por várias operações matemáticas e
                    criptográficas. Ao final, é produzido um hash de tamanho fixo.
                    Uma pequena alteração no texto de entrada normalmente resulta
                    em um hash completamente diferente.
                </p>

                <h4>Vantagens</h4>

                <ul>
                    <li>É significativamente mais seguro que o MD5.</li>
                    <li>É amplamente utilizado em aplicações de segurança.</li>
                    <li>Produz um hash de 256 bits.</li>
                </ul>

                <h4>Desvantagens</h4>

                <ul>
                    <li>Não pode ser usado para recuperar o texto original.</li>
                    <li>Por ser rápido, não é a melhor escolha para armazenar senhas.</li>
                    <li>Senhas devem utilizar funções específicas, como password_hash().</li>
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
                        <?php echo $sha256; ?>
                    </p>
                </div>

            <?php endif; ?>

            <h3><a href="index.php">Voltar ao Início</a></h3>
</body>

</html>
