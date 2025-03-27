<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    function show(){
        $produtos = Produto::all();

        return view('produtos_show', ['produtos' => $produtos]);
    }

    function novo(){
        return view('produtos_new');
    }

    function inserir(Request $req){
        $produto = new Produto();
        $produto->nome = $req->nome;
        $produto->preco = $req->preco;

        $produto->save();

        return redirect()->route('produtos.show');
    }

    function alterar($id){
        $produto = Produto::findOrFail($id);

        return view('produtos_edit', ['produto' => $produto]);
    }

    function editar(Request $req, $id){
        $produto = Produto::findOrFail($id);
        $produto->nome = $req->nome;
        $produto->preco = $req->preco;

        $produto->save();

        return redirect()->route('produtos.show');
    }

    function excluir($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos.show');
    }
}
