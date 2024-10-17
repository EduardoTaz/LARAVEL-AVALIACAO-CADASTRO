<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function criar(Request $request) {
        $produto = new Produto;
        $produto->nome = $request->nome; // nome é o que foi definido na migration
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;

        $produto->save();
        return redirect('/listar_produtos');
    }

    public function listar(Request $request) {
        $produtos = Produto::all();

        /*
        if ($produtos -> isEmpty()) {
            echo "Lista vazia, cadastre um novo produto";
        } else {
            return view("produtos", ["produtos"=>$produtos]);
        }
        */

        return view("produtos", ["produtos"=>$produtos]);
    }

    public function formCriarProduto() {
        return view("cadastro_produto");
    }

    public function formDeletarProduto($id) {
        $produto = new Produto; // instancia produto
        
        $produto -> find($id) -> delete(); // deleta o cadastro

        return redirect('/listar_produtos');
    }

    public function formEditarProduto($id) {
        $produto = Produto::find($id);

        return view("editar_produto", ["produto" => $produto]);

    }

    public function editar(Request $request) {
        Produto::where('id', $request->id) -> update([
            'nome' => $request -> nome,
            'descricao' => $request -> descricao,
            'preco' => $request -> preco
        ]);

        return redirect('/listar_produtos');
    }
}

