<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Exibe a lista de clientes.
     */
    
    public function index()
    {
        $clientes = \App\Models\Cliente::all();
        return view('clientes.index', compact('clientes'));
    }


    /**
     * Exibe o formulário para criar um novo cliente.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Salva um novo cliente no banco de dados.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
        ]);

        Cliente::create($request->all());

        return redirect()->route('clientes.index')
                        ->with('success', 'Cliente criado com sucesso.');
    }

    /**
     * Exibe o formulário para editar um cliente existente.
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Atualiza um cliente existente.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')
                        ->with('success', 'Cliente atualizado com sucesso.');
    }

    /**
     * Remove um cliente.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('clientes.index')
                        ->with('success', 'Cliente removido com sucesso.');
    }
}
