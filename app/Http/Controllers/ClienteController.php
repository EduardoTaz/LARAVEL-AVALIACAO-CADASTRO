<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function criar(Request $request) {
        $cliente = new Cliente;
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->email = $request->email;

        $cliente->save();
        return redirect('/listar_clientes');
    }

    public function listar() {
        $clientes = Cliente::all();

        return view("clientes", ["clientes"=>$clientes]);
    }

    public function formCriarCliente() {
        return view("cadastro_cliente");
    }

    public function formDeletarCliente($id) {
        $cliente = new Cliente; // instancia user
        
        $cliente -> find($id) -> delete(); // deleta o cadastro

        return redirect('/listar_clientes');
    }
}