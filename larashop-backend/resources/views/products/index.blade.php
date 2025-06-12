<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prodotti') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-6 flex justify-between">
                    <div class="text-gray-900 text-2xl">
                        Prodotti
                    </div>
                    
                    <a href="{{ route('products.create') }}" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md shadow hover:bg-blue-600 transition duration-300">
                        Aggiungi nuovo prodotto
                    </a>
                </div>


                <x-table-index>
                    <x-slot name="thead">
                        <th class="px-6 py-3 text-left">Immagine</th>
                        <th class="px-6 py-3 text-left">Nome</th>
                        <th class="px-6 py-3">Prezzo</th>
                        <th class="px-6 py-3">Categoria</th>
                        <th class="px-6 py-3">Modifica</th>
                        <th class="px-6 py-3">Cancella</th>
                    </x-slot>

                    <x-slot name="tbody">
                        @foreach($products as $product)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">{{ asset('products/'.$product->image); }}</td>
                                <td class="px-6 py-4">{{ $product->name }}</td>
                                <td class="px-6 py-4">{{ $product->price }}</td>
                                <td class="px-6 py-4">{{ $product->category->name }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('products.edit', $product) }}"
                                        class="px-4 py-2 bg-yellow-500 text-white font-semibold rounded-md shadow hover:bg-yellow-600 transition duration-300">Modifica
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <x-button-delete 
                                        :action="route('products.destroy', $product)"
                                        label_button="Cancella prodotto"
                                    />
                                </td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-table-index>
            </div>
        </div>
    </div>
</x-app-layout>
