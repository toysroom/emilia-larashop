<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prodotti') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Modifica prodotto
                </div>

                @include('partials.form-errors')

                <form class="max-w-md mx-auto p-4 bg-white shadow rounded-lg" method="post" action="{{ route('products.update', $product) }}">
                    @method('put')
                    @csrf
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Nuovo prodotto
                    </label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ $product->name }}"
                        placeholder="Inserisci nome"
                        class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                    />

                    <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                        Prezzo prodotto
                    </label>
                    <input
                        type="number"
                        id="price"
                        name="price"
                        value="{{ $product->price }}"
                        class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                    />

                    <label class="block text-gray-700 text-sm font-bold mb-2" for="category_id">
                        Categorie
                    </label>
                    <select
                        id="category_id"
                        name="category_id"
                        class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                    >
                    <option value="">Seleziona categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ ($category->id == $product->category_id) ? 'selected': ''   }}>{{ $category->name }}</option>
                    @endforeach
                    </select>

                    <label class="block text-gray-700 text-sm font-bold mt-4 mb-2" for="description">
                    Descrizione
                    </label>
                    <textarea
                    id="description"
                    name="description"
                    placeholder="Inserisci una descrizione"
                    rows="4"
                    class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 resize-none"
                    >{{ $product->description }}</textarea>

                    <button
                        type="submit"
                        class="mt-4 w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300"
                    >
                        Modifica prodotto
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
