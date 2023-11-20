@extends('layout.app')

@section('title','Edit')

@section('content')
    <!-- Tudo aqui dentro será renderizado no template -->

    <div class="container mt-5">
        <h1>Editar</h1>
        <hr>

        <form action="{{ route('admin-update', ['id' => $quarto -> id]) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Número de Quartos:</label>
                    <input type="text" class="form-control" name="numero" value="{{ $quarto -> numero }}" placeholder="Atualizar N° de Quartos">
                </div>
                <br>
                <div class="form-group">
                    <label for="nome">Capacidade:</label>
                    <input type="number" class="form-control" name="capacidade" value="{{ $quarto -> capacidade }}" placeholder="Atualizar Capacidade">
                </div>
                <br>
                <div class="form-group">
                    <label for="nome">Preço Diaria:</label>
                    <input type="number" class="form-control" name="preco_diaria" value="{{ $quarto -> preco_diaria }}" placeholder="Atualizar Preço">
                </div>
                <br>
                <div class="form-group">
                    <label for="nome">Disponivel:</label>
                    <input class="form-check-input" type="checkbox" name="disponivel" value="1" {{ $quarto->disponivel ? 'checked' : '' }}>
                </div>
                <br>
               
                <div class="form-group">
                    <input type="submit" name="Atualizar" class="btn btn-success">
                </div>
            </div>
        </form>

    </div>

@endsection
