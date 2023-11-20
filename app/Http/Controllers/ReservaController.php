<?php

namespace App\Http\Controllers;
use App\Models\Quarto;
use App\Models\Cliente;
use App\Models\Reserva;

use Illuminate\Http\Request;

class ReservaController extends Controller
{
    // Cadastrar um novo Cliente baseado no ID do quarto
    public function mostrarForm($id){

        $quartosDisponiveis = Quarto::where('disponivel', true)->get();
        $clientes = Cliente::all();
        $quarto = Quarto::find($id);

        return view('admin.mostrarForm', compact('quartosDisponiveis', 'clientes', 'quarto'));
    }

    public function registrar(Request $request)
    {
        // Cadastrar um novo Cliente
        $cliente = Cliente::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
        ]);

        // Criar uma nova Reserva
        $reserva = Reserva::create([
            'data_checkin' => $request->input('data_checkin'),
            'data_checkout' => $request->input('data_checkout'),
            'quarto_id' => $request->input('quarto_id'),
            'cliente_id' => $cliente->id,
        ]);

        // Fazer o Check-in
        $quarto = Quarto::find($request->input('quarto_id'));
        $quarto->update(['disponivel' => false]);
        
        return redirect()->route('admin-home')->with('success', 'Quarto reservado com sucesso!');
    }

    // Acessar o painel de Reservas
    public function painel(){
        $reservas = Reserva::all();
        return view('admin.painel', ['reserva' => $reservas]);
    }

    // Retorna os Registros feitos pelo Cliente
    public function ListaReservas($id){
        $clienteRegistro = Cliente::find($id);
        $reservasDoCliente = $clienteRegistro->reservas;

        return view('clientes.index', ['cliente' => $clienteRegistro, 'reservasDoCliente' => $reservasDoCliente]);
    }
    
    // Lista de Quartos Disponiveis
    public function QuartosDisponiveis(){
        $quartosDisponiveis = Quarto::where('disponivel', true)->get();
        return view('admin.quartoDisponivel', ['quartosDisponiveis' => $quartosDisponiveis]);
    }
    
}
