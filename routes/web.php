<?php

use Illuminate\Support\Facades\Route;
//Direcionamento do controller do proprietario, configuração das rotas.
use App\Http\Controllers\ProprietarioController;

//Rotas dos Proprietarios
//Relatorio
Route::get('/proprietario/relatorio',[ProprietarioController::class, 'relatorio'])->name('proprietario.relatorio');
//Criar novo Proprietario
Route::get('/proprietario/create', [ProprietarioController::class,  'create'])->name('proprietario.create');
//Editar Proprietario
Route::get('/proprietario/edit', [ProprietarioController::class, 'edit'])->name('proprietario.edit');
//Modal das informações do Proprietario
Route::get('/proprietario/modal', [ProprietarioController::class, 'modal'])->name('proprietario.modal');
//Pesquisar/Filtrar os proprietarios cadastrados
Route::get('/proprietario/search', [ProprietarioController::class, 'search'])->name('proprietario.search');
//Pagina inicial
Route::get('/proprietario', [ProprietarioController::class, 'index'])->name('proprietario.index');
Route::get('/proprietario/esqueceu', [ProprietarioController::class, 'index'])->name('proprietario.esqueceu');
Route::post('/proprietario', [ProprietarioController::class, 'store'])->name('proprietario.store');

Route::get('/', function () {
    return view('login');
});
