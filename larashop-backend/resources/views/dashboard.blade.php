<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div class="p-6 flex justify-between">
                <div class="max-w-sm mx-auto mt-10">
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">Categorie</h2>
                        <p class="text-gray-600 mb-4">
                            {{ $totalCategories }}                  
                        </p>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                        Vai alle categorie
                        </button>
                    </div>
                </div>

                <div class="max-w-sm mx-auto mt-10">
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">Prodotti</h2>
                        <p class="text-gray-600 mb-4">
                            {{ $totalProducts }}                   
                        </p>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                        Vai ai prodotti
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
