@extends('layouts.app')

@section('content')
<h1>Clientes cadastrados</h1>

<table  cellpadding="5" cellspacing="0">
    <thead>
        <tr class="bg-gray-200 text-center">
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nome ?? 'N/D' }}</td>
            <td>
                <a href="{{ route('clientes.show', $cliente) }}">Ver</a> |
                <a href="{{ route('clientes.edit', $cliente) }}">Editar</a> |
                <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Tem certeza?')">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    <a href="{{ route('clientes.create') }}">Novo Cliente</a>

@endsection