@extends('layout.app')

@section('title','')

@section('content')

<form action="{{ route('registrar-mostrarForm', ['id' => $quarto -> id]) }}" method="post">
@csrf
@method('get')

    <h1 style="text-align:center; padding: 30px 0px;">Reserva</h1>

    <section style="width:800px; border:solid 5px; display:flex; justify-content:center; margin:20px 25%; border-radius:5px;">
        <div style="font-size:26px; text-align:center; padding:40px 0px;">
            <h1>Quarto {{$quarto -> id}}</h1>
            <hr>
            <p>N° de Quartos: {{$quarto -> numero}}</p>
            <p>Capacidade: {{$quarto -> capacidade}} Pessoas</p>
            <p>Preço Diaria: R$ {{$quarto -> preco_diaria}}</p>

            <input type="submit" name="Reservar" class="btn btn-success" value="Reservar">
        </div>
    </section>

</form>

@endsection