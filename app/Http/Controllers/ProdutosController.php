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
}
