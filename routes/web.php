<?php

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

Route::get("/", function() {
    return view('inicio');
});

Route::get('/cadastrar-produto', function () {
    return view('cadastrar');
});

Route::post('/cadastrar-produto', function(Request $request) {
    Produto::create([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque,
    ]);

    return view('inicio');
});

Route::get('/listar-produto', function(){
    return view("selecionar");
});

Route::get('/listar-produto/{id}', function ($id) {
    $produto = Produto::find($id);
    if($produto){
        return view('listar', ['produto' => $produto]);
    }
    return view('inicio');
});

Route::get('/editar-produto', function(){
    return view("selecionar");
});

Route::get('/editar-produto/{id}', function ($id) {
    $produto = Produto::find($id);
    if($produto){
        return view('editar', ['produto' => $produto]);
    } else {
        return view('inicio');
    }
});

Route::post('/editar-produto/{id}', function(Request $request, $id) {
    $produto = Produto::find($id);
    $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque,
    ]);

    return view('inicio');
});

Route::get('/excluir-produto', function(){
    return view("selecionar");
});

Route::get('/excluir-produto/{id}', function ($id) {
    
    $produto = Produto::find($id);
    if($produto){
        $produto->delete();
        return view('inicio');
    } else {
        return view('inicio');
    }
});