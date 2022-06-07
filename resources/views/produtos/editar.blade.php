<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{asset('js/script.js')}}"></script>


</head>

<body>
    <div class="h-screen w-screen bg-indigo-500 flex items-center justify-center">
        <div class="h-3/5 w-1/4 bg-slate-200 rounded-lg p-8 flex items-center font-sans flex-col">
            <h1 class="text-3xl">Produtos</h1>
            <form action="/produtos/editar/{{ $produto->id }}" method="POST">
                @csrf
                <div class="flex flex-col mt-6 h-full">
                    <div>
                        <span class="my-2 text-lg">Nome</span>
                        <input type="text" name="nome"
                            class="h-8 w-full rounded-sm border-b-2 border-indigo-500 bg-white"
                            value="{{ $produto->nome }}">
                        <span class="my-2 text-lg">Valor</span>
                        <input type="text" name="valor"
                            class="h-8 w-full rounded-sm border-b-2 border-indigo-500 bg-white"
                            value="{{ $produto->valor }}">
                        <span class="my-2 text-lg">Estoque</span>
                        <input type="text" name="estoque"
                            class="h-8 w-full rounded-sm border-b-2 border-indigo-500 bg-white"
                            value="{{ $produto->estoque }}">
                        <span class="my-2 text-lg">Categoria</span>
                        <select name="categoria"
                            class="h-8 w-full rounded-sm border-b-2 border-indigo-500 bg-white">
                            @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}"
                                {{ $categoria->id == $produto->categoria_id ? 'selected' : '' }}>
                                {{ $categoria->nome }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex justify-around">
                        <button type="button" onclick="goBack()" class="btn-secondary">Voltar</button>
                        <button type="submit" class="btn-primary">Editar</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
</body>

</html>
