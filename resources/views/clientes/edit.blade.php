@extends('layout.app')

@section('title','Edit')

@section('content')

    <div class="container mt-5">
        <h1>Editar</h1>
        <hr>

        <form action="{{ route('clientes-update', ['id' => $cliente -> id]) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" value="{{ $cliente -> nome }}" placeholder="Atualizar Nome">
                </div>
                <br>

                <div class="form-group">
                    <label for="nome">Email:</label>
                    <input type="text" class="form-control" name="email" value="{{ $cliente -> email }}" placeholder="Atualizar Email">
                </div>
                <br>
                
                <div class="form-group">
                    <label for="nome">Telefone:</label>
                    <input type="text" class="form-control" name="telefone" value="{{ $cliente -> telefone }}" placeholder="Atualizar Telefone">
                </div>
                
                <br>
               
                <div class="form-group">
                    <input type="submit" name="Atualizar" class="btn btn-success">
                </div>
            </div>
        </form>

    </div>

@endsection
