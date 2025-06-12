<div class="my-8 mx-8">
    @include('partials.success')

    <table class="w-full text-sm text-left text-gray-700 border border-gray-200 shadow rounded-lg">
        <thead class="bg-gray-100 uppercase text-gray-600">
        <tr>
            {{ $thead }}
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-red-800">
            {{ $tbody }}
        </tbody>
    </table>
</div>