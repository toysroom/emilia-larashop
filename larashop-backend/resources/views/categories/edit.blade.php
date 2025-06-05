<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorie prodotti') }}
        </h2>
    </x-slot>

    <x-slot name="footer">
        Footer della pagina edit
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Modifica categoria prodotto
                </div>

                @include('partials.form-errors')

                <form class="max-w-md mx-auto p-4 bg-white shadow rounded-lg" method="post" action="{{ route('categories.update', $category) }}">
                    @method('put')
                    @csrf
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                     Categoria
                    </label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ $category->name }}"
                        placeholder="Inserisci la categoria"
                        class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                    />

                    <label class="block text-gray-700 text-sm font-bold mt-4 mb-2" for="description">
                    Descrizione
                    </label>
                    <textarea
                    id="description"
                    name="description"
                    placeholder="Inserisci una descrizione"
                    rows="4"
                    class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 resize-none"
                    >{{ $category->description }}</textarea>

                    <button
                        type="submit"
                        class="mt-4 w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300"
                    >
                        Modifica Categoria
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
