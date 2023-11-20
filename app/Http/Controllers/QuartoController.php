<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quarto;
use App\Models\Reserva;

class QuartoController extends Controller
{
    //ADMIN

    // Pagina de Painel dos Quartos
    public function index(){
        $quartos = Quarto::all();
        return view('admin.index', ['quarto' => $quartos]);
    }
    
    // Create - Redirecionar a Página pra criar um novo Registro.
    public function create(){
        return view('admin.create');
    }

    // Stores - Salvar todos os Dados no Banco.
    public function stores(Request $request){
        Quarto::create($request -> all());
        return redirect()->route('admin-index');
    }

    // Edit - Editar o Registro atraves do ID.
    public function edit($id){
        $quartos = Quarto::where('id', $id) -> first();
        if(!empty($quartos)){
            return view('admin.edit', ['quarto' => $quartos]);
        }else{
            return redirect() -> route('admin-index');
        }
    }

    //Update - Atualizar os Registros.
    public function update(Request $request, $id){
        $data = [
            'numero' => $request ->input('numero', 0),
            'capacidade' => $request ->input('capacidade', 0),
            'preco_diaria' => $request ->input('preco_diaria', 0),
            'disponivel' => $request->has('disponivel')
            
        ];
        Quarto::where('id', $id) ->  update($data);
        return redirect() -> route('admin-index');
    }

    //Delete - Deletar todos os Registros.
    public function destroy($id){
        Quarto::where('id', $id) -> delete();
        return redirect() -> route('admin-index');
    }

    //Home - Mostrar todos os hoteis Cadastrados
    public function home(){
        $quartos = Quarto::all();
        return view('admin.home', ['quarto' => $quartos]);
    }

    //Detail - Acessar os Detalhes do quarto para Cadastrar
    public function detail($id){
        $quartos = Quarto::where('id', $id) -> first();
        return view('admin.detail', ['quarto' => $quartos]);
    }

    
}
