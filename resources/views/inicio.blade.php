<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #FFBBFF;
            width: 60%;
            height: 50vh;
            border-radius: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

    </style>

</head>

<body>
    <div class="container">
        <h1>Produtos</h1>
        <form action="/cadastrar-produto" method="POST">
            @csrf
            <label for="lblNome">
                Nome:
            </label>
            <input type="text" name="nome" id="">
            <br><br>
            <label for="lblValor">
                Valor:
            </label>
            <input type="text" name="valor" id="">
            <br><br>
            <label for="lblQuantidade">
                Quantidade:
            </label>
            <input type="text" name="estoque" id="">
            <br><br>
            <button>Cadastrar</button>
        </form>
    </div>
</body>

</html>