@extends('layout.app')

@section('title','')

@section('content')

<div class="container mt-5" style="width:800px; border:solid 5px; display:flex; justify-content:start; margin:20px 25%; border-radius:5px;">

    <form action="{{ route('registrar') }}" method="post">
        @csrf
        @method('post')
        <div class="form-group" style="padding: 20px 10px">

            <div class="form-group">
                <label for="nome">Nome do Cliente:</label>
                <input type="text" name="nome" required>
            </div> <hr>

            <div class="form-group">
                <label for="email">Email do Cliente:</label>
                <input type="email" name="email" required>
            </div> <hr>

            <div class="form-group">
                <label for="telefone">Telefone do Cliente:</label>
                <input type="text" name="telefone" required>
            </div> <hr>

            <div class="form-group">
                <label for="quarto_id">N° de Quarto</label>
                <input type="text" id="quarto_id" name="quarto_id" value="{{ $quarto->numero }}" disabled>
            </div> <hr>

            <input type="hidden" name="quarto_id" value="{{ $quarto->id }}">
        
            <div class="form-group">
                <label for="data_checkin">Data de Check-in:</label>
                <input type="date" name="data_checkin" required>
            </div> <hr>

            <div class="form-group">
                <label for="data_checkout">Data de Check-out:</label>
                <input type="date" name="data_checkout" required>
            </div> <hr>

            <button type="submit">Registrar</button>

        </div>
    </form>

    
</div>
@endsection