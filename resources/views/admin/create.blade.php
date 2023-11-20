@extends('layout.app')

@section('title', 'create')

@section('content')
<!--Codigo Aqui-->

    <div class="container mt-5">
        <h1>Nova Postagem</h1>
        <hr>

        <form action="{{ route('admin-stores') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="form-group">
                
                <div class="form-group">
                    <label for="nome">Número de Quartos:</label>
                    <input type="text" class="form-control" name="numero" placeholder="">
                </div>
                <br>

                <div class="form-group">
                    <label for="nome">Capacidade:</label>
                    <input type="number" class="form-control" name="capacidade" placeholder="">
                </div>
                <br>

                <div class="form-group">
                    <label for="nome">Preço Diaria:</label>
                    <input type="number" class="form-control-file" name="preco_diaria" step="any" min="0">
                </div>
                <br>

                <div class="form-group">
                    <label for="nome">Disponivel:</label>
                    <input class="form-check-input" type="checkbox" name="disponivel" value="1">
                </div>
                <br>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>

            </div>
        </form>
    </div>

@endsection