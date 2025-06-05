@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 my-8 rounded relative" role="alert">
        {{ session('success') }}
    </div>
@endif
