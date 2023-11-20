@extends('layout.app')

@section('title','Create')

@section('content')
    <div class="container mt-5">
            <h1 style="text-align:center; padding:40px;">Painel de Clientes</h1>
    @csrf
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Reservas</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Criado</th>
                <th scope="col">Atualizado</th>
                <th scope="col">Editar / Deletar</th>
            </tr>
        </thead>

        <tbody>
            @foreach($cliente as $i)
            <tr>
                <td>{{ $i -> id }}</td>       
                <td>{{ $i -> nome }}</td>
                <td>
                    
                <div class="dropdown">
                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Ver Reservas</button>
                    <ul class="dropdown-menu">
                        <li><h5 class="dropdown-header">Quarto Reservados</h5></li>
                        
                            @foreach($i->reservas as $reserva)
                                    <li>Quarto ID: {{ $reserva->id }}</li>
                                    <li>Data Check-in: {{ $reserva->data_checkin }}</li>
                                    <li>Data Check-out: {{ $reserva->data_checkout }}</li>
                                    
                            @endforeach
                    </ul>
                </div>
                

                </td>
                <td>{{ $i -> email }}</td>
                <td>{{ $i -> telefone }}</td>
                <td>{{ $i -> created_at }}</td>
                <td>{{ $i -> updated_at }}</td>
                <th class="d-flex">
                    
                    <a href="{{ route('clientes-edit', ['id' => $i -> id]) }}" class="btn btn-primary me-5">
                        <img width="15" height="15" src="https://img.icons8.com/ios/50/edit--v1.png" alt="edit--v1"/>
                    </a>

                    <form action="{{ route('clientes-destroy', ['id' => $i -> id]) }}" method="post">
                    @csrf
                    @method('delete')
                        <button type="submit" class="btn btn-danger"> 
                            <img width="20" height="20" src="https://img.icons8.com/ios-glyphs/30/filled-trash.png" alt="filled-trash"/>
                        </button>
                    </form>
                </th>    
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection