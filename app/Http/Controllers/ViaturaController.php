<?php

namespace App\Http\Controllers;

use App\Models\Viatura;
use Illuminate\Http\Request;

class ViaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viaturas = Viatura::all();

        return view('viaturas.index', compact('viaturas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('viaturas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->all();

        if ($request->hasFile('foto')) {
            $dados['foto'] = $request->file('foto')->store('viaturas', 'public');
        }

        

        Viatura::create($dados);

        return redirect()
            ->route('viaturas.index')
            ->with('success', 'Viatura criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Viatura $viatura)
    {
        //
        return view('viaturas.show', compact('viatura'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Viatura $viatura)
    {
        //
        return view('viaturas.edit', compact('viatura'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Viatura $viatura)
    {
        $dados = $request->all();

        if ($request->hasFile('foto')) {
            $dados['foto'] = $request->file('foto')->store('viaturas', 'public');
        }

        $viatura->update($dados);

        return redirect()
            ->route('viaturas.index')
            ->with('success', 'Viatura atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Viatura $viatura)
    {
        //
        $viatura->delete();

        return redirect()
            ->route('viaturas.index')
            ->with('success', 'Viatura apagada com sucesso!');
    }
}
