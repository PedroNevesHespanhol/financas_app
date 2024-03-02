<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Despesa;

class DespesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('despesas.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'value' => 'required|numeric',
            'payment' => 'required|string',
        ]);

        $despesa = new Despesa();
        $despesa->description = $request->description;
        $despesa->value = $request->value;
        $despesa->payment = $request->payment;
        $despesa->save();
        // Retorno da resposta
        return response()->json(['message' => 'Despesa criada com sucesso!', 'despesa' => $despesa], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
