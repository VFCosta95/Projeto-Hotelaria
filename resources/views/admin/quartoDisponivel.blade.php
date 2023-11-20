@extends('layout.app')

@section('title','')

@section('content')

@csrf
@method('get')

    <h1 style="text-align:center; margin:40px 0px; text-transform: uppercase;">Quartos Disponiveis</h1>

    <section class="row" style="display:flex; justify-content:center;">

    @foreach($quartosDisponiveis as $i)
    <div class="col-md-4"style="border: solid 2px; width: 300px; text-align:center; margin:20px 50px; border-radius:18px;"><br>
            <div> <h3>Quarto {{ $i -> id }}</h3></div><br>
            <div> N° de Quartos: <strong>{{ $i -> numero }}</strong></div>
            <div> Capacidade: <strong>{{ $i -> capacidade }}</strong></div>
            <div> Disponivel: <strong>{{ $i -> disponivel }}</strong></div>
            <br>

            @if($i->disponivel == 'Sim')
                <div><a href="{{ route('admin-detail', ['id' => $i->id]) }}" class="btn btn-success">Acessar</a></div>
            @endif
            <br>
    </div>
    
    @endforeach

    </section>

@endsection


    