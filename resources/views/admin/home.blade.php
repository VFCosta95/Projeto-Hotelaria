
@extends('layout.app')

@section('title','')

@section('content')

@csrf
<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container-fluid">
        <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>

         <li class="nav-item">
            <a class="nav-link" href="disponivel">Quartos Dísponiveis</a>
        </li>
        
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Painel de Controle</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="admin">Quartos</a></li>
            <li><a class="dropdown-item" href="painel">Reservas</a></li>
            <li><a class="dropdown-item" href="clientes">Clientes</a></li>
        </ul>
    </ul>
  </div>
    
    <div style="justify-content:center; display:flex;">
    <form action="/logout" method="post">
        @csrf
        <nav class="navbar navbar-expand-lg navbar-dark bg-light text-dark">
                <div class="container">
                    <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <button type="submit" class="nav-link" 
                            style="font-size:20px; width:80px; border-radius:20px; background-color:white;"
                            > Sair </button>
                    </div>
                </div>
        </nav>
    </form>
    </div>
</nav>

<div class="bg-dark text-light">
    <h1 style="text-align:center; margin:40px 0px; text-transform: uppercase;">Todos os Quartos</h1>
    <section class="row" style="display:flex; justify-content:center;">

    @foreach($quarto as $i)
        <div class="col-md-4"style="border: solid 2px; width: 300px; text-align:center; margin:20px 50px; border-radius:18px;"><br>
            <div> <h3>Quarto {{ $i -> id }}</h3></div><br>
            <div> N° de Quartos: <strong>{{ $i -> numero }}</strong></div>
            <div> Capacidade: <strong>{{ $i -> capacidade }}</strong></div>
            <div> Disponivel: <strong>{{ $i -> disponivel }}</strong></div>
            <br>
        </div>
    @endforeach

    </section>
</div>