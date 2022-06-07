<?php

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::group(["prefix" => "produtos"], function () {
    Route::get("/", function () {
        return view('produtos/inicio');
    });

    Route::get('/cadastrar', function () {
        $categorias = Categoria::all();
        return view('produtos/cadastrar', compact('categorias'));
    });

    Route::post('/cadastrar', function (Request $request) {
        if ($request->nome && $request->valor && $request->estoque && $request->categoria) {
            Produto::create([
                'nome' => $request->nome,
                'valor' => $request->valor,
                'estoque' => $request->estoque,
                'categoria_id' => $request->categoria
            ]);
            return view('produtos/inicio');
        } else {
            echo "Dados inválidos";
        }
    });

    Route::get('/listar', function () {
        return view("produtos/selecionar");
    });

    Route::get('/listar/{id}', function ($id) {
        $produto = Produto::find($id);
        $categoria = Categoria::find($produto->categoria_id);
        if ($produto) {
            return view('produtos/listar', compact('produto', 'categoria'));
        }
        echo 'ID inválido';
    });

    Route::get('/listar_categoria/', function () {
        $categorias = Categoria::all();
        return view('produtos/selecionar_categoria', compact('categorias'));
    });

    Route::get('/listar_categoria/{categoria_id}', function ($categoria_id) {
        $categoria = Categoria::find($categoria_id);
        if ($categoria) {
            $produtos = $categoria->produtos;
            return view('produtos/listar_categoria', compact('categoria', 'produtos'));
        }
        echo 'ID inválido';
    });

    Route::get('/editar', function () {
        return view("produtos/selecionar");
    });

    Route::get('/editar/{id}', function ($id) {
        $produto = Produto::find($id);
        $categorias = Categoria::all();

        if ($produto) {
            return view('produtos/editar', compact('produto', 'categorias'));
        } else {
            echo 'ID inválido';
        }
    });

    Route::post('/editar/{id}', function (Request $request, $id) {
        $produto = Produto::find($id);
        $produto->update([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'estoque' => $request->estoque,
            'categoria_id' => $request->categoria
        ]);

        return view('produtos/inicio');
    });

    Route::get('/excluir', function () {
        return view("produtos/selecionar");
    });

    Route::get('/excluir/{id}', function ($id) {

        $produto = Produto::find($id);
        if ($produto) {
            $produto->delete();
            return view('produtos/inicio');
        } else {
            echo 'ID inválido';
        }
    });
});

Route::group(["prefix" => "categorias"], function () {
    Route::get('/', function () {
        return view('categorias/inicio');
    });

    Route::get('/cadastrar', function () {
        return view('categorias/cadastrar');
    });

    Route::post('/cadastrar', function(Request $request) {
        if($request->nome){
            $categoria = Categoria::create([
                'nome' => $request->nome,
            ]);
            return view('categorias/inicio');
        } else {
            echo "Dados inválidos";
        }
    });

    Route::get('/listar', function () {
        return view('categorias/selecionar');
    });

    Route::get('/listar/{id}', function ($id) {
        $categoria = Categoria::find($id);
        if($categoria){
            return view('categorias/listar', compact('categoria'));
        }
        echo 'ID inválido';
    });

    Route::get('/editar', function () {
        return view('categorias/selecionar');
    });

    Route::get('/editar/{id}', function ($id) {
        $categoria = Categoria::find($id);
        if($categoria){
            return view('categorias/editar', compact('categoria'));
        }
        echo 'ID inválido';
    });

    Route::post('/editar/{id}', function (Request $request, $id) {
        $categoria = Categoria::find($id);
        $categoria->update([
            'nome' => $request->nome,
        ]);

        return view('categorias/inicio');
    });

    Route::get('/excluir', function () {
        return view('categorias/selecionar');
    });

    Route::get('/excluir/{id}', function ($id) {
        $categoria = Categoria::find($id);
        if($categoria){
            $categoria->delete();
            return view('categorias/inicio');
        }
        echo 'ID inválido';
    });
});