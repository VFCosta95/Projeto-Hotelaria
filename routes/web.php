<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\CorsMiddleware;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    CorsMiddleware::class
])->group(function () {
    
    // Pagina Principal e Mostrar os Detalhes do quarto 
    Route::get('/', [QuartoController::class, 'home']) -> name('admin-home');
    Route::get('/detail/{id}', [QuartoController::class, 'detail']) -> where('id', '[0-9]+') -> name('admin-detail');

    // Registrar Clientes 
    Route::get('/registrar/{id}', [ReservaController::class, 'mostrarForm'])->name('registrar-mostrarForm');
    Route::post('/registrar', [ReservaController::class, 'registrar'])->name('registrar');

    // Acessar o Painel de Reservas
    Route::get('painel', [ReservaController::class, 'painel']) -> name('painel');

    // Todos os Quartos Disponiveis
    Route::get('disponivel', [ReservaController::class, 'QuartosDisponiveis']) -> name('QuartosDisponiveis');


    Route::prefix('/admin')->group(function(){
        // CRUD para os quartos
        Route::get('/', [QuartoController::class, 'index']) -> name('admin-index');
        Route::get('/create', [QuartoController::class, 'create']) -> name('admin-create');
        Route::post('/stores', [QuartoController::class, 'stores']) -> name('admin-stores');
        Route::get('/{id}/edit', [QuartoController::class, 'edit']) -> where('id', '[0-9]+') -> name('admin-edit');
        Route::put('/{id}', [QuartoController::class, 'update']) -> where('id', '[0-9]+') -> name('admin-update');
        Route::delete('/{id}', [QuartoController::class, 'destroy']) -> where('id', '[0-9]+') -> name('admin-destroy');
    });

    Route::prefix('/clientes')->group(function(){
        // Edição e Remoção de Clientes
        Route::get('/', [ClienteController::class, 'index']) -> name('clientes-index');
        Route::get('/{id}/edit', [ClienteController::class, 'edit'])->where('id', '[0-9]+')-> name('clientes-edit');
        Route::put('/{id}', [ClienteController::class, 'update'])->where('id', '[0-9]+')->name('clientes-update');
        Route::delete('/{id}', [ClienteController::class, 'destroy']) ->where('id', '[0-9]+')->name('clientes-destroy');
        Route::get('/{id}/reservas', [ClienteController::class, 'ListaReservas'])->where('id', '[0-9]+')->name('clientes.reservas');
    });

});

// Tratamento de Erro - fallback
Route::fallback(function(){
    return "Erro ao encontrar rotas";
});