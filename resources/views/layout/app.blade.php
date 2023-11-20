<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotelaria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>


    <!--Menu-->
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

@yield('content')
</body>
</html>

