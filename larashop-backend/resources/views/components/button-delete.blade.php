@props([
    'action',
    'label_button'
])

<form method="post" action="{{ $action }}">
    @method('delete')
    @csrf
    <button 
        onclick="return confirm('Sei sicuro di voler cancellare?')"
        class="px-4 py-2 bg-red-500 text-white font-semibold rounded-md shadow hover:bg-red-600 transition duration-300">{{ $label_button }}</button>
</form>