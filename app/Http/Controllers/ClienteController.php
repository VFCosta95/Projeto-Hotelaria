<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //CLIENTES - Painel para acessar Dados do Cliente
    public function index(){
        $clientes = Cliente::all();
        return view('clientes.index', ['cliente' => $clientes]);
    }

    //Edit - Página para editar os Dados do cliente
    public function edit($id){
        $clientes = Cliente::where('id', $id) -> first();
        if(!empty($clientes)){
            return view('clientes.edit', ['cliente' => $clientes]);
        }else{
            return redirect() -> route('clientes-index');
        }
    }

    //Update - Lógica para atualizar os dados do Cliente no Banco
    public function update(Request $request, $id){
        $data = [
            'nome' => $request ->input('nome'),
            'email' => $request ->input('email'),
            'telefone' => $request ->input('telefone')
        ];

        Cliente::where('id', $id) ->  update($data);
        return redirect() -> route('clientes-index');
    }

    //Delete - Deletar o Cliente
    public function destroy($id){
        Cliente::where('id', $id) -> delete();
        return redirect() -> route('clientes-index');
    }

}
