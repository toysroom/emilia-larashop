<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorie prodotti') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-6 flex justify-between">
                    <div class="text-gray-900 text-2xl">
                        Categorie prodotti
                    </div>
                    
                    <a href="{{ route('categories.create') }}" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md shadow hover:bg-blue-600 transition duration-300">
                        Aggiungi nuova categoria
                    </a>
                </div>


                <x-table-index>
                    <x-slot name="thead">
                        <th class="px-6 py-3 text-left">Nome</th>
                        <th class="px-6 py-3">Descrizione</th>
                        <th class="px-6 py-3">Modifica</th>
                        <th class="px-6 py-3">Cancella</th>
                    </x-slot>

                    <x-slot name="tbody">
                        @foreach($categories as $category)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4">{{ $category->name }}</td>
                                    <td class="px-6 py-4">{{ $category->description }}</td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('categories.edit', $category) }}"
                                            class="px-4 py-2 bg-yellow-500 text-white font-semibold rounded-md shadow hover:bg-yellow-600 transition duration-300">Modifica
                                        </a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <x-button-delete 
                                            :action="route('categories.destroy', $category)"
                                            label_button="Cancella categoria"    
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
