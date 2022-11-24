<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest'])->group(function(){
    if(Auth::check()){ route('dashboard');}
    else{
    Route::get('/', [CustomAuthController::class, 'index'])->name('loginn');
    Route::get('login', [CustomAuthController::class, 'index'])->name('login');
    
        Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');

        Route::get('redefinir', [CustomAuthController::class, 'verificaEmail'])->name('verificaEmail');
            Route::post('formVerificaEmail', [CustomAuthController::class, 'formVerificaEmail'])->name('formVerificaEmail');

        Route::get('reset-password/{token}', [CustomAuthController::class, 'redefinirSenha'])->name('password.reset');
            Route::post('reset-password', [CustomAuthController::class, 'formRedefinirSenha'])->name('formRedefinirSenha');
        }
});

Route::middleware(['auth'])->group(function(){
  
    Route::post('signout', [CustomAuthController::class, 'signOut'])->name('signout');

    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    
 
    Route::get('dashboard/cardapio',[DashboardController::class, 'visualizarCardapio'])->name('visualizarCardapio');

            Route::post('getCardapio',[DashboardController::class, 'getCardapio'])->name('getCardapio');

        Route::get('dashboard/cardapio/cadastro', [DashboardController::class, 'cadastroCardapio'])->name('cadastroCardapio');
            Route::post('formCardapio',[DashboardController::class, 'formCardapio'])->name('formCardapio');
            
        Route::get('dashboard/cardapio/atualizar/{id}', [DashboardController::class, 'atualizarCardapio'])->name('atualizarCardapio');
            Route::put('formAtualizarCardapio',[DashboardController::class, 'formAtualizarCardapio'])->name('formAtualizarCardapio');
        
        Route::delete('dashboard/cardapio/deletar/{id}',[DashboardController::class, 'deletarCardapio'])->name('deletarCardapio');
    
    Route::middleware(['coordenador'])->group(function(){

        Route::get('dashboard/cadastro',[DashboardController::class, 'cadastrar'])->name('cadastrar');
            Route::post('formCadastro',[DashboardController::class, 'formCadastrar'])->name('formCadastrar');

        Route::get('dashboard/noticias',[DashboardController::class, 'noticias'])->name('noticias');
            Route::get('dashboard/noticias/editar/{id}', [DashboardController::class, 'editarNoticias'])->name('editarNoticias');
                Route::put('formAtualizarNoticias',[DashboardController::class, 'formAtualizarNoticias'])->name('formAtualizarNoticias');
                Route::get('dashboard/noticias/deletar/{id}',[DashboardController::class, 'deletarNoticias'])->name('deletarNoticias');
    });
});




 



