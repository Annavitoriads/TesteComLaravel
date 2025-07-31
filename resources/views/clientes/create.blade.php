<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-black-800">
            Novo Cliente
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded shadow-sm">

            <form action="{{ route('clientes.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="nome" class="block text-white-700">Nome</label>
                    <input type="text" name="nome" id="nome" class="w-full mt-1 p-2 border rounded text-white-200" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="w-full mt-1 p-2 border rounded">
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('clientes.index') }}" class="mr-2 px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Cancelar</a>
                    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Salvar</button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
