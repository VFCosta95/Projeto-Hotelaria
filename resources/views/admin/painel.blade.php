@extends('layout.app')

@section('title','')

@section('content')

<div class="container mt-5">
        <div class="row">
            <h1>Painel de Reservas</h1>
        </div>
        <br><br>
@csrf
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Check-in</th>
            <th scope="col">Check-out</th>
            <th scope="col">ID do Quarto </th>
            <th scope="col">Nome Cliente</th>
            
        </tr>
    </thead>

    <tbody>
        @foreach($reserva as $i)
        <tr>
            <td>{{ $i -> id }}</td>       
            <td>{{ $i -> data_checkin }}</td>
            <td>{{ $i -> data_checkout }}</td>
            <td>{{ $i -> quarto_id }}</td>
            <td>{{ $i -> cliente -> nome }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection