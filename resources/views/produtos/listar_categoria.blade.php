<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/script.js') }}"></script>
</head>

<body>
    <div class="flex h-screen w-screen items-center justify-center bg-indigo-500">
      <div class="flex h-3/5 w-1/4 flex-col items-center rounded-lg bg-slate-200 p-8 font-sans">
        <h1 class="text-3xl">{{$categoria->nome}}</h1>
        <div class="mt-6 flex h-full w-full flex-col items-center">
          <h2 class="text-xl">Produtos</h2>
          <div class="w-full">
            <table class="border-1 w-full table-auto border-collapse border-slate-700">
              <thead>
                <tr class="bg-indigo-500">
                  <th class="border border-slate-700 text-center">Nome</th>
                  <th class="border border-slate-700 text-center">Valor</th>
                  <th class="border border-slate-700 text-center">Estoque</th>
                </tr>
              </thead>
              <tbody>
                @foreach($produtos as $produto)
                <tr class="even:bg-slate-400 odd:bg-slate-200">
                  <td class="border border-slate-700 text-center">{{$produto->nome}}</td>
                  <td class="border border-slate-700 text-center">{{$produto->valor}}</td>
                  <td class="border border-slate-700 text-center">{{$produto->estoque}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="flex h-full w-full justify-center">
          <button class="btn-secondary" onclick="goBack()">Voltar</button>
        </div>
      </div>
    </div>
  </body>
  

</html>
