@php
    $pagina_atual = URL::current();
    $array = explode('/', $pagina_atual);
    $endpoint = end($array)
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
        redirect = () => {
            let id = document.querySelector("#id").value
            window.location.href = '/{{$endpoint}}/' + id
        }
    </script>
</head>
<body>
    <div class="flex h-screen w-screen items-center justify-center bg-indigo-500">
        <div class="flex h-2/5 w-1/2 flex-col items-center rounded-lg bg-slate-200 p-8 font-sans">
          <h1 class="text-3xl">Produtos</h1>
          <div class="mt-6 flex h-full flex-col">
            <div>
              <span class="my-2 text-lg">ID</span>
              <input type="text" class="h-8 w-full rounded-sm border-b-2 border-indigo-500 bg-white" id="id" value="" />
            </div>
            <button class="mt-16 bg-indigo-500 w-1/2 rounded-xl self-center self text-white" onclick="redirect()">Avançar</button>
          </div>
        </div>
      </div>
</body>
</html>