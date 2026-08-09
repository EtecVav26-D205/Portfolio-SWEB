

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
            transistion:transform 0.4s ease-in-out;
        }
        .metodo:hover{
            transform: scale(1.03);
        }
        a {
            color: inherit; 
            text-decoration: none; 
        }

    </style>

</head>

<body>

<div class="container">

    <h1>Criptografia no PHP</h1>

    <p>
        Esta página demonstra alguns dos recursos de
        criptografia e hash disponíveis na linguagem PHP.
    </p>




    <div class="explicacao">

        <h2>Explicação dos métodos <br> (clique em algum método para prosseguir) </h2>


        <a href="md5.php"><div class="metodo">

            <h3>MD5</h3>

            <p>
                MD5 é uma função hash que transforma um texto
                em uma sequência de caracteres.
            </p>

        </div></a>


        <a href="sha256.php"><div class="metodo">

            <h3>SHA-256</h3>

            <p>
                SHA-256 é uma função hash que produz um resultado
                de 256 bits.
            </p>

        </div></a>


        <div class="metodo">

            <a href="hash.php"><h3>Password Hash</h3>

            <p>
                A função password_hash() é própria para armazenar
                senhas de forma segura. O PHP cria automaticamente
                um salt e utiliza um algoritmo apropriado para
                senhas.
            </p>

        </div></a>


        <div class="metodo">

            <a href="openssl.php"><h3>OpenSSL</h3>

            <p>
                O OpenSSL permite realizar criptografia e
                descriptografia. 
            </p>

        </div>

    </div></a>

</div>

</body>

</html>
```
