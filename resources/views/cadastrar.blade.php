<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    </style>
    <script>
        function goBack() {
            window.location.href = "/"
        }
    </script>
</head>

<body>
    <div class="h-screen w-screen bg-indigo-500 flex items-center justify-center">
        <div class="h-3/5 w-1/4 bg-slate-200 rounded-lg p-8 flex items-center font-sans flex-col">
            <h1 class="text-3xl">Produtos</h1>
            <form action="/cadastrar-produto" method="POST">
                @csrf
                <div class="flex flex-col mt-6 h-full">
                    <div>
                        <span class="my-2 text-lg">Nome</span>
                        <input type="text" name="nome"
                            class="h-8 w-full rounded-sm border-b-2 border-indigo-500 bg-white">
                        <span class="my-2 text-lg">Valor</span>
                        <input type="text" name="valor"
                            class="h-8 w-full rounded-sm border-b-2 border-indigo-500 bg-white">
                        <span class="my-2 text-lg">Estoque</span>
                        <input type="text" name="estoque"
                            class="h-8 w-full rounded-sm border-b-2 border-indigo-500 bg-white">
                    </div>
                    <div class="flex justify-around">
                        <button type="button" onclick="goBack()" class="btn-secondary">Voltar</button>
                        <button class="btn-primary">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
