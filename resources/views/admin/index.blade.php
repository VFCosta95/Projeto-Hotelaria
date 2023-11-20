@extends('layout.app')

@section('title','')

@section('content')

<div class="container mt-5">
        <div class="row">
            <div class="col-sm-10"> <h1>Painel de Quartos</h1></div>
            <div class="col-sm-2"> <span> <a href="{{ route('admin-create') }}" class="btn btn-dark">Adicionar novo Quarto</a></span></div>
        </div>
        <br><br>
@csrf
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">N° de Quartos</th>
            <th scope="col">Capacidade</th>
            <th scope="col">Preço</th>
            <th scope="col">Disponivel</th>
            <th scope="col">Criado</th>
            <th scope="col">Atualizado</th>
            <th scope="col">Editar / Deletar</th>
        </tr>
    </thead>

    <tbody>
        @foreach($quarto as $i)
        <tr>
            <td>{{ $i -> id }}</td>       
            <td>{{ $i -> numero }}</td>
            <td>{{ $i -> capacidade }}</td>
            <td>{{ $i -> preco_diaria }}</td>
            <td>{{ $i -> disponivel }}</td>
            <td>{{ $i -> created_at }}</td>
            <td>{{ $i -> updated_at }}</td>
            <th class="d-flex">
                
                <a href="{{ route('admin-edit', ['id' => $i -> id]) }}" class="btn btn-primary me-5">
                    <img width="15" height="15" src="https://img.icons8.com/ios/50/edit--v1.png" alt="edit--v1"/>
                </a>

                <form action="{{ route('admin-destroy', ['id' => $i -> id]) }}" method="post">
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