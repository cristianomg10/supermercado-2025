<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', [ProdutosController::class, 'show'])->name('produtos.show');
Route::get('/produtos/novo', [ProdutosController::class, 'novo'])->name('produtos.novo');
Route::post('/produtos/novo', [ProdutosController::class, 'inserir'])->name('produtos.inserir');

Route::get('/produtos/alterar/{id}', [ProdutosController::class, 'alterar'])->name('produtos.alterar');
Route::post('/produtos/alterar/{id}', [ProdutosController::class, 'editar'])->name('produtos.editar');


