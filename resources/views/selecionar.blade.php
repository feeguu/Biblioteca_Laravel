@php
$pagina_atual = URL::current();
$array = explode('/', $pagina_atual);
$endpoint = end($array);
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        redirect = () => {
            let id = document.querySelector("#id").value
            window.location.href = '/{{ $endpoint }}/' + id
        }

        function goBack() {
            window.location.href = "/"
        }
    </script>
</head>

<body>
    <div class="h-screen w-screen bg-indigo-500 flex items-center justify-center">
        <div class="h-2/5 w-1/4 bg-slate-200 rounded-lg p-8 flex items-center font-sans flex-col">
            <h1 class="text-3xl">Produtos</h1>
            <div class="flex flex-col mt-6 h-full w-full">
                <div class="w-full">
                    <span class="my-2 text-lg">ID</span>
                    <input type="text" name="id" id="id"
                        class="h-8 w-full rounded-sm border-b-2 border-indigo-500 bg-white">
                </div>
                <div class="flex justify-around">
                    <button class="btn-secondary" onclick="goBack()">Voltar</button>
                    <button class="btn-primary" onclick="redirect()">Avançar</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
