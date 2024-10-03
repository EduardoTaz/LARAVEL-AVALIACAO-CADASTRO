<?php

namespace App\Http\Controllers;
use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function criar(Request $request) {
        $vendedor = new Vendedor;
        $vendedor->nome = $request->nome;
        $vendedor->matricula = $request->matricula;
        $vendedor->comissao = $request->comissao;

        $vendedor->save();
        return redirect('/listar_vendedores');
    }

    public function listar() {
        $vendedores = Vendedor::all();

        return view("vendedores", ["vendedores"=>$vendedores]);
    }

    public function formCriarVendedor() {
        return view("cadastro_vendedor");
    }

    public function formDeletarVendedor($id) {
        $vendedor = new Vendedor; // instancia vendedor
        
        $vendedor -> find($id) -> delete(); // deleta o cadastro

        return redirect('/listar_vendedores');
    }
}