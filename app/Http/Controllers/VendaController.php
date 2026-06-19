<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Models\Cliente;
use App\Models\Viatura;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index(Request $request)
    {
        $pesquisa = $request->pesquisa;

        $vendas = Venda::with(['cliente', 'viatura'])
            ->whereHas('cliente', function ($query) use ($pesquisa) {
                $query->where('nome', 'like', "%$pesquisa%");
            })
            ->get();

        return view('vendas.index', compact('vendas'));
    }

    public function create()
    {
        $clientes = Cliente::all();

        $viaturas = Viatura::where('estado', 'Disponível')->get();

        return view('vendas.create', compact('clientes', 'viaturas'));
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        Venda::create($dados);

        $viatura = Viatura::find($request->viatura_id);

        $viatura->estado = 'Vendido';
        $viatura->save();

        return redirect()
            ->route('vendas.index')
            ->with('success', 'Venda registada com sucesso!');
    }

    public function show(Venda $venda)
    {
        return view('vendas.show', compact('venda'));
    }

    public function edit(Venda $venda)
    {
        //
        $clientes = Cliente::all();
        $viaturas = Viatura::all();

        return view('vendas.edit', compact('venda', 'clientes', 'viaturas'));
    }

    public function update(Request $request, Venda $venda)
    {
        $venda->update($request->all());

        return redirect()
            ->route('vendas.index')
            ->with('success', 'Venda atualizada com sucesso!');
    }

    public function destroy(Venda $venda)
    {
        $venda->delete();

        return redirect()
            ->route('vendas.index')
            ->with('success', 'Venda apagada com sucesso!');
    }
}
