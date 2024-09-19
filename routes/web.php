<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro_cliente', [ClienteController::class, "formCriarCliente"]); // endereco da url

Route::get('/listar_clientes', [ClienteController::class, 'listar']);

Route::post('/criar_cliente', [ClienteController::class, 'criar']);


Route::get('/cadastro_vendedor', [VendedorController::class, "formCriarVendedor"]); // endereco da url

Route::get('/listar_vendedores', [VendedorController::class, 'listar']);

Route::post('/criar_vendedor', [VendedorController::class, 'criar']);



Route::get('/cadastro_produto', [ProdutoController::class, "formCriarProduto"]); // endereco da url

Route::get('/listar_produtos', [ProdutoController::class, 'listar']);

Route::post('/criar_produto', [ProdutoController::class, 'criar']);