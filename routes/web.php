<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ViaturaController;
use App\Http\Controllers\VendaController;
use App\Models\Cliente;
use App\Models\Viatura;
use App\Models\Venda;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth']);

Route::get('/menu-principal', function () {

    $clientes = Cliente::count();

    $viaturas = Viatura::count();

    $vendas = Venda::count();

    $totalVendido = Venda::sum('valor_venda');

    return view('dashboard', compact(
        'clientes',
        'viaturas',
        'vendas',
        'totalVendido'
    ));
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::resource('clientes', ClienteController::class);
    Route::resource('viaturas', ViaturaController::class);
    Route::resource('vendas', VendaController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
