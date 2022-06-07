<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{asset('js/script.js')}}"></script>
    <title>Estoque</title>
</head>

<body>
    <div class="flex h-screen w-screen items-center justify-center bg-indigo-500">
        <div class="flex h-2/5 w-1/4 flex-col items-center rounded-lg bg-slate-200 p-8 font-sans">
            <h1 class="text-3xl">Estoque</h1>
            <div class="item mt-8 flex h-full w-full flex-col items-center">
                <a href="/categorias/"
                    class="w-4/6 border-b border-indigo-500 bg-white p-6 text-center transition duration-300 ease-out hover:bg-indigo-500">Categorias</a>
                <a href="/produtos/"
                    class="w-4/6 border-b border-indigo-500 bg-white p-6 text-center transition duration-300 ease-out hover:bg-indigo-500">Produtos</a>
        </div>
    </div>
</body>

</html>
