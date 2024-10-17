<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/cadastro_usuario', [UserController::class, "formCriarUsuario"]); // endereco da url

Route::get('/listar_usuarios', [UserController::class, 'listar']);

Route::post('/criar_usuario', [UserController::class, 'criar']);

Route::delete('/deletar_usuario/{id}', [UserController::class, 'formDeletarUsuario']);

Route::get('/editar_usuario/{id}', [UserController::class, 'formEditarUsuario']);

Route::patch('/editar_usuario/{id}', [UserController::class, 'editar']);




Route::get('/cadastro_cliente', [ClienteController::class, "formCriarCliente"]); // endereco da url

Route::get('/listar_clientes', [ClienteController::class, 'listar']);

Route::post('/criar_cliente', [ClienteController::class, 'criar']);

Route::delete('/deletar_cliente/{id}', [ClienteController::class, 'formDeletarCliente']);

Route::get('/editar_cliente/{id}', [ClienteController::class, 'formEditarCliente']);

Route::patch('/editar_cliente/{id}', [ClienteController::class, 'editar']);




Route::get('/cadastro_vendedor', [VendedorController::class, "formCriarVendedor"]); // endereco da url

Route::get('/listar_vendedores', [VendedorController::class, 'listar']);

Route::post('/criar_vendedor', [VendedorController::class, 'criar']);

Route::delete('/deletar_vendedor/{id}', [VendedorController::class, 'formDeletarVendedor']);

Route::get('/editar_vendedor/{id}', [VendedorController::class, 'formEditarVendedor']);

Route::patch('/editar_vendedor/{id}', [VendedorController::class, 'editar']);






Route::get('/cadastro_produto', [ProdutoController::class, "formCriarProduto"]); // endereco da url

Route::get('/listar_produtos', [ProdutoController::class, 'listar']);

Route::post('/criar_produto', [ProdutoController::class, 'criar']);

Route::delete('/deletar_produto/{id}', [ProdutoController::class, 'formDeletarProduto']);

Route::get('/editar_produto/{id}', [ProdutoController::class, 'formEditarProduto']);

Route::patch('/editar_produto/{id}', [ProdutoController::class, 'editar']);







// App  
Route::get('/', [HomeController::class, 'telaInicial']);